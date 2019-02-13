<?php 
if (!session_start()) {
    session_start();
}


if (isset($_SESSION['level']) && $_SESSION['level'] == 2) {

    $page_title = "LMS - Student";


    if (isset($_REQUEST['page'])) {
        $page = $_REQUEST['page'];

    } else {
        $page = 'home';
    }
    require_once '../includes/header.php';
    require_once 'includes/navigation.php';
    include('../includes/footer.php');
} else {
    header("Location: ../login.php");
}

?>