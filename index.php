<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <title>Schwarzesbrett | Mehr als Kleinanzeigen</title>

        <?php include("components/style.css.php"); ?>

    </head>
    <body data-ma-header="cyan">




      <?php include("components/menu.php"); ?>

      <!-- Page Loader -->
      <div class="page-loader palette-Cyan bg">
          <div class="preloader pl-xl pls-white">
              <svg class="pl-circular" viewBox="25 25 50 50">
                  <circle class="plc-path" cx="50" cy="50" r="20"/>
              </svg>
          </div>
      </div>

        <section id="main">
            <?php include("components/notifications.php"); ?>

            <?php include("components/side-navigation.php"); ?>

            <section id="content">
                <div class="container">

                  <div class="alert alert-info alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                Hallo Matthias, bitte <a href="profil-settings.php" class="alert-link">vervollständige dein Profil.</a>
                  </div>

                  <?php include("components/slider.php"); ?>

                  <?php include("components/filter.php"); ?>


                    <div id="c-grid" class="clearfix" data-columns>

                      <?php

                      for ($x = 0; $x < 30; $x++) {

                        include("components/artikel.php");

                      }

                      ?>


                    </div>

                </div>
            </section>

            <footer id="footer">
                Copyright &copy; 2016 Schwarzesbrett

                <ul class="f-menu">
                    <li><a href="">Home</a></li>
                </ul>
            </footer>

        </section>


        <?php include("components/modal.php"); ?>
        <?php include("components/script.js.php"); ?>

    </body>
  </html>
