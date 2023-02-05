<?php
    $BASE_URL = realpath(dirname(__DIR__).'\..');
	include($BASE_URL.'/connect.php');
	include($BASE_URL.'/class/Role.php');

    if(isset($_GET['id']));
    {
        $id = $_GET['id'];
        $role = new Role($conn);
        try {
            $role->deleteRole($id);
            header ("location:/tokoku/view/roles/index.php");
        } catch (Exception $e) {
            echo "<p>Gagal menghapus dengan error: </p>";
            echo $e;
            header ("Refresh: 3; URL=/tokoku/view/roles/index.php");
        }
    }
?>