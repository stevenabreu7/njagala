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
        <li><a href="blog/" target="_blank" class='link'>News <span class="external-link-icon glyphicon glyphicon-new-window"></span></a></li>
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
          <p>Beautiful clothes, handmade in Uganda.</p>
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
      <div class="row first odd">
        <h2 id="about-header">Die Idee</h2>
        <hr>
        <div class="pad col-xs-10 col-sm-10 col-lg-8 col-xs-offset-1 col-lg-offset-2">
          <!-- <h3 class="vision">Die Vision</h3> -->
          <p><span class="paragraph-title">Das Ziel von Njagala</span> ist es, einen nachhaltigen Wirtschafskreislauf durch die Produktion von afrikanisch-europäisch geprägter Mode in Uganda zu etablieren. Die hergestellten Kleidungsstücke sollen anschließend nach Deutschland exportiert und dort vertrieben werden. Durch den Transfer von Know-How im Bereich der Textilherstellung sowie von Devisen durch den hiesigen Vertrieb soll das Projekt in der Region einen vorbildhaften Charakter haben und langfristig Ableger-Projekte generieren.</p>
          <p><span class="paragraph-title">Massig Bio-Baumwolle nur für Export - </span>
          In Uganda gibt es große Vorkommen an (Bio-)Baumwolle. Leider findet die Verarbeitung des Rohstoffes aufgrund niedrigerer Löhne und besserer Infrastruktur fast ausschließlich in Asien statt - die lokale Wirtschaft kann also kaum von diesen natürlich Ressourcen profitieren. Das wollen wir ändern!</p>
          <p><span class="paragraph-title">Rindenstoff - </span>
          Uganda beheimatet einen auf der Welt einzigartigen Textilschatz – die Rinde des dort wachsenden Mutuba-Baums! Aus dieser kann nämlich in Handarbeit und ohne Einsatz von Chemikalien das wohl älteste Textil der Welt, der Bark-Cloth, produziert werden. Das Verfahren ist dabei so nachhaltig, dass die Bäume dabei nicht zu Schaden kommen, sondern die Rinde mehrmals pro Jahr (!) geerntet werden kann.</p>
          <p><span class="paragraph-title">Gendersituation / Armut - </span>
          Trotz seiner politisch stabilen Lage und der reichen Natur ist Uganda nach wie vor eines der unterentwickelsten und ärmsten Länder der Welt – ein Umstand gegen den nur eine wachsende, stabile Wirtschaft und Gleichberechtigung eine Wirkung haben. Kann das Land selbst hergestellte Waren zu fairen Bedingungen exportieren, wächst die Wirtschaft – ka-tching!</p>
        </div>
      </div>
      ';
    }

    function buildAboutSection()
    {
      echo '
      <div class="row third odd">
        <h2 id="about-header">Über Uns</h2>
        <hr>
        <div class="group-picture">
          <img src="images/enactus-group.jpg">
        </div>
        <div class="row nomarg">
          <div class="njagala-logo col-xs-6 col-sm-3 col-md-3 col-xs-offset-3 col-sm-offset-1 col-lg-offset-2">
            <img src="images/logo.png">
            <script>
              $(document).ready(function() {
                if ($(window).width() > 767)
                {
                  var imageBoxHeight = $(".njagala-box").height();
                  var imageHeight = $(".njagala-logo img").height();
                  var imageMarginTop = (imageBoxHeight - imageHeight) / 2.5;
                  $(".njagala-logo img").css("margin-top", imageMarginTop);
                } else {
                  $(".njagala-logo img").css("margin-top", "0");
                }
                });
                $(window).resize(function() {
                  if ($(window).width() > 767)
                  {
                  var imageBoxHeight = $(".njagala-box").height();
                  var imageHeight = $(".njagala-logo img").height();
                  var imageMarginTop = (imageBoxHeight - imageHeight) / 2.5;
                  $(".njagala-logo img").css("margin-top", imageMarginTop);
                } else {
                  $(".njagala-logo img").css("margin-top", "0");
                }
                });
            </script>
          </div>
          <div class="njagala-box col-xs-10 col-sm-7 col-md-7 col-lg-5 col-xs-offset-1 col-sm-offset-0">
          <p>
            <span class="paragraph-title">Wir sind Njagala. </span></p><p>
            Im Oktober 2015 haben wir das Projekt Njagala im Rahmen der Hochschulgruppe Enactus KIT e.V. am Karlsruher Institut für Technologie gegründet. Seitdem arbeiten wir Tag für Tag an der Erfüllung unseres Traums – dem perfekten Njagala T-Shirt, dem Unikat aus Uganda.
          </p>
          </div>
        </div>
        <div class="row nomarg">
          <div class="enactus-logo col-xs-6 col-sm-3 col-md-3 col-xs-offset-3 col-sm-offset-1 col-lg-offset-2">
            <img src="images/enactus.png">
            <script>
              $(document).ready(function() {
                $(".enactus-logo img").load(function(){
                  if ($(window).width() > 767)
                  {
                  var imageBoxHeight = $(".enactus-box").height();
                  var imageHeight = $(".enactus-logo img").height();
                  var imageMarginTop = (imageBoxHeight - imageHeight) / 2.5;
                  $(".enactus-logo img").css("margin-top", imageMarginTop);
                } else {
                  $(".enactus-logo img").css("margin-top", "0");
                }
                });
                $(window).resize(function() {
                  if ($(window).width() > 767)
                  {
                  var imageBoxHeight = $(".enactus-box").height();
                  var imageHeight = $(".enactus-logo img").height();
                  var imageMarginTop = (imageBoxHeight - imageHeight) / 2.5;
                  $(".enactus-logo img").css("margin-top", imageMarginTop);
                } else {
                  $(".enactus-logo img").css("margin-top", "0");
                }
                });
              });
            </script>
          </div>
          <div class="enactus-box col-xs-10 col-sm-7 col-md-7 col-lg-5 col-xs-offset-1 col-sm-offset-0">
          <p>
            <span class="paragraph-title">Wir sind Enactus. </span></p><p>
            Enactus ist eine internationale Non-Profit Organisation, die in 39 Ländern mehr als 70.500 Studierende mit gemeinnützig motiviertem Unternehmergeist vereint. Damit ist Enactus das weltweit größte Netzwerk seiner Art. Unterstützt von mehr als 440 Unternehmen entwickeln Studenten im Rahmen ihrer Projekte Geschäftsmodelle, um soziale und ökologische Herausforderungen unserer Zeit mit Kreativität und betriebswirtschaftlichen Methoden zu lösen. Nachhaltigkeit – sowohl im ökonomischen als auch ökologischen Sinne - ist dabei der Schlüssel zu langfristigem Erfolg.
          </p>
          </div>
        </div>



        <div class="row nomarg">
          <div class="hih-logo col-xs-6 col-sm-3 col-md-3 col-xs-offset-3 col-sm-offset-1 col-lg-offset-2">
            <img src="images/handinhand.png">
            <script>
              $(document).ready(function() {
                $(".hih-logo img").load(function(){
                  if ($(window).width() > 767)
                  {
                  var imageBoxHeight = $(".hih-box").height();
                  var imageHeight = $(".hih-logo img").height();
                  var imageMarginTop = (imageBoxHeight - imageHeight) / 2.5;
                  $(".hih-logo img").css("margin-top", imageMarginTop);
                } else {
                  $(".hih-logo img").css("margin-top", "0");
                }
                });
                $(window).resize(function() {
                  if ($(window).width() > 767)
                  {
                  var imageBoxHeight = $(".hih-box").height();
                  var imageHeight = $(".hih-logo img").height();
                  var imageMarginTop = (imageBoxHeight - imageHeight) / 2.5;
                  $(".hih-logo img").css("margin-top", imageMarginTop);
                } else {
                  $(".hih-logo img").css("margin-top", "0");
                }
                });
              });
            </script>
          </div>
          <div class="hih-box col-xs-10 col-sm-7 col-md-7 col-lg-5 col-xs-offset-1 col-sm-offset-0">
          <p>
            <span class="paragraph-title">Hand in Hand für Uganda e.V.</span></p><p>
            Hand in Hand für Uganda e.V. engagiert sich seit Jahren in vielfältiger Art und Weise in der Umgebung von Masaka, Uganda. Von der Unterstützung von Schulen, Waisenkindern und Frauen bis hin zu handwerklichen Tätigkeiten wie der Brunnenbau - HiH hilft. Schaut selbst.<br>
            (Fast) seit Anfang an dürfen wir auf die Unterstützung von Hand in Hand für Uganda e.V. zählen. Wir haben HiH unglaublich viel zu verdanken, allem voran den Kontakt zu unseren SchneiderInnen. Daher an dieser Stelle ein großes DANKE für Alles.
          </p>
          </div>
        </div>



        <div class="row nomarg">
          <div class="uganda-logo col-xs-6 col-sm-3 col-md-3 col-xs-offset-3 col-sm-offset-1 col-lg-offset-2">
            <img src="images/uganda.png">
            <script>
              $(document).ready(function() {
                $(".uganda-logo img").load(function(){
                  if ($(window).width() > 767)
                  {
                  var imageBoxHeight = $(".uganda-box").height();
                  var imageHeight = $(".uganda-logo img").height();
                  var imageMarginTop = (imageBoxHeight - imageHeight) / 2.5;
                  $(".uganda-logo img").css("margin-top", imageMarginTop);
                } else {
                  $(".uganda-logo img").css("margin-top", "0");
                }
                });
                $(window).resize(function() {
                  if ($(window).width() > 767)
                  {
                  var imageBoxHeight = $(".uganda-box").height();
                  var imageHeight = $(".uganda-logo img").height();
                  var imageMarginTop = (imageBoxHeight - imageHeight) / 2.5;
                  $(".uganda-logo img").css("margin-top", imageMarginTop);
                } else {
                  $(".uganda-logo img").css("margin-top", "0");
                }
                });
              });
            </script>
          </div>
          <div class="uganda-box col-xs-10 col-sm-7 col-md-7 col-lg-5 col-xs-offset-1 col-sm-offset-0">
            <p>
              <span class="paragraph-title">Das Team in Uganda</span></p><p>
              Aktuell arbeiten vier speziell ausgebildete Schneider und Schneiderinnen Ugandas an der Produktion unserer T-Shirts. In unserer Schneiderei in Masaka stellen Sie täglich aufs Neue Ihre Fähigkeiten an der Nähmaschine unter Beweis. Für uns ist es selbstverständlich, Ihre Arbeit und Expertise fair zu vergüten und einen angemessenen Lohn zu bezahlen.
            </p>
          </div>
        </div>
        <div class="about-us-team">
      ';

      // for ($i=0; $i<10; $i++)
      // {
      //   if ($i == 0 || $i == 5) {
      //     buildFirstContactCard();
      //   } else {
      //     buildContactCard();
      //   }
      // }

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
      <div class="row second even">
        <h2 id="product-header">Mehr als nur ein T-Shirt</h2>
        <hr>
        <div class="pad col-xs-10 col-sm-10 col-lg-8 col-xs-offset-1 col-lg-offset-2">
          <p class="product">
            <p>
              <span class="paragraph-title">Der Prozess - </span>
              Wir glauben an die einzigartige Kombination von Design, Qualität und Made in Uganda.
            </p>
            <p>
              <span class="paragraph-title">100 % Organic Cotton - </span>
              Njagala steht sowohl für soziale als auch ökologische Nachhaltigkeit. Für unsere Kleidungsstücke verwenden wir ausschließlich biologisch angebaute Baumwolle von zertifizierten ugandischen Bauern.
            </p>
            <p>
              <span class="paragraph-title">Bark Cloth - </span>
              Bark Cloth ist ein (lederartiger) Stoff, der in Handarbei aus der Rinde des Feigenbaums Mutuba  hergestellt wird. Das Vorkommen dieser Feigenbaumgattung ist auf Ostafrika beschränkt. Seit Jahrtausenden wird die Rinde des Baumes dabei für die Textilproduktion genutzt, damit ist Bark Cloth vermutlich das älteste Textil der Welt. Je nach Wachstumsbedingungen zeigt sich der Stoff in verschiedenen Brauntönen und Strukturierungen. Jedes Stück ist somit unterschiedlich und macht dein Njagala-Shirt zu einem Unikat.
            </p>
            <p>
              <span class="paragraph-title">Arbeit - </span>
              Eine kleine Gruppe ausgewählter Schneiderinnen und Schneider nähen die Kleidungsstücke direkt in der ugandischen Kleinstadt Masaka. Exklusivität, Individualität und Qualität stehen dabei bei der Produktion eines jeden Shirts im Vordergrund - Fließband ist anders! Jedes T-Shirt wird dabei von seinem/r Meister/in mit persönlicher Signatur versehen.
            </p>
            <p>
              <span class="paragraph-title">Transport - </span>
              Das fertige Produkt wird nun direkt nach Deutschland exportiert.
            </p>
            <p>
              <span class="paragraph-title">Verkauf - </span>
              Die Produkte werden über ausgewählte Modeplattformen und –händler sowie Online zum Verkauf angeboten. Finde hier die passende Alternative für Dich.
            </p>
            <p>
              <span class="paragraph-title">Design - </span>
              Das Design erreicht seine Exklusivität durch die Verbindung europäischer Mode mit afrikanischen Einflüssen. Hierdurch entsteht ein einzigartiger, neuer Stil. Der ugandische Aspekt der Kleidung drückt sich hauptsächlich in der Verwendung des sogenannten Bark Cloth Stoffes aus, dem vermutlich ältesten Textil der Welt.
            </p>
            <p>
              <span class="paragraph-title">Qualität - </span>
              Neben dem außergewöhnlichem Design wollen wir dich mit exzellenter Qualität überzeugen. Ausgewählt werden ausschließlich Lieferanten, welche unsere Idee und Vision teilen. Durch Weiterbildung unserer ugandischer SchneiderInnen und regelmäßige Kontrolle des Herstellungsprozesses und des Endproduktes stellen wir eine gleichmäßig hohe Qualität sicher.
            </p>
            <p>
              <span class="paragraph-title">Made in Uganda - </span>
              Die Vollendung aller notwendigen Arbeitsschritte bis zum verkaufsfertigen Produkt erfolgt in Uganda. Durch den Verkauf der Produkte fließen die Erlöse vollständig nach Afrika in Form von Arbeitslohn, Materialkosten und Investition zurück. Jeder Kauf eines T-Shirts ermöglicht somit Schritt für Schritt den Aufbau und Erhalt eines nachhaltigen Wirtschaftskreislaufes, durch welchen sich die SchneiderInnen eine finanzielle Zukunft erarbeiten können. "Made in Uganda" ist unsere Idee davon, wie Globalisierung positiv und für alle Beteiligten fair sein kann.
            </p>
          </p>
        </div>
      </div>
      ';
    }

    function buildContactSection()
    {
      echo '
      <div class="row fourth even">
        <h2 id="contact-header">Kontakt</h2>
        <hr>
        <div class="pad col-xs-10 col-sm-10 col-lg-8 col-xs-offset-1 col-lg-offset-2">
          <p class="contact">
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
