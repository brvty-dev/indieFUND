<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>indieFUND</title>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta name="description" content="Where fans fund films">
        <meta name="keywords" content="indie fund, indiefund, where fans fund films, film investment, film fund, filmmaking, crowd funding, film distribution, profit share">

        <meta property="og:title" content="This is indieFUND">
        <meta property="og:url" content="XXXX">
        <meta property="og:description" content="Where fans fund films">
        <meta property="og:image" content="XXXX/assets/images/indie_fund_header.png">
        <meta property="og:site_name" content="indieFUND">
        <meta property="og:locale" content="en_GB">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:type" content="website">

        <meta name="twitter:title" content="indieFUND">
        <meta name="twitter:description" content="Where fans fund films">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:image" content="XXXX/assets/images/indie_fund_header.png">
        <meta name="twitter:image:alt" content="indieFUND">
        <meta name="twitter:site" content="@indiefund">

            <link rel="icon" type="image/x-icon" href="assets/icons/favicon.ico">
            <link rel="shortcut icon" href="assets/icons/favicon.ico" type="image/x-icon">
            <link rel="apple-touch-icon" href="assets/icons/apple-touch-icon.png">
            <link rel="apple-touch-icon" sizes="57x57" href="assets/icons/apple-touch-icon-57x57.png">
            <link rel="apple-touch-icon" sizes="72x72" href="assets/icons/apple-touch-icon-72x72.png">
            <link rel="apple-touch-icon" sizes="76x76" href="assets/icons/apple-touch-icon-76x76.png">
            <link rel="apple-touch-icon" sizes="114x114" href="assets/icons/apple-touch-icon-114x114.png">
            <link rel="apple-touch-icon" sizes="120x120" href="assets/icons/apple-touch-icon-120x120.png">
            <link rel="apple-touch-icon" sizes="144x144" href="assets/icons/apple-touch-icon-144x144.png">
            <link rel="apple-touch-icon" sizes="152x152" href="assets/icons/apple-touch-icon-152x152.png">
            <link rel="apple-touch-icon" sizes="180x180" href="assets/icons/apple-touch-icon-180x180.png">

                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Love+Ya+Like+A+Sister&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Road+Rage&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                <link rel="stylesheet" href="assets/stylesheets/style.css" type="text/css">
        
                    <script src="https://kit.fontawesome.com/04887afb98.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <a href="index.html#form">
                <h2 class="enquire_text road-rage-regular">
                    Enquire
                </h2>
            </a>
            <a href="index.html">
                <h1 class="main_logo_text love-ya-like-a-sister-regular">
                    indieFUND
                </h1>
            </a>
                <h2 class="tag_line_text roboto-text">
                    Where fans fund films
                </h2>
        </header> 
        <nav id="info">
            <a href="investors.html#info">
                <h2 class="investor_text roboto-categories">
                    INVESTORS
                </h2>
            </a>
                <br>
            <a href="filmmakers.html#info">
                <h2 class="filmmakers_text roboto-categories">
                    FILMMAKERS
                </h2>
            </a>
                <br>
            <a href="distributors.html#info">
                <h2 class="distributors_text roboto-categories">
                    DISTRIBUTORS
                </h2>
            </a>
        </nav>
        <main>
            <div class="info_slide" id="form">
                <div class="container">
                    <h3>
                        Thank you!
                    </h3>
                      <p>
                        Please check your email.
                      </p>
                        <?php
                          $firstnameErr = $lastnameErr = $emailErr = $subjectErr = "";
                          $firstname = $lastname = $email = $subject = "";

                          if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if (empty($_POST["firstname"])) {
                              $firstnameErr = " * first name is required";
                            } else {
                              $firstname = test_input($_POST["firstname"]);
                          if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
                            $firstnameErr = " * only letters allowed"; 
                          }
                            }

                          if (empty($_POST["lastname"])) {
                              $lastnameErr = " * last name is required";
                            } else {
                              $lastname = test_input($_POST["lastname"]);
                          if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
                            $lastnameErr = " * only letters allowed"; 
                          }
                            }

                            if (empty($_POST["email"])) {
                              $emailErr = " * email is required";
                            } else {
                              $email = test_input($_POST["email"]);
                          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $emailErr = " * invalid email address"; 
                          }
                            }

                            if (empty($_POST["subject"])) {
                              $subjectErr = " * title is required";
                            } else {
                              $subject = test_input($_POST["subject"]);
                            }

                          }

                          function test_input($data) {
                            $data = trim($data);
                            $data = stripslashes($data);
                            $data = htmlspecialchars($data);
                            return $data;
                          }
                          $to = "rchrdmessenger@gmail.com";
                          $subject = "Information request";
                          $headers = "From:$email";
                          $msg = "$subject,$firstname,$lastname";
                          $msg = wordwrap($msg,70);
                          $txt = str_replace("\n.", "\n..", $txt);
                          mail($to,$subject,$msg,$headers);
                          ?>
                </div>
            </div>
        </main>
        <footer>
            <div>
                <a href="about.html#info">
                    About
                </a>
                    <span class="dots">
                        &sdot;
                    </span>
                        <a href="index.html" class="footer_logo_text love-ya-like-a-sister-regular">
                            indieFUND
                        </a>
                    <span class="dots">
                        &sdot;
                    </span>
                <a href="terms.html#terms_info">
                    Terms
                </a>
            </div>
                <span class="toTop">
                    &#8673;
                </span>
            <br>
        </footer>
            <script src="assets/js/to_top.js"></script>
    </body>
</html>