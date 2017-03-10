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

<h2><center><p class="sansserif">RECONNAISSANCE & ENUMERATION</p></center></h2>

<div style='position:absolute;z-index:0;left:10px;top:20%;width:220;height:120'>
<form action="\DHSdemo\HScanning.php" method="post" target="hiddenFrame">
<input type="image" src="\DHSdemo\Images\hscan.jpg" alt="Submit" width="220" height="120">
</form>
<center><p class="sansserif">HOST DISCOVERY</p></center>
</div>

<div style='position:absolute;z-index:0;left:10px;top:60%;width:220;height:120'>
<form action="\DHSdemo\Sniffing.php" method="post" target="hiddenFrame">
  <input type="image" src="\DHSdemo\Images\sniff.png" alt="Submit" width="220" height="120">
<center><p class="sansserif">SNIFFING</p></center>
</form>
</div>

<div style='position:absolute;z-index:0;left:1122px;top:20%;width:220;height:120'>
<form action="\DHSdemo\PScanning.php" method="post" target="hiddenFrame">
  <input type="image" src="\DHSdemo\Images\pscan.jpg" alt="Submit" width="220" height="120">
</form>
<center><p class="sansserif">PORT SCANNING</p></center>
</div>

<div style='position:absolute;z-index:0;left:1122px;top:60%;width:220;height:120'>
<form action="\DHSdemo\VScanning.php" method="post" method="post" target="hiddenFrame">
  <input type="image" src="\DHSdemo\Images\vscan.jpg" alt="Submit" width="220" height="120">
<center><p class="sansserif">VULNERABILITY SCAN</p></center>
</form>
</div>

<div style='position:absolute;z-index:0;left:280px;top:12%;width:800;height:500'>
<iframe src="https://10.1.200.136:8081" width="800" height="500" scrolling="no"></iframe>
</div>

<div style='position:absolute;z-index:0;left:43%;top:90%;width:400;height:300'>
<form action='Attack_Step2.php' method='post'>
<button name='submit' type='submit' value='submit'><p class="sansserif">PROCEED TO NEXT STEP</p></button>
</form>
</div>

</body>
</html>