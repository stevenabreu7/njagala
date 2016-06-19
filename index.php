<!DOCTYPE html>
<html>
  <head>
    <!-- Content-related -->
    <title>Njagala</title>
    <meta http-equiv="author" content="Steven Abreu" />
    <!-- Display-related -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- frameworks -->
    <link rel="stylesheet" type="text/css" href="frameworks/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="frameworks/css/bootstrap-theme.min.css">
    <script src="frameworks/js/jquery-2.2.3.min.js"></script>
    <script src="frameworks/jquery.backstretch.min.js"></script>
    <script src="frameworks/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script src="frameworks/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="frameworks/sweetalert/dist/sweetalert.css">
    <!-- custom stuff -->
    <link rel="stylesheet" type="text/css" href="style/styles.css">
    <script src="script/script.js"></script>
  </head>

  <body>
    <!-- Navigation Bar -->
    <div class="navbar-wrapper">
      <div class="navbar-background">
        <img src="images/barkkcloth.png">
      </div>
      <header>
        <div class="logo">
          <img src='images/logo.png' >
        </div>
        <nav>
          <ul>
            <li><a class="home link">Home</a></li>
            <li><a class="first link">Idee</a></li>
            <li class="leftof-nested-parent"><a class='second link'>T-Shirt</a></li>
            <li class="nested-parent"><a class="third link">Über Uns</a>
              <ul>
                <li><a class='link'>Das Team</a></li>
                <li><a class='link'>Unsere Partner</a></li>
              </ul>
            </li>
            <li><a href="blog/" target="_blank" class='link'>News <span class="external-link-icon glyphicon glyphicon-new-window"></span></a></li>
            <li><a class='fourth link'>Kontakt</a></li>
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
        <img id="burger-image" src="images/burger.png" alt="menu" />

      </header>
    </div>

    <!-- Landing Page Background Image -->
    <div class="image-container">
      <script>$(".image-container").backstretch("images/background.jpeg");</script>
      <img class="text" src="images/text.svg">
      <img class="down-arrow" src="images/down_arrow.png">
    </div>

    <!-- Paypal Modal -->
    <div class="paypal-redirect">
      <span id="close-redirect" class="glyphicon glyphicon-remove"></span>
      <h3>Unterstützen</h3>
      <p>Du findest unser Projekt super und möchtest uns gerne finanziell unterstützen? Wir freuen uns über jede Spende!</p>
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="5EZJNGUJWBK88">
        <input id="redirect-button" class="donate" type="image" src="http://njagala.com/images/paypal/button.png" border="0" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal.">
        <img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
      </form>
    </div>

    <!-- Email Form -->
    <div class="email-box">
      <div class="close-email-box"><span class="close-email-box glyphicon glyphicon-remove"></span></div>
      <p>Möchtest Du einer der ersten Besitzer unseres T-Shirts sein? Dann trage hier Deine E-Mail Adresse ein.</p>
      <form class="form-inline" role="form" name='subscribe' onsubmit='return checkForm();' method="post">
          <label class="email-label" for="email">Email:</label>
          <input id="email-input" class="text-input" name="email" type="text">
          <button class="btn btn-default" type="submit">Submit</button>
      </form>
    </div>

    <!-- Burger Menu for smaller devices -->
    <div class="burger-menu">
      <div class="burger-menu-head">
        <img class="burger-back-arrow" src="images/back-arrow.png">
      </div>

      <!-- burger menu content -->
      <ul class="burger-nav">
        <li><a class="home link">Home</a></li>
        <li><a class="first link">Idee</a></li>
        <li><a class='second link'>T-Shirt</a></li>
        <li><a class="third link">Über Uns</a>
          <ul>
            <li><a class='link'>Das Team</a></li>
            <li><a class='link'>Unsere Partner</a></li>
          </ul>
        </li>
        <li><a href="blog/" target="_blank" class='link'>News</a></li>
        <li><a class='fourth link'>Kontakt</a></li>
      </ul>
      <p class="copyright">© Njagala 2016</p>
    </div>


    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~ CONTENT BEGINS HERE ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="rest-of-page">

      <!-- Project Section -->
      <div class="container full-width">
        <?php buildProjectSection(); ?>
      </div>

      <!-- T-Shirt Section -->
      <div class="container full-width">
        <?php buildTshirtSection(); ?>
      </div>

      <!-- About Section -->
      <div class="container full-width about-us-container">
        <?php buildAboutSection(); ?>
      </div>

      <!-- Contact Section -->
      <div class="container full-width">
        <?php buildContactSection(); ?>
      </div>

      <!-- Footer -->
      <footer class="container full-width">
        <div class="col-xs-10 col-sm-8 col-lg-8 col-xs-offset-1 col-sm-offset-2">
          <p>Beautiful, handmade clothes made in Uganda.</p>
          <p class="footer copyright">© Njagala 2016</p>
        </div>
      </footer>
  </div>

  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~ PHP CODE ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

  <?php
    if (isset($_POST['email'])){

      include("phpmailer/class.phpmailer.php");
      $servername = "localhost";
      $username = "d0227345";
      $password = "cwb6pcGfnS8XWAMP";
      $dbname = "d0227345";

      $address = $_POST["email"];


      // Create connection - on server
      // $conn = new mysqli($servername, $username, $password, $dbname);

      //Create connection: locally
      $conn = new mysqli("", "root");
      mysqli_select_db($conn, "njagala");


      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      //create new record in database
      $sql = "INSERT INTO emails VALUES ('$address')";

      //if successfully added record
      if ($conn->query($sql) === TRUE) {

        $mail = new PHPMailer();
        $mail->From = "bot@njagala.com";
        $mail->FromName = "Njagala";
        $mail->Subject = "Notification Service";
        $mail->Body = "<h2 style='font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;
      	font-size: 24px;'>Thank you for subscribing!</h2>
        <p style='font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;
      	font-size: 16px;'>You will be notified when we start shipping our first T-Shirts!</p>
        <p style='font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;
      	font-size: 10px;'>This E-Mail was sent to " . $address . ". If you received this E-Mail by accident: too bad, you will get the notification anyway.</p>";
        $mail->AltBody = "Thank you for subscribing! \n You will be notified when we start shipping our first T-Shirts! \n
          This E-Mail was sent to " . $address . ". If you received this E-Mail by accident: too bad, you will get the notification anyway.";
        $mail->AddAddress($address);
        // $mail->AddCC("steven.abreu@arconsis.com");
        $mail->AddBCC("steven.abreu@kit.enactus.de");
        $mail->AddReplyTo("info@njagala.com");

        if ($mail->Send()) {
          echo '<script type="text/javascript">' , 'showSuccess();' , '</script>';
        }
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
    }

    function buildProjectSection()
    {
      echo '
      <div class="row first">
        <h2 id="about-header">Wir sind Njagala.</h2>
        <hr>
        <div class="pad col-xs-10 col-sm-8 col-lg-8 col-xs-offset-1 col-sm-offset-2">
          <h3 class="vision">Die Vision</h3>
          <p class="vision">Das Ziel von Njagala ist es, einen nachhaltigen Wirtschafskreislauf durch die Produktion von afrikanisch-europäisch geprägter Mode in Uganda zu etablieren. Die hergestellten Kleidungsstücke sollen anschließend nach Deutschland exportiert und dort vertrieben werden. Durch den Transfer von Know-How im Bereich der Textilherstellung sowie von Devisen durch den hiesigen Vertrieb soll das Projekt in der Region einen vorbildhaften Charakter haben und langfristig Ableger-Projekte generieren.</p>
        </div>
        <div class="pad col-xs-10 col-sm-5 col-lg-5 col-xs-offset-1 col-lg-offset-1">
          <h3>Was macht uns besonders?</h3>
          <p>Unser Ziel im Hinblick auf die modischen Aspekte ist die Verschmelzung von europäischem und afrikanischem Design, welches wir durch unsere Kollaboration deutscher Schneider und Designer mit den lokalen ermöglichen. Anders als in der Textilindustrie üblich werden sämtliche Produktionsschritte am Projektstandort Masaka stattfinden, ebenso werden jegliche zur Herstellung benötigte Rohstoffe aus der Region stammen. Der ausschließlich in dieser Region Ostafrikas vorkommende Stoff ‚Bark-Cloth‘, welcher aus einem afrikanischen Feigenbaum, dem Mutuba gewonnen wird und eine lange kulturelle Geschichte beherbergt, soll dabei in die Kleidung eingearbeitet werden. Dieser Ansatz, welcher erst seit kurzem von wenigen Designern aufgegriffen wird, ist ein Schlüssel in der erfolgreichen Integration der regionalen Kultur in unser Produkt.</p>
        </div>
        <div class="pad col-xs-10 col-sm-5 col-lg-5 col-xs-offset-1 col-sm-offset-0 col-lg-offset-0">
          <h3>Warum Uganda?</h3>
          <p>Uganda ist noch immer eines der ärmsten Ländern weltweit (im Human Development Index rangiert es auf Rang 163 von 188 untersuchten Ländern). Über 50% der Bevölkerung haben 1,25 US-Dollar oder weniger zum täglichen Leben zur Verfügung – und das bei mehr als sechs Kindern pro Frau. Die meisten Ugander sind nachwievor in der Landwirtschaft tätig, wobei zum großen Teil Subsistenzwirtschaft betrieben wird. Dies steht in Kontrast zu dem Potential, welches das Land aufgrund seiner politischen Stabilität und geografisch günstigen Lage aufweist. Vor allem die großen Vorkommen von Baumwolle, welche auch in ihrem ökologisch nachhaltigen Anbau gefördert wird, werden hierbei noch nicht effizient für die lokale Wirtschaft genutzt. Der Rohstoff zur Verarbeitung wird fast ausschließlich in Niedriglohnländer exportiert, da das verarbeitende Gewerbe in Uganda so gut wie nicht existent ist – genau hier wollen wir ansetzen.</p>
        </div>
        <div class="pad col-xs-10 col-sm-5 col-lg-5 col-xs-offset-1">
          <h3>Umsetzung</h3>
          <p>Der Startschuss für das Projekt fiel im Oktober 2015. Zunächst wurde die Suche eines geeigneten Partners zur Kooperation in Deutschland sowie v.a. direkt am Projektstandort in Angriff genommen. Dieser Partner wurde Ende 2015 im Verein Hand in Hand für Uganda e.V. gefunden. Nach Schaffung erster Grundlagen und Erarbeitung einer umfassenden Projektplanung steht im März 2016 die erste Reise zum Projektstandort an.</p>
        </div>
        <div class="pad col-xs-10 col-sm-5 col-lg-5 col-xs-offset-1 col-sm-offset-0">
          <h3>Unsere Motivation</h3>
          <p>Die wirtschaftliche Situation afrikanischer Länder wie Uganda und die daraus folgenden humanitäre Situation sind seit jeher bekannt. Das jahrzehntelang verabreichte Mittel der Entwicklungshilfe erwies sich jedoch als relativ unwirksam was die tatsächliche Entwicklung, also die Erschaffung eigenständiger und wachsender Strukturen anbelangt. Wir wollen daher unser im Studium erlerntes Wissen dazu anwenden, ebensolche Strukturen zu schaffen. Damit möchten wir helfen, Uganda im Umfeld der fortschreitenden Globalisierung wettbewerbsfähig  zu machen.</p>
        </div>
      </div>
      ';
    }

    function buildAboutSection()
    {
      echo '
      <div class="row third">
        <h2 id="about-header">Wir sind Njagala.</h2>
        <hr>
        <div class="pad col-xs-10 col-sm-8 col-lg-8 col-xs-offset-1 col-sm-offset-2">
          <p class="vision">
            <h3 class="vision">Über Uns</h3>
            Wir sind ein derzeit 10-köpfiges Projektteam von ehrenamtlich engagierten Studenten der Hochschulgruppe Enactus KIT e.V. am Karlsruher Institut für Technologie. Die meisten von uns befinden sich derzeit im Bachelor- oder Masterstudiengang des Wirtschaftsingenieurwesens. Das Ziel von Enactus ist die Realisierung sozialer, ökologischer und wirtschaftlich nachhaltiger Projekte, die schlussendlich in die Eigenständigkeit übergehen oder an einen externen Partner abgegeben werden.
          </p>
        </div>
        <div class="about-us-team">
      ';



      echo '
        </div>
        </div>
      ';
    }

    // function buildFundingSection()
    // {
    //   echo '
    //   <div class="row third">
    //     <h2 id="funding-header">Money on my mind</h2>
    //     <hr>
    //     <div class="pad col-xs-10 col-sm-8 col-lg-8 col-xs-offset-1 col-sm-offset-2">
    //       <p class="funding">
    //         <h3 class="funding">Funding</h3>
    //         Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.
    //       </p>
    //     </div>
    //   </div>
    //   ';
    // }

    function buildTshirtSection()
    {
      echo '
      <div class="row second">
        <h2 id="product-header">It is all about the shirt</h2>
        <hr>
        <div class="pad col-xs-10 col-sm-8 col-lg-8 col-xs-offset-1 col-sm-offset-2">
          <p class="product">
            <h3 class="product">Das Produkt</h3>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.
          </p>
        </div>
      </div>
      ';
    }

    function buildContactSection()
    {
      echo '
      <div class="row fourth">
        <h2 id="contact-header">Get in touch</h2>
        <hr>
        <div class="pad col-xs-10 col-sm-8 col-lg-8 col-xs-offset-1 col-sm-offset-2">
          <p class="contact">
            <h3 class="contact">Kontakt</h3>
            General inquiries: <a href="mailto:info@njagala.com">info@njagala.com</a><br>
          </p>
        </div>
      </div>
      ';
    }

    function buildContactCards()
    {
      echo '
        <div class="col-xs-2 col-xs-offset-1">
          <img class="avatart" src="images/avatars/male1.png">
        </div>
      ';
    }
  ?>
</body>
</html>
