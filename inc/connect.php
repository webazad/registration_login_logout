
<?php
$db_host =  'localhost';
$db_user = 'root';
$db_name = 'registration_login_logout';
$db_password = '';
$connect = @mysqli_connect($db_host,$db_user,$db_password,$db_name);
//$connect = new mysqli($db_host,$db_user,$db_password,$db_name);
if(!$connect){
    echo $connection_status = 'Something is wrong in database connection ...';
    exit();
    mysqli_get_host_info($connect);
    mysqli_close($connect);
}else{
    $connection_status = null;
}
echo $connection_status;
?>
