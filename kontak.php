<?php
$pageTitle = "Kontak Kami";
$Description = "Kontak Kami";
include 'header.php';
?>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
  
        <!-- Page title -->
        <section id="page-title" data-bg-parallax="images/organisasi.jpeg">
            <div class="container">
                <div class="page-title text-dark">
                    <h1>Kontak Kami</h1>
                    <span>Sahabat Perjalananmu</span>
                </div>
              
            </div>
        </section>
        <!-- end: Page title -->
        <!-- CONTENT -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="text-uppercase">Hubungi</h3>
                        <p></p>
                        <div class="m-t-30">
                            <form class="widget-contact-form" action="include/contact-form-attachment.php" role="form" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Nama</label>
                                        <input type="text" aria-required="true" name="widget-contact-form-name" class="form-control name" placeholder="Enter your Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" aria-required="true" required name="widget-contact-form-email" class="form-control email" placeholder="Enter your Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="subject">Subjek</label>
                                        <input type="text" name="widget-contact-form-subject" class="form-control" placeholder="Subject...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message">Pesan</label>
                                    <textarea type="text" name="widget-contact-form-message" rows="5" class="form-control " placeholder="Enter your Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="message">Attachment file<small>*</small></label>
                                    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                                    <input type="file" aria-required="true" name="widget-contact-form-attachment" class="form-control required" />
                                </div>
                                <!--   <div class="form-group">
                                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                    <div class="g-recaptcha" data-sitekey="6LddCxAUAAAAAKOg0-U6IprqOZ7vTfiMNSyQT2-M"></div>
                                </div> -->
                                <button class="btn btn-primary" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Kirim</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="text-uppercase">Alamat</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <address>
                                    <strong>PT Adira Dinamika Multi Finance Tbk</strong><br>
                                    Jl. Jend. Ahmad Yani No. 80<br>
                                    Jakarta Selatan, DKI Jakarta<br>
                                    <abbr title="Phone">P:</h4> (021) 1500501
                                </address>
                            </div>
                        
                        </div>
                        <!-- Google Map -->
                        <div class="map" data-latitude="-6.2074832411286565" data-longitude="106.87363543836466" data-style="light" data-info="Hello from &lt;br&gt; Inspiro Themes"></div>
                        <!-- end: Google Map -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Content -->
       <?php include 'footer.php';?>
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <!--Template functions-->
    <script src="js/functions.js"></script>
    <!--Google Maps files-->
    <script type='text/javascript' src='//maps.googleapis.com/maps/api/js?key=AIzaSyBOksKHb9HyydVB-mcrqKUVfA_LeB79jcQ'></script>
    <script type="text/javascript" src="plugins/gmap3/gmap3.min.js"></script>
    <script type="text/javascript" src="plugins/gmap3/map-styles.js"></script>
</body>

</html>