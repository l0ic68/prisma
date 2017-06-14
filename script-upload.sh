#!/usr/bin/env bash

destIp="193.70.38.239"
localPath="C:/wamp64/www/prisma/"
destPath="/home/nesta/www/prisma/"

sed "s@\$kernel = new AppKernel('prod', false);@\$kernel = new AppKernel('prod', false);@g" "$localPath"/web/app.php > "$localPath"/web/new_app.php

sftp nesta@$destIp << EOF
cd "$destPath"
put -r ${localPath}app/Resources/ app/
put -r ${localPath}app/config/ app/
put ${localPath}app/AppKernel.php app/
put ${localPath}composer.json ./
put -r ${localPath}src/ ./
put -r ${localPath}web/ ./
put ${localPath}web/new_app.php web/app.php
EOF



ssh -tt nesta@$destIp << EOF
cd "$destPath"
cd app/config/
sed -i 's/database_password: null/database_password: toor/g' parameters.yml
cd "$destPath"
composer install
chmod 777 app/console
php app/console doctrine:schema:update --force
php app/console cache:clear
chmod -R 777 app/cache
php app/console doctrine:fixtures:load -q
EOF