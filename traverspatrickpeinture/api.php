<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';

                                   // TCP port to connect to


//require('index.php');


use function PHPSTORM_META\type;

/* It's a class that connects to a database and has a few methods that allow you to read and write to
the database. */
class API_Foyer
{
  /* It's a property of the class. */
  private $Connec;
  /**
   * This function creates a new PDO object and stores it in the Connec property of the object.
   * 
   * @param user the username 
   * @param mdp password
   * @param host localhost
   * @param base the name of the database
   */
  function __construct($user,$mdp,$host,$base)
  {
    $SourceName='mysql:dbname='.$base.';charset=utf8;'.'host='.$host;
    try
    {
      /* It's creating a new PDO object and storing it in the Connec property of the object. */
      $this->Connec=new PDO($SourceName,$user,$mdp);  
    }
    catch(Exception $ex)
    {
      echo "erreur liée à la BDD :".utf8_encode($ex->getMessage())."<br/>";
    }
  }
  
    public function sendEmail()
    {
      // data.append('email',this.formEmail.email);
      // data.append('nom',this.formEmail.nom);
      // data.append('prenom',this.formEmail.prenom);
      // data.append('tel',this.formEmail.tel);
      // data.append('lieu',this.formEmail.lieu);
      // data.append('message',this.formEmail.message);

      $email=$_POST['email'];
      $nom=$_POST['nom'];
      $prenom=$_POST['prenom'];
      $tel=$_POST['tel'];
      $lieu=$_POST['lieu'];
      $message=$_POST['message'];

      var_dump($email);
      var_dump($nom);
      var_dump($prenom);
      var_dump($tel);
      var_dump($lieu);
      var_dump($message);

      //if there is an apostrophe in the message, it's replaced by a space
      $message=str_replace("'"," ",$message);
      $lieu=str_replace("'"," ",$lieu);
      $email=str_replace("'"," ",$email);
      $nom=str_replace("'"," ",$nom);
      $prenom=str_replace("'"," ",$prenom);
      $tel=str_replace("'"," ",$tel);

      var_dump($email);
      var_dump($nom);
      var_dump($prenom);
      var_dump($tel);
      var_dump($lieu);
      var_dump($message);




      $mail=new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'icesword1999@gmail.com';                     // SMTP username
    $mail->Password   = 'ihifrvqbynjnabbn';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465; 
    
      $mail->setFrom('traverspatrick@orange.fr', 'Travers Patrick Peinture');
      $mail->addAddress($email, $nom);
      $mail->addReplyTo($email, $nom);
      $mail->isHTML(true);
      $mail->Subject = 'Travers Patrick Peinture';
      $mail->Body    = '<h1>Travers Patrick Peinture</h1>
      <p>Bonjour '.$prenom.' '.$nom.',</p>
      <p>Merci pour votre demande de devis.</p>
      <p>Nous vous répondrons dans les plus brefs délais.</p>
      <p>Votre message :</p>
      <p>'.$message.'</p>
      <p>Nous vous remercions de votre confiance.</p>
      <p>L\'équipe Travers Patrick Peinture</p>';
      $mail->AltBody = 'Bonjour '.$prenom.' '.$nom.',
      Merci pour votre demande de devis.
      Nous vous répondrons dans les plus brefs délais.
      Votre message :
      '.$message.'
      Nous vous remercions de votre confiance.
      L\'équipe Travers Patrick Peinture';
      //add a link to the facebook page
      $mail->Body .= '<p><a href="https://www.facebook.com/TraversPatrickPeinture/">Lien vers notre page facebook</a></p>';
      $mail->AltBody .= '<p><a href="https://www.facebook.com/TraversPatrickPeinture/">Lien vers notre page facebook</a></p>';
      //add our phone number clickable
      $mail->Body .= '<p><a href="tel:+33642022806">06 42 02 28 06</a></p>';
      $mail->AltBody .= '<p><a href="tel:+33642022806">06 42 02 28 06</a></p>';
      $mail->CharSet = 'UTF-8';

      //style the p of the email with css
      $mail->Body = '<style>
      p{
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333;
        margin: 0;
      }
      </style>'.$mail->Body;
      if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
      } else {
        echo 'Message has been sent';
      }
      $mail2=new PHPMailer(true);
      $mail2->SMTPDebug = 0;                                       // Enable verbose debug output
      $mail2->isSMTP();                                            // Set mailer to use SMTP
      $mail2->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail2->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail2->Username   = 'icesword1999@gmail.com';                     // SMTP username
      $mail2->Password   = 'ihifrvqbynjnabbn';                               // SMTP password
      $mail2->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                                  // Enable TLS encryption, `ssl` also accepted
      $mail2->Port       = 465; 

      //send an email to the admin using PHPMailer
      $mail2->setFrom('traverspatrick@orange.fr', 'Travers Patrick Peinture');
      $mail2->addAddress('traverspatrick@orange.fr', 'Charlely');
      $mail2->isHTML(true);
      $mail2->Subject = 'Travers Patrick Peinture';
      $mail2->Body    = '<h1>Travers Patrick Peinture</h1>
      <p>Bonjour,</p>
      <p>Un nouveau devis a été envoyé.</p>
      <p>Nom : '.$nom.'</p>
      <p>Prénom : '.$prenom.'</p>
      <p>Email : '.$email.'</p>
      <p>Telephone :<a href="tel:'.$tel.'"> '.$tel.'</a></p>
      <p>Lieu : '.$lieu.'</p>
      <p>Message : '.$message.'</p>
      <p>L\'équipe Travers Patrick Peinture</p>';
      $mail2->AltBody = 'Bonjour,
      Un nouveau devis a été envoyé.
      Nom : '.$nom.'
      Prénom : '.$prenom.'
      Email : '.$email.'
      Téléphone : '.$tel.'
      Lieu : '.$lieu.'
      Message : '.$message.'
      L\'équipe Travers Patrick Peinture';
      $mail2->Body = '<style>
      p{
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333;
        margin: 0;
      }
      </style>'.$mail2->Body;
      

      $mail2->CharSet = 'UTF-8';
      if(!$mail2->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail2->ErrorInfo;
      } else {
        echo 'Message has been sent';
      }

      return $result;




      



      // $to = $email;
      // $subject = "Votre demande de devis";
      // $message2 = "Bonjour $nom $prenom,\n\nVous avez demandé un devis.\n\nje vous répondrai dans les plus bref delais.\n\nCordialement,\n\nTravers Patrick";
      // $headers = "From:
      // " . $email . "\r\n" .
      // "Reply-To: " . $email . "\r\n" .
      // "X-Mailer: PHP/" . phpversion();
      // $headers .= "MIME-Version: 1.0\r\n";
      // $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
      // mail($to, $subject, $message2, $headers);

      //send an email to the admin
      // $to = "traverspatrick@orange.fr";
      // $to = "charlely11@icloud.com";
      // $subject = "Nouveau devis";
      // $message2 = "Bonjour,\n\nUn nouveau devis a été demandé.\n\npar :$nom $prenom\n\ntel:$tel\n\nemail:$email\n\nlieu:$lieu\n\nmessage:$message";
      // $headers = "From:
      // " . $email . "\r\n" .
      // "Reply-To: " . $email . "\r\n" .
      // "X-Mailer: PHP/" . phpversion();
      // $headers .= "MIME-Version: 1.0\r\n";
      // $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
      // mail($to, $subject, $message2, $headers);

      // echo "Votre demande a bien été envoyée";
      // return json_encode($result);
      

      
      // var_dump($data['email']);
      // $objPDOStatement = $this->Connec->query("INSERT INTO commandes (id_table,email, confirmee, preparee, dateCommande) VALUES (5, '".$data['email']."', 0, 0, CURRENT_TIMESTAMP)");
      // // var_dump($data);

      // for($i=0; $i<count($data['products']); $i++)
      // {
      //   if($data['products'][$i]['qt_voulue']!=0)
      //   {
      //       $objPDOStatement = $this->Connec->query("SELECT * FROM produits WHERE id_produit=".$data['products'][$i]['id_produit']);

      //     $result=$objPDOStatement->fetchall(PDO::FETCH_ASSOC);
      //     $qt_dispo=$result[0]['qt_dispo'];
      //     $qt_voulue=$data['products'][$i]['qt_voulue'];
      //     if($qt_voulue>$qt_dispo)
      //     {
      //       echo "Quantité insuffisante pour le produit ".$data['products'][$i]['id_produit']."<br/>";
      //     }
      //     else
      //     {
      //       $qt_dispo=$qt_dispo-$qt_voulue;
      //       $objPDOStatement = $this->Connec->query("UPDATE produits SET qt_dispo=".$qt_dispo." WHERE id_produit=".$data['products'][$i]['id_produit']);
      //     }
          
      //     //get the last id of the commande
      //     $objPDOStatement = $this->Connec->query("SELECT id_commande FROM commandes ORDER BY id_commande DESC LIMIT 1");
      //     $result=$objPDOStatement->fetchall(PDO::FETCH_ASSOC);
      //     $id_commande=$result[0]['id_commande'];
      //     //insert into detail_commandes the id_commande, id_produit, qt_commandee, cochee=0
      //     $objPDOStatement = $this->Connec->query("INSERT INTO detail_commandes (id_commande, id_produit, qt_commandee, cochee) VALUES (".$id_commande.", ".$data['products'][$i]['id_produit'].", ".$data['products'][$i]['qt_voulue'].", 0)");
      //   }
      //   else
      //   {
      //     echo "Quantité nulle pour le produit ".$data['products'][$i]['id_produit']."<br/>";
      //   }

      // }
  }
}
?>
