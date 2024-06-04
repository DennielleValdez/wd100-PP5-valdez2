<?php


include '../Admin/skincare_pp5_db.php';
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

// $checkUserStmt = "SELECT * FROM user_tbl";
$checkUserStmt = "SELECT * FROM user_tbl WHERE User_username = '$username' AND User_password = '$password' AND User_level = 0";
$checkUserQuery = mysqli_query($conn, $checkUserStmt);

$checkAdminStmt = "SELECT * FROM user_tbl WHERE User_username = '$username' AND User_password = '$password' AND User_level = 1";
$checkAdminQuery = mysqli_query($conn, $checkAdminStmt);

if(mysqli_num_rows($checkUserQuery)){
    $userShow = mysqli_fetch_assoc($checkUserQuery);

    $_SESSION['id'] = $userShow['User_ID'];
    $_SESSION['level'] = $userShow['User_level'];
    $_SESSION['username'] = $userShow['User_name'];

    header("Location: ../Frontend/homepage.php");

}elseif(mysqli_num_rows($checkAdminQuery)){
    $adminShow = mysqli_fetch_assoc($checkAdminQuery);

    $_SESSION['id'] = $adminShow['User_ID'];
    $_SESSION['level'] = $adminShow['User_level'];
    $_SESSION['username'] = $adminShow['User_name'];

    header("Location: ../Admin/admin_add_remove.php");
}else{
    header("Location: ../User/user_login_setter.php");
}

?>