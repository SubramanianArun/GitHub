<!DOCTYPE html>
<html lang="en">
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
</html>                                		