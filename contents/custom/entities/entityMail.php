<?php
/*
class EntityMail extends Entity
{
    public function __construct($database, $name)
    {
        parent::__construct($database, $name);
        $mail->IsSMTP();                                      // Set mailer to use SMTP
        $this->addField("password", PASSWORD);
        $mail->Host = 'smtp.vecchiaposta.it';  // Specify main and backup server
        $mail->SMTPAuth = false;                               // Enable SMTP authentication
        $mail->Username = 'info@vecchiaposta.it';
         $this->addField("Password", PASSWORD);                            // SMTP password 
        $mail->Port = '25';                          // SMTP password
        //$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted

        $mail->From = 'info@vecchiaposta.it';
        $mail->FromName = 'B&B La Vecchia Posta';
        $mail->AddAddress($_POST['book-email']);  // Add a recipient
        //$mail->AddAddress('ellen@example.com');               // Name is optional
        //$mail->AddReplyTo('info@example.com', 'Information');
        //$mail->AddCC('cc@example.com');
        //$mail->AddBCC('bcc@example.com');

        //$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
        //$mail->AddAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->AddAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->IsHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Conferma ricezione richiesta';
        $mail->AddEmbeddedImage('logo.gif', 'logoimg', 'logo.gif');
        $mail->Body    = '<div>
        $this->setPresentation("(%username)");
        $this->addPrimaryKey("username", VARCHAR, 50);
        $this->addField("password", PASSWORD);
        $this->addField("email", VARCHAR, 100);
        $this->addField("name", VARCHAR, 50);
        $this->addField("surname", VARCHAR, 50);
        $this->addField("phone", VARCHAR, 20);
        $this->addField("active", VARCHAR, 1);
        $this->addField("active_newsletter", VARCHAR, 1);
        $this->addField("processed", VARCHAR, 1);
    }
}
$usersEntity = new EntityMail($database, "sys_mail");
*/

?>