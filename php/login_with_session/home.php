<?php 
    session_start();

    if(!isset($_SESSION['valid'])){
        header('location: login.php');
    }

?>

<html>
<head>
    <title>Home Page</title>
</head>
<body>
        <h1>Welcome Home, <?php echo $_SESSION['username']; ?></h1>
        <a href="logout.php">Logout</a>
</body>
</html>