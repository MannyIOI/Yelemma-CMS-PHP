<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Hero-Technology.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
</head>

<body>
    <nav class="navbar navbar-default custom-header">
    <div class="container-fluid">
        <div class="navbar-header"><a href="#" class="navbar-brand navbar-link">Ye-Lemma CMS2</a>
            <button data-toggle="collapse" data-target="#navbar-collapse" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse"></div>
    </div>
</nav>
    <div class="login-card">
        <p class="profile-name-card"> </p>
        <form class="form-signin" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post"><span class="reauth-email"> </span>
            <input class="form-control" type="text" required placeholder="User ID" autofocus id="inputEmail" name = "username"/>
            <input class="form-control" type="password" required="" placeholder="Password" id="inputPassword" name="password">
            <div class="row">
              <div class="col-lg-12">
                <span style="color:red;"><?php echo $this->error_data ?></span>

              </div>

            </div>
            <div>
                
            </div>
            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" name="submit">Sign in</button>
        </form>
    </div>
    <footer>
        <div class="row">
            <div class="col-md-4 col-sm-6 footer-navigation">
                <h3><a href="#">Ye-Lemma</a></h3>
                <p class="links"> </p>
            </div>
            <div class="col-md-4 col-sm-6 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">6 killo, Infront of Yared Music School</span> Addis Ababa, Ethiopia</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left">+251-912312312 </p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">support@yelemma.com</a></p>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 footer-about">
                <div class="social-links social-icons"><a href="www.facebook.com"><i class="fa fa-facebook"></i></a><a href="www.twitter.com"><i class="fa fa-twitter"></i></a>
                    <a href="www.linkedin.com"><i class="fa fa-linkedin"></i></a><a href="www.github.com"><i class="fa fa-github"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>