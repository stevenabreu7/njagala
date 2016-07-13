<hmtl>
  <head>
    <title>Njagala Blog</title>
    <meta charset="utf-8"/>

    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../frameworks/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../frameworks/css/bootstrap-theme.min.css">
    <script src="../frameworks/js/jquery-2.2.3.min.js"></script>
    <script src="../frameworks/jquery.backstretch.min.js"></script>
    <script src="../frameworks/js/bootstrap.min.js"></script>
    <!-- custom stuff -->
    <link rel="stylesheet" type="text/css" href="../style/styles.css">
    <link rel="stylesheet" type="text/css" href="../style/dark-nav-bar.css">
    <script src="../script/script.js"></script>

    <link rel="stylesheet" type="text/css" href="style/styles.css">
  </head>
  <body>


    <!-- Navigation Bar -->
    <div class="navbar-wrapper">
      <div class="navbar-background">
        <img src="../images/barkkcloth.png">
      </div>
      <header>
        <div class="logo">
          <a href="../index.php" class="home link"><img class="logo-image" src='../images/logo.png' ></a>
        </div>
        <nav>
          <ul>
            <li><a href="../index.php" class="home link">Home</a></li>
            <li><a href="../index.php" class="first link">Idee</a></li>
            <li class="leftof-nested-parent"><a href="../index.php" class='second link'>T-Shirt</a></li>
            <li class="nested-parent"><a href="../index.php" class="third link">Über Uns</a>
              <ul>
                <li><a href="../index.php" class='third-one link'>Das Team</a></li>
                <li><a href="../index.php" class='third-two link'>Partner</a></li>
              </ul>
            </li>
            <li><a href="" class='link'>News <span class="external-link-icon glyphicon glyphicon-new-window"></span></a></li>
            <li><a href="../index.php" class='fourth link'>Kontakt</a></li>
            <!-- Paypal Donate Button -->
            <li>
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="5EZJNGUJWBK88">
                <!-- <input class="donate" type="image" src="http://njagala.com/images/paypal/button.png" border="0" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal."> -->
                <a id="nav-donate-btn" class="donate">Unterstützen!</a>
                <img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
              </form>
            </li>
          </ul>
        </nav>

        <!-- important: this needs to be an id for the script to work! -->
        <img id="burger-image" src="../images/burger.png" alt="menu" />

      </header>
    </div>

    <!-- Landing Page Background Image -->
    <div class="image-container">
      <script>$(".image-container").backstretch("../images/background.jpeg");</script>
    </div>

    <!-- Paypal Modal -->
    <div class="paypal-redirect">
      <span id="close-redirect" class="glyphicon glyphicon-remove"></span>
      <h3>Unterstützen</h3>
      <p>Du findest unser Projekt super und möchtest uns gerne finanziell unterstützen? Wir freuen uns über jeden Beitrag!</p>
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="5EZJNGUJWBK88">
        <input id="redirect-button" class="donate" type="image" src="http://njagala.com/images/paypal/button.png" border="0" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal.">
        <img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
      </form>
    </div>

    <!-- Burger Menu for smaller devices -->
    <div class="burger-menu">
      <div class="burger-menu-head">
        <img class="burger-back-arrow" src="images/back-arrow.png">
      </div>
      <!-- burger menu content -->
      <ul class="burger-nav">
        <li><a href="../index.php" class="home link">Home</a></li>
        <li><a href="../index.php" class="first link">Idee</a></li>
        <li><a href="../index.php" class='second link'>T-Shirt</a></li>
        <li><a href="../index.php" class="third link">Über Uns</a>
          <ul>
            <li><a href="../index.php" class='third-one link'>Das Team</a></li>
            <li><a href="../index.php" class='third-two link'>Partner</a></li>
          </ul>
        </li>
        <li><a href="" class='link'>News <span class="external-link-icon glyphicon glyphicon-new-window"></span></a></li>
        <li><a href="../index.php" class='fourth link'>Kontakt</a></li>
      </ul>
      <p class="copyright">© Njagala 2016</p>
    </div>

    <div class="buttons">
      <a class="button" href="../"><span class="glyphicon glyphicon-arrow-left"></span> Zurück zu Home</a>
      <a class="button" href="login.php?link=create"><span class="glyphicon glyphicon-edit"></span> Neuer Artikel</a>
      <a class="button" href="login.php?link=edit"><span class="glyphicon glyphicon-cog"></span> Artikel bearbeiten</a>
    </div>
    <div class="container">
  <?php

    $servername = "localhost";
    $username = "d0227345";
    $password = "cwb6pcGfnS8XWAMP";
    $dbname = "d0227345";
    // Create connection - on server
    $con = new mysqli($servername, $username, $password, $dbname);

    //Create connection: locally
    // $con = new mysqli("", "root");


    mysqli_select_db($con, "njagala");

    $res = mysqli_query($con, "select * from blog order by date desc");

    while ($row = mysqli_fetch_assoc($res))
    {
      renderArticle($row['title'], $row['date'], $row['content']);
      echo '<hr>';
    }


    // Check connection
    if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
    }

    function renderArticle($titl, $dat, $tex)
    {
      $title = utf8_encode($titl);
      $date = utf8_encode($dat);
      $text = utf8_encode($tex);
      echo '<h3>' . $title . '</h3><p class="date">' . $date . '</p>';
      echo '<p>' . $text . '</p>';
    }
  ?>
</div>
</body>
</html>
