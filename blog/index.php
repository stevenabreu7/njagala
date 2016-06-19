<hmtl>
  <p><a href="create.php">create new article</a></p>
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

    $res = mysqli_query($con, "select * from blog");

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
      echo '<h4>' . $titl . ', ' . $dat . '</h4>';
      echo '<p>' . $tex . '</p>';
    }
  ?>
</html>
