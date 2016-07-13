<html>
<head>
  <title>new article</title>
  <link rel="stylesheet" type="text/css" href="style/create.css">
  <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</head>
<body>
  <h2>create new article</h2>
  <form action="save.php" method="post">
    <p><label>title: </label><input id="title-input" class="text-input" name="title" type="text"></p>
    <p><label>date: </label><input id="date-input" class="text-input" placeholder="yyyy-mm-dd" name="date" type="text"></p>
    <p><label>text: </label><textarea name="content"></textarea></p>
    <input class="button" type="submit" name="sent">
    <input class="button" type="reset">
  </form>
  <a href="index.php">&larr; back to blog</a>
  <script>
  $(document).ready(function() {
    $(window).resize(function() {
      $("#title-input").val($(window).width());
      $("#date-input").val($("form").width());
    });
  });
  </script>
</body>
</html>
