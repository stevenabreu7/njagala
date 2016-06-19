<html>
<?php
  if (isset($_POST["sent"]))
  {
    $title = $_POST["title"];
    $date = $_POST["date"];
    $content = $_POST["content"];

    $servername = "localhost";
    $username = "d0227345";
    $password = "cwb6pcGfnS8XWAMP";
    $dbname = "d0227345";

    // // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Local connection
    // $conn = new mysqli("", "root", "", "njagala");


    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO `blog` (`title`, `date`, `content`) VALUES ('" . $_POST['title'] . "', '" . $_POST['date'] . "', '" . $_POST['content'] . "')";

    if ($conn->query($sql) === TRUE) {
      echo "success.";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

  } else {
    echo 'wut';
  }
?>
<br><br>
<a href="index.php">go to blog</a>
</html>
