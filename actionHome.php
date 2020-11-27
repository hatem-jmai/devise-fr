<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; 
use PHPMailer\PHPMailer\SMTP; 


require_once __DIR__ . '/vendor/autoload.php';
$Francais=file_get_contents("./i18n/fr.json");
$json= json_decode($Francais,true);
//header('Refresh: 5; URL= deviseHome.php'); 

if   ( isset($_POST['homeQ1']) ||    isset($_POST['homeQ2']) ||    isset($_POST['homeQ3']) ||    isset($_POST['homeQ4']) ||    isset($_POST['homeQ4text'])
||    isset($_POST['homeQ5']) ||    isset($_POST['homeQ6']) ||    isset($_POST['homeQ7'])  ||  isset($_POST['homeQ9'])  || isset($_POST['homeQ10'])
||    isset($_POST['homeQ11']) ||    isset($_POST['name']) ||    isset($_POST['vorname']) ||    isset($_POST['unternehmens'])   
||    isset($_POST['Telefon'])   ||    isset($_POST['adresse'])    ||    isset($_POST['Email']) ) 
{
  
        $homeQ1=$_POST['homeQ1'];
        $homeQ2=$_POST['homeQ2'];
        $homeQ3=$_POST['homeQ3'];

        $homeQ4=$_POST['homeQ4'];
        $homeQ4text=$_POST['homeQ4text']; 
        
      
       
       $homeQ5=$_POST['homeQ5'];
       $homeQ6=$_POST['homeQ6'];
       $homeQ7=$_POST['homeQ7'];
       $homeQ9=$_POST['homeQ9'];
       $homeQ8text=$_POST['homeQ8text'];
       $homeQ10=$_POST['homeQ10'];
       $homeQ11=$_POST['homeQ11'];
       $name=$_POST['name'];
       $vorname=$_POST['vorname'];
       $unternehmens=$_POST['unternehmens'];
       $Telefon=$_POST['Telefon'];
       $Email=$_POST['Email'];
       $adresse=$_POST['adresse'];
 

   

      }


    
     
    
         
          
          if (isset($_POST['homeQ8R1']))
          {
            
            $homeQ8R1=$json[$_POST['homeQ8R1']] ;
          }
          else
          $homeQ8R1='';
 
          if (isset($_POST['homeQ8R2']))
          {
            $homeQ8R2=$json[$_POST['homeQ8R2']] ;
          }
          else
          $homeQ8R2='';
          
          
          if (isset($_POST['homeQ8R3']))
          {
            
            $homeQ8R3=$json[$_POST['homeQ8R3']] ;
          }
          else
          $homeQ8R3='';
 
          if (isset($_POST['homeQ8R4']))
          {
            $homeQ8R4=$json[$_POST['homeQ8R4']] ;
          }
          else
          $homeQ8R4='';
          
          
          if (isset($_POST['homeQ8R5']))
          {
            
            $homeQ8R5=$json[$_POST['homeQ8R5']] ;
          }
          else
          $homeQ8R5='';
 
          if (isset($_POST['homeQ8R6']))
          {
            $homeQ8R6=$json[$_POST['homeQ8R6']] ;
          }
          else
          $homeQ8R6='';
         
         
          if (isset($_POST['homeQ8R7']))
          {
            
            $homeQ8R7=$json[$_POST['homeQ8R7']] ;
          }
          else
          $homeQ8R7='';
 
          if (isset($_POST['homeQ8R8']))
          {
            $homeQ8R8=$json[$_POST['homeQ8R8']] ;
          }
          else
          $homeQ8R8='';
         
         
          if (isset($_POST['homeQ8R9']))
          {
            
            $homeQ8R9=$json[$_POST['homeQ8R9']] ;
          }
          else
          $homeQ8R9='';
 
          if (isset($_POST['homeQ8R10']))
          {
            $homeQ8R10=$json[$_POST['homeQ8R10']] ;
          }
          else
          $homeQ8R10='';
         
        

          
      

        

      
     




/*       $onlineQ1=$_POST['onlineQ1'];
        $onlineQ2=$_POST['onlineQ2'];
        $onlineQ3=$_POST['onlineQ3'];
        $onlineQ4=$_POST['onlineQ4'];
        $onlineQ5=$_POST['onlineQ5'];
        $onlineQ6=$_POST['onlineQ6'];
        $onlineQ7=$_POST['onlineQ7'];
        $onlineQ8=$_POST['onlineQ8'];
        $onlineQ9=$_POST['onlineQ9'];
        $onlineQ10=$_POST['onlineQ10'];
        $onlineQ11=$_POST['onlineQ11'];
        $nameonline=$_POST['nameonline'];
        $vornameonline=$_POST['vornameonline'];
        $unternehmensonline=$_POST['unternehmensonline'];
        $Telefononline=$_POST['Telefononline'];
        $Emailonline=$_POST['Emailonline'];
        $adresseonline=$_POST['adresseonline'];
        $QUESTION13online=$_POST['QUESTION13online'];
           */

/* 
 if (isset($_POST['fname']) ) 
echo $fname;
else
echo "error"; */

 

$mpdf=new \Mpdf\Mpdf();
//var_dump($mpdf)

//create pdf
$data='';
$data .=  '<h1 style="text-align:center">' .$json['HomePage']. '</h1>' .'<br/>' ;
$data .=  '<h3>1)' .$json['homeQ1']. '</h3>' ;
$data .=   $json[$homeQ1] ; 

$data .=  '<h3>2)' .$json['homeQ2']. '</h3>' ;
$data .=   $homeQ2 ; 

$data .=  '<h3>3)' .$json['homeQ3']. '</h3>' ;
$data .=   $json[$homeQ3] ; 

$data .=  '<h3>4)' .$json['homeQ4']. '</h3>' ;

if($homeQ4text == ""){
$data .=   $json[$homeQ4] ;
} 
else{
  $data .=   $homeQ4text ; 
}



$data .=  '<h3>5)' .$json['homeQ5']. '</h3>' ;
$data .=   $json[$homeQ5] ; 

$data .=  '<h3>6)' .$json['homeQ6']. '</h3>' ;
$data .=   $json[$homeQ6] ; 

$data .=  '<h3>7)' .$json['homeQ7']. '</h3>' ;
$data .=   $json[$homeQ7] ; 

$data .=  '<h3>8)' .$json['homeQ8']. '</h3>' ;
$data .=   $homeQ8R1; 
$data .= ' ';
$data .=   $homeQ8R2;
$data .= ' ';
$data .=   $homeQ8R3; 
$data .= ' ';
$data .=   $homeQ8R4;
$data .= ' ';
$data .=   $homeQ8R5; 
$data .= ' ';
$data .=   $homeQ8R6;
$data .= ' ';
$data .=   $homeQ8R7; 
$data .= ' ';
$data .=   $homeQ8R8;
$data .= ' ';
$data .=   $homeQ8R9; 
$data .= ' ';
$data .=   $homeQ8R10;
$data .= ' ';
$data.= $homeQ8text;

$data .=  '<h3>9)' .$json['homeQ9']. '</h3>' ;
$data .=   $json[$homeQ9] ; 

$data .=  '<h3>10)' .$json['homeQ10']. '</h3>' ;
$data .=   $homeQ10 ; 

$data .=  '<h3>11)' .$json['homeQ11']. '</h3>' ;
$data .=   $json[$homeQ11] ; 
$data .= '<br/> <br/><br/><br/><br/><br/><br/><br/><br/>';

$data .=  '<h3>12)' .$json['globalQ12']. '</h3>' ;

$data .=   '<b>' .$json['name']. '</b>'. $name. '<br/>' ;
$data .=   '<b>' .$json['vorname']. '</b>'. $vorname. '<br/>' ;
$data .=   '<b>' .$json['NomCompagnie']. '</b>'. $unternehmens. '<br/>' ;
$data .=   '<b>' .$json['telefon']. '</b>'. $Telefon. '<br/>' ;
$data .=   '<b>' .$json['email']. '</b>'. $Email. '<br/>' ;
$data .=   '<b>' .$json['adresse']. '</b>'. $adresse. '<br/>' ;


$mpdf->WriteHTML($data);
$pdf=$mpdf->Output('','S');

/* $data .=  '<h3>13)' .$json['QUESTION13']. '</h3>' ; */
/* $data .=   $question13 ;  */

/* 
$data .= '<br/> <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
$data .=  '<h1 style="text-align:center">' .$json['Online123']. '</h1>' .'<br/>' ;
$data .=  '<h3>1)' .$json['onlineQ1']. '</h3>' ;
$data .=   $json[$onlineQ1] ; 
$data .=  '<h3>2)' .$json['onlineQ2']. '</h3>' ;
$data .=   $json[$onlineQ2] ; 
$data .=  '<h3>3)' .$json['onlineQ3']. '</h3>' ;
$data .=   $json[$onlineQ3] ; 
$data .=  '<h3>4)' .$json['onlineQ4']. '</h3>' ;
$data .=   $json[$onlineQ4] ; 
$data .=  '<h3>5)' .$json['onlineQ5']. '</h3>' ;
$data .=   $json[$onlineQ5] ; 
$data .=  '<h3>6)' .$json['onlineQ6']. '</h3>' ;
$data .=   $json[$onlineQ6] ; 
$data .=  '<h3>7)' .$json['onlineQ7']. '</h3>' ;
$data .=   $json[$onlineQ7] ; 
$data .=  '<h3>8)' .$json['onlineQ8']. '</h3>' ;
$data .=   $json[$onlineQ8] ; 
$data .=  '<h3>9)' .$json['onlineQ9']. '</h3>' ;
$data .=   $json[$onlineQ9] ; 
$data .=  '<h3>10)' .$json['onlineQ10']. '</h3>' ;
$data .=   $json[$onlineQ10] ; 
$data .=  '<h3>11)' .$json['onlineQ11']. '</h3>' ;
$data .=   $json[$onlineQ11] ; 
$data .=  '<h3>12)' .$json['globalQ12']. '</h3>' ;
$data .=   '<b>' .$json['name']. '</b>'. $nameonline. '<br/>' ;
$data .=   '<b>' .$json['vorname']. '</b>'. $vornameonline. '<br/>' ;
$data .=   '<b>' .$json['NomCompagnie']. '</b>'. $unternehmensonline. '<br/>' ;
$data .=   '<b>' .$json['telefon']. '</b>'. $Telefononline. '<br/>' ;
$data .=   '<b>' .$json['email']. '</b>'. $Emailonline. '<br/>' ;
$data .=   '<b>' .$json['adresse']. '</b>'. $adresseonline. '<br/>' ;
$data .=  '<h3>13)' .$json['QUESTION13']. '</h3>' ;
$data .=   $QUESTION13online ; 
 */

/* 
if($message)
{
    $data .=  '<br/><strong> Message </strong><br/>' . $message;
} */



//mail

$enquirydata =
[
 /*  $json['HomePage'],
  'homeQ1' => $homeQ1 */
];

  /* 'First Name' => $fname,
'Last Name' => $lname,
'Email' => $fname,
'phone' => $fname,
'Message'=>$message,
'$recipicient' =>$recipicient
]; */
//echo $recipicient;
sendEmail($pdf,$enquirydata);

function sendEmail($pdf,$enquirydata){
  //  $recipicient='hatemjmai.1920@gmail.com';

    $mail = new PHPMailer(true);

    try {
        //Server settings
       // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'hatemjmai.1920@gmail.com';                     // SMTP username
        $mail->Password   = 'yazidboubou';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('hatemjmai.1920@gmail.com', 'jmai hatem');
        $mail->addAddress('hatemjmai.1920@gmail.com', 'recipicient');     // Add a recipient
        $mail->addAddress('bouzeziahmed5@gmail.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
    
        // Attachments
        $mail->addStringAttachment($pdf,('devis.pdf'));
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
       // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'KWA Devis';
        $mail->Body    = 'This is the PDF for your devis</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
       
        //echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }



}










?>