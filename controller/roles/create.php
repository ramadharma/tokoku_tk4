<?php
    $BASE_URL = realpath(dirname(__DIR__).'\..');
	include($BASE_URL.'/connect.php');
	include($BASE_URL.'/class/Role.php');
    
    if(isset($_POST['add']));
    {
        $Role = new Role($conn);
        $Role->setIdRole($_POST['IdRole']);
        $Role->setNamaRole($_POST['NamaRole']);
        $Role->setDescRole($_POST['Keterangan']);
        
        try {
            $Role->addRole();
            header ("location:/tokoku/view/roles/index.php");
        } catch (Exception $e) {
            echo "<p>Error: </p>";
            echo $e;
            header ("Refresh: 3; URL=/tokoku/view/roles/index.php");
        }
    }
?>