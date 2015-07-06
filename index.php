<!DOCTYPE html>
<html lang="en">
<?php include ('layout/head.php') ?>


<body id="page-top">
    <?php include ('layout/navbar.php') ?>
    <?php include ('layout/header.php') ?>

    <section id="new-classes" class="no-padding">

        <div class="bottom-border container-fluid white-text">
            <div class="row  no-padding ">
                <div class="rocket-bg yellow-bg col-lg-2  col-md-2 text-center">
                    <div class=" no-padding-top padding-narrow service-box">

                        <h3>Kelas Terbaru</h3>
                        <img class="icon-medium" src="img/new.png"/>
                    </div>
                </div>
                <div class="col-lg-10 tes text-center">
                    <!-- Place somewhere in the <body> of your page -->
                    <div class="flexslider">
                      <ul class="slides">
                        <li>
                        <img class="img-video-small" src="contents/gambar-4.png" />
                        <a class="text-left new-info title" href="#">
                        <?php include ('contents/judul-1.txt'); ?>
                        </a>
                      </li>
                      <li>
                         <img class="img-video-small" src="contents/gambar-2.png" />
                      </li>
                      <li>
                         <img class="img-video-small" src="contents/gambar-3.png" />
                      </li>
                      <li>
                          <img class="img-video-small" src="contents/gambar-4.png" />
                      </li>
                       <li>
                         <img class="img-video-small" src="contents/gambar-2.png" />
                      </li>
                      <!-- items mirrored twice, total of 12 -->
                  </ul>
              </div>

          </div>

      </div>
  </div>
</section>
<?php include('sections/recent-info.php'); ?>
<?php include('layout/quote.php'); ?>


<?php include('layout/footer.php') ?>

<?php include('layout/foot.php') ?>


</body>

</html>
