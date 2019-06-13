<!-- php -S localhost:8008 -->

<?php
    if(isset($_POST['email'])) {
 
        // EDIT THE 2 LINES BELOW AS REQUIRED
        $email_to = "valerie.flores64@gmail.com";
        $email_subject = "Request from Website";
     
        function died($error) {
            // your error code can go here
            echo "We are very sorry, but there were error(s) found with the form you submitted. ";
            echo "These errors appear below.<br /><br />";
            echo $error."<br /><br />";
            echo "Please go back and fix these errors.<br /><br />";
            die();
        }
     
     
        // validation expected data exists
        if(!isset($_POST['name']) ||
            !isset($_POST['email']) ||
            !isset($_POST['message'])) {
            died('We are sorry, but there appears to be a problem with the form you submitted.');       
        }
     
         
     
        $name = $_POST['name']; // required
        $email_from = $_POST['email']; // required
        $message = $_POST['message']; // required
     
        $error_message = "";
        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
     
      if(!preg_match($email_exp,$email_from)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
      }
     
        $string_exp = "/^[A-Za-z .'-]+$/";
     
      if(!preg_match($string_exp,$name)) {
        $error_message .= 'The First Name you entered does not appear to be valid.<br />';
      }
     
      if(strlen($message) < 2) {
        $error_message .= 'The Comments you entered do not appear to be valid.<br />';
      }
     
      if(strlen($error_message) > 0) {
        died($error_message);
      }
     
        $email_message = "Form details below.\n\n";
     
         
        function clean_string($string) {
          $bad = array("content-type","bcc:","to:","cc:","href");
          return str_replace($bad,"",$string);
        }
     
        $email_message .= "Name: ".clean_string($name)."\n";
        $email_message .= "Email: ".clean_string($email_from)."\n";
        $email_message .= "Message: ".clean_string($message)."\n";

        // create email headers
        $headers = 'From: '.$email_from."\r\n".
        'Reply-To: '.$email_from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        @mail($email_to, $email_subject, $email_message, $headers);  

    }
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png"/>
    <title>Hello!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/reset.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="assets/javascript/app.js"></script>
</head>
<body>
    <div class="sidenav">
        <img src="assets/images/my_initials.png" alt="initials" class="initials">
        <a href="#about">Bio</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#links">Links</a>
        <a href="#contact">Contact</a>
    </div>
    <div class="bgimg-1">
        <div class="caption">
            <span class="border" id="about">BIO</span>
        </div>
    </div>
    <div class="paragraph">
        <img src="assets/images/circular_headshot.png" alt="headshot" class="myPhoto">
        <h3>About The Developer</h3>
        <p>     
            Valerie is a freelance Full-Stack Developer based in Orange County, California.  She earned her certification from UC Irvine's coding bootcamp in 2018 and is knowledgeable in multiple development skills including HTML, CSS, Javascript, jQuery, React, and MERN stack applications.
        </p>
        <p>
            Prior to becoming a Full-Stack Developer, Valerie has over 11 years experience in the retail real estate business in Administration and Property Management.  She holds a Bachelor's Degree in Fine Arts with an emphasis on flute performance.
        </p>
        <p>
            When Valerie isn't creating fantastic web apps, she enjoys gaming, relaxing with her husband, Dan, and playing with her standard schnauzer, Heidi.
        </p>
    </div>
    <div class="bgimg-2">
        <div class="caption">
            <span class="border" id="portfolio">PORTFOLIO</span>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h3 id= "app">
                Applications created by Valerie
            </h3>
        </div>
        <div id="myApps" class="row">
            <div class="col">
                <div class="app">
                    <img src="assets/images/photo_2.png" id="image" alt="photo_1">
                </div> 
            </div>
            <div class="col">
                <div class="app2">
                    <img src="assets/images/liri-photo.png" id="image" alt="photo_2">
                </div>
            </div>
            <div class="col">
                <div class="app3">
                    <img src="assets/images/photo_4.jpg" id="image" alt="photo_3">
                </div>
            </div>
        </div>
        <div id="myApps" class="row">
            <div class="col">
                <div class="app4">
                    <img src="assets/images/photo_5.jpg" id="image" alt="photo_4">
                </div>
            </div>
            <div class="col">
                <div class="app5">
                    <img src="assets/images/photo_6.jpg" id="image" alt="photo_5">
                </div>
            </div>
            <div class="col">
                <div class="app6">
                    <img src="assets/images/photo_8.jpg" id="image" alt="photo_6">
                </div>
            </div>
        </div>
        <div id="myApps" class="row">
            <div class="col">
                <div class="app7">
                    <img src="assets/images/photo_3.jpg" id="image" alt="photo_7">
                </div>
            </div>
            <div class="col">
                <div class="app8">
                    <img src="assets/images/photo_9.png" id="image" alt="photo_8">
                </div>
            </div>
            <div class="col">
                <div class="app9">
                    <img src="assets/images/photo_10.jpg" id="image" alt="photo_9">
                </div>
            </div>
        </div>
        <div id="myApps" class="row">
            <div class="col">
                <div class="app10">
                    <img src="assets/images/photo_11.jpg" id="image" alt="photo_10">
                </div>
            </div>
            <div class="col">
                <div class="app11">
                    <img src="assets/images/photo_12.jpg" id="image" alt="photo_11">
                </div>
            </div>
            <div class="col">
                <div class="app12">
                    <img src="assets/images/photo_13.jpg" id="image" alt="photo_13">
                </div>
            </div>
        </div>
    </div>
    <div class="bgimg-3">
        <div class="caption">
            <span class="border" id="links">LINKS</span>
        </div>
    </div>
    <div>
        <h3 id="profiles">
            GitHub and LinkedIn Profiles for Valerie
        </h3>
        <div class="link">
            <a href="https://github.com/valeriemiller5" target="_blank" class="box box-5">
                <img src="assets/images/github.png" class="socialMedia" width="75" height="75" style="margin-right: 50px" alt="github">
            </a>
            <a href="https://www.linkedin.com/in/valeriesflores/" target="_blank" class="box box-5">
                <img src="assets/images/linkedin.jpg" class="socialMedia" width="75" height="75" alt="linkedin">
            </a>
        </div>
    </div>
    <div class="bgimg-4">
        <div class="caption">
            <span class="border" id="contact">CONTACT</span>
        </div>
    </div>
    <div class="container" id="contactInfo">
        <div class="row">
            <div class="col" id="infoForm">
                <h3>Please Fill Out the Form:</h3>
                <form action="index.php" method="post" id="contactForm">
                    <div class="form-group">
                        <label>Name:</label>
                        <input id="name" type="text" name="name" placeholder="  Enter Your Name Here" />
                    </div>            
                    <div class="form-group">
                        <label>Email:</label>
                        <input id="email" type="text" name="email" placeholder="  Enter Your Email Here" />
                    </div>
                    <div class="form-group">
                        <label>Message:</label>
                        <textarea id="message" name="message" placeholder="  Enter Message Here"></textarea>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-secondary" type="submit" id="formBtn">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col">
                <div class="column" id="myContact">
                    <h3 id="contactHeader">Contact Information:</h3>
                    <p id="email">Email: <a id="emailLink" href="mailto:valerie.flores64@gmail.com?subject=Valerie's Website Contact" enctype="text/plain">valerie.flores64@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="bottomNav">
        <h6 id="bottomLogo"><span><img src="assets/images/heart-icon.png" alt="myHeart" id="myHeart"></span>This site created by Valerie Flores<span><img src="assets/images/heart-icon.png" alt="myHeart" id="myHeart"></span></h6>
    </div>
</body>
</html>
