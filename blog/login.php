<html>
<head>
  <title>login</title>
  <link rel="stylesheet" type="text/css" href="style/create.css">
  <style>
    a.continue {
      background-color: transparent;
      color: black;
      text-decoration: underline;
      margin: 0px;
      padding: 0px;
      position: relative;
      top:0px;
      left: 0px;
    }
  </style>
</head>
<body>


<?php
  if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
    if ($_POST['username'] == 'njagala' && $_POST['password'] == 'rocks') {

    $link = "";
    if (strcmp($_GET["link"], "create") == 0) {
      $link = "create.php";
    } else if (strcmp($_GET["link"], "edit") == 0) {
      $link = "edit.php";
    }
    echo '
      <span>success! ';
    echo '<a class="continue" href="' . $link . '">click to continue</a></span>';
     } else {
        echo '
          <h2>incorrect login</h2>

          <form action="" method="post">
            <p><input id="title-input" class="text-input" placeholder="username" name="username" type="text"></p>
            <p><input id="date-input" class="text-input" placeholder="password" name="password" type="password"></p>
            <input class="button" type="submit" name="login">
          </form>
          <a href="index.php">&larr; back to blog</a>
        ';
     }
  } else {
    echo '
      <h2>you need to login first</h2>

      <form action="" method="post">
        <p><input id="title-input" class="text-input" placeholder="username" name="username" type="text"></p>
        <p><input id="date-input" class="text-input" placeholder="password" name="password" type="password"></p>
        <input class="button" type="submit" name="login">
      </form>
      <a href="index.php">&larr; back to blog</a>
    ';
  }
?>
</body>
</html>
