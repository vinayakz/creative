<?php 
    require'includes/dbconnect.php';
    session_start();
    $headers = 'From: vinush9699info@gmail.com' . "\r\n" .
    'Reply-To: vinush9699info@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion() . "\r\n" .
    'Content-type: text/html; charset=iso-8859-1';

    $uname =$_REQUEST['otpname'];  
    $query = mysqli_query($con,"select * from lgn_db where username='$uname' ");
    $row = mysqli_fetch_array($query);    
    $email = $row['username'];
    $hash = base64_encode(md5(rand()));
    $otp = rand(1000,9999);
    //Set the Indian Timezone
    date_default_timezone_set('Asia/Kolkata');
    //Get the current time in 24 hr format
    $date = date('d/m/Y H:i:s', time());
    $hashvalue = base64_encode($date);    
    $sub = "Stay-Befikar Admin Login OTP";        
    $msg = "
    <!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
  <style type=\"text/css\">
    /* FONTS */
    @media screen {
      @font-face {
        font-family: 'Lato';
        font-style: normal;
        font-weight: 400;
        src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
      }

      @font-face {
        font-family: 'Lato';
        font-style: normal;
        font-weight: 700;
        src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
      }

      @font-face {
        font-family: 'Lato';
        font-style: italic;
        font-weight: 400;
        src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
      }

      @font-face {
        font-family: 'Lato';
        font-style: italic;
        font-weight: 700;
        src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
      }
    }

    /* CLIENT-SPECIFIC STYLES */

    body,
    table,
    td,
    a {
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }

    table,
    td {
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    img {
      -ms-interpolation-mode: bicubic;
    }

    /* RESET STYLES */

    img {
      border: 0;
      height: auto;
      line-height: 100%;
      outline: none;
      text-decoration: none;
    }

    table {
      border-collapse: collapse !important;
    }

    body {
      height: 100% !important;
      margin: 0 !important;
      padding: 0 !important;
      width: 100% !important;
    }

    /* iOS BLUE LINKS */

    a[x-apple-data-detectors] {
      color: inherit !important;
      text-decoration: none !important;
      font-size: inherit !important;
      font-family: inherit !important;
      font-weight: inherit !important;
      line-height: inherit !important;
    }

    /* MOBILE STYLES */

    @media screen and (max-width:600px) {
      h1 {
        font-size: 32px !important;
        line-height: 32px !important;
      }
    }

    /* ANDROID CENTER FIX */

    div[style*=\"margin: 16px 0;\"] {
      margin: 0 !important;
    }
  </style>
</head>
<body style=\"background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;\">
  <!-- HIDDEN PREHEADER TEXT -->
  <div style=\"display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Lato', Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;\">
    This is some preview text about that thing you did!
  </div>
  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
    <!-- LOGO -->
    <tr>
      <td bgcolor=\"#30e3ca\" align=\"center\">
        <!--[if (gte mso 9)|(IE)]>
            <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\">
            <tr>
            <td align=\"center\" valign=\"top\" width=\"600\">
            <![endif]-->
        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\">
          <tr>
            <td align=\"center\" valign=\"top\" style=\"padding: 40px 10px 40px 10px;\"></td>
          </tr>
        </table>
        <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
      </td>
    </tr>
    <!-- HERO -->
    <tr>
      <td bgcolor=\"#30e3ca\" align=\"center\" style=\"padding: 0px 10px 0px 10px;\">
        <!--[if (gte mso 9)|(IE)]>
            <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\">
            <tr>
            <td align=\"center\" valign=\"top\" width=\"600\">
            <![endif]-->
        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\">
          <tr>
            <td bgcolor=\"#ffffff\" align=\"center\" valign=\"top\" style=\"padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;\">
                <span style=\"color: #0c0c0c;\">Stay-</span><span style=\"color: #30e3ca;\">Befikar</span>
            </td>
          </tr>
        </table>
        <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
      </td>
    </tr>
    <!-- COPY BLOCK -->
    <tr>
      <td bgcolor=\"#f4f4f4\" align=\"center\" style=\"padding: 0px 10px 0px 10px;\">
        <!--[if (gte mso 9)|(IE)]>
            <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\">
            <tr>
            <td align=\"center\" valign=\"top\" width=\"600\">
            <![endif]-->
        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\">
          <!-- COPY -->
          <tr>
            <td bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 20px 30px 40px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;\">
              <p style=\"margin: 0;\">Your One Time Password (OTP) is.</p>
            </td>
          </tr>
          <!-- BULLETPROOF BUTTON -->
          <tr>
            <td bgcolor=\"#ffffff\" align=\"left\">
              <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                <tr>
                  <td bgcolor=\"#ffffff\" align=\"center\" style=\"padding: 20px 30px 60px 30px;\">
                    <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                      <tr>
                        <td align=\"center\" style=\"border-radius: 3px;\" bgcolor=\"#30e3ca\"><a style=\"font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #000000; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #30e3ca; display: inline-block;\">$otp</a></td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <!-- COPY -->
          <tr>
            <td bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 0px 30px 20px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;\">
              <p style=\"margin: 0;\">The password will expire in ten minutes if not used.</p>
            </td>
          </tr>
          <!-- COPY -->
          <tr>
            <td bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;\">
              <p style=\"margin: 0;\">Stay-Befikar Solution Pvt. Ltd.</p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    
    <tr>
      <td bgcolor=\"#f4f4f4\" align=\"center\" style=\"padding: 30px 10px 0px 10px;\">
        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\">
          <tr>
            <td bgcolor=\"#FDF2CC\" style=\"padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;\">
              <h2 style=\"font-size: 10px; font-weight: 400; color: #858585; margin: 0;\">Never Share your Card number, CVV, PIN, OTP, or Passcode with anyone, even if the caller claims to be a bank employee. Sharing these details can lead to unauthorised access to your account. <br>
                This is an automatically generated email, please do not reply.</h2>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td bgcolor=\"#f4f4f4\" align=\"center\" style=\"padding: 0px 10px 0px 10px;\">
        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\">
          <tr>
            <td bgcolor=\"#f4f4f4\" align=\"left\" style=\"padding: 30px 30px 30px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 18px;\">
              <p style=\"margin: 0;\">
                <a href=\"https://vinayakz.github.io\" target=\"_blank\" style=\"color: #111111; font-weight: 700;\">About Me</a> - Vinayak Z.
              </p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>";
    $rec = "$email";    
    // mail($rec,$sub,$msg_tmp);
    if(mail($rec,$sub,$msg,$headers)){
        $query = mysqli_query($con,"insert into otp values(null,'$uname','$otp','unread','$date','$hash')");        
        header("Location: otp_verify.php?uname=$uname&hash=$hash&date=$hashvalue");
    }else{
        echo error_log();
    }
    
?>