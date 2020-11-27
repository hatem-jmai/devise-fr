<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; 
use PHPMailer\PHPMailer\SMTP; 


require_once __DIR__ . '/vendor/autoload.php';
$Francais=file_get_contents("./i18n/de.json");
$json= json_decode($Francais,true);
//header('Refresh: 5; URL= deviseHome.php'); 
 
  
        $appQ1=$_POST['appQ1'];
        $appQ2=$_POST['appQ2'];
        $appQ3=$_POST['appQ3'];

        $appQ4=$_POST['appQ4'];
        $appQ4text=$_POST['appQ4text']; 
        
      
       $appQ5text=$_POST['appQ5text']; 
     
      $appQ6=$_POST['appQ6'];
      
       $name=$_POST['name'];
       $vorname=$_POST['vorname'];
       $unternehmens=$_POST['unternehmens'];
       $Telefon=$_POST['Telefon'];
       $Email=$_POST['Email'];
       $adresse=$_POST['adresse']; 
  

          if (isset($_POST['appQ3R1']))
          { 
            $appQ3R1=$json[$_POST['appQ3R1']] ;
           
          }
          else
          $appQ3R1='';
                
          if (isset($_POST['appQ3R2']))
          {
            $appQ3R2=$json[$_POST['appQ3R2']] ;
           
          }
          else
          $appQ3R2='';

          if (isset($_POST['appQ3R3']))
          {
            $appQ3R3=$json[$_POST['appQ3R3']] ;
         
          }  
          else
          $appQ3R3='';
  
         

            
          if (isset($_POST['appQ5R1']))
          {
            
            $appQ5R1=$json[$_POST['appQ5R1']] ;
            
          }
          else
          $appQ5R1='';

          if (isset($_POST['appQ5R2']))
          {
            $appQ5R2=$json[$_POST['appQ5R2']] ;
            
        }
          else
          $appQ5R2='';
 
          if (isset($_POST['appQ5R3']))
          {
            $appQ5R3=$json[$_POST['appQ5R3']] ;
           
        }
          else
          $appQ5R3='';

        
          if (isset($_POST['appQ5R4']))
          {    
            $appQ5R4=$json[$_POST['appQ5R4']] ;
        
        }
          else
          $appQ5R4='';
 
          if (isset($_POST['appQ5R5']))
          {    
            $appQ5R5=$json[$_POST['appQ5R5']] ;
        
        }
          else
          $appQ5R5='';

          
 

 

$mpdf=new \Mpdf\Mpdf();
//var_dump($mpdf)

//create pdf
$data='';
$data .=  '<h1 style="text-align:center">' .$json['app']. '</h1>' .'<br/>' ;
$data .=  '<h3>1)' .$json['appQ1']. '</h3>' ;
$data .=   $json[$appQ1] ; 

$data .=  '<h3>2)' .$json['appQ2']. '</h3>' ;
$data .=   $appQ2 ; 

$data .=  '<h3>3)' .$json['appQ3']. '</h3>' ;
$data .=   $appQ3R1; 
$data .= ' ';
$data .=   $appQ3R2;
$data .= ' ';
$data .=   $appQ3R3; 

$data .=  '<h3>4)' .$json['appQ4']. '</h3>' ;

if($appQ4text == ""){
$data .=   $json[$appQ4] ;
} 
else{
  $data .=   $appQ4text ; 
}



$data .=  '<h3>5)' .$json['appQ5']. '</h3>' ;
$data .=   $appQ5R1; 
$data .= ' ';
$data .=   $appQ5R2;
$data .= ' ';
$data .=   $appQ5R3; 
$data .= ' ';
$data .=   $appQ5R4; 
$data .= ' ';
$data .=   $appQ5R5;
$data .= ' ';
$data.= $appQ5text;


$data .=  '<h3>6)' .$json['appQ6']. '</h3>' ;
$data .=   $appQ6; 

$data .=  '<h3>7)' .$json['globalQ12']. '</h3>' ;

$data .=   '<b>' .$json['name']. '</b>'. $name. '<br/>' ;
$data .=   '<b>' .$json['vorname']. '</b>'. $vorname. '<br/>' ;
$data .=   '<b>' .$json['NomCompagnie']. '</b>'. $unternehmens. '<br/>' ;
$data .=   '<b>' .$json['telefon']. '</b>'. $Telefon. '<br/>' ;
$data .=   '<b>' .$json['email']. '</b>'. $Email. '<br/>' ;
$data .=   '<b>' .$json['adresse']. '</b>'. $adresse. '<br/>' ;


$mpdf->WriteHTML($data);
$pdf=$mpdf->Output('','S');


//mail

$enquirydata =
[
 /*  $json['HomePage'],
  'homeQ1' => $homeQ1 */
];


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