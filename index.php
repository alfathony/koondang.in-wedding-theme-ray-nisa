<?php
// manage permalink
// /name-to.group-name

if (isset($_GET['permalink']) && !empty($_GET['permalink'])) {
  // replace strip
  $replace = str_replace("-"," ",$_GET['permalink']);

  // pecah
  $exp = explode(".",$replace);

  $nama = ucwords($exp['0']);
  $kepada_nama = "<p>Mengundang </p>To : ".ucwords($exp['0']);
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
    <link rel="shortcut icon" href="http://localhost/firda/img/1.jpg">

    <meta name="description" content="Dengan memohon Ridho serta Rahmat Allah SWT, kami bermaksud mengundang Bapak/Ibu/Saudara/i untuk dapat menghadiri Akad Nikah dan Walimatul 'Ursy kami">
    <meta name="keyword" content="nikah toni fitri, nikahan toni fitri">
    <meta name="author" content="admin">
    <meta name="googlebot" content="index,follow"/>
    <meta name="format-detection" content="telephone=yes"/>

    <meta property="og:url" content="http://koondang.in/" />
    <meta property="fb:app_id" content="1693599180960943" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $nama." ".$group; ?> Undangan Pernikahan" />
    <meta property="og:description" content="Dengan memohon Ridho serta Rahmat Allah SWT, kami bermaksud mengundang Bapak/Ibu/Saudara/i untuk dapat menghadiri Akad Nikah dan Walimatul 'Ursy kami" />
    <meta property="og:image" content="http://localhost/firda/img/open-graph.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="350" />

    <meta content="summary" name="twitter:card">
    <meta content="@alfathony_" name="twitter:site">
    <meta content="@alfathony_" name="twitter:creator">
    <meta content="<?php echo $nama." ".$group; ?> Undangan Pernikahan" name="twitter:title">
    <meta content="Dengan memohon Ridho serta Rahmat Allah SWT, kami bermaksud mengundang Bapak/Ibu/Saudara/i untuk dapat menghadiri Akad Nikah dan Walimatul 'Ursy kami" name="twitter:description">
    <meta content="http://localhost/firda/img/open-graph.jpg" name="twitter:image">

    <!-- Bootstrap Core CSS -->
    <link href="http://localhost/firda/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://localhost/firda/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Dynalight" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="http://localhost/firda/css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

    <!-- <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-97476047-1', 'auto');
      ga('send', 'pageview');

    </script> -->

</head>

<body id="page-top" class="index">

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
              <div class="intro-heading">Firda & Reno</div>
                <div class="intro-lead-in"><?php echo $kepada_nama; ?></div>
                <p class="from"><?php echo $group; ?></p>
            </div>
        </div>
    </header>

    <section id="introduce" class="sparate">
      <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Bismillahirrahmanirrahiim</h2>
                    <p class="col-md-8 col-md-offset-2">
                      Assalamualaikum Warrahmatullahi Wabarakatuh <br>
                      Maha suci Allah yang telah menciptakan makhlukNya berpasang-pasangan.
                      Ya Allah perkenankanlah kami menikahkan putra-putri kami

                    </p>
                </div>
            </div>
            <div class="row pengantin">
              <div class="col-sm-5">
                <h4 class="service-heading">Fadikasari Firdyawati</h4>
                 <p class="text-center">Putri dari Bapak Bambang Susatyodjati (Alm) <br>Ibu Dwi Rosmarini, S.TP</p>
              </div>
              <div class="col-sm-2">
                <h2 class="dan text-center">&</h2>
              </div>
              <div class="col-sm-5">
                <h4 class="service-heading">Reno Setyo Aji</h4>
                 <p class="text-center">Putra dari Bapak Yadi Sujono, S.Pd <br> Ibu Roro Sulastri, S.Pd</p>
              </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about"  class="sparate">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-subheading">Yang Insya Allah akan dilaksanakan pada:</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="http://localhost/firda/img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>AKAD NIKAH</h4>
                                    <h4 class="subheading">Kamis, 10 Agustus 2017</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="">Jam 09.00 WIB – Selesai</p>
                                    <p class="">Gedung Panca Bakti DPD Golkar <br> Jl. Arief Rahman Hakim - Subang</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                          <div class="timeline-image">
                              <img class="img-circle img-responsive" id="float" src="http://localhost/firda/img/about/2.jpg" alt="">
                          </div>
                          <div class="timeline-panel">
                              <div class="timeline-heading">
                                  <h4>RESEPSI</h4>
                                  <h4 class="subheading">Sabtu, 12 Agustus 2017</h4>
                              </div>
                              <div class="timeline-body">
                                  <p class="">Jam 11.00 WIB - 15.00 WIB </p>
                                  <p class="">Gedung Panca Bakti DPD Golkar <br> Jl. Arief Rahman Hakim - Subang</p>
                              </div>
                          </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="denah" class="sparate">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/ Ibu/ Saudara/ I berkenan hadir untuk memberikan doa restu kepada putra-putri kami.
Atas kehadiran dan doa restu Bapak/Ibu/Saudara/I kami ucapkan terima kasih.
</p>
            <h3 class="section-subheading ">Lokasi Resepsi</h3>
            <center>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.7302720800044!2d107.7590008147608!3d-6.555695765910047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e693c81acdc07c5%3A0x71b40194f8dcd4dc!2sGedung+Golkar!5e0!3m2!1sen!2sid!4v1501629687697" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </center>
            <a href="https://goo.gl/maps/yLgzmqWH9FM2" target="_blank" class="btn btn-default btn-md">Navigasi Google Maps</a>
          </div>
        </div>
      </div>
    </section>


    <!-- Contact Section -->
    <section id="contact" class="sparate">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                      <p><strong>Do'a</strong><br>
                        Semoga Allah SWT, menghimpun yang terserak dari keduanya, memberkati mereka berdua, meningkatkan kualitas keturunan mereka, menjadikannya pembuka pintu-pintu rahmah, sumber ilmu dan hikmah serta pemberi rasa aman bagi umat <br>
( Doa Nabi Muhammad SAW pada pernikahan putri beliau Fatimah Az Zahra dengan Ali bin Abi Thalib )

                      </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                  <?php if (isset($_GET['permalink']) && !empty($_GET['permalink'])) { ?>
                    <form name="sentMessage" id="" action="https://docs.google.com/forms/d/e/1FAIpQLSef6xh955_VzP0wo8tI-7vpft1lrNHC4wunLm7zrekamohDiA/formResponse" method="GET" novalidate>
                      <input type="hidden" name="usp" value="pp_url">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Kepada" id="name" name="entry.696543387" value="<?php echo $nama ?>" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="group *" id="email" name="entry.771499295" value="<?php echo $group ?>" required data-validation-required-message="Please enter your grou or address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="entry.112230461" placeholder="Berikan ucapan ..." ></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center" style="margin-bottom : 65px">
                              <label class="radio-inline">
                                <input type="radio" class="form-control" name="entry.1639849738" value="Akan Hadir"> Hadir
                              </label>
                              <label class="radio-inline">
                                <input type="radio" class="form-control" name="entry.1639849738" value="Tidak bisa hadir"> Berhalangan Hadir
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
                    <span class="copyright">Created with fully <i class="fa fa-heart" style="color : red"></i> at Jakarta, Indonesia</span>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline quicklinks">
                        <li><a href="http://koondang.in" target="_blank" style="color : #333 ">Design Modified by koondang.in</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="http://localhost/firda/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://localhost/firda/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="http://localhost/firda/js/jqBootstrapValidation.js"></script>
    <script src="http://localhost/firda/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="http://localhost/firda/js/agency.min.js"></script>


</body>

</html>
