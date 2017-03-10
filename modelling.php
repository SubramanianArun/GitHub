<?php    
set_time_limit(0);
$option = $_POST['busModel'];
if($option == '9busmodel')
{
switch($_POST["wampac"])
{
    case "ras":
        echo "<html>";
        echo "<style>";
        echo "p.sansserif { font-family: 'Arial Black', Gadget, sans-serif; }";
        echo "</style>";
        echo "<style>";
        echo ".hide { position:absolute; top:-1px; left:-1px; width:0px; height:0px; }";
        echo "</style>";

        echo "<iframe name='hiddenFrame' class='hide'></iframe>";
        echo "<h2><center><p class='sansserif'>RAS POSITION SELECTION</p></center></h2>";
        echo "<body>";
        echo "<form action='start_model.php' method='post' target='hiddenFrame'>";
        echo "<div style='position:absolute;z-index:0;left:15%;top:7%;width:400;height:300'>";
        echo "<p class='sansserif'><input type='radio' name='ras' value='ras1' checked='checked'/>RAS for G2</p>";	   
        echo "</div>";
        echo "<div style='position:absolute;z-index:0;left:5%;top:15%;width:400;height:300'>";
        echo "<img src='\DHSdemo\Images\9RAS57.png' style='width:400;height:300' alt='[]' />";
        echo "</div>";

        echo "<div style='position:absolute;z-index:0;left:75%;top:7%;width:400;height:300'>";
        echo "<p class='sansserif'><input type='radio' name='ras' value='ras2'/>RAS for G1</p>";        
        echo "</div>";
        echo "<div style='position:absolute;z-index:0;left:67%;top:15%;width:400;height:300'>";
        echo "<img src='\DHSdemo\Images\9RAS56.png' style='width:400;height:300' alt='[]' />";
        echo "</div>";

        echo "<div style='position:absolute;z-index:0;left:45%;top:32%;width:400;height:300'>";
        echo "<p class='sansserif'><input type='radio' name='ras' value='ras3'/>RAS for G3</p>";        
        echo "</div>";
        echo "<div style='position:absolute;z-index:0;left:33%;top:40%;width:400;height:300'>";
        echo "<img src='\DHSdemo\Images\9RAS96.png' style='width:400;height:300' alt='[]' />";
        echo "</div>";

        echo "<div style='position:absolute;z-index:0;left:42%;top:88%;width:400;height:300'>";
        echo "<p><button name='submit' type='submit' value='submit'><p class='sansserif'>LOAD POWER SYSTEM MODEL</p></button>";
        echo "</div>";
        echo "</form>";	
echo "<div style='position:absolute;z-index:0;left:45%;top:100%;width:400;height:300'>";
echo "<form action='Home.php' method='post'>";
echo "<button name='submit' type='submit' value='submit'><p class='sansserif'>GO TO HOME PAGE</p></button>";
echo "</form>";
echo "</div>";
   
        echo "</body>";
        echo "</html>";

        break;

    case "agc":
        echo "<h1>Webpage under construction...</h1>";
        break;

    case "se";
        echo "<h1>Webpage under construction...</h1>";
        break;
}
}
else if($option == '14busmodel')
{
switch($_POST["wampac"])
{
    case "ras":
        echo "<h1>Webpage under construction...</h1>";
	break;

    case "agc":
        echo "<h1>Webpage under construction...</h1>";
        break;

    case "se";
        echo "<h1>Webpage under construction...</h1>";
        break;
}
}
else 
{
switch($_POST["wampac"])
{
    case "ras":
        echo "<h1>Webpage under construction...</h1>";
	break;

    case "agc":
        echo "<h1>Webpage under construction...</h1>";
        break;

    case "se";
        echo "<h1>Webpage under construction...</h1>";
        break;  
}
}
?>
