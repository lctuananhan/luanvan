<?php
    class matching {
      public $email;
      public $tieude;
      public $mota;
      public $gia;
      public $sdt;
    }
 ?>
<?php
  include '../connect/dbconfig.php';



  if (isset($_POST['sendmail'])) {
    require 'PHPMailerAutoload.php';
    require 'class.phpmailer.php';
    require 'class.smtp.php';
    $mail = new PHPMailer;

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'tuananh93.hcmut@gmail.com';                 // SMTP username
    $mail->Password = 'tuananh@1993';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;
    $mail->smtpConnect([
      'ssl' => [
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
      ]
    ]);

    $mail->From = 'tuananh93.hcmut@gmail.com';
    $mail->FromName = 'BConline';

    # code...
    #$headers = "From:tuananh93.hcmut@gmail.com";
    $body = "<html><body>";



    $datasend = array();
    $save_email = array();
      //echo $sub_email."<br>";
    $sql = "SELECT * FROM matching, post WHERE matching.fk_job = post.fk_Job
                                            AND matching.fk_tt = post.fk_TT
                                            AND matching.fk_qh = post.fk_QH
                                            AND post.post_Check = 1";
      //$post_name = $row['post_Name'];
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
      $node = new matching();
      # code...
      $node->email = $row['email'];
      $node->tieude = $row['post_Name'];
      $node->mota = $row['post_Direc'];
      $node->gia = $row['post_Cost'];
      $node->sdt = $row['post_phone'];
      array_push($save_email, $node);
    }

    /*  for($i=0; $i<count($save_email); $i++){
        if ($save_email[$i]->email == $save_email[$i++]->email) {
          $mail->CharSet = 'UTF-8';
          $mail->addAddress($save_email[$i]->email);
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = "Việc làm";
          $mail->Body .= "<strong>".$save_email[$i]->tieude."</strong>"."<br>".$save_email[$i]->mota."<br>"."LH:".$save_email[$i]->sdt."<br>";
        }
        else {
          $mail->CharSet = 'UTF-8';
          $mail->addAddress($save_email[$i]->email);
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = "Việc làm";
          $mail->Body = "<strong>".$save_email[$i]->tieude."</strong>"."<br>".$save_email[$i]->mota."<br>"."LH:".$save_email[$i]->sdt."<br>";
        }*/
        //$src = "image/32.png";
         $mail->Body = "<html><body style='background-color: #f2f2f2;'>
                        <div style='width:650px; background-color: #2d2d30; opacity:0.8; padding:10px; text-align: center; display: block; margin: auto;'>
                        <img src='https://uphinhnhanh.com/images/2017/12/13/32.png'>
                        </div>";
        foreach($save_email as $value){
          if (isset($value->email)) {
            # code...
            $mail->CharSet = 'UTF-8';
            $mail->addAddress($value->email);
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = "BConline - Việc Tìm Người";
            $mail->Body .=
                            "<div style='width:650px; boder:1.5px solid #f2f2f2; padding:10px; background-color: #fff; display: block; margin: auto;'>"
                            ."<strong>".$value->tieude."</strong>"."<br>"."Mô tả: ".$value->mota."<br>"."Giá: ".$value->gia." VNĐ"."<br>"."Liên Hệ: ".$value->sdt. "<hr style='color:#f2f2f2; background-color:#f2f2f2;'>"
                            ."</div>";

          }
          else {
            $mail->CharSet = 'UTF-8';
            $mail->addAddress($value->email);
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = "Việc làm";
            $mail->Body = "<strong>".$value->tieude."</strong>"."<br>".$value->gia."<br>"."LH:".$value->sdt."<br>";
          }

        }
        $mail->Body .= " <div style='width:650px; color:#fff; boder:1.5px solid #f2f2f2; padding:10px; background-color: #2d2d30; opacity:0.8; display: block; margin: auto;'>
                              Website: BConline <br>
                              Mail được gửi tự động từ website BConline. <br>
                              Email: tuananh93.hcmut@gmail.com
                          <div>
                        </body> </html>";

    /*  $mail->CharSet = 'UTF-8';
      $mail->addAddress($subemail);
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = "Việc làm";
      $mail->Body .= "<strong>".$value->tieude."</strong>"."<br>".$value->mota."<br>"."LH:".$value->sdt."<br>";*/

      //$mail->send();

   if(!$mail->send()) {
         echo 'Message could not be sent.';
         echo 'Mailer Error: ' . $mail->ErrorInfo;
     } else {
         echo "<script>alert('Gửi mail thành công'); history.back();</script>";
     }


    //  $mail->CharSet = 'UTF-8';
      //$mail->addAddress($email);
      //$mail->isHTML(true);                                  // Set email format to HTML
      //$mail->Subject = "Việc làm";
    //echo json_encode($save_email);
    //echo "<script> alert('Send mail success!'); history.back(); </script>";
    #mail("lctuananhan@gmail.com", "Testing", "test", "From: tuananh93.hcmut@gmail.com");
    #echo "email sent...";


  }
?>
