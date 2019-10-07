<?php
ini_set("SMTP","smtp.gmail.com");
ini_set("smtp_port","25");



ini_set("error_logfile","=rror.log");
ini_set("debug_logfile","=ebug.log");
ini_set("auth_username","mugiranezahimbazayves@gmail.com");
ini_set("auth_password","laurenceumurerwa");
ini_set("sendmail_from","mugiranezahimbazayves@gmail.com");





$msg = "testb msg";

// use wordwrap() if lines are longer than 70 characters


// send email
mail("mugiranezahimbazayves@gmail.com","My subject",$msg);


?>