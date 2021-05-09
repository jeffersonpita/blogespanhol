<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

define("TOKEN_EMAIL", "30ead40f2aa7b856c40334fe56a82dac:ede343b6721e024d01b55fcc40321453");
define('EMAIL_FROMNAME', "Espanhol para você");
define('EMAIL_FROM', "jeffersonpita@yahoo.com.br");

define("SENDINBLUE_TOKEN", "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");
define('SENDGRID_FROMNAME', "Espanhol para você");
define('SENDGRID_FROM', "jeffersonpita@yahoo.com.br");

class ContatoController extends Controller
{
    //
    public function contato(){
      return view('site.contato');
    }
    public function contato_post(){

      $a = $this->sendEmail( "jeffersonpita23@gmail.com", "Contato do site Espanhol para você", "nome: {$_POST['name']}<br>e-mail: {$_POST['email']}<br>assunto: {$_POST['subject']}<br>mensagem: {$_POST['message']}" );

      return view('site.contato_ok');
    }

    function sendEmail( $email, $subject, $message )
    {
      $ch = curl_init();

      $data = Array( "Messages"=> [ Array(
          "From" => Array( "Email"=> EMAIL_FROM, "Name"=> EMAIL_FROMNAME ),
          "To" => [ Array( "Email"=> $email, "Name"=> "" ) ],
          "Subject" => $subject,
          "HTMLPart" => $message,
          "CustomID" => "AppGettingStartedTest"
        ) ] );

       curl_setopt($ch, CURLOPT_USERPWD, TOKEN_EMAIL);
       curl_setopt($ch, CURLOPT_URL, 'https://api.mailjet.com/v3.1/send');
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt($ch, CURLOPT_POST, 1);
       curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
       curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'  ));

       $result = json_decode(curl_exec($ch));
       #print_r($result);

       if (curl_errno($ch)) {
           echo 'Error:' . curl_error($ch);
       }
       curl_close($ch);

       if($result->Messages[0]->Status=='success'){
         return 1;
       }
      return 0;
    }

    function sendEmail2( $email, $subject, $message )
    {
      $data = array(
      	"sender" => array(
      		"email" => SENDGRID_FROM,
      		"name" => SENDGRID_FROMNAME
      	),
      	"to" => array(
      		array(
      			"email" => $email,
    #  			"name" => "Your - name"
      		)

      	),
      	"subject" => $subject,
      	"htmlContent" => $message
      );

      $ch = curl_init();

      curl_setopt($ch, CURLOPT_URL, 'https://api.sendinblue.com/v3/smtp/email');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

      $headers = array();
      $headers[] = 'Accept: application/json';
      $headers[] = 'Api-Key: '.SENDINBLUE_TOKEN;
      $headers[] = 'Content-Type: application/json';
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

      $result = json_decode(curl_exec($ch));
      if (curl_errno($ch)) {
          echo 'Error:' . curl_error($ch);
      }
      curl_close($ch);

      if( $result->message )
        return 0;

      if($result->messageId){
        return 1;
      }

      return 0;
    }
}
