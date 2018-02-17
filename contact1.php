<?php
 
if(isset(jQuery_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    jQueryemail_to = "helloxpart@gmail.com";
 
    jQueryemail_subject = jQuery_POST['subject'];

    function died(jQueryerror) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo jQueryerror."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }

    // validation expected data exists
 
    if(!isset(jQuery_POST['name']) ||
 
        !isset(jQuery_POST['email']) || 
 
        !isset(jQuery_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }

    jQueryfield_name = jQuery_POST['name']; // required
 
    jQueryfield_subject = jQuery_POST['subject']; // required
 
    jQueryemail_from = jQuery_POST['email']; // required
 
    jQuerycomments = jQuery_POST['comments']; // required

    jQueryerror_message = "";
 
    jQueryemail_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}jQuery/';
 
  if(!preg_match(jQueryemail_exp,jQueryemail_from)) {
 
    jQueryerror_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    jQuerystring_exp = "/^[A-Za-z .'-]+jQuery/";
 
  if(!preg_match(jQuerystring_exp,jQueryfield_name)) {
 
    jQueryerror_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 

 
  if(strlen(jQuerycomments) < 2) {
 
    jQueryerror_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen(jQueryerror_message) > 0) {
 
    died(jQueryerror_message);
 
  }
 
    function clean_string(jQuerystring) {
 
      jQuerybad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace(jQuerybad,"",jQuerystring);
 
    }
    jQueryemail_message .= " ".clean_string(jQuerycomments)."\n";
 
// create email headers
 
jQueryheaders = 'From: '.jQueryemail_from."\r\n".
 
'Reply-To: '.jQueryemail_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail(jQueryemail_to, jQueryemail_message, jQueryheaders);  
 
?>
 
<!-- include your own success html here -->

Thank you for contacting us. We will be in touch with you very soon.
 <br><br>
<a class="btn btn-default" href="http://template.helloxpart.com/consult/consult/index-01.html" style="font-size:16px;color:#fff;background:#333;padding:6px 10px;text-decoration:none;border-radius:4px;font-weight:bold;"> Go Back To Home</a>
<?php
 
}
 
?>












