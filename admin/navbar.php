<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
  <link rel="stylesheet" href="../css/materialize.min.css">
  <script src="../js/fontawesome-all.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div class="wrapper">
    <nav class="blue darken-2 hide-on-med-and-up" role="navigation">
      <div class="nav-wrapper container blue lighten-4">
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="index.php">Home</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="register.php">Register</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav ">
          <li>
            <div class="user-view">
              <div class="background">
                <img src="../img/bg_img.jpeg" alt="ocean">
              </div>
              <a href="">
                <img src="../img/logo.png" alt="" class="responsive-img" height="50%" width="100%">
              </a>
              <a href="#">
                <span class="name grey-text text-darken-4">John Doe</span>
              </a>
              <a href="#">
                <span class="email grey-text text-darken-4">jdoe@gmail.com</span>
              </a>
            </div>
          </li>
          <li><a href="index.php"><i class="fas fa-home"></i>&nbsp  Home</a></li>
          <li><a href="users.php"><i class="fas fa-users"></i>&nbsp  Users</a></li>
          <li><a href="locker.php"><i class="fas fa-box"></i>&nbsp  Locker</a></li>
          <li><a href="report.php"><i class="fas fa-chart-line"></i>&nbsp  Report</a></li>
          <li><a href="index.php"><i class="fas fa-sign-out-alt"></i>&nbsp Logout</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>
  </div>
  <ul class="side-nav fixed">
    <li>
      <div class="user-view">
        <div class="background">
          <img src="../img/bg_img.jpeg" alt="ocean">
        </div>
        <img src="../img/logo.png" alt="" class="responsive-img" height="50%" width="100%">
        <a href="#">
          <span class="name grey-text text-darken-4"><?php echo $_SESSION['admin_uname']; ?></span>
        </a>
        <a href="#">
          <span class="email grey-text text-darken-4"><?php echo $_SESSION['admin_email']; ?></span>
        </a>
      </div>
    </li>
    <span class="row">
    <li><div class="blue darken-3">
    <a href="index.php"><i class="fas fa-home white-text"></i>
    <span class="white-text">&nbsp  Home</a><span class="col s1"></li></span>
    <span class="row">
    <li><div class="blue darken-3">
    <a href="records.php"><i class="fas fa-book white-text"></i>
    <span class="white-text">&nbsp  Record</a><span class="col s1"></li></span>
    <span class="row">
    <li><div class="blue darken-3">
    <a href="locker.php"><i class="fas fa-box white-text"></i>
    <span class="white-text">&nbsp  Locker</a><span class="col s1"></li></span>
    <span class="row">
    <li><div class="blue darken-3">
    <a href="users.php"><i class="fas fa-users white-text"></i>
    <span class="white-text">&nbsp  Users</a><span class="col s1"></li></span>
    <span class="row">
    <li><div class="blue darken-3">
    <a href="admin.php"><i class="fas fa-user white-text"></i>
    <span class="white-text">&nbsp  Admin</a><span class="col s1"></li></span>
    <span class="row">
    <li><div class="blue darken-3">
    <a href="report.php"><i class="fas fa-chart-line white-text"></i>
    <span class="white-text">&nbsp  Report</a><span class="col s1"></li></span>
    <span class="row">
    <?php if (isset($_SESSION['admin_id'])): ?>
      <li><div class="blue darken-3">
      <a href="logout.php"><i class="fas fa-sign-out-alt white-text"></i>
      <span class="white-text">&nbsp Logout</a><span class="col s1"></li></span>
      <span class="row">
    <?php else: ?>
    <li><div class="blue darken-3">
        <a href="login.php"><i class="fas fa-sign-in-alt white-text"></i>
        <span class="white-text">&nbsp Login</a></li></span>
    <?php endif ?>
    <span class="row">
    <li><div class="blue darken-3">&nbsp</li></div>
    <li><div class="blue darken-3">&nbsp</li></div>
    <li><div class="blue darken-3">&nbsp</li></div>
  </ul>
