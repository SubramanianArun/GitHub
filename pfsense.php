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
    <link href="css/creative.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="/powercyber/welcome.php#page-top">Power Infrastructure Cybersecurity Laboratory</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="/powercyber/about.php">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/powercyber/welcome.php#tutorials">Testbed Experiments</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="/powercyber/publication.php#publications">Publications</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="/powercyber/download.php">Outreach</a>
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

  <header class ="customheader">
  </header>


    <!--<section class="bg-primary" id="storyboards">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2 class="section-heading text-center">Experiment</h2>
                    <hr class="light">
                        <div class="panel-group">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse1">IEEE 9-bus RAS</a>
                                </h4>
                              </div>
                              <div id="collapse1" class="panel-collapse collapse">
                                    <div class="panel-body"><font color = "black">The attack involves a combination of two coordinated attack actions on a power system protection scheme known as Remedial Action Scheme (RAS). Typically, RAS are intended to take specific protective measures to prevent the spread of large disturbances under heavy system loading conditions.<br><br> However, the attacker intelligently triggers the operation of this RAS by creating a data integrity attack on unencrypted communication between the substation and the control center that uses the DNP3 protocol. In order to create a cascading outage, the attacker also blocks the communication between the protection relays that are involved in the RAS through a targeted Denial of Service (DoS) attack on one of the protection controllers.<br><br>This prevents the successful operation of the RAS and in turn initiates secondary protection to be tripped to avoid thermal overload on the impacted transmission line. As a result of this coordinated attack involving data integrity attack to trip a breaker and a DoS attack on RAS communications, the overall system frequency is also affected as it causes the islanding of a generator from the rest of the system.</font></div>
                              </div>
                            </div>
                        </div>
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse2">Model-based AGC</a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body"><font color = "black">The attack involves a stealthy manipulation of measurements/controls used in Automatic Generation Control (AGC) algorithm to destabilize and affect the frequency of the power grid. This attack is a version of the classic Man-in-the-Middle attack, where the attacker intercepts the communication between the control center and the remote substations and chooses to stealthily modify either the frequency and tie-line measurements going to the control center, or the AGC control commands going to the generating stations. <br><br> This is achieved by executing an ARP poisoning attack first, which tricks the remote substation to forward the data to the attacker before sending it to the external gateway. The attacker then selects the appropriate information that is to be replaced and modifies it appropriately using custom attack scripts and forwards it to the external gateway.<br><br>  As a result of this manipulation, there is a steady frequency deviation in the system. Eventually, this frequency deviation causes the load in the system to be shed in an attempt to restore frequency. A sustained attack could potentially lead to a major portion of the load in the power system to be unserved.</font></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse3">Replay Attack</a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body"><font color = "black">The attack involves a careful manipulation of the measurements (analog and status) that come from the substation remote terminal units (RTU) to the control center for State Estimation. The attacker performs a stealthy attack where he exploits his knowledge about the measurement configurations at multiple substations to carefully select the locations where he would manipulate the measurements. <br><br> The attack vector involves the classic Man-in-the-Middle attack, where the attacker tricks the RTU to forward all its data to the attacker machine instead of the substation gateway using an ARP poisoning attack. By decoding the unencrypted network traffic, the attacker selects and modifies appropriately certain targeted measurements to avoid detection by the State Estimator Bad Data Detectors.<br><br>  This does not cause any bad data alarms in the control center and consequently, the attacker succeeds in impeding the situational awareness capabilities of the operator. Consequently, all applications that rely on State Estimator would be affected such as Contingency Analysis, Power Markets, etc., Also, this attack could be used to further trigger other attacks that could cause additional damage such as opening/overloading critical transmission lines.</font></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse4">DoS Attack</a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body"><font color = "black">The attacker gains physical access to the process WAN, on which he is able to gain a network address. As the data flows between RTUs and SCADA are not encrypted the attacker is able to read any transmitted data in clear text. The attacker uses this opportunity to perform an ARP spoof attack and position himself between an RTU and the PCU (i.e., a man-in-the-middle attack). <br><br> As such, the attacker is able to both send malicious requests to the RTU and hide to the operator the real events. The attacker uses this for an unauthorized opening of a distribution feeder breaker feeding a major manufacturing industry connected directly on the 40 KV level. The attacker intention is to create a power outage that will severely disturb or stop the production in a continuously operated plant in order to create economical and/or physical damage.</font></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse5">State Estimation</a>
                                </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse">
                                <div class="panel-body"><font color = "black">The attacker has physical access to the RTU communication network and is as such able to connect his own equipment to the network using a switch in an unmanned substation. From this point the attacker floods a number of logical connections with a continuous stream of packets, which creates an overload in the Front-End applications and blinds the operators to what is happening in the grid.<br><br>  The attacker has chosen a time for the attack when a severe snow and ice storm is expected and the control operators are unable to counteract the loss of physical devices created by the storm. This leads to an overload of power lines feeding the capital city and this also goes unnoticed in the control centre. The blind SCADA severely delays the power restoration efforts to reenergize the capital city.</font></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse6">Ukraine Attack</a>
                                </h4>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse">
                                <div class="panel-body"><font color = "black">The attacker has physical access to the RTU communication network and is as such able to connect his own equipment to the network using a switch in an unmanned substation. From this point the attacker floods a number of logical connections with a continuous stream of packets, which creates an overload in the Front-End applications and blinds the operators to what is happening in the grid.<br><br>  The attacker has chosen a time for the attack when a severe snow and ice storm is expected and the control operators are unable to counteract the loss of physical devices created by the storm. This leads to an overload of power lines feeding the capital city and this also goes unnoticed in the control centre. The blind SCADA severely delays the power restoration efforts to reenergize the capital city.An uninformed operator in the control room connects his workstation to Internet during a night shift. He does this and finds out he got a mail from the IT team to configure his VPN correctly. The attacker uses this to send a link to configure VPN properly.Without becoming suspicious, the operator clicks on the link and gives the attacker access to his control room workstation.<br><br>The attacker is now able to remotely connect to this system and he can open a shell with root privileges on the compromised system. From his own location the attacker is now able to open SCADA displays containing real-time information from the grid and to execute commands. He uses this to open HV breakers in the power grid, which leads to cascading events that causes a total blackout of the high voltage grid.<br><br><a href="/powercyber/ukraine.php" class="btn btn-primary">Launch</a></font></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse7">Settings Manipulation</a>
                                </h4>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse">
                                <div class="panel-body"><font color = "black">The attacker is an employee of the attacked utility and he has access to substations and to substation engineering tools. He uses the engineering tools for the substation protection devices to set line protection parameters to default values. The default values in the protection devices are defined at such low limits that the protection devices will trip all power lines also at a normal operating state. The attack is done in a central HV/MV substation on the MV side and it will cause a total blackout in the capital city.</font></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <section id="attacker">
        <div class="container">
            <h2>Attacker</h2>
                <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="/vnc/attacker/"></iframe>
            </div>
        </div>
    </section>

    <section id="controlcenter">
        <div class="container">
            <h2>Control Center</h2>
                <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="/vnc/cc-cyb/"></iframe>
            </div>
        </div>
    </section>

    <section id="substationrtu">
        <div class="container">
            <h2>RTU - Substation</h2>
                <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="/vnc/sub-rtu/"></iframe>
            </div>
        </div>
    </section>

    <section id="substationws">
        <div class="container">
            <h2>RTU - Workstation</h2>
                <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="/vnc/sub-ws/"></iframe>
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

</body>
</html>
