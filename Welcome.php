<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PowerCyber Labs - Iowa State University</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<!--<body>

<div style='position:absolute;z-index:0;left:25%;top:3%;width:50%;height:50%'>
  <img src='/Experiments/Images/logo-alt.png' style='width:100%;height:50%' alt='[]' />
<br/>
</div>

<div style='position:absolute;z-index:0;left:25%;top:35%;width:50%;height:50%'>
  <img src='/Experiments/Images/label.jpg' style='width:100%;height:25%' alt='[]' />
</div>

<div style='position:absolute;z-index:0;left:0%;top:0%;width:299;height:168'>
  <img src='/Experiments/Images/electricgrid.jpg' style='width:299;height:168' alt='[]' />
</div>

<div style='position:absolute;z-index:0;left:80%;top:0%;width:299;height:168'>
  <img src='/Experiments/Images/cybersec.jpg' style='width:299;height:168' alt='[]' />
</div>

<div style='position:absolute;z-index:0;left:45%;top:52%;width:100%;height:100%'>
        <form name="login">
            <p class="sansserif">USERNAME</p>  <input type="text" name="userid"/></br></br>
            <p class="sansserif"><span style="padding-left:5px">PASSWORD</span></p>  <input type="password" name="pswrd"/></br></br></br>
            <span style="padding-left:60px"><input type="button" onclick="check(this.form)" value="Login"/></span></br></br>
            <span style="padding-left:55px"><input type="reset" value="Cancel"/></span>
        </form>
        <script language="javascript">
            function check(form) { /*function to check userid & password*/
                /*the following code checkes whether the entered userid and password are matching*/
                if(form.userid.value == "powercyber" && form.pswrd.value == "powercyber") {
                    window.open('/Experiments/storyboard.php')/*opens the target page while Id & password matches*/
                }
                else {
                    alert("Error Password or Username")/*displays error message*/
                }
            }
        </script>
    </body>!-->

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Power Cyber Labs</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="/powercyber/welcome.php#tutorials">Experiments & Training</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/powercyber/team.php#publications">Publications</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/powercyber/powersystems.php">Downloads</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/powercyber/welcome.php#contact">Contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/powercyber/team.php#intro">The Team</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Power Infrastructure Cybersecurity Laboratory</h1>
                <hr>
                <p>Department of Electrical and Computer Engineering, Iowa State University</p>
                <a href="#tutorials" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>
    <section id="tutorials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Experiments and Training</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                 <div class="col-lg-3 col-md-3 text-center">
                    <div class="service-box">
                        <a href="/powercyber/storyboard.php"><i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i></a>
                        <h3>Storyboards</h3>
                        <p class="text-muted">Browse through our standard template storyboards to get an idea about the Cyber-physical systems.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 text-center">
                    <div class="service-box">
                        <!--<a href="/powercyber/download/AGC39busopalrt.py" download><i class="fa fa-4x fa-download text-primary sr-icons"></i></a>-->
                        <a href="/powercyber/powersystems.php"><i class="fa fa-4x fa-download text-primary sr-icons"></i></a>
                        <h3>Power Grid Models</h3>
                        <p class="text-muted">Download some of our very own powersystem models for experiments.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 text-center">
                    <div class="service-box">
                        <a href="/powercyber/cybersecuritytools.php"><i class="fa fa-4x fa-desktop text-primary sr-icons"></i></a>
                        <h3>Cyber Security Tools</h3>
                        <p class="text-muted">Feel free to explore the tools within the Cyberspace!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-edit text-primary sr-icons"></i>
                        <h3>CPS Training</h3>
                        <p class="text-muted">Get access to all manuals and training</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    GridSec Con 1
                                </div>
                                <div class="project-name">
                                    Training
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    GridSec Con 2
                                </div>
                                <div class="project-name">
                                    Training
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Principal Investigator
                                </div>
                                <div class="project-name">
                                    Manimaran Govindarasu
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>-->

    <!--<aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Free Download at Start Bootstrap!</h2>
                <a href="http://startbootstrap.com/template-overviews/creative/" class="btn btn-default btn-xl sr-button">Download Now!</a>
            </div>
        </div>
    </aside>!

    <section id="personalexperiment">
                <div class="count-particles">
                    <div id="particles-js"></div>
                </div>
    </section>-->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to collaborate with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>515-294-9175</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:gmani@iastate.edu">gmani@iastate.edu</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

    <!-- Particles Animation JavaScript -->
    <script src="js/particles.js"></script>
    <script src="js/particles.min.js"></script>


</body>
</html>
