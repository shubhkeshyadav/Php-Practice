<?php
    require_once 'vendor/autoload.php'; 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    Class Mail
    {   
        const TO = 'shubhkeshyadav222@gmail.com';
        public $mail;
        
        public function __construct()
        {
            $this->mail                 = new PHPMailer();
            $this->mail->isSMTP();
            $this->mail->SMTPDebug      = false;
            $this->mail->Debugoutput    = 'html';
            $this->mail->Host           = "sg2plzcpnl479131.prod.sin2.secureserver.net";
            $this->mail->Port           = 465;
            $this->mail->SMTPAuth       = true;
            $this->mail->Username       = "anoop@forruneoil.co.in";
            $this->mail->Password       = "9^alRiiAvse-";
            $this->mail->SMTPSecure     = 'ssl';
        }

        public function sendMail($mailName,$subject,$msg)
        {   
            
            $this->mail->setFrom('no-reply@forruneoil.co.in', $mailName);
            $this->mail->addAddress(self::TO);
            $this->mail->Subject = $subject;
            $this->mail->msgHTML($msg);
            
            return $this->mail->send();
        }
    }
    
    
  
?>
