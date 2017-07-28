<?php

        $email;$comment;$captcha;
        if(isset($_POST['email'])){
          $email=$_POST['email'];
        }if(isset($_POST['comment'])){
          $email=$_POST['comment'];
        }if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lc3QxkTAAAAALju0BBQTozH0pt6Z3Go7S2NYSsm&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        if($response.success==false)
        {
          echo '<h2>Try the Captcha again.</h2>';
        }else
        {
echo '<script type="text/javascript">
           window.location = "https://www.youtube.com/watch?v=dQw4w9WgXcQ"
      </script>';
        }
?>
