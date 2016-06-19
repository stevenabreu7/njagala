<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" type="text/css" href="../frameworks/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../frameworks/css/bootstrap-theme.min.css">
  <script src="../frameworks/js/jquery-2.2.3.min.js"></script>
  <script src="../frameworks/jquery.backstretch.min.js"></script>
  <script src="../frameworks/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

  <script>
    $(document).ready(function() {

      //set height for each card
      $(function() {
        var div = $('.card');
        var width = div.width() * 1.3;

        div.css('height', width);
        $('.middle').css('height', width);
        $('.back').css('height', width);
      });

      //set height again when window size changed
      $(window).resize(function() {
        var div = $('.card');
        var width = div.width() * 1.3;

        div.css('height', width);
        $('.middle').css('height', width);
        $('.back').css('height', width);
      });

      //handle hover for every box
      <?php
        for ($i=1; $i<=5; $i++)
        {
          echo '

            var card' . $i . 'BackShown = false;
            $( "#card' . $i . '" ).hover(
              function() {
                $("#middle' . $i . ', #front' . $i . '").fadeOut(0);
                card' . $i . 'BackShown = true;
              }, function() {
                $("#middle' . $i . ', #front' . $i . '").fadeIn(0);
                card' . $i . 'BackShown = false;
              }
            );

            $("#card' . $i . '").click(function() {
              if (card' . $i . 'BackShown) {
                $("#middle' . $i . ', #front' . $i . '").fadeIn(0);
                card' . $i . 'BackShown = false;
              } else {
                $("#middle' . $i . ', #front' . $i . '").fadeOut(0);
                card' . $i . 'BackShown = true;
              }
            });

          ';
        }
      ?>
    });
  </script>

<div class="container">
  <div class="row">

    <?php
      for ($i=1; $i<=5; $i++)
      {
        echo '
        <div id="card'. $i . '" class="col-xs-4 col-sm-3 col-md-2 col-xs-offset-1 card">
          <div id="front' . $i . '" class="front">
            <img class="avatar" src="male1.png">
            <p class="center-text">Vorname Nachname</p>
          </div>

          <div id="middle' . $i . '" class="middle"></div>

          <div class="back">
            <h4 class="center-text">Vorname Nachname</h4>
            <p>Das ist Vorname Nachname. Er ist Mitglied in unserem Projekt und zuständig für:
              <ul>
                <li>Blah</li>
                <li>Blah Blah</li>
                <li>Blaaaaa</li>
              </ul>
              Kontakt: vorname@njagala.com
            </p>
          </div>
        </div>
        ';
      }
    ?>
    <!-- <div class="col-xs-4 col-sm-3 col-md-2 col-xs-offset-1 card">
      <div class="front">
        <img class="avatar" src="male1.png">
        <p class="center-text">Vorname Nachname</p>
      </div>

      <div class="middle"></div>

      <div class="back">
        <div class="close-button"><span class="close-card glyphicon glyphicon-remove"></span></div>
        <h4 class="center-text">Vorname Nachname</h4>
        <p>Das ist Vorname Nachname. Er ist Mitglied in unserem Projekt und zuständig für:
          <ul>
            <li>Blah</li>
            <li>Blah Blah</li>
            <li>Blaaaaa</li>
          </ul>
          Kontakt: vorname@njagala.com
        </p>
      </div>
    </div> -->

  </div>
</div>

</body>
</html>
