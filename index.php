<?php
$GLOBALS['logon'] = true;
require_once "RequestRecord.php";
Logout("Welcome");
try
{
    $recorder = new RequestRecord();
    $recorder->Record();

    $domin = $_SERVER['HTTP_HOST'];
    Logout("From ".$domin);
    switch($domin)
    {
        case "localhost" : include("Rhe/index.php");break;
        default :include("Rhe/index.php");break;
    }
}
catch(Exception $e)
{
    Logout("Some Error");
}
function Logout($arg)
{
    if($GLOBALS['logon'] == true)
    {
        echo ">>".($arg==null?"(NULL)":$arg)."<<".date_format(date_create(),"Y/m/d H:i:s")."<br>";
    }
}
class DominSwicher
{
    
    
}
?>