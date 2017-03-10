
<!DOCTYPE html>
<html>
<style>
p.sansserif {
    font-family: "Arial Black", Gadget, sans-serif;
}
</style>
<body>
<h2><center><p class="sansserif">SCADA TOPOLOGY BRINGUP</p></center></h2>
<div style='position:absolute;z-index:0;left:280px;top:13%;width:780;height:450'>
<iframe id="myFrame" src="\DHSdemo\topology.php" width="780" height="450" scrolling="no"></iframe></div>

<div style='position:absolute;z-index:0;left:55px;top:20%;width:220;height:120'>
<button onclick="myFunction()"><center><p class="sansserif">CONTROL CENTERS</p></center></button>
</div>

<div style='position:absolute;z-index:0;left:55px;top:45%;width:220;height:1200'>
<button onclick="myFunction1()"><center><p class="sansserif">CONTROL GATEWAY</p></center></button>
</div>

<div style='position:absolute;z-index:0;left:42px;top:68%;width:220;height:120'>
<button onclick="myFunction2()"><center><p class="sansserif">SUBSTATION GATEWAY</p></center></button>
</div>

<div style='position:absolute;z-index:0;left:1152px;top:20%;width:220;height:120'>
<button onclick="myFunction3()"><center><p class="sansserif">SUBSTATION</p></center></button>
</div>

<div style='position:absolute;z-index:0;left:1152px;top:45%;width:220;height:120'>
<button onclick="myFunction4()"><center><p class="sansserif">VPN TUNNEL</p></center></button>
</div>

<div style='position:absolute;z-index:0;left:1156px;top:68%;width:220;height:120'>
<button onclick="myFunction5()"><center><p class="sansserif">ATTACKER</p></center></button>
</div>

<div style='position:absolute;z-index:0;left:45%;top:87%;width:400;height:300'>
<form action='Home.php' method='post'>
<button name='submit' type='submit' value='submit'><p class="sansserif">GO TO HOME PAGE</p></button>
</form>
</div>

<script>
function myFunction() {
    document.getElementById("myFrame").src = "/DHSdemo/topology1.php";
}
function myFunction1() {
    document.getElementById("myFrame").src = "/DHSdemo/topology2.php";
}
function myFunction2() {
    document.getElementById("myFrame").src = "/DHSdemo/topology3.php";
}
function myFunction3() {
    document.getElementById("myFrame").src = "/DHSdemo/topology4.php";
}
function myFunction4() {
    document.getElementById("myFrame").src = "/DHSdemo/topology5.php";
}
function myFunction5() {
    document.getElementById("myFrame").src = "/DHSdemo/topology6.php";
}
</script>

</body>
</html>