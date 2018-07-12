<?php
    session_start();
    $elements =$_REQUEST["elements"];
    $array = explode(",", $elements);
    $str="";
    $nPass = "";
    $oPass=$array[0];
    $nPass=$array[1];
    $vPass=$array[2];
    $city=$array[3];
    $state=$array[4];
    if($oPass!=null or $nPass!=null or $vPass!=null)
    {
        if($_SESSION['password']!= $oPass)
            $str="Old Password doesnt match";
        else if($nPass != $vPass)
            $str="verification password doesn't match";
        else if($oPass == $nPass)
            $str = "Old and new passwords match, please use another new password";
        else
        {
            $_SESSION['password']= $nPass;
        }
        
    }

    $_SESSION['city']= $city;
    $_SESSION['state']= $state;
    if($str == "")
        $str="Settings changed successfully ".$nPass.$city.$state;

    echo $str;
?>