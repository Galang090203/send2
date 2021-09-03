<?php
#SMTP SETUP //
$hostname[]		= 'smtp.sendgrid.com'; // HOST SMTP		
$username[] 	= 'apikey';// USERNAME SMTP
$password[] 	= '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';// PASSWORD SMTP
$secure[] 		= 'tls'; // TLS / SSL
$port[] 		= '587'; // PORT SMTP

#STILLAN MU
$fromname 		= 'Info'; // FROM NAME
$frommail 		= 'millionskarts@gmail.com'; // FROM EMAIL
$subject 		= 'SMTP test from email-smtp.us-east-1.amazonaws.com'; // SUBJECT LETTER

#SENDING SETTINGS
$priority 		 = 1; // 1 = HIGH | 0 = NORMAL | EMAIL PRIORITY
$sensoremail 	 = 0; // 1 = ON | 0 = OFF | SENSOR FROM EMAIL
$duplicate 		 = 0; // 1 = ON | 0 = OFF | HAPUS DUPLICATE MAILIST
$removeaftersend = 0; // 1 = ON | 0 = OFF | HAPUS EMAIL YANG SUDAH ssdTERKIRIMd
$delay 			 = 1; // DELAY PER DETIK
$email 			 = 99999; // DELAY DI BERAPA EMAIL ?

#LETTER SETTINGS
$mailtype 		 = 'microsoft';   // TIPE EMAIL : microsoft / google / yahoo 
$letter 		 = 'z.txt'; // FILE LETTER
$attachment 	 = '';			  // FILE ATTACHMENT
$emaillist 		 = '1.txt';	  // FILE EMAILIST
$language 		 = 'US'; 		  // US / DE / FR / ETC			
$link[] 		 = 'bit.do/CoiN11Z';  // LINK SCAM TANPA HTTPS://

?>