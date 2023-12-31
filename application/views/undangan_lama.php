<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cinzel&family=Cinzel+Decorative&family=Great+Vibes&family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>Pria & Wanita</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/chtbox.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
    <nav class="navbar navbar-bottom fixed-bottom nav-buttom radius-nav shadow">
        <div class="container p-0">
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item flex-fill">
                    <a class="nav-link p-0 active" href="#home">
                        <span class="icon span-icon-nav-buttom"><img src="<?php echo base_url(); ?>asset/icon/1.png"
                                    class="icon-nav-buttom-b"></span>
                        <span class="nav-title">Home</span>
                    </a>
                </li>
                <li class="nav-item flex-fill">
                    <a class="nav-link p-0 active" href="#mempelai">
                        <span class="icon span-icon-nav-buttom"><img src="<?php echo base_url(); ?>asset/icon/4.png"
                                    class="icon-nav-buttom-m"></span>
                        <span class="nav-title">Mempelai</span>
                    </a>
                </li>
                <li class="nav-item flex-fill">
                    <a class="nav-link p-0 active" href="#acara">
                        <span class="icon span-icon-nav-buttom" style="margin-bottom: 3px;"><img src="<?php echo base_url(); ?>asset/icon/5.png"
                                    class="icon-nav-buttom-a"></span>
                        <span class="nav-title">Acara</span>
                    </a>
                </li>
                <li class="nav-item flex-fill">
                    <a class="nav-link p-0 active" href="#galeri">
                        <span class="icon span-icon-nav-buttom"><img src="<?php echo base_url(); ?>asset/icon/2.png"
                                    class="icon-nav-buttom-m"></span>
                        <span class="nav-title">Galeri</span>
                    </a>
                </li>
                <li class="nav-item flex-fill">
                    <a class="nav-link p-0 active" href="#ucapan">
                        <span class="icon span-icon-nav-buttom" style="margin-bottom: 3px;"><img src="<?php echo base_url(); ?>asset/icon/3.png"
                                    class="icon-nav-buttom-a"></span>
                        <span class="nav-title">Ucapan</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- <div class="d-flex flex-row">
        <img src="<?php echo base_url(); ?>asset/image/flowerOne.svg" class="float-start img-fluid componen-left">
    </div>
    <div class="d-flex flex-row-reverse">
        <img src="<?php echo base_url(); ?>asset/image/flowerTwo.svg" class="float-end img-fluid componen-right">
    </div> -->
    <style>
        .cover{
            background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php echo base_url(); ?>asset/image/coveralter1.jpg');
            height: 64.5vh;background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .cover-batik{
            background:linear-gradient(0deg, rgba(0, 0, 0, -1), rgba(0, 0, 0, 0)), url('<?php echo base_url(); ?>asset/image/batik.jpg');
            background-position: center;
            background-repeat: repeat;
            background-size: cover;
        }

        .font-cinzel{
            font-family: 'Cinzel', serif;
        }

        .font-cinzelDeco{
            font-family: 'Cinzel Decorative', cursive;
        }
        
        .font-greatVibes{
            font-family: 'Great Vibes', cursive;
        }
        
        .font-monts{
            font-family: 'Montserrat', sans-serif;
        }

        .font-amiri{
            font-family: 'Amiri', serif;
            font-size: 16px;
        }

        .glow-text{
            color:#fff;
            text-shadow:1px 1px 10px #fff, 1px 1px 10px #ccc;
            font-size:48px;
            text-align:center;
        }

        .rotate{

        animation: mymove 5s infinite;
        }

        .ridge {
            border-style: ridge;
            border-width: 5px;
            border-color: #F4CDA6;
        }
        
        .inset {
            border-style: inset;
        }

@keyframes mymove {
  50% {transform: rotate(180deg);}
}

    </style>
    <section id="home">
        <div class="cover img-fluid mx-auto " style="display: flex; flex-direction: column; justify-content: space-between;">
           <div class="col-12">
                <div class="text-center" >
                    <p class="font-amiri text-white  pt-5 mb-0">The Wedding Of</p>
                    <p class="font-cinzelDeco glow-text fs-1 mb-0">Farif & Sandra</p>
                    <p class="font-amiri  pt-3 mb-0 text-white">Kepada Yth :</p>
                    <p class="font-amiri mb-0 text-white"><?=$panggilan."WEKS ".$nama?></p>
                </div>
            </div>
           <div class="col-12">
                <div class="text-center">
                   <a class="font-amiri text-gold btn btn-sm btn-default mb-5" href="#surah">Buka Undangan</a>
                </div>
            </div>
        </div>
    </section>
  
            <!-- <div class="col-12">
                <div class="text-center">
                    <p class="font-tree fs-3 font-bold color-one mt-100">Kami Akan Menikah</p>
                </div>
            </div>
        </div>
        <section class="componen-one">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <img src="<?php echo base_url(); ?>asset/image/image.svg" width="350">
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <p class="font-one mt-2 color-one font-size-55">Pria & Wanita</p>
                    <p class="font-tree fs-3 font-bold color-one" style="margin-top: -15px;">
                        Minggu, 05 Juni 2022
                    </p>
                    <a class="btn btn-default font-two fw-bold mt-5" href="undangan.html" role="button">Simpan Tanggal
                    </a>
                </div>
                <div class="d-flex justify-content-center font-tree fw-bold mt-4">
                    <span class="p-2">
                        <div class="shadow p-time py-2 mb-5 bg-default rounded-default text-white">
                            <h5 class="card-title text-center">03</h5>
                            <p class="card-text text-center" style="margin-top: -10px;">Hari</p></div>
                    </span>
                    <span class="p-2">
                        <div class="shadow p-time py-2 mb-5 bg-default rounded-default text-white">
                            <h5 class="card-title text-center">12</h5>
                            <p class="card-text text-center" style="margin-top: -10px;">Jam</p></div>
                    </span>
                    <span class="p-2">
                        <div class="shadow p-time py-2 mb-5 bg-default rounded-default text-white">
                            <h5 class="card-title text-center">60</h5>
                            <p class="card-text text-center" style="margin-top: -10px;">Menit</p></div>
                    </span>
                    <span class="p-2">
                        <div class="shadow p-time py-2 mb-5 bg-default rounded-default text-white">
                            <h5 class="card-title text-center">45</h5>
                            <p class="card-text text-center" style="margin-top: -10px;">Detik</p></div>
                    </span>
                </div>
            </div> -->
        <!-- </div> -->
    
    <!-- <div class="d-flex flex-row-reverse">
        <img src="<?php echo base_url(); ?>asset/image/flowerOne.svg" class="rotate-img-180 float-end img-fluid componen-left flower-left-2">
    </div>
    <div class="d-flex flex-row">
        <img src="<?php echo base_url(); ?>asset/image/flowerTwo.svg" class="rotate-img-180 float-end img-fluid componen-right flower-right-2">
    </div> -->
    <!-- <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(95, 95, 33, 0.35)" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(95, 95, 33, 0.55)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(95, 95, 33, 0.70)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#5F5F21" />
            </g>
    </svg> -->
    <section id="surah">
        <div class="container mb-5">
            <div class="row mt-3">
                <img class="img-fluid rotate" src="<?php echo base_url(); ?>asset/image/ornament3.png" style="max-width:20%;position:absolute;right:60px;bottom:5px" alt="" srcset="">
                <img class="img-fluid rotate" src="<?php echo base_url(); ?>asset/image/ornament2.png" style="max-width:30%;position:absolute;right:0px;bottom:0px" alt="" srcset="">
                <img class="img-fluid rotate" src="<?php echo base_url(); ?>asset/image/ornament3.png" style="max-width:20%;position:absolute;left:60px;bottom:203px" alt="" srcset="">
                <img class="img-fluid rotate" src="<?php echo base_url(); ?>asset/image/ornament2.png" style="max-width:30%;position:absolute;left:0px;" alt="" srcset="">
                <div class="pt-5 mb-3" style="display: flex; justify-content: center;">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/image/surah.jpg" style="max-width: 90%;border-radius: 10px;" alt="" srcset="">
                </div>
            </div>
            <div class="row">
                <!-- <div>
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/image/farsan.png" style="max-width:90%;" alt="" srcset="">
                </div> -->
                <div class=" p-2 rounded"> 
                    <span class="pt-5 pb-2 px-lg-5 font-amiri text-gold">
                    <p class="text-center app-font- py-2 px-lg-1">
                        “Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar
                        terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir"
                    </p>
                    <p class="text-center app-font-1 pb-0 ">- QS. Ar-Rum 21 -</p>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">  
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(251, 249, 240, 0.35)" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(251, 249, 240, 0.55)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(251, 249, 240, 0.70)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#FBF9F0" />
        </g>
    </svg>
    <section class="cover-batik">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <p class="font-amiri mt-5">
                            Tanpa men gurangi rasa hormat. Kami mengundang Bapak/Ibu/Saudara/i serta kerabat sekalian untuk menghadiri acara pernikahan kami:
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-row-reverse">
            <img src="<?php echo base_url(); ?>asset/image/flowerTree.svg" class="rounded rotate-img-180 float-endimg-fluid componen-left flower-left-3">
        </div>
        <div class="d-flex flex-row">
            <img src="<?php echo base_url(); ?>asset/image/flowerFore.svg" class="rounded rotate-img-180 float-end img-fluid componen-right flower-right-3">
        </div>
        
        <div class="container">
            <div class="row mt-3">
                <div class="col-12">
                    <div class="text-center">
                        <div class="d-flex justify-content-center mt-5">
                            <div class="text-center">
                                <img src="<?php echo base_url(); ?>asset/image/sandra.png" width="250">
                            </div>
                        </div>
                        <p class="font-cinzel fs-3">Sandra Destya Maharani</p>
                        <p class="font-amiri " style="margin-top: -15px;">
                            Putri Kedua 
                        </p>
                        <p class="font-amiri" style="margin-top: -15px;">
                            Bapak Poerwandi & Ibu Saudah
                        </p>
                        <a href="#" class="p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color: #000;" width="27" height="27" fill="currentColor" class="bi bi-facebook text-bg-light" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                        </a>
                        <a href="#" class="p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color: #000;" width="27" height="27" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                        </a>
                        <p class="mt-5 font-cinzelDeco fs-1">&</p>
                    </div>
                </div>
            </div>
            <div class="row mt-3 pb-5">
                <div class="col-12">
                    <div class="text-center">
                        <div class="d-flex justify-content-center mt-5">
                            <div class="text-center">
                                <img src="<?php echo base_url(); ?>asset/image/farif.png" width="250">
                            </div>
                        </div>
                        <p class="font-cinzel fs-3">Farif Chrissandy</p>
                        <p class="font-amiri " style="margin-top: -15px;">
                            Putra Pertama 
                        </p>
                        <p class="font-amiri " style="margin-top: -15px;">
                            Bapak Santoso & (Almh) Ibu Chrisstiany
                        </p>
                        <a href="#" class="p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color: #000;" width="27" height="27" fill="currentColor" class="bi bi-facebook text-bg-light" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                        </a>
                        <a href="#" class="p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color: #000;" width="27" height="27" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg class="waves rotate-img-180 " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba( 251, 249, 240, 0.35)" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba( 251, 249, 240, 0.55)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba( 251, 249, 240, 0.70)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#FBF9F0" />
        </g>
     </svg>
  
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <p class="font-one fs-1 color-one mt-100">Perjalanan Cerita Kami</p>
                </div>
            </div>
            <div class="grid">
                <div class="d-flex justify-content-center">
                    <div class="col-xl-8 col-lg-12">
                        <div class="row mt-2">
                            <ul>
                                <li class="link-vertical">
                                    <span class="line"></span>
                                    <span class="icon-love-one bg-circle-love">
                                </span>
                                </li>
                                <li class="link-vertical">
                                    <span class="line-one"></span>
                                    <span class="icon-love bg-white love-mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color: #5F5F21;" width="30" height="30" fill="currentColor" class="bi bi-balloon-heart-fill mt-2" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
                                    </svg>
                                </span>
                                    <div class="shadow px-4 py-3 bg-pjk rounded mt-2 w-shadow-1">
                                        <p class="fs-4 font-tree color-one font-bold">Awal Cerita</p>
                                        <p class="size-mobile">Tahun pertama kita ketemu dikenalkan oleh sahabatku SMP dan menjadi sahabat Habib waktu STM, setelah itu kita meniti karir kejenjang pendidikan yang berbeda pada saat itu lost contact hanya sebatas teman biasa.
                                        </p>
                                    </div>
                                </li>
                                <li class="link-vertical">
                                    <span class="line-one"></span>
                                    <span class="icon-love bg-white love-mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color: #5F5F21;" width="30" height="30" fill="currentColor" class="bi bi-balloon-heart-fill mt-2" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
                                    </svg>
                                </span>
                                    <div class="shadow px-4 py-3 bg-pjk rounded mt-4 w-shadow-1">
                                        <p class="fs-4 font-tree color-one font-bold">Acara Lamaran</p>
                                        <p class="size-mobile">Tepat pada tanggal 24 September 2020 kamu membawa kedua orangtuamu dan mengikatkan cincin dijari manisku.</p>
                                    </div>
                                </li>
                                <li class="link-vertical">
                                    <span class="line-last"></span>
                                    <span class="icon-love bg-white love-mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color: #5F5F21;" width="30" height="30" fill="currentColor" class="bi bi-balloon-heart-fill mt-2" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
                                    </svg>
                                </span>
                                    <div class="shadow px-4 py-3 bg-pjk rounded mt-4 w-shadow-1">
                                        <p class="fs-4 font-tree color-one font-bold">Acara Pernikahan</p>
                                        <p class="size-mobile">Kita memantapkan hati dan ingin menyempurnakan agama kita akan melangsungkan pernikahan pada Hari Minggu, 05 Juni 2022.</p>
                                    </div>
                                </li>
                                <li class="link-vertical">
                                    <span class="icon-love-last bg-circle-love">
                                </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-default">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <p class="font-one fs-1 text-white mt-100">Catat Tanggal Undangan Kami</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-row-reverse">
            <img src="<?php echo base_url(); ?>asset/image/flowerTree.svg" class="rounded rotate-img-180 float-endimg-fluid componen-left flower-left-4">
        </div>
        <div class="d-flex flex-row">
            <img src="<?php echo base_url(); ?>asset/image/flowerFore.svg" class="rounded rotate-img-180 float-end img-fluid componen-right flower-right-4">
        </div>
        <div class="container">
            <div class="row mt-3 pb-5">
                <div class="grid">
                    <div class="d-flex justify-content-center">
                        <div class="col-lg-9 col-md-12">
                            <div class="text-center">
                                <div class="shadow px-4 py-3 bg-pjk rounded mt-2 width-ctuk-1">
                                    <p class="fs-1 font-one color-one">Akad Nikah</p>
                                    <p class="fs-4 font-tree color-one font-bold">Minggu, 05 Juni 2022</p>
                                    <p class="fs-4 font-tree color-one mt-min15">Pukul 09.00 WIB</p>
                                    <p class="fs-4 font-tree color-one font-bold mt-min15">Alamat : Ds Pagu Kec. Wates Kab. Kediri</p>
                                </div>
                                <div class="shadow px-4 py-3 bg-pjk rounded mt-5 width-ctuk-1">
                                    <p class="fs-1 font-one color-one">Resepsi</p>
                                    <p class="fs-4 font-tree color-one font-bold">Minggu, 05 Juni 2022</p>
                                    <p class="fs-4 font-tree color-one mt-min15">Pukul 09.00 WIB</p>
                                    <p class="fs-4 font-tree color-one font-bold mt-min15">Alamat : Ds Pagu Kec. Wates Kab. Kediri</p>
                                </div>
                                <div class="shadow px-2 py-2 bg-pjk rounded mt-5 width-maps-1">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15959.263050364727!2d109.20567025541988!3d0.06487693243539362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x53389dc8854c15e0!2sWajok%20Hilir%20Store!5e0!3m2!1sid!2sid!4v1659782651050!5m2!1sid!2sid"
                                        class="wh-maps" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg class="waves rotate-img-180 " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(95, 95, 33, 0.35)" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(95, 95, 33, 0.55)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(95, 95, 33, 0.70)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#5F5F21" />
            </g>
        </svg>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <p class="font-one fs-1 color-one mt-100">Gallery Foto</p>
                </div>
            </div>
            <div class="grid">
                <div class="d-flex justify-content-center">
                    <div class="container">
                        <div id="carouselExampleControls" class="carousel slide mt-5" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="grid">
                                        <div class="d-flex justify-content-center">
                                            <img src="<?php echo base_url(); ?>asset/image/wanita.png" class="d-block w-50" alt="<?php echo base_url(); ?>asset/image/wanita.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="grid">
                                        <div class="d-flex justify-content-center">
                                            <img src="<?php echo base_url(); ?>asset/image/wanita.png" class="d-block w-50" alt="<?php echo base_url(); ?>asset/image/wanita.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="grid">
                                        <div class="d-flex justify-content-center">
                                            <img src="<?php echo base_url(); ?>asset/image/wanita.png" class="d-block w-50" alt="<?php echo base_url(); ?>asset/image/wanita.png">
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon bg-default rounded-circle" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon bg-default rounded-circle" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme mt-5" id="sliderDonasi">
                            <div class="item">
                                <div class="card shadow-campaign">
                                    <img src="<?php echo base_url(); ?>asset/image/pria.png" loading="lazy" width="500" class="card-img fit-cover">
                                </div>
                            </div>
                            <div class="item">
                                <div class="card shadow-campaign">
                                    <img src="<?php echo base_url(); ?>asset/image/pria.png" loading="lazy" width="152" class="card-img fit-cover">
                                </div>
                            </div>
                            <div class="item">
                                <div class="card shadow-campaign">
                                    <img src="<?php echo base_url(); ?>asset/image/pria.png" loading="lazy" width="152" class="card-img fit-cover">
                                </div>
                            </div>
                            <div class="item">
                                <div class="card shadow-campaign">
                                    <img src="<?php echo base_url(); ?>asset/image/pria.png" loading="lazy" width="152" class="card-img fit-cover">
                                </div>
                            </div>
                            <div class="item">
                                <div class="card shadow-campaign">
                                    <img src="<?php echo base_url(); ?>asset/image/pria.png" loading="lazy" width="152" class="card-img fit-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-100">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(95, 95, 33, 0.35)" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(95, 95, 33, 0.55)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(95, 95, 33, 0.70)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#5F5F21" />
            </g>
        </svg>
    </div>
    <section class="bg-default">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <p class="font-one fs-1 text-white mt-100">Dompet Digital</p>
                        <p class="font-tree fs-5 text-white" style="margin-top: -15px;">
                            Doa Restu Anda merupakan karunia yang sangat berarti bagi kami. Dan jika memberi adalah ungkapan tanda kasih Anda, Anda dapat memberi kado secara cashless.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-row-reverse">
            <img src="<?php echo base_url(); ?>asset/image/flowerTree.svg" class="rounded rotate-img-180 float-endimg-fluid componen-left flower-left-4">
        </div>
        <div class="d-flex flex-row">
            <img src="<?php echo base_url(); ?>asset/image/flowerFore.svg" class="rounded rotate-img-180 float-end img-fluid componen-right flower-right-4">
        </div>
        <div class="container">
            <div class="row mt-3 pb-5">
                <div class="grid">
                    <div class="d-flex justify-content-center">
                        <div class="col-lg-8 col-md-12">
                            <div class="text-center">
                                <div class="shadow px-4 py-3 bg-pjk rounded mt-2" style="height: 14rem;">
                                    <img src="<?php echo base_url(); ?>image/bni.png" width="120">
                                    <hr class="border border-default border-2 opacity-50">
                                    <p class="fs-4 font-tree color-one font-bold">No. Rekening : 030220103</p>
                                    <button class="btn btn-default font-two fw-bold mt-min15" href="undangan.html" role="button">Salin</button>
                                    <p class="fs-4 font-tree color-one font-bold">An. Muhammad Ardiansyah</p>
                                </div>
                                <div class="shadow px-4 py-3 bg-pjk rounded mt-5" style="height: 14rem;">
                                    <img src="<?php echo base_url(); ?>asset/image/bni.png" width="120">
                                    <hr class="border border-default border-2 opacity-50">
                                    <p class="fs-4 font-tree color-one font-bold">No. Rekening : 030220103</p>
                                    <button class="btn btn-default font-two fw-bold mt-min15" href="undangan.html" role="button">Salin</button>
                                    <p class="fs-4 font-tree color-one font-bold">An. Muhammad Ardiansyah</p>
                                </div>
                                <div class="shadow px-4 py-3 bg-pjk rounded mt-5" style="height: 14rem;">
                                    <p class="font-tree fs-1 color-one font-bold">KIRIM HADIAH</p>
                                    <hr class="border border-default border-2 opacity-50">
                                    <p class="fs-4 font-tree color-one font-bold">Alamat</p>
                                    <p class="fs-4 font-tree color-one font-bold mt-min15">Jl. Wajok Hilir Kec. Jongkat Kab. Mempawah Kalimantan Barat 78351</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg class="waves rotate-img-180 " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(95, 95, 33, 0.35)" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(95, 95, 33, 0.55)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(95, 95, 33, 0.70)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#5F5F21" />
            </g>
        </svg>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <p class="font-one fs-1 color-one mt-100">Ucapkan Sesuatu</p>
                </div>
            </div>
            <div class="grid">
                <div class="d-flex justify-content-center">
                    <div class="col-xl-8 col-lg-12">
                        <div class="row mt-2">
                            <div class="mb-3">
                                <input type="email" class="form-control border-0 shadow-sm" id="exampleFormControlInput1" placeholder="Mohon maaf, hanya tamu undangan yang dapat memberikan ucapan!">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control border-0 shadow-sm" id="exampleFormControlTextarea1" rows="5" placeholder="Berikan Ucapan Dan Doa Restu"></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control border-0 shadow-sm" id="exampleFormControlInput1" placeholder="Konfirmasi Kehadiran">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-default font-two fw-bold" href="undangan.html" role="button">Simpan
                                </button>
                            </div>
                        </div>
                        <div class="shadow-sm p-3 mb-2 bg-body rounded">
                            <div class="row justify-content-center">
                                <p class="font-tree fs-5 color-one font-bold">4 Ucapan</p>
                                <hr class="border border-default border-1 opacity-50 mt-min15">
                                <div class="scrollspy-example" data-bs-spy="scroll" data-bs-target="#lex" id="ucapan" data-offset="20" style="height: 300px; overflow: auto;">
                                    <p class="font-tree fs-6 color-one font-bold">Ekayanti, S.Pd.,M.Pd <span class="badge rounded-pill bg-default">Hadir</span></p>
                                    <p class="font-tree fs-6 color-one mt-min10">
                                        Bootstrap 5 scrollspy plugin is a navigation system that highlights the navbar links as the user scrolls the page. Scrollspy indicates the position of the user on a web page which helps them to see where they are standing on that page. Scrollspy is only
                                        used with nav or list groups. Before using scrollspy the relative position must be applied to the Html body.
                                    </p>
                                    <hr class="border border-default border-1 opacity-50">
                                    <p class="font-tree fs-6 color-one font-bold">Ekayanti, S.Pd.,M.Pd <span class="badge rounded-pill bg-default">Hadir</span></p>
                                    <p class="font-tree fs-6 color-one mt-min10">
                                        Bootstrap 5 scrollspy plugin is a navigation system that highlights the navbar links as the user scrolls the page. Scrollspy indicates the position of the user on a web page which helps them to see where they are standing on that page. Scrollspy is only
                                        used with nav or list groups. Before using scrollspy the relative position must be applied to the Html body.
                                    </p>
                                    <hr class="border border-default border-1 opacity-50">
                                    <p class="font-tree fs-6 color-one font-bold">Ekayanti, S.Pd.,M.Pd <span class="badge rounded-pill bg-default">Hadir</span></p>
                                    <p class="font-tree fs-6 color-one mt-min10">
                                        Bootstrap 5 scrollspy plugin is a navigation system that highlights the navbar links as the user scrolls the page. Scrollspy indicates the position of the user on a web page which helps them to see where they are standing on that page. Scrollspy is only
                                        used with nav or list groups. Before using scrollspy the relative position must be applied to the Html body.
                                    </p>
                                    <hr class="border border-default border-1 opacity-50">
                                    <p class="font-tree fs-6 color-one font-bold">Ekayanti, S.Pd.,M.Pd <span class="badge rounded-pill bg-default">Hadir</span></p>
                                    <p class="font-tree fs-6 color-one mt-min10">
                                        Bootstrap 5 scrollspy plugin is a navigation system that highlights the navbar links as the user scrolls the page. Scrollspy indicates the position of the user on a web page which helps them to see where they are standing on that page. Scrollspy is only
                                        used with nav or list groups. Before using scrollspy the relative position must be applied to the Html body.
                                    </p>
                                    <hr class="border border-default border-1 opacity-50">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(95, 95, 33, 0.35)" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(95, 95, 33, 0.55)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(95, 95, 33, 0.70)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#5F5F21" />
            </g>
        </svg>
    </div>
    <section class="bg-default">
        <div class="d-flex flex-row-reverse">
            <img src="<?php echo base_url(); ?>asset/image/flowerTree.svg" class="rounded rotate-img-180 float-endimg-fluid componen-left flower-left-3">
        </div>
        <div class="d-flex flex-row">
            <img src="<?php echo base_url(); ?>asset/image/flowerFore.svg" class="rounded rotate-img-180 float-end img-fluid componen-right flower-right-3">
        </div>
        <div class="container">
            <div class="row mt-3 pb-5">
                <div class="grid">
                    <div class="d-flex justify-content-center">
                        <div class="col-lg-8 col-md-12">
                            <div class="text-center">
                                <div class="d-flex justify-content-center mt-5">
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>asset/image/image.svg" width="400">
                                    </div>
                                </div>
                                <p class="font-tree fs-5 text-white font-bold">
                                    Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila Bapak/Ibu/Saudara/i berkenan hadir dan memberikan doa restu. Atas kehadiran dan doa restunya, kami mengucapkan terima kasih.
                                </p>
                                <p class="font-one fs-1 text-white">Wassalamu'alaikum Wr. Wb</p>
                                <p class="font-one fs-3 text-white mt-5">Wanita & Pria</p>
                                <img src="<?php echo base_url(); ?>asset/image/qris.png" width="200">
                                <p class="font-tree fs-6 text-white font-bold mt-2">
                                    *Tampilkan barcode ini kepada panitia acara <br> pernikahan untuk mengisi buku tamu
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg class="waves rotate-img-180 " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(95, 95, 33, 0.35)" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(95, 95, 33, 0.55)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(95, 95, 33, 0.70)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#5F5F21" />
            </g>
        </svg>
    <div class="container">
        <div class="row mt-3 pb-5">
            <div class="col-12">
                <div class="text-center">
                    <p class="font-tree fs-6 color-one">
                        Design with ❤ by CahayaIT.com
                    </p>
                    <a href="#" class="p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" style="color: #5F5F21;" width="20" height="20" fill="currentColor" class="bi bi-facebook text-bg-light" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                    </a>
                    <a href="#" class="p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" style="color: #5F5F21;" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section>
        <audio id="audio" autoplay loop="loop">
            <source src="tes2.mp3" type="audio/mp3">
        </audio>

        <button id="playPauseBTN" class="btn btn-audio" onclick="playPause()">
            <label for="click" class="label-box">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-play-circle icon-chatbox" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
                </svg>
            </label>
        </button>

        <script>
            var audio = document.getElementById('audio');
            var playPauseBTN = document.getElementById('playPauseBTN');
            var count = 0;

            function playPause() {
                if (count == 0) {
                    count = 1;
                    audio.pause();
                } else {
                    count = 0;
                    audio.play();
                }
            }

            function stop() {
                playPause()
                audio.pause();
                audio.currentTime = 0
            }
        </script>
    </section>

    <br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- latest jquery file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- custom JS code after importing jquery and owl -->
    <script type="text/javascript">
        var slider = $('#sliderDonasi');
        slider.owlCarousel({
            stagePadding: 15,
            loop: false,
            margin: 20,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 4,
                    nav: false
                },
                600: {
                    items: 4,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: false,
                    loop: false
                }
            },
            dots: true,
        });
        $('.play').on('click', function() {
            slider.trigger('play.owl.autoplay', [5000])
        })
        $('.stop').on('click', function() {
            slider.trigger('stop.owl.autoplay')
        })
    </script>
    <script>
        $(function() {
            $('#ucapan').on('activate.bs.scrollspy')
        });
    </script>
</body>

</html>