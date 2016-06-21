<hmtl>
  <head>
    <link rel="stylesheet" type="text/css" href="style/styles.css">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <h2>njagala news</h2>
    <hr id="title-hr">
    <a class="button" href="../">&larr; back to homepage</a>
    <a class="button" href="create.php">+ create new article</a>
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
      echo '<h3>' . $titl . '</h3><p class="date">' . $dat . '</p>';
      echo '<p>' . $tex . '</p>';
    }
  ?>
</div>
</body>
</html>
