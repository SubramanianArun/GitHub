<?php    
set_time_limit(0);
switch($_POST["ras"])
{
    case "ras1":

        $pyscript = 'C:\\Users\\powercyber\\PycharmProjects\\DHS_remoteaccess\\powersystem_simulation.py';
        $python = 'C:\\Python27\\python.exe';
        $cmd = "$python $pyscript";
        $output = shell_exec("$cmd");
        echo "<html>";
        echo "<script type='text/javascript' language='Javascript'>window.open('https://10.1.200.140:8081');</script>";
        echo "</html>";
        break;

    case "ras2":

         $pyscript = 'C:\\Users\\powercyber\\PycharmProjects\\DHS_remoteaccess\\powersystem_simulation1.py';
        $python = 'C:\\Python27\\python.exe';
        $cmd = "$python $pyscript";
        $output = shell_exec("$cmd");
        echo "<html>";
        echo "<script type='text/javascript' language='Javascript'>window.open('https://10.1.200.140:8081');</script>";
        echo "</html>";
        break;


    case "ras3":

        $pyscript = 'C:\\Users\\powercyber\\PycharmProjects\\DHS_remoteaccess\\powersystem_simulation2.py';
        $python = 'C:\\Python27\\python.exe';
        $cmd = "$python $pyscript";
        $output = shell_exec("$cmd");
        echo "<html>";
        echo "<script type='text/javascript' language='Javascript'>window.open('https://10.1.200.140:8081');</script>";
        echo "</html>";
        break;

}
?>
