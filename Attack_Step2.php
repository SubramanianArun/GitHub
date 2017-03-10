<!DOCTYPE html>
<html>
<style>
p.sansserif {
    font-family: "Arial Black", Gadget, sans-serif;
}
</style>

<style>
  .hide { position:absolute; top:-1px; left:-1px; width:0px; height:0px; }
</style>

<iframe name="hiddenFrame" class="hide"></iframe>

<body>

<h2><center><p class="sansserif">VULNERABILITY EXPLOITATION</p></center></h2>

<div style='position:absolute;z-index:0;left:10px;top:30%;width:220;height:120'>
<form action="\DHSdemo\Hbleed.php" method="post" target="hiddenFrame">
<input type="image" src="\DHSdemo\Images\heartbleed.png" alt="Submit" width="220" height="120">
</form>
<center><p class="sansserif">HEARTBLEED</p></center>
</div>

<div style='position:absolute;z-index:0;left:10px;top:70%;width:220;height:120'>
<form action="\DHSdemo\ssh_access.php" method="post" target="hiddenFrame">
  <input type="image" src="\DHSdemo\Images\shell.jpg" alt="Submit" width="220" height="120">
<center><p class="sansserif">SHELL ACCESS</p></center>
</form>
</div>

<div style='position:absolute;z-index:0;left:1122px;top:27%;width:220;height:120'>
<form action="http://10.1.200.77:8080" method="post" target="_blank">
<input type="image" src="\DHSdemo\Images\dos.jpg" alt="Submit" width="220" height="120">
</form>
<center><p class="sansserif">DENIAL OF SERVICE</p></center>
</div>

<div style='position:absolute;z-index:0;left:1122px;top:70%;width:220;height:120'>
<form action="\DHSdemo\mitm.php" method="post" method="post" target="hiddenFrame">
  <input type="image" src="\DHSdemo\Images\cmdinj.jpg" alt="Submit" width="220" height="120">
<center><p class="sansserif">COMMAND INJECTION</p></center>
</form>
</div>

<div style='position:absolute;z-index:0;left:15%;top:13%;width:400;height:300'>
<form action='https://10.1.200.140:8081' method='post' target='_blank'>
<button name="submit" type="submit" value="submit"><p class="sansserif">CLICK HERE TO VIEW POWER SYSTEM IMPACTS</p></button>
</form>
</div>

<div style='position:absolute;z-index:0;left:59%;top:13%;width:400;height:300'>
<form action='KML.php' method='post'>
<button name="submit" type="submit" value="submit"><p class="sansserif">CLICK HERE TO VIEW IMPACT VISUALIZATION</p></button>
</form>
</div>

<div style='position:absolute;z-index:0;left:280px;top:25%;width:800;height:500'>
<iframe src="https://10.1.200.136:8081" width="800" height="500"></iframe>
</div>

<div style='position:absolute;z-index:0;left:35%;top:105%;width:400;height:300'>
<h2><center><p class="sansserif">COLLECT CYBER SYSTEM RESULTS</p></center></h2>
</div>

<div style='position:absolute;z-index:0;left:20%;top:120%;width:400;height:300'>
<form action='packetcapture.php' method='post'>
<button name="submit" type="submit" value="submit"><p class="sansserif">CLICK HERE TO DOWNLOAD PACKET CAPTURES</p></button>
</form>
</div>

<div style='position:absolute;z-index:0;left:57%;top:120%;width:400;height:300'>
<form action='idslogs.php' method='post'>
<button name="submit" type="submit" value="submit"><p class="sansserif">CLICK HERE TO DOWNLOAD IDS LOGS</p></button>
</form>
</div>

<div style='position:absolute;z-index:0;left:46%;top:135%;width:400;height:300'>
<form action='Home.php' method='post'>
<button name='submit' type='submit' value='submit'><p class="sansserif">GO TO HOME PAGE</p></button>
</form>
</div>

</body>
</html>