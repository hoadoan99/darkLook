<?php
require '../functions/require.php';
$username = $_POST["txtUserName"];
$password = $_POST["txtPassWord"];
$query="select * from tbl_admin where _username='".$username."' AND _password='".$password."'";
$result= mysqli_query($conn, $query);
$count= mysqli_num_rows($result);
if($count==1){
    header("Location: ../admin/adminpage.php");
   
}
 else {
    header("Location:../404.php?err=1 ");
}
?>