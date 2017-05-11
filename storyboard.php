<!DOCTYPE html>
<!--<html lang="en">
<style>
p.sansserif {
    font-family: "Arial Black", Gadget, sans-serif;
}

</style>
<head>
<meta charset="utf-8">
<title>Power Cyber-Security Storyboard</title>
<div style='position:absolute;z-index:0;left:25%;top:3%;width:50%;height:40%'>
  <img src='/DHSdemo/Images/label.jpg' style='width:100%;height:25%' alt='[]' />
</div>

<div style='position:absolute;z-index:0;left:1140px;top:2%;width:110;height:100'>
<input type="image" src="/DHSdemo/Images/dhs-logo.jpg" alt="Submit" width="110" height="100">
</div>

<div style='position:absolute;z-index:0;left:1250px;top:2%;width:110;height:100'>
<input type="image" src="/DHSdemo/Images/NSF_Logo.png" alt="Submit" width="110" height="100">
</div>

<div style='position:absolute;z-index:0;left:0px;top:5%;width:110;height:100'>
<input type="image" src="/DHSdemo/Images/logo-alt.png" alt="Submit" width="210" height="50">
</div>

<h3><center><br><br><br><p class="sansserif">REMOTE ACCESS STORY-BOARD SCENARIOS</p></center></h3>
<style type="text/css">
    .box{
        padding: 20px;
        display: none;
        margin-top: 20px;
        border: 1px solid #000;
    }
    .thistle{ background: #d8bfd8; }
    .palegreen{ background: #98fb98; }
    .pink{ background: #ffc0cb; }
    .navajowhite{ background: #ffdead; }
    .lightblue{ background: #add8e6; }
    .khaki{ background: #f0e68c; }
    .silver{ background: #c0c0c0; }

</style>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var location = "global";
    $('input[type="radio"]').click(function(){
        if($(this).attr("value")=="thistle"){
            $(".box").not(".thistle").hide();
            location = '/Experiments/Home.php'
            $(".thistle").show();
        }
        if($(this).attr("value")=="palegreen"){
            $(".box").not(".palegreen").hide();
            $(".palegreen").show();
        }
        if($(this).attr("value")=="pink"){
            $(".box").not(".pink").hide();
            $(".pink").show();
        }
        if($(this).attr("value")=="navajowhite"){
            $(".box").not(".navajowhite").hide();
            location = '/Experiments/Powersystem_simulation.php'
            $(".navajowhite").show();
        }
        if($(this).attr("value")=="lightblue"){
            $(".box").not(".lightblue").hide();
            $(".lightblue").show();
        }
        if($(this).attr("value")=="khaki"){
            $(".box").not(".khaki").hide();
            location = '/Experiments/SB6/Home.php'
            $(".khaki").show();
        }
        if($(this).attr("value")=="silver"){
            $(".box").not(".silver").hide();
            $(".silver").show();
        }

    });
});
function redirect(form){
    window.location = location;
    form.action = location;
    document.myForm.submit();
};
</script>
</head>
<body>
    <div>
        <br><br>
        <label><input type="radio" name="colorRadio" value="thistle"><b>Story Board 1:</b>Cascading outage through a coordinated attack on power system protection scheme</label>
<br><br><br>
        <label><input type="radio" name="colorRadio" value="navajowhite"><b>Story Board 2:</b> Manipulating AGC measurements/controls to affect system frequency</label>
<br><br><br>
        <label><input type="radio" name="colorRadio" value="palegreen"><b>Story Board 3:</b> Manipulating SCADA measurements to affect situational awareness in State Estimator</b></label>
<br><br><br>
        <label><input type="radio" name="colorRadio" value="pink"><b>Story Board 4:</b> Using unencrypted RTU communication to send arbitrary commands to trip breakers</label>
<br><br><br>
       <label><input type="radio" name="colorRadio" value="lightblue"><b>Story Board 5:</b> Denial of Service attack on RTU/protection devices communication to blind SCADA</label>
<br><br><br>
       <label><input type="radio" name="colorRadio" value="khaki"><b>Story Board 6:</b> Exploiting Social Engineering to gain access to Energy Management Systems</label>
<br><br><br>
       <label><input type="radio" name="colorRadio" value="silver"><b>Story Board 7:</b> Manipulating protection settings using Substation Automation tools</label>
<br><br>

    </div>

    <div style='position:absolute;z-index:0;left:57%;top:28%;width:40%;height:50%'>
    <div class="thistle box">In this scenario, the attack involves a combination of two coordinated attack actions on a power system protection scheme known as Remedial Action Scheme (RAS). Typically, RAS are intended to take specific protective measures to prevent the spread of large disturbances under heavy system loading conditions. However, the attacker intelligently triggers the operation of this RAS by creating a data integrity attack on unencrypted communication between the substation and the control center that uses the DNP3 protocol. In order to create a cascading outage, the attacker also blocks the communication between the protection relays that are involved in the RAS through a targeted Denial of Service (DoS) attack on one of the protection controllers. This prevents the successful operation of the RAS and in turn initiates secondary protection to be tripped to avoid thermal overload on the impacted transmission line. As a result of this coordinated attack involving data integrity attack to trip a breaker and a DoS attack on RAS communications, the overall system frequency is also affected as it causes the islanding of a generator from the rest of the system.</div>
</div>

    <div style='position:absolute;z-index:0;left:57%;top:27%;width:40%;height:50%'>
    <div class="navajowhite box">In this scenario, the attack involves a stealthy manipulation of measurements/controls used in Automatic Generation Control (AGC) algorithm to destabilize and affect the frequency of the power grid. This attack is a version of the classic Man-in-the-Middle attack, where the attacker intercepts the communication between the control center and the remote substations and chooses to stealthily modify either the frequency and tie-line measurements going to the control center, or the AGC control commands going to the generating stations. This is achieved by executing an ARP poisoning attack first, which tricks the remote substation to forward the data to the attacker before sending it to the external gateway. The attacker then selects the appropriate information that is to be replaced and modifies it appropriately using custom attack scripts and forwards it to the external gateway. As a result of this manipulation, there is a steady frequency deviation in the system. Eventually, this frequency deviation causes the load in the system to be shed in an attempt to restore frequency. A sustained attack could potentially lead to a major portion of the load in the power system to be unserved.</div>
</div>

    <div style='position:absolute;z-index:0;left:57%;top:24%;width:40%;height:50%'>
    <div class="palegreen box">In this scenario, the attack involves a careful manipulation of the measurements (analog and status) that come from the substation remote terminal units (RTU) to the control center for State Estimation. The attacker performs a stealthy attack where he exploits his knowledge about the measurement configurations at multiple substations to carefully select the locations where he would manipulate the measurements. The attack vector involves the classic Man-in-the-Middle attack, where the attacker tricks the RTU to forward all its data to the attacker machine instead of the substation gateway using an ARP poisoning attack. By decoding the unencrypted network traffic, the attacker selects and modifies appropriately certain targeted measurements to avoid detection by the State Estimator Bad Data Detectors. This does not cause any bad data alarms in the control center and consequently, the attacker succeeds in impeding the situational awareness capabilities of the operator. Consequently, all applications that rely on State Estimator would be affected such as Contingency Analysis, Power Markets, etc., Also, this attack could be used to further trigger other attacks that could cause additional damage such as opening/overloading critical transmission lines.</div>
</div>

    <div style='position:absolute;z-index:0;left:57%;top:33%;width:40%;height:50%'>
    <div class="pink box">The attacker gains physical access to the process WAN, on which he is able to gain a network address. As the data flows between RTUs and SCADA are not encrypted the attacker is able to read any transmitted data in clear text. The attacker uses this opportunity to perform an ARP spoof attack and position himself between an RTU and the PCU (i.e., a man-in-the-middle attack). As such, the attacker is able to both send malicious requests to the RTU and hide to the operator the real events. The attacker uses this for an unauthorized opening of a distribution feeder breaker feeding a major manufacturing industry connected directly on the 40 KV level. The attacker intention is to create a power outage that will severely disturb or stop the production in a continuously operated plant in order to create economical and/or physical damage.</div>
</div>

    <div style='position:absolute;z-index:0;left:57%;top:33%;width:40%;height:50%'>
    <div class="lightblue box">The attacker has physical access to the RTU communication network and is as such able to connect his own equipment to the network using a switch in an unmanned substation. From this point the attacker floods a number of logical connections with a continuous stream of packets, which creates an overload in the Front-End applications and blinds the operators to what is happening in the grid. The attacker has chosen a time for the attack when a severe snow and ice storm is expected and the control operators are unable to counteract the loss of physical devices created by the storm. This leads to an overload of power lines feeding the capital city and this also goes unnoticed in the control centre. The blind SCADA severely delays the power restoration efforts to reenergize the capital city.</div>
</div>

    <div style='position:absolute;z-index:0;left:57%;top:30%;width:40%;height:50%'>
    <div class="khaki box">An uninformed operator in the control room connects his workstation to Internet during a night shift. He does this to be able to use Facebook to chat with his friends and to surf on Internet. This operator has the tendency to accept any friend request on Facebook and add as his friend. The attacker uses this to request the operator to add him as a friend. In a chat, his Facebook friend sends him a link that was created by an attacker. Without becoming suspicious, the operator clicks on the link and gives the attacker access to his control room workstation. The attacker is now able to remotely connect to this system and he can open a shell with root privileges on the compromised system. From his own location the attacker is now able to open SCADA displays containing real-time information from the grid and to execute commands. He uses this to open HV breakers in the power grid, which leads to cascading events that causes a total blackout of the high voltage grid.</div>
</div>

    <div style='position:absolute;z-index:0;left:57%;top:38%;width:40%;height:50%'>
    <div class="silver box">The attacker is an employee of the attacked utility and he has access to substations and to substation engineering tools. He uses the engineering tools for the substation protection devices to set line protection parameters to default values. The default values in the protection devices are defined at such low limits that the protection devices will trip all power lines also at a normal operating state. The attack is done in a central HV/MV substation on the MV side and it will cause a total blackout in the capital city.</div>
</div>

    <form id = "myForm" method='post' onsubmit = "redirect()">
    <div style='position:absolute;z-index:0;left:44%;top:88%;width:400;height:300'><button name='submit' type='submit' value='submit'><p class="sansserif">PROCEED TO NEXT STEP</button></p>
    </div>
    </form>


</body>
</html>-->
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PowerCyber Labs - Iowa State University</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

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
    <header class="customheader">
    </header>
    <section id="storyboards">
        <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-6">
                  <h2 class="section-heading text-center">Cyber Storyboards</h2>
                  <hr class="light">
                  <div class="panel-group">
                      <div class="panel panel-red">
                          <div class="panel-heading" align="left">
                              <h4 class="panel-title">
                                  <a data-toggle="collapse" href="#portscan">C1: Network Discovery with Port Scanning</a>
                              </h4>
                          </div>
                          <div id="portscan" class="panel-collapse collapse">
                              <div class="panel-body"><font color = "black">This is a simple exercise that involves scanning of vulnerable nodes in a network.In this experiment, we can learn how an attacker uses port scanning to gather information that can be used later for an attack.We will also be able to discover what hosts are alive on a network and what services are running on them.<br><br>Port Scanning is the process of making connection attempts to another networked computing device in order to gain information about what services are running on the machine.<br><br>The most common tool to perform this operation is called Nmap. Nmap, and its graphical counterpart Zenmap, allow an individual to scan vast networks and to discover what machines are on the network and what services are being offered.<br><br><a href="/powercyber/portscan.php" class="btn btn-primary">Launch</a>&nbsp;&nbsp;<a href="/powercyber/download/usermanual/portscan.pdf" class="btn btn-primary" target="_blank"> Manual </a></font></div>
                          </div>
                      </div>
                  </div>
                  <div class="panel-group">
                      <div class="panel panel-red">
                          <div class="panel-heading" align="left">
                              <h4 class="panel-title">
                                  <a data-toggle="collapse" href="#vulnerability">C2: Vulnerability Assessment with OpenVAS</a>
                              </h4>
                          </div>
                          <div id="vulnerability" class="panel-collapse collapse">
                              <div class="panel-body"><font color = "black">This experiment is designed to understand the importance of discovering system vulnerabilities using detailed scans.We can analyze the severity of their impacts and potential solutions to patch critical vulnerabilities.<br><br>Vulnerabilities can be discovered with a vulnerability scanner, which analyzes a computer system in search of known vulnerabilities, such as open ports, insecure software configuration, and susceptibility to malware.<br><br><a href="/powercyber/openvas.php" class="btn btn-primary">Launch</a>&nbsp;&nbsp;<a href="/powercyber/download/usermanual/openvas.pdf" class="btn btn-primary" target="_blank"> Manual </a></font></div>
                          </div>
                      </div>
                  </div>
                  <div class="panel-group">
                      <div class="panel panel-red">
                          <div class="panel-heading" align="left">
                              <h4 class="panel-title">
                                  <a data-toggle="collapse" href="#wireshark">C3: Wireshark, Scripting and Replay Attack</a>
                              </h4>
                          </div>
                          <div id="wireshark" class="panel-collapse collapse">
                              <div class="panel-body"><font color = "black">This experiment lets us gain a basic understanding of how packet sniffing tools could be used to understand traffic patterns and data formats.It also lets us understand the basics of how captured traffic could be used to replay command packets to create unintended effects on protective relays.<br><br>In this experiment, we will use a packet capturing tool called Wireshark, capture some packets between the Control Center and the substation and replay some of the packets to create a disturbance in the system.<br><br><a href="/powercyber/replay.php" class="btn btn-primary">Launch</a>&nbsp;&nbsp;<a href="/powercyber/download/usermanual/wireshark.pdf" class="btn btn-primary" target="_blank"> Manual </a></font></div>
                          </div>
                      </div>
                  </div>
                  <div class="panel-group">
                      <div class="panel panel-red">
                          <div class="panel-heading" align="left">
                              <h4 class="panel-title">
                                  <a data-toggle="collapse" href="#pfsense">C4: Pfsense Firewall Configuration</a>
                              </h4>
                          </div>
                          <div id="pfsense" class="panel-collapse collapse">
                              <div class="panel-body"><font color = "black">This experiment is an extension to the previous experiment. In this experiment, we will learn to configure firewall rules to meet certain security requirements.In addition, we will also learn how to restrict access to various devices connected based on the requirements.<br><br> This experiment also involves wireshark packet capture, scripting, replay attack. Then, we configure the firewall so that these kind of attacks don't happen in the system.<br><br><a href="/powercyber/pfsense.php" class="btn btn-primary">Launch</a>&nbsp;&nbsp;<a href="/powercyber/download/usermanual/pfsense.pdf" class="btn btn-primary" target="_blank"> Manual </a></font></div>
                          </div>
                      </div>
                  </div>
                  <div class="panel-group">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h4 class="panel-title">
                                  <a data-toggle="collapse" href="#collapse4"><i>C5: DoS Attack (upcoming)</i></a>
                              </h4>
                          </div>
                          <div id="collapse4" class="panel-collapse collapse">
                              <div class="panel-body"><font color = "black">The attacker gains physical access to the process WAN, on which he is able to gain a network address. As the data flows between RTUs and SCADA are not encrypted the attacker is able to read any transmitted data in clear text. The attacker uses this opportunity to perform an ARP spoof attack and position himself between an RTU and the PCU (i.e., a man-in-the-middle attack). <br><br> As such, the attacker is able to both send malicious requests to the RTU and hide to the operator the real events. The attacker uses this for an unauthorized opening of a distribution feeder breaker feeding a major manufacturing industry connected directly on the 40 KV level. The attacker intention is to create a power outage that will severely disturb or stop the production in a continuously operated plant in order to create economical and/or physical damage.</font></div>
                          </div>
                      </div>
                  </div>
                </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h2 class="section-heading text-center">ICS Storyboards</h2>
                    <hr class="light">
                        <div class="panel-group">
                            <div class="panel panel-green">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse1">ICS1: Attack and defense on a Remedial Action Scheme (automated)</a>
                                </h4>
                              </div>
                              <div id="collapse1" class="panel-collapse collapse">
                                    <div class="panel-body"><font color = "black">This experiment is based on attack modelling and defense method for the power system protection scheme, also known as Remedial Action Scheme (RAS). Typically, RAS is implemented to take specific corrective actions to prevent the widespread outages during disturbances in power system. The attacker initiates the coordinated attacks by performing the malicious line tripping through data integrity attack on unencrypted communication between the substation and the control center. Eventually, the attacker also blocks the communication in RAS through a targeted Denial of Service (DoS) attack on one of the protection controllers.<br><br>This prevents the successful operation of the RAS and in turn causes thermal overloading on other transmission lines. As a result of this coordinated attacks, the overall system stability is affected as it causes the islanding of a generator from the rest of the system.<br><br><a href="/DHSDemo/Home.php" class="btn btn-primary">Launch</a>&nbsp;&nbsp;<a href="/powercyber/download/usermanual/PowerCyber_RemoteAccess_UserGuide.pdf" class="btn btn-primary" target="_blank">Manual</a></font></div>
                              </div>
                            </div>
                        </div>
                        <div class="panel-group">
                            <div class="panel panel-green">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse1_1">ICS2: Attack and defense on a Remedial Action Scheme (interactive)</a>
                                </h4>
                              </div>
                              <div id="collapse1_1" class="panel-collapse collapse">
                                    <div class="panel-body"><font color = "black">This experiment is based on attack modelling and defense method for the power system protection scheme, also known as Remedial Action Scheme (RAS). Typically, RAS is implemented to take specific corrective actions to prevent the widespread outages during disturbances in power system. The attacker initiates the coordinated attacks by performing the malicious line tripping through data integrity attack on unencrypted communication between the substation and the control center. Eventually, the attacker also blocks the communication in RAS through a targeted Denial of Service (DoS) attack on one of the protection controllers.<br><br>This prevents the successful operation of the RAS and in turn causes thermal overloading on other transmission lines. As a result of this coordinated attacks, the overall system stability is affected as it causes the islanding of a generator from the rest of the system.<br><br><a href="/powercyber/ras.php" class="btn btn-primary">Launch</a>&nbsp;&nbsp;<a href="/powercyber/download/usermanual/PowerCyber_RemoteAccess_UserGuide.pdf" class="btn btn-primary" target="_blank">Manual</a></font></div>
                              </div>
                            </div>
                        </div>
                    <div class="panel-group">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse2">ICS3: Attack and Defense on Model-based AGC (automated)</a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body"><font color = "black">The attack involves a stealthy manipulation of measurements/controls used in Automatic Generation Control (AGC) algorithm to destabilize and affect the frequency of the power grid. This attack is a version of the classic Man-in-the-Middle attack, where the attacker intercepts the communication between the control center and the remote substations and chooses to stealthily modify either the frequency and tie-line measurements going to the control center, or the AGC control commands going to the generating stations. <br><br> This is achieved by executing an ARP poisoning attack first, which tricks the remote substation to forward the data to the attacker before sending it to the external gateway. The attacker then selects the appropriate information that is to be replaced and modifies it appropriately using custom attack scripts and forwards it to the external gateway.<br><br>  As a result of this manipulation, there is a steady frequency deviation in the system. Eventually, this frequency deviation causes the load in the system to be shed in an attempt to restore frequency. A sustained attack could potentially lead to a major portion of the load in the power system to be unserved.<br><br><a href="/DHSDemo/S2/Home.php" class="btn btn-primary">Launch</a></font></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-group">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse2_2">ICS4: Attack and Defense on Model-based AGC (interactive)</a>
                                </h4>
                            </div>
                            <div id="collapse2_2" class="panel-collapse collapse">
                                <div class="panel-body"><font color = "black">The attack involves a stealthy manipulation of measurements/controls used in Automatic Generation Control (AGC) algorithm to destabilize and affect the frequency of the power grid. This attack is a version of the classic Man-in-the-Middle attack, where the attacker intercepts the communication between the control center and the remote substations and chooses to stealthily modify either the frequency and tie-line measurements going to the control center, or the AGC control commands going to the generating stations. <br><br> This is achieved by executing an ARP poisoning attack first, which tricks the remote substation to forward the data to the attacker before sending it to the external gateway. The attacker then selects the appropriate information that is to be replaced and modifies it appropriately using custom attack scripts and forwards it to the external gateway.<br><br>  As a result of this manipulation, there is a steady frequency deviation in the system. Eventually, this frequency deviation causes the load in the system to be shed in an attempt to restore frequency. A sustained attack could potentially lead to a major portion of the load in the power system to be unserved.<br><br><a href="/powercyber/agc.php" class="btn btn-primary">Launch</a></font></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-group">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse6">ICS5: Ukraine Style Attack and Defense Experiment</a>
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
                                    <a data-toggle="collapse" href="#collapse7"><i>ICS6: Settings Manipulation (upcoming)</i></a>
                                </h4>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse">
                                <div class="panel-body"><font color = "black">The attacker is an employee of the attacked utility and he has access to substations and to substation engineering tools. He uses the engineering tools for the substation protection devices to set line protection parameters to default values. The default values in the protection devices are defined at such low limits that the protection devices will trip all power lines also at a normal operating state. The attack is done in a central HV/MV substation on the MV side and it will cause a total blackout in the capital city.</font></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse5"><i>ICS7: State Estimation (upcoming)</i></a>
                                </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse">
                                <div class="panel-body"><font color = "black">The attacker has physical access to the RTU communication network and is as such able to connect his own equipment to the network using a switch in an unmanned substation. From this point the attacker floods a number of logical connections with a continuous stream of packets, which creates an overload in the Front-End applications and blinds the operators to what is happening in the grid.<br><br>  The attacker has chosen a time for the attack when a severe snow and ice storm is expected and the control operators are unable to counteract the loss of physical devices created by the storm. This leads to an overload of power lines feeding the capital city and this also goes unnoticed in the control centre. The blind SCADA severely delays the power restoration efforts to reenergize the capital city.</font></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="no-padding" id="storyboards">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="/powercyber/ras.php" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Storyboard 1
                                </div>
                                <div class="project-name">
                                    IEEE 9 Bus RAS
                                </div>
                            </div>
                        </div>
                    </a>
                </div>-->

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
