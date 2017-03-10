<!DOCTYPE html>
<html>
<style>
p.sansserif {
    font-family: "Arial Black", Gadget, sans-serif;
}

</style>
<body>

<h2><center><p class="sansserif">REAL-TIME GRID SIMULATION</p></center></h2>

<div style='position:absolute;z-index:0;left:0;top:10%;width:100%;height:70%'>
  <img src='\DHSdemo\Images\slidebg1.jpg' style='width:100%;height:70%' alt='[]' />
</div>

<form action="modelling.php" method="post">

<div style='position:absolute;z-index:0;left:-2%;top:60%;width:100%;height:100%'>
<center><p class="sansserif">SELECT IEEE BUS MODEL</p></center>
</div>

<div style='position:absolute;z-index:0;left:58%;top:63%;width:100%;height:100%'>
<select name="busModel">
  <option value="9busmodel"><b>9-bus Model</b></option>
  <option value="14busmodel"><b>14-bus Model</b></option>
  <option value="39busmodel"><b>39-bus Model</option>
  <option value="118busmodel"><b>118-bus Model</b></option>
</select>
</div>

<div style='position:absolute;z-index:0;left:43%;top:68%;width:100%;height:100%'>
<p class="sansserif">SELECT WAMPAC TYPE:</p>
</div>

<div style='position:absolute;z-index:0;left:15%;top:76%;width:100%;height:100%'>
<p class='sansserif'><input type="radio" name="wampac" value="ras" checked="checked"/>Remedial Action Scheme</p>
</div>

<div style='position:absolute;z-index:0;left:40%;top:76%;width:100%;height:100%'>
<p class='sansserif'><input type="radio" name="wampac" value="agc"/>Automatic Generation Control</p>
</div>

<div style='position:absolute;z-index:0;left:70%;top:76%;width:100%;height:100%'>
<p class='sansserif'><input type="radio" name="wampac" value="se"/>State Estimation</p>
</div>

<div style='position:absolute;z-index:0;left:45%;top:88%;width:100%;height:90%'>
<button name="submit" type="submit" value="submit"><p class="sansserif">SUBMIT SELECTION</p></button>
</div>

</form>

</body>
</html>