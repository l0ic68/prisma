#!/usr/bin/env bash

destIp="92.222.94.126"

ssh root@$destIp << SSH-Command
set -x
apt-get -y update & apt-get -y upgrade
add-apt-repository ppa:ondrej/php << Parallel-Command

Parallel-Command
####
apt-get -y update & apt-get -y upgrade
passwd << Parallel-Command
kamesenin
kamesenin
Parallel-Command
####
userdel --force --remove studentunion
useradd -m studentunion
####
passwd studentunion << Parallel-Command
kamesenin
kamesenin
Parallel-Command
####
usermod -aG sudo studentunion
####
su --login studentunion << Parallel-Command
mkdir /home/studentunion/www
mkdir /home/studentunion/logs
wget http://nginx.org/keys/nginx_signing.key
########
sudo apt-key add nginx_signing.key << Inside-Parallel-Command
kamesenin
Inside-Parallel-Command
########
########
sudo su << Inside-Parallel-Command
echo "deb http://nginx.org/packages/debian/ jessie nginx" > /etc/apt/sources.list.d/nginx.list
echo "deb-src http://nginx.org/packages/debian/ jessie nginx" >> /etc/apt/sources.list.d/nginx.list
exit
Inside-Parallel-Command
########
sudo apt-get -y update & sudo apt-get -y install nginx
sudo apt-get -y install php5.6-fpm
sudo apt-get -y install php5.6-xml
sudo apt-get -y install php5.6-mysql
sudo service php5.6-fpm restart
#sudo apt-get -y remove --purge mysql*
#sudo apt-get -y autoremove
#sudo apt-get -y autoclean
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password "root"'
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password "root"'
sudo apt-get -y install mysql-server
#sudo sed -ie "$ a[mysqld]\nskip-grand-tables" /etc/mysql/my.cnf
#sudo mysqld --skip-grant-tables
#sudo /etc/init.d/mysql restart
#sudo mysql -u root -p << MySQL-Command
#flush privileges;
#ALTER USER 'root'@'localhost' IDENTIFIED BY 'root';
#quit;
#MySQL-Command
#sudo sed -i '/[mysqld]/d'
#sudo sed -i '/skip-grant-tables/d'
#sudo /etc/init.d/mysql restart
#ps axf | grep mysqld | grep -v grep | awk '{print "kill -9 " $1}'
#ps axf | grep mysqld_safe | grep -v grep | awk '{print "kill -9 " $1}'
#sudo service mysql stop
#sudo service mysql start
sudo apt-get -y install composer
cd /usr/src
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
sudo mkdir -p /usr/local/bin
sudo curl -LsS https://symfony.com/installer -o /usr/local/bin/symfony
sudo chmod a+x /usr/local/bin/symfony
cd /home/studentunion/www
sudo sed -ie "s@.*date\.timezone =.*@date\.timezone=Europe/Paris@g" /etc/php/5.6/cli/php.ini
symfony new StudentUnion 2.8
sudo sed -ie '2 a \ \ \ \ database_driver: pdo_mysql' StudentUnion/app/config/parameters.yml
sudo sed -ie 's@.*database_password.*@\ \ \ \ database_password: root@g' StudentUnion/app/config/parameters.yml
cd StudentUnion
HTTPDUSER=`ps axo user,comm | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\  -f1`
##sudo setfacl -R -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX var
##sudo setfacl -dR -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX var
sudo sed -i '1 s/^.*$/user\t\twww-data;/' /etc/nginx/nginx.conf
########
sudo su << Inside-Parallel-Command
echo "server {
        listen       80;
        server_name  www.exia-student-union.com;

        location / {
            # index  index.html index.htm;

            try_files $uri $uri /app.php?$is_args$args;
        }
        root   /home/studentunion/www/StudentUnion/web;

        index index.php index.html index.htm;

        location ~ ^/(app_dev|config)\.php(/|$) {
            fastcgi_pass unix:/var/run/php5-fpm.sock;
            fastcgi_split_path_info ^(.+\.php)(/.*)$;
            include fastcgi_params;
            fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
            fastcgi_param DOCUMENT_ROOT $realpath_root;
        }

        location ~ ^/app\.php(/|$) {
            fastcgi_pass unix:/var/run/php5-fpm.sock;
            fastcgi_split_path_info ^(.+\.php)(/.*)$;
            include fastcgi_params;
            fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
            fastcgi_param DOCUMENT_ROOT $realpath_root;
            internal;
        }

        location ~ \.php$ {
          return 404;
        }

        location ~ /\. {
            deny all;
            access_log off;
            log_not_found off;
        }

        error_log /home/studentunion/logs/error.log;
        access_log /home/studentunion/logs/acess.log;

        error_page  404              /404.html;
        error_page   500 502 503 504  /50x.html;
        location = /50x.html {
            root   /usr/share/nginx/html;
        }

        location ~ /\.ht {
            deny  all;
        }
    }

    server {
        listen 80;
        server_name www.exia-student-union.com;
    	return 301 http://www.exia-student-union.com$request_uri;
    }"  > /etc/nginx/StudentUnion.conf
Inside-Parallel-Command
########
sudo service nginx reload
#sudo php app/console doctrine:database:create
#sudo php app/console doctrine:schema:update --force
exit
Parallel-Command
####
exit
SSH-Command