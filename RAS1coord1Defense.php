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
<h1><center><p class="sansserif">DEFENSE IN DEPTH APPROACH</p></center></h1>

<h4><center><p class="sansserif">RESET SYSTEM BEFORE DEFENSE</p></center></h4>

<div style='position:absolute;z-index:0;left:40%;top:25%;width:400;height:300'>
<form action="\DHSdemo\reset_before_defense.php" method="port" target="hiddenframe">
<button name="submit" type="submit" value="submit" target="hiddenframe"><p class="sansserif">CLOSE CIRCUIT</p></button>
</form>
</div>

<div style='position:absolute;z-index:0;left:53%;top:25%;width:400;height:300'>
<form action="\DHSdemo\stopdos.php" method="post" target="hiddenframe">
<button name="submit" type="submit" value="submit" target="hiddenframe"><p class="sansserif">STOP DOS</p></button>
</form>
</div>

<div style='position:absolute;z-index:0;left:50px;top:40%;width:250;height:200'>
<form action="\DHSdemo\firewall.php" method="post" target="hiddenFrame">
<input type="image" src="\DHSdemo\Images\firewall.jpg" alt="Submit" width="250" height="200">
</form>
<center><p class="sansserif">FIREWALL</p></center>
</div>

<div style='position:absolute;z-index:0;left:362px;top:40%;width:250;height:200'>
<center><p class="sansserif">CLOSE UNUSED PORTS</p></center>
<form action="\DHSdemo\closessh.php" method="post" target="hiddenFrame">
  <input type="image" src="\DHSdemo\Images\sshportclose.jpg" alt="Submit" width="250" height="200">
</form>
</div>

<div style='position:absolute;z-index:0;left:692px;top:40%;width:250;height:200'>
<form action="pupdate.php" method="post" target="hiddenFrame">
  <input type="image" src="\DHSdemo\Images\upgrade.jpg" alt="Submit" width="250" height="200">
</form>
<center><p class="sansserif">PATCH UPDATE</p></center>
</div>

<div style='position:absolute;z-index:0;left:1022px;top:40%;width:250;height:200'>
<form action="mtd.php" method="post" target="hiddenFrame">
<center><p class="sansserif">MOVING TARGET DEFENSE</p></center>
  <input type="image" src="\DHSdemo\Images\mtd.png" alt="Submit" width="250" height="200">
</form>
</div>

<div style='position:absolute;z-index:0;left:44%;top:83%;width:400;height:300'>
<form action='Attack_step1.php' method='post'>
<button name='submit' type='submit' value='submit'><p class="sansserif">RETRIGGER ATTACK</p></button>
</form>
</div>


</body>
</html>