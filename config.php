<?php
    
$server= "sql6.freemysqlhosting.net";
$username="sql6580480";
$password="STcc6F8XsM";
$con= mysqli_connect($server,$username,$password,'sql6580480');
if(!$con){
    die("Error : Connection not made due to".mqsqli_connect_error());
}

?>
