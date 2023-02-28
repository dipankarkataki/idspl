<?php 

/* DATABASE CONFIGURATION */ 
$servername = "localhost"; // Your hostname eg. localhost
$username = "idspldev"; // database user name
$password = "idspldev1"; // database password
$database = "idspldb"; // database name
$table = "idspl_enquiry"; // table name

/* OUTGOING MAIL CONFIGURATION */ 
$mail_host = "sg2plcpnl0094.prod.sin2.secureserver.net"; // Specify main and backup SMTP servers. eg. smtp.gmail.com
$mail_from = "support@ids-pl.com"; //from email - SMTP username 
$mail_password = "idspl@supprt123"; // SMTP password  
$mailer_name = "Support";
$contact_phone = ""; //contact phone no 
$tls_ssl = "ssl"; //Enable TLS encryption, `ssl` also accepted
$mail_port = "465";  // TCP port to connect to
$to_address = "mukul@ids-pl.com,rajkumar@ids-pl.com,kanagaraj@ids-pl.com"; //use comma for multiple email ids