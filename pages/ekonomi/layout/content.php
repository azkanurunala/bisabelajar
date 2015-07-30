
    <h3 class="text-center white-text "> Konsumsi, Tabungan, dan Investasi</h3>

    <div class="row tab tab-content text-center top-padding-narrow">
        <div id="video" class="tab-pane active">
        <?php include ('tabSwitch.php'); ?>
            <div class="row">
                    <iframe allow-fullscreen="true" width="790" height="400" src="https://www.youtube.com/embed/vj7XExwChwI"  frameborder="0" allowfullscreen>
                    </iframe>
            </div>
            <?php include ('pages/ekonomi/layout/socmed.php') ?>
            <div class="row top-green-border bottom-green-border ">
                <div class="col-lg-3 text-left">
                    <a href="#"  class="yellow-outlined  padding-all-narrow btn btn-primary btn-xl ">
                    <i class="social-icon-2 fa fa-chevron-left"></i>SEBELUMNYA</a>
                </div>
                 <div class="col-lg-3 text-center">
                    <a href="#"  class="yell-bg  padding-all-narrow btn btn-primary btn-xl ">
                    IKUTI KELAS<i class="social-icon-2 fa fa-sign-in"></i></a>
                </div>
                 <div class="col-lg-3 text-center">
                    <a href="#"  class="red-bg padding-all-narrow btn btn-primary btn-xl ">
                    UNDUH VIDEO<i class="social-icon-2 fa fa-download"></i></a>
                </div>
                 <div class="col-lg-3 text-right">
                    <a href="#2" data-toggle="tab"  class="yellow-outlined  padding-all-narrow btn btn-primary btn-xl ">
                    SELANJUTNYA<i class="social-icon-2 fa fa-chevron-right"></i></a>
                </div>
            </div>
            <?php include ('pages/ekonomi/layout/comment.php') ?>


        </div>

        <div id="latihan" class="tab-pane ">

            <?php include ('tabSwitch.php'); ?>
            <div id="1" class="tab-pane active">
                <div class="top-padding-narrow latihan row left-padding right-padding  grey-bg ">
                    <h4 class="text-left bold">Soal Nomor 1</h4>
                    <p  class="font-green text-justify ">
                    <?php include ('soal-1.txt'); ?>
                    </p>
                </div>

                <div class="bottom-radius-narrow row left-padding right-padding  white-bg top-padding-narrow bottom-padding-narrow">
                    <div class="col-lg-4 text-left padding-bottom-narrow">
                        <a id="option-1" href="#"  onclick="select1()" class="yell-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-check-square-o"></i> Pilihan 1</a>
                    </div>
                    <div class="col-lg-4 text-left bottom-padding-narrow">
                        <a id="option-2" href="#"  onclick="select2()" class="red-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-square-o"></i> Pilihan 2</a>
                    </div>
                    <div class="col-lg-4 text-left bottom-padding-narrow">
                        <a id="option-3" href="#"  onclick="select3()" class="red-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-square-o"></i> Pilihan 3</a>
                    </div>
                    <div class="col-lg-4 text-left bottom-padding-narrow">
                        <a id="option-4" href="#"  onclick="select4()" class="red-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-square-o"></i> Pilihan 4</a>
                    </div>
                    <div class="col-lg-4 text-left bottom-padding-narrow">
                        <a id="option-5" href="#" onclick="select5()"  class="red-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-square-o"></i> Pilihan 5</a>
                    </div>
                </div>
               <div class="row top-green-border bottom-green-border ">
                    <div class="col-lg-6 text-left">
                        <a href="#" data-toggle="tab"  class="yellow-outlined  padding-all-narrow btn btn-primary btn-xl ">
                        <i class="social-icon-2 fa fa-chevron-left"></i>SEBELUMNYA</a>
                    </div>

                     <div class="col-lg-6 text-right">
                        <a href="#2" data-toggle="tab"  class="yellow-outlined  padding-all-narrow btn btn-primary btn-xl ">
                        SELANJUTNYA<i class="social-icon-2 fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div id="2" class="tab-pane">
                <div class="top-padding-narrow latihan row left-padding right-padding  grey-bg ">
                    <h4 class="text-left bold">Soal Nomor 2</h4>
                    <p  class="font-green text-justify ">
                    <?php include ('soal-2.txt'); ?>
                    </p>
                </div>

                <div class="bottom-radius-narrow row left-padding right-padding  white-bg top-padding-narrow bottom-padding-narrow">
                    <div class="row text-left bottom-padding-narrow">
                        <a href="#"  class="yell-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-check-square-o"></i> Pilihan 1 Ut auctor odio quis sem ullamcorper</a>
                    </div>
                    <div class="row text-left bottom-padding-narrow">
                        <a href="#"  class="red-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-square-o"></i> Pilihan 2 vitae vulputate dolor vestibulum</a>
                    </div>
                    <div class="row text-left bottom-padding-narrow">
                        <a href="#"  class="red-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-square-o"></i> Pilihan 3 Praesent quis odio vitae enim pharetra porta nec non nulla</a>
                    </div>
                    <div class="row text-left bottom-padding-narrow">
                        <a href="#"  class="red-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-square-o"></i> Pilihan 4 Quisque suscipit tortor eu arcu congue, et lacinia felis rhoncus</a>
                    </div>
                    <div class="row text-left bottom-padding-narrow">
                        <a href="#"  class="red-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-square-o"></i> Pilihan 5 Morbi posuere tellus vitae tempor luctus</a>
                    </div>
                </div>
               <div class="row top-green-border bottom-green-border ">
                    <div class="col-lg-6 text-left">
                        <a href="#1" data-toggle="tab"  class="yellow-outlined  padding-all-narrow btn btn-primary btn-xl ">
                        <i class="social-icon-2 fa fa-chevron-left"></i>SEBELUMNYA</a>
                    </div>

                     <div class="col-lg-6 text-right">
                        <a href="#3" data-toggle="tab"  class="yellow-outlined  padding-all-narrow btn btn-primary btn-xl ">
                        SELANJUTNYA<i class="social-icon-2 fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div id="3" class="tab-pane">
                <div class="top-padding-narrow latihan row left-padding right-padding  grey-bg ">
                    <h4 class="text-left bold">Soal Nomor 3</h4>
                    <p  class="font-green text-justify ">
                    <?php include ('soal-3.txt'); ?>
                    </p>
                </div>

                <div class="bottom-radius-narrow row left-padding right-padding  white-bg top-padding-narrow bottom-padding-narrow">
                    <div class="col-lg-4 text-left padding-bottom-narrow">
                        <a href="#"  class="yell-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-check-square-o"></i> Pilihan 1</a>
                    </div>
                    <div class="col-lg-4 text-left bottom-padding-narrow">
                        <a href="#"  class="red-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-square-o"></i> Pilihan 2</a>
                    </div>
                    <div class="col-lg-4 text-left bottom-padding-narrow">
                        <a href="#"  class="red-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-square-o"></i> Pilihan 3</a>
                    </div>
                    <div class="col-lg-4 text-left bottom-padding-narrow">
                        <a href="#"  class="red-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-square-o"></i> Pilihan 4</a>
                    </div>
                    <div class="col-lg-4 text-left bottom-padding-narrow">
                        <a href="#"  class="red-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-square-o"></i> Pilihan 5</a>
                    </div>
                </div>
               <div class="row top-green-border bottom-green-border ">
                    <div class="col-lg-6 text-left">
                        <a href="#2" data-toggle="tab"  class="yellow-outlined  padding-all-narrow btn btn-primary btn-xl ">
                        <i class="social-icon-2 fa fa-chevron-left"></i>SEBELUMNYA</a>
                    </div>

                     <div class="col-lg-6 text-right">
                        <a href="#4" data-toggle="tab"  class="yellow-outlined  padding-all-narrow btn btn-primary btn-xl ">
                        SELANJUTNYA<i class="social-icon-2 fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div id="4" class="tab-pane">
                <div class="top-padding-narrow latihan row left-padding right-padding  grey-bg ">
                    <h4 class="text-left bold">Soal Nomor 4</h4>
                    <p  class="font-green text-justify ">
                    <?php include ('soal-4.txt'); ?>
                    </p>
                </div>

                <div class="bottom-radius-narrow row left-padding right-padding  white-bg top-padding-narrow bottom-padding-narrow">
                    <div class="row text-left bottom-padding-narrow">
                        <a href="#"  class="yell-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-check-square-o"></i> Pilihan 1 Ut auctor odio quis sem ullamcorper</a>
                    </div>
                    <div class="row text-left bottom-padding-narrow">
                        <a href="#"  class="red-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-square-o"></i> Pilihan 2 vitae vulputate dolor vestibulum</a>
                    </div>
                    <div class="row text-left bottom-padding-narrow">
                        <a href="#"  class="red-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-square-o"></i> Pilihan 3 Praesent quis odio vitae enim pharetra porta nec non nulla</a>
                    </div>
                    <div class="row text-left bottom-padding-narrow">
                        <a href="#"  class="red-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-square-o"></i> Pilihan 4 Quisque suscipit tortor eu arcu congue, et lacinia felis rhoncus</a>
                    </div>
                    <div class="row text-left bottom-padding-narrow">
                        <a href="#"  class="red-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-square-o"></i> Pilihan 5 Morbi posuere tellus vitae tempor luctus</a>
                    </div>
                </div>
               <div class="row top-green-border bottom-green-border ">
                    <div class="col-lg-6 text-left">
                        <a href="#3" data-toggle="tab"  class="yellow-outlined  padding-all-narrow btn btn-primary btn-xl ">
                        <i class="social-icon-2 fa fa-chevron-left"></i>SEBELUMNYA</a>
                    </div>

                     <div class="col-lg-6 text-right">
                        <a href="#5" data-toggle="tab"  class="yellow-outlined  padding-all-narrow btn btn-primary btn-xl ">
                        SELANJUTNYA<i class="social-icon-2 fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div id="5" class="tab-pane ">
                <div class="top-padding-narrow latihan row left-padding right-padding  grey-bg ">
                    <h4 class="text-left bold">Soal Nomor 5</h4>
                    <p  class="font-green text-justify ">
                    <?php include ('soal-5.txt'); ?>
                    </p>
                </div>

                <div class="bottom-radius-narrow row left-padding right-padding  white-bg top-padding-narrow bottom-padding-narrow">
                    <div class="col-lg-4 text-left padding-bottom-narrow">
                        <a href="#"  class="yell-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-check-square-o"></i> Pilihan 1</a>
                    </div>
                    <div class="col-lg-4 text-left bottom-padding-narrow">
                        <a href="#"  class="red-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-square-o"></i> Pilihan 2</a>
                    </div>
                    <div class="col-lg-4 text-left bottom-padding-narrow">
                        <a href="#"  class="red-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-square-o"></i> Pilihan 3</a>
                    </div>
                    <div class="col-lg-4 text-left bottom-padding-narrow">
                        <a href="#"  class="red-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-square-o"></i> Pilihan 4</a>
                    </div>
                    <div class="col-lg-4 text-left bottom-padding-narrow">
                        <a href="#"  class="red-bg option padding-all-narrow btn btn-primary btn-xl ">
                        <i class="fa fa-square-o"></i> Pilihan 5</a>
                    </div>
                </div>
               <div class="row top-green-border bottom-green-border ">
                    <div class="col-lg-6 text-left">
                        <a href="#4" data-toggle="tab"  class="yellow-outlined  padding-all-narrow btn btn-primary btn-xl ">
                        <i class="social-icon-2 fa fa-chevron-left"></i>SEBELUMNYA</a>
                    </div>

                     <div class="col-lg-6 text-right">
                        <a href="#" data-target="#submitted" data-toggle="modal"  class="yell-bg  padding-all-narrow btn btn-primary btn-xl ">
                        KUMPULKAN JAWABAN<i class="social-icon-2 fa fa-check-circle-o"></i></a>
                    </div>
                </div>
            </div>

        </div>
        
        <div id="ringkasan" class="tab-pane ">
        <?php include ('tabSwitch.php'); ?>
            <div class="">
                <div class="bottom-radius bottom-margin-narrow top-padding-narrow latihan row left-padding right-padding  grey-bg ">
                    <h4 class="text-left bold">Ringkasan Materi</h4>
                    <p  class="font-green text-justify ">
                    <?php include ('soal-1.txt'); ?>
                    </p>

                    <h4 class="text-left bold">Teori Kunci</h4>
                    <p  class="font-green text-justify ">
                    <?php include ('soal-2.txt'); ?>
                    </p>

                    <h4 class="text-left bold">Rumus Penting</h4>
                    <p  class="font-green text-justify ">
                    <?php include ('soal-3.txt'); ?>
                    </p>
                    <h4 class="text-left bold">Penerapan Teori</h4>
                    <p  class="font-green text-justify ">
                    <?php include ('soal-4.txt'); ?>
                    </p>
                </div>
            </div>
            <!--?php include ('pages/ekonomi/layout/socmed.php') ?-->
            <div class="row top-green-border bottom-green-border ">
                <div class="col-lg-3 text-left">
                    <a href="#"  class="yellow-outlined  padding-all-narrow btn btn-primary btn-xl ">
                    <i class="social-icon-2 fa fa-chevron-left"></i>SEBELUMNYA</a>
                </div>
                 <div class="col-lg-3 text-center">
                    <a href="#"  class="yell-bg  padding-all-narrow btn btn-primary btn-xl ">
                    IKUTI KELAS<i class="social-icon-2 fa fa-sign-in"></i></a>
                </div>
                 <div class="col-lg-3 text-center">
                    <a href="#"  class="red-bg padding-all-narrow btn btn-primary btn-xl ">
                    UNDUH RINGKASAN<i class="social-icon-2 fa fa-download"></i></a>
                </div>
                 <div class="col-lg-3 text-right">
                    <a href="#2" data-toggle="tab"  class="yellow-outlined  padding-all-narrow btn btn-primary btn-xl ">
                    SELANJUTNYA<i class="social-icon-2 fa fa-chevron-right"></i></a>
                </div>
            </div>
            <?php include ('pages/ekonomi/layout/comment.php') ?>

        </div>
    </div>

