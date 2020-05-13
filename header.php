<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>シスターズ システム</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

<!-- not working -->
  <!-- <header>
    <nav>
      <a href="#">
       <img scr="img/gekota.png" alt="logo">
      </a>
    </nav>
  </header> -->

<div class="d-flex" id="wrapper">
    <?php require "sidebar.php"; ?>
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
      <div id="who">
      <ul>
        <li id="login">
          <a id="login-trigger" href="#">
            Log in <span>&#x25BC;</span>
          </a>
          <div id="login-content">
            <form id="loginform">
            <form action="includes/login.inc.php" method="post">
              <fieldset id="inputs">
              	<label for="username">Username</label>
                <input id="username" type="text" autofocus placeholder="Your username" required>
                <label for="password">Password</label>   
                <input id="password" type="password" placeholder="Your password" required>
              </fieldset>
             <fieldset id="actions">
                <input type="submit" id="insubmit" value="Log in"  class="logit">
                <input type="button" id="incancel" value="Cancel"  class="forgetit">
                <!-- <label><input type="checkbox" checked="checked"> Keep me signed in</label> -->
              </fieldset>
             </form>
          </div>                     
        </li>
        <li id="logout">
          <a id="logout-trigger" href="#">
            Log out <span>&#x25BC;</span>
          </a>
          <div id="logout-content">
            <form id="logoutform">
            <form action="includes/logout.inc.php" method="get">
             <fieldset id="actions">
             	<input id="name" type="text" value="Firstname Lastname (username)" readonly>
                <input type="submit" id="outsubmit" value="Log out" class="logit">
                <input type="reset" id="outcancel" value="Cancel"  class="forgetit">
                <!-- <label><input type="checkbox" checked="checked"> Keep me signed in</label> -->
              </fieldset>
             </form>
          </div>                     
        </li>
      </ul>
    </div>
          </ul>
        </div>
      </nav>