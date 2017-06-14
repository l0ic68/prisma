var bool = 0;
var Current_Service = 0;

function Nav_click()
{
  if (bool == 1)
  {
    $("#Nav_Mobile").css({"display": "none"});
    $("section").css({"display": "block"});
    bool = 0;
  }
  else
  {
    $("#Nav_Mobile").css({"display": "flex", "font-size": "150%"});
    $("section").css({"display": "none"});
    bool = 1;
  }
  return (bool);
}

function Slider_Service(fleche)
{
  if (fleche == 1)
  {
    Current_Service--;
    if (Current_Service == -1)
      Current_Service = 3;
  }
  else
  {
    Current_Service++;
    if (Current_Service == 4)
      Current_Service = 0;
  }
  if (Current_Service == 0)
  {
    $("#Bloc_Web").css({"display": "block"});
    $("#Bloc_Audiovisuel").css({"display": "none"});
    $("#Bloc_Social").css({"display": "none"});
    $("#Bloc_Graphique").css({"display": "none"});
  }
  else if (Current_Service == 1)
  {
    $("#Bloc_Web").css({"display": "none"});
    $("#Bloc_Audiovisuel").css({"display": "block"});
    $("#Bloc_Social").css({"display": "none"});
    $("#Bloc_Graphique").css({"display": "none"});
  }
  else if (Current_Service == 2)
  {
    $("#Bloc_Web").css({"display": "none"});
    $("#Bloc_Audiovisuel").css({"display": "none"});
    $("#Bloc_Social").css({"display": "inline"});
    $("#Bloc_Graphique").css({"display": "none"});
  }
  else if (Current_Service == 3)
  {
    $("#Bloc_Web").css({"display": "none"});
    $("#Bloc_Audiovisuel").css({"display": "none"});
    $("#Bloc_Social").css({"display": "none"});
    $("#Bloc_Graphique").css({"display": "inline"});
  }
  return (Current_Service);
}
