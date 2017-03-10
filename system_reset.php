<?php    
set_time_limit(0);
    $pyscript = 'C:\\Users\\powercyber\\PycharmProjects\\DHS_remoteaccess\\Final_system_reset.py';
        $python = 'C:\\Python27\\python.exe';
        $cmd = "$python $pyscript";
        $output = shell_exec("$cmd");
header('Refresh: 10;url=/DHSdemo/Welcome.php');
?>

<!DOCTYPE html>
<html>

<style>
p.sansserif {
    font-family: "Arial Black", Gadget, sans-serif;
}

</style>
<body>
<h1><center><p class="sansserif">THANK YOU!!!</p></center></h1>
</body>
</html>
