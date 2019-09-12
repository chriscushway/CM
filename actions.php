<?php

	include("functions.php");

	 $emailBody="<html><head></head><body><div style='padding:40px;width:90%;border:1px solid black;'>";
	if($_GET["action"] == "makeBooking"){
        
        $count=0;
    	foreach ($_POST as $name => $val)
        {
        
            if($val == "header"){
                $emailBody .= "<h1 style='color:navy;'>" . $name ."</h1>" ;
            }else if($val=="small-header"){
                $emailBody.= "<h3>".$name . "</h3>";
            }else if($val=="1"){
                $emailBody .= "<span style='font-size:150%'>".$name . " </span><br>";
            }else{
                $emailBody .= "<span style='font-size:150%'>".$name . ":</span><span style='font-size:125%;' > ". $val . "</span><br>";
            }
            
        }
        $headers="From:chriscushway@gmail.com";
        $headers  .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $emailBody.="</div></body></html>";
        if(mail("chriscushway@gmail.com","booking",$emailBody,$headers)){
            echo "success";
        }else{
            echo "problem";
            
        }
        
    }else if($_GET["action"] == "contact"){
        $emailBody .="<h1>Contact Form Details</h1><hr style='width:50%' align='left'>";
        foreach ($_POST as $name => $val){
            $emailBody .= "<span style='font-size:150%'>".$name . ":</span><span style='font-size:125%;' > ". $val . "</span><br>";
        }
        $headers="From:".$_POST["email"]."";
        $headers  .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        if(mail("chriscushway@gmail.com","contact",$emailBody,$headers)){
            echo "success";
        }else{
            echo "problem";
            
        }
    }

?>