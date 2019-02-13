<?php 
if (!session_start()) {
    session_start();
}

$pag_title = "LMS";
if (isset($_SESSION['level']) && isset($_SESSION['username'])) {

    if ($_SESSION['level'] == 99 || $_SESSION['level'] == 3) {
        $directory = 'admin';
        $page_title .= " - Admin";
    } else if ($_SESSION['level'] == 2) {
        $directory = 'teacher';
        $page_title .= " - Teacher";
    } else if($_SESSION['level'] == 2) {
        $directory = 'student';
        $page_title .= " - Student";
    } else {
        $directory = '/';
    }

    if (isset($_REQUEST['page'])) {
        $page = $_REQUEST['page'];

    } else {
        $page = 'home';
    }
    require_once '../includes/header.php';
    
    if($directory == '/'){
        require_once '/includes/navigation.php';

    } else {
        require_once 'includes/navigation.php';
    }
        
    
    include('../includes/footer.php');
} else {
    header("Location: ../login.php");
}

?>