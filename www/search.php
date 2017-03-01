<?php

require_once("../conf/db_conf.php");

    if (isset($_POST['search']))
    {
        $valueToSearch = $_POST['valueToSearch'];
        $query = "SELECT * FROM accounts WHERE CONCAT ('Name', 'Username', 'Password', 'Type') LIKE '%".$valueToSearch."%'";
    }
    else
    {
        $query = "SELECT * FROM accounts";
        $search_result = filterTable($query);
    }

    function filterTable($query)
    {
        global $server, $username,$password,$database;
        $connect = mysqli_connect("$server", "$username", "$password", "$database");
        $search_result = filterTable($query);
    }

	   header('Location:root.php');
	   exit;
?>