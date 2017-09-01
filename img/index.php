<?php
// manage permalink
// /name-to.group-name

if (isset($_GET['permalink']) && !empty($_GET['permalink'])) {
  // replace strip
  $replace = str_replace("-"," ",$_GET['permalink']);

  // pecah
  $exp = explode(".",$replace);

  $nama = ucwords($exp['0']);
  $kepada_nama = "To : ".ucwords($exp['0']);
  $group = ucwords($exp['1']);
}else{
  $nama = "";
  $kepada_nama = "";
  $group = "";
}

 ?>
<!-- Ngapain buka buka ini? mohon doa restu ya! -->




<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $nama." ".$group; ?> Undangan Pernikahan</title>
    <link rel="shortcut icon" href="http://localhost/nikahantonifitri/img/1.jpg">

    <meta name="description" content="Dengan memohon Ridho serta Rahmat Allah SWT, kami bermaksud mengundang Bapak/Ibu/Saudara/i untuk dapat menghadiri Akad Nikah dan Walimatul 'Ursy kami">
    <meta name="keyword" content="nikah toni fitri, nikahan toni fitri">
    <meta name="author" content="admin">
    <meta name="googlebot" content="index,follow"/>
    <meta name="format-detection" content="telephone=yes"/>

    <meta property="og:url" content="http://alfathony.com/" />
    <meta property="fb:app_id" content="1693599180960943" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $nama." ".$group; ?> Undangan Pernikahan" />
    <meta property="og:description" content="Dengan memohon Ridho serta Rahmat Allah SWT, kami bermaksud mengundang Bapak/Ibu/Saudara/i untuk dapat menghadiri Akad Nikah dan Walimatul 'Ursy kami" />
    <meta property="og:image" content="http://localhost/nikahantonifitri/img/open-graph.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="350" />

    <meta content="summary" name="twitter:card">
    <meta content="@alfathony_" name="twitter:site">
    <meta content="@alfathony_" name="twitter:creator">
    <meta content="<?php echo $nama." ".$group; ?> Undangan Pernikahan" name="twitter:title">
    <meta content="Dengan memohon Ridho serta Rahmat Allah SWT, kami bermaksud mengundang Bapak/Ibu/Saudara/i untuk dapat menghadiri Akad Nikah dan Walimatul 'Ursy kami" name="twitter:description">
    <meta content="http://localhost/nikahantonifitri/img/open-graph.jpg" name="twitter:image">

    <!-- Bootstrap Core CSS -->
    <link href="http://localhost/nikahantonifitri/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://localhost/nikahantonifitri/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="http://localhost/nikahantonifitri/css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-97476047-1', 'auto');
      ga('send', 'pageview');

    </script>

</head>

<body id="page-top" class="index">

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
              <div class="intro-heading">Wedding Invitation</div>
                <div class="intro-lead-in"><?php echo $kepada_nama; ?></div>
                <p><?php echo $group; ?></p>
            </div>
        </div>
        <div class="float bulan1" id="float1">
          <img src="http://localhost/nikahantonifitri/img/bulan1.png" alt="nikahan fitri toni" class="img-responsive">
        </div>
        <div class="float bulan2" id="float2">
          <img src="http://localhost/nikahantonifitri/img/bulan2.png" alt="nikahan fitri toni" class="img-responsive">
        </div>
    </header>

    <!-- Services Section -->
    <section id="services" class="dot">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Bismillahirrohmaanirrohiim</h2>
                    <h3 class="section-subheading text-muted col-md-8 col-md-offset-2">Dengan memohon Ridho serta Rahmat Allah SWT, kami bermaksud mengundang Bapak/Ibu/Saudara/i untuk dapat menghadiri Akad Nikah dan Walimatul 'Ursy kami.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-xs-6">
                    <span class="fa-stack fa-4x">
                        <img src="http://localhost/nikahantonifitri/img/fitri-aprilianti.png" alt="Fitri Aprilianti" class="img-responsive">
                    </span>
                    <h4 class="service-heading">Fitri Aprilianti</h4>
                    <p class="text-muted">Putri dari <br>Ibu. Iyun Runati <br>Bpk. Nono Kurjono (alm)</p>
                </div>
                <div class="col-xs-6">
                    <span class="fa-stack fa-4x">
                        <img src="http://localhost/nikahantonifitri/img/alfathony.png" alt="Alfathony" class="img-responsive">
                    </span>
                    <h4 class="service-heading">A.L Fathoni</h4>
                    <p class="text-muted">Putra dari <br>Bpk. Nurkholis,S.Pdi <br>Ibu. Unengsih</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="dot">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-subheading text-muted">Yang Insya Allah akan dilaksanakan pada:</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="http://localhost/nikahantonifitri/img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>AKAD NIKAH</h4>
                                    <h4 class="subheading">Sabtu, 22 April 2017</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Pukul 09.00 wib. Kediaman mempelai Wanita</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                          <div class="timeline-image">
                              <img class="img-circle img-responsive" id="float" src="http://localhost/nikahantonifitri/img/about/2.jpg" alt="">
                          </div>
                          <div class="timeline-panel">
                              <div class="timeline-heading">
                                  <h4>Walimatul 'Ursy'</h4>
                                  <h4 class="subheading">Sabtu, 22 April 2017</h4>
                              </div>
                              <div class="timeline-body">
                                  <p class="text-muted">Pukul 11.00 wib s/d Selesai. Kediaman mempelai Wanita</p>
                              </div>
                          </div>
                        </li>
                        <li>
                          <div class="timeline-image">
                              <img class="img-circle img-responsive" id="float" src="http://localhost/nikahantonifitri/img/about/3.png" alt="">
                          </div>
                          <div class="timeline-panel">
                              <div class="timeline-heading">
                                  <h4>Mulung Mantu</h4>
                                  <h4 class="subheading">Senin, 24 April 2017</h4>
                              </div>
                              <div class="timeline-body">
                                  <p class="text-muted">Pukul 11.00 wib s/d Selesai. Kediaman mempelai Pria</p>
                              </div>
                          </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="denah" class="dot">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="section-heading">Denah Lokasi</h2>
            <h3 class="section-subheading text-muted">Jl. Kapt. Hanafiah RT. 101/28  Kel. Karang Anyar, Rawabadak <br/>Subang - Jawa Barat.</h3>
            <img src="http://localhost/nikahantonifitri/img/denah.png" alt="" class="img-responsive">
            <a href="https://www.google.com/maps/place/-6.5599976,107.7756687/@-6.5606713,107.7741798,17.54z" target="_blank" class="btn btn-primary btn-md">View Map <i class="fa fa-location-arrow"></i></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="dot">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- <h2 class="section-heading">Mengundang</h2> -->
                      <h3 class="section-subheading text-muted">Merupakan kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan do'a dan restu kepada putra-putri kami dan atas kehadirannya kami ucapkan terima kasih.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                  <?php if (isset($_GET['permalink']) && !empty($_GET['permalink'])) { ?>

                    <form name="sentMessage" id="" action="https://docs.google.com/forms/d/e/1FAIpQLSfrtzJbAMWSLYtnrVI3iOctZkBpATFBFrjfaRqTjo-tRo0Uyg/formResponse" method="GET" novalidate>
                      <input type="hidden" name="usp" value="pp_url">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Kepada" id="name" name="entry.1694965721" value="<?php echo $nama ?>" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="group *" id="email" name="entry.1699777172" value="<?php echo $group ?>" required data-validation-required-message="Please enter your grou or address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="entry.1663075413" placeholder="Berikan ucapan ..." ></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center" style="margin-bottom : 65px">
                              <label class="radio-inline">
                                <input type="radio" class="form-control" name="entry.402454684" value="Akan Hadir"> Hadir
                              </label>
                              <label class="radio-inline">
                                <input type="radio" class="form-control" name="entry.402454684" value="Tidak bisa hadir"> Berhalangan Hadir
                              </label>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl" style="margin-bottom : 10px;">Kirim</button>
                            </div>
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span class="copyright">Created with fully <i class="fa fa-heart" style="color : red"></i> at Subang Indonesia</span>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline quicklinks">
                        <li><a href="http://cullenbox.com" target="_blank" style="color : #333 ">Design Modified by Cullenbox.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="http://localhost/nikahantonifitri/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://localhost/nikahantonifitri/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="http://localhost/nikahantonifitri/js/jqBootstrapValidation.js"></script>
    <script src="http://localhost/nikahantonifitri/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="http://localhost/nikahantonifitri/js/agency.min.js"></script>

    <!-- Javascrip Floating -->
    <script src="http://localhost/nikahantonifitri/js/jqfloat.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#float1').jqFloat({
          width: 10,
          height: 50,
          speed: 1500
        });
        $('#float2').jqFloat({
          width: 10,
          height: 50,
          speed: 1800
        });
    });
    </script>

</body>

</html>
