<?php
    switch($_POST['action'])
    {
        case 'doLabels':
		ini_set('display_errors',1);
		ini_set('display_startup_errors',1);
		error_reporting(-1);
                $result = shell_exec('cd ../..; turkic dump currentvideo --pascal -o /root/vatic/data/pascalannot 2>&1');
                exec('mysqldump -u root --all-databases > data/db.mysql');
		echo $result;
                exit();
      
    }
?>
