<?php
    session_start();
    include('connect.php');
    if (isset($_SESSION['uid'])) {
        $query = "SELECT * FROM users WHERE id='{$_SESSION['uid']}'";
        $result = $link->query($query);
        $users = $result->fetch_assoc();
        $id_users = $users['id'];
    }

    if ($_REQUEST['do'] == 'exit') {
        session_unset();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    include('components/header.php');

    if (isset($_GET['page'])) {
        if ($_GET['page'] == 'register') {
            include('pages/reg.php');
        }
        if ($_GET['page'] == 'login') {
            include('pages/login.php');
        }
        if ($_GET['page'] == 'about') {
            include('pages/aboutUs.php');
        }
        if ($_GET['page'] == 'item') {
            include('pages/item.php');
        }
        if ($_GET['page'] == 'user') {
            include('pages/profileUser.php');
        }
    } else {
        include('pages/main.php');
    }

    include('components/footer.php');

?>


</body>
</html>