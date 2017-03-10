<?php    
set_time_limit(0);
    $pyscript = 'C:\\Users\\powercyber\\PycharmProjects\\DHS_remoteaccess\\Attack\\Exploitation\\heartbleed.py';
        $python = 'C:\\Python27\\python.exe';
        $cmd = "$python $pyscript";
        $output = shell_exec("$cmd");
echo "<h1>$output</h1>";
?>