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
<title>Wedding Of Sandra & Farif</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/chtbox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
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

        /* tambahan */

        .cover-photo{
            background:linear-gradient(0deg, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url('<?php echo base_url(); ?>asset/image/cover2.jpg');
            height: 130vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            transform: rotate(deg);
            position: relative;
            top: -100px;
            z-index:-999
        }

        .bg-cover-photo{
            background:rgba( 0, 0, 0, 0);
        }
        
        .closing-cover-photo{
            background:linear-gradient(0deg, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url('<?php echo base_url(); ?>asset/image/closing.jpg');
            height: 100vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        /* end tambahan */
        
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

        hr.new1 {
        border: 1px solid #FBF9F0;
        }
        
        hr.new2 {
        border: 1px solid #920A2F;
        }

        .stacked-linear {
  background: linear-gradient(
      217deg,
      rgba( 146, 10, 47, 0.8),
      rgba( 146, 10, 47, 0) 70.71%
    ), linear-gradient(127deg, rgba( 54,7,20, 0.8), rgba(146, 10, 47, 0) 70.71%),
    linear-gradient(336deg, rgba(54,7,20, 0.8), rgba(146, 10, 47, 0) 70.71%);
    }
    .bounce{
    animation: bounce .9s infinite alternate;
    }
    @keyframes bounce {
    to { transform: scale(1.2); }
    }


    @keyframes mymove {
    100% {transform: rotate(360deg);}
    }

    </style>
   
    <section id="home">
        <div class="cover img-fluid mx-auto " style="display: flex; flex-direction: column; justify-content: space-between;">
           <div class="col-12">
                <div class="text-center" >
                    <p class="font-amiri text-white  pt-5 mb-0">The Wedding Of</p>
                    <p class="font-cinzelDeco glow-text fs-1 mb-0">Farif & Sandra</p>
                    <p class="font-amiri  pt-3 mb-0 text-white">Kepada Yth :</p>
                    <p class="font-amiri mb-0 text-white"><?=$panggilan.". ".$nama?></p>
                </div>
            </div>
           <div class="col-12">
                <div class="text-center">
                   <a class="font-amiri text-burg btn btn-sm btn-default mb-5 bounce" href="#surah">Buka Undangan</a>
                </div>
            </div>
        </div>
    </section>

    <section id="surah">
        <div class="container mb-5">
            <div class="row mt-3" data-aos="flip-left" data-aos-delay="100" data-aos-duration="2000">
                <img class="img-fluid rotate ornament-sm-top" src="<?php echo base_url(); ?>asset/image/ornament3.png" style="max-width:20%;position:fixed;left:60px;bottom:203px" alt="" srcset="">
                <img class="img-fluid rotate ornament-bg-top" src="<?php echo base_url(); ?>asset/image/ornament2.png" style="max-width:30%;position:fixed;left:0px;" alt="" srcset="">
                <img class="img-fluid rotate ornament-sm-btm" src="<?php echo base_url(); ?>asset/image/ornament3.png" style="max-width:20%;position:fixed;right:60px;bottom:5px" alt="" srcset="">
                <img class="img-fluid rotate ornament-bg-btm" src="<?php echo base_url(); ?>asset/image/ornament2.png" style="max-width:30%;position:fixed;right:0px;bottom:0px" alt="" srcset="">
                <div class="pt-5 mb-3" style="display: flex; justify-content: center;">
                <img class="img-fluid" src="<?php echo base_url(); ?>asset/image/surah.jpg" style="max-width: 90%;border-radius: 10px;" alt="" srcset="">
            </div>
            </div>
            <div class="row">
                <!-- <div>
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/image/farsan.png" style="max-width:90%;" alt="" srcset="">
                </div> -->
                <div class=" p-4 rounded" data-aos="flip-right" data-aos-delay="200"
    data-aos-duration="2000"> 
                    <span class="pt-5 pb-2 px-lg-5 font-amiri text-gold">
                    <p class="text-center app-font-1 py-2 px-lg-5">
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
        <div class="container" data-aos="zoom-in-up" data-aos-delay="300"
    data-aos-duration="2000">
            <div class="row">
                <div class="col-12">
                    <div class="text-center" >
                        <p class="font-amiri mt-5">
                            Tanpa mengurangi rasa hormat. Kami mengundang Bapak/Ibu/Saudara/i serta kerabat sekalian untuk menghadiri acara pernikahan kami:
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
            <div class="row mt-3" data-aos="zoom-in-up" data-aos-delay="400"
    data-aos-duration="2000">
                <div class="col-12">
                    <div class="text-center">
                        <div class="d-flex justify-content-center mt-5" >
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
                        <p data-aos="zoom-in-up" data-aos-delay="400"
    data-aos-duration="2000" class="mt-5 font-cinzelDeco fs-1">&</p>
                    </div>
                </div>
            </div>
            <div class="row mt-3 pb-5" data-aos="zoom-in-up" data-aos-delay="600"
    data-aos-duration="2000">
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
    <!-- tambahan -->
    <svg class="waves rotate-img-180 " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba( 240, 241, 245, 0.35)" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba( 240, 241, 245, 0.55)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba( 240, 241, 245, 0.70)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#F0F1F5" />
        </g>
    </svg>
    <div class="cover-photo" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-delay="400"
     data-aos-duration="1500"></div>
    <!-- end tambahan -->
    <section id="acara"  data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-delay="400"
     data-aos-duration="1500">
        <div class=" container">
            <div class="row mt-3 pb-5" >
                <!-- tambahan ganti ke col-lg-xx-12 kabeh -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="text-center">
                        <div class="shadow stacked-linear px-4 py-3 mt-2" style="border-width: 9px;border-style: ridge;border-color:#F4CDA6">
                            <p class="fs-1 font-cinzel color-one mt-3">Akad Nikah</p>
                            <hr class="new1">
                            <p class="font-amiri color-one font-bold">Sabtu, 01 Juli 2023</p>
                            <p class="font-amiri color-one mt-min15">Pukul 08.00 WIB</p>
                            <hr class="new1">
                            <p class="font-amiri color-one font-bold">Masjid Ar-Rahman Kota Blitar</p>
                            <p class="font-amiri color-one mt-min15">Jl. Ciliwung No.2, Bendo, Kec. Kepanjenkidul, Kota Blitar</p>
                            <div class="text-center">
                                <img src="<?php echo base_url(); ?>asset/image/line.png" width="100">
                            </div>
                            <p class="fs-1 font-cinzel color-one mt-3">Resepsi</p>
                            <hr class="new1">
                            <p class="font-amiri color-one font-bold">Sabtu, 01 Juli 2023</p>
                            <p class="font-amiri color-one mt-min15">Pukul 13.00 WIB</p>
                            <hr class="new1">
                            <p class="font-amiri color-one font-bold">RM. Bu Mamik</p>
                            <p class="font-amiri color-one mt-min15">Jl. Kalimantan No.11a, Sananwetan, Kec. Sananwetan, Kota Blitar</p>
                        </div>
                          <!-- tambahan justify-content-center -->
                        <div class="d-flex justify-content-center shadow text-center px-0 py-2 rounded mt-5 width-maps-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15959.263050364727!2d109.20567025541988!3d0.06487693243539362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x53389dc8854c15e0!2sWajok%20Hilir%20Store!5e0!3m2!1sid!2sid!4v1659782651050!5m2!1sid!2sid"
                                class="wh-maps" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
    .head-gal {
    text-align: center;
    padding: 32px;
    }

    .row-gal {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    padding: 0 4px;
    }

    /* Create four equal columns that sits next to each other */
    .column-gal {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
    max-width: 25%;
    padding: 0 4px;
    }

    .column-gal img {
    margin-top: 8px;
    vertical-align: middle;
    width: 100%;
    }

    /* Responsive layout - makes a two column-gal-layout instead of four column-gals */
    @media screen and (max-width: 800px) {
    .column-gal {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
    }
    }

    /* Responsive layout - makes the two column-gals stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
    .column-gal {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
    }
    }
    </style>
    <section id="galeri" class="cover-batik">
        <div class="container pb-5" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-delay="400"
     data-aos-duration="1500">
            <div class="head-gal">
                <h1 class="font-cinzel text-burg text-bold" style="color:#920A2F;text-shadow: #000;">Galeri</h1>
            </div>
            <!-- Photo Grid -->
            <div class="my-5">
                <video class="vid" width="100%" controls muted>
                <source src="<?php echo base_url(); ?>asset/video.mp4" type="video/mp4">
                Your browser does not support HTML video.
                </video>
            </div>
        <!-- tambahan -->
            <div class="row-gal"> 
                <div class="column-gal">
                    <img src="<?php echo base_url(); ?>asset/image/img1.jpg" style="width:100%">
                    <img src="<?php echo base_url(); ?>asset/image/img2.jpg" style="width:100%">
                    <img src="<?php echo base_url(); ?>asset/image/img3.jpg" style="width:100%">
                    <img src="<?php echo base_url(); ?>asset/image/img7.jpg" style="width:100%">
                </div>
                <div class="column-gal">
                    <img src="<?php echo base_url(); ?>asset/image/img10.jpg" style="width:100%">
                    <img src="<?php echo base_url(); ?>asset/image/img6.jpg" style="width:100%">
                    <img src="<?php echo base_url(); ?>asset/image/img4.jpg" style="width:100%">
                    <img src="<?php echo base_url(); ?>asset/image/img10.jpg" style="width:100%">
                </div>
                <div class="column-gal">
                    <img src="<?php echo base_url(); ?>asset/image/img8.jpg" style="width:100%">
                    <img src="<?php echo base_url(); ?>asset/image/img14.jpg" style="width:100%">
                    <img src="<?php echo base_url(); ?>asset/image/img15.jpg" style="width:100%">
                    <img src="<?php echo base_url(); ?>asset/image/img23.jpg" style="width:100%">
                </div>
                <div class="column-gal">
                    <img src="<?php echo base_url(); ?>asset/image/img19.jpg" style="width:100%">
                    <img src="<?php echo base_url(); ?>asset/image/img20.jpg" style="width:100%">
                    <img src="<?php echo base_url(); ?>asset/image/img16.jpg" style="width:100%">
                    <img src="<?php echo base_url(); ?>asset/image/img21.jpg" style="width:100%">
                </div>
            </div>
        <!-- end tambahan -->
        </div>
    </section>
    <section style="background-color: #F4CDA6;">
        <div class="container" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-delay="400"
     data-aos-duration="1500">
            <div class="row mx-3 pt-3 bg-burg">
                <div class="col-12 mb-5">
                    <div class="text-center">
                        <p class="font-cinzelDeco fs-1 color-one mt-100">R.S.V.P</p>
                    </div>
                </div>
                <div class="grid">
                    <div class="d-flex justify-content-center">
                        <div class="col-xl-8 col-lg-12">
                <?php 
                  if(empty($cekUcapan)){
                        echo form_open('index.php/Unweb/insertRsvp/'.$id, 'role="form" class="form-horizontal" enctype= "multipart/form-data"');
                        ?>
                        <form action="">
                            <div class="row mt-2">
                                <div class="mb-3">
                                    <label for="" class="font-amiri color-one">Nama</label>
                                    <input type="text" name="nama_tamu" value="<?=$nama?>" class="form-control border-0 shadow-sm" id="exampleFormControlInput1" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="font-amiri color-one">Ucapan</label>
                                    <textarea class="form-control border-0 shadow-sm" name="pesan" id="exampleFormControlTextarea1" rows="5" placeholder="Berikan Ucapan Dan Doa Restu"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="font-amiri color-one">Konfirmasi Kehadiran</label>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="attendance" value="hadir" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Hadir
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="attendance" value="tidak hadir" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Tidak Hadir
                                    </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-default font-amiri text-burg fw-bold" name="insert_rsvp" type="submit" >Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                <?php }?>
                            <style>
                            .text-gold{
    color: #F4CDA6;
}
                            .text-burg{
                                color: #920A2F;
                            }

                            .bg-default{
    background-color:#920A2F;
}
                            </style>
                               <?php 
                    if(!empty($ucapanAll)){
                      $jumlah=count($ucapanAll);
                    //   var_dump($ucapanAll);
                      ?>
                            <div class="shadow-sm p-3 mb-5 bg-body rounded">
                                <div class="row justify-content-center">
                                    <p class="font-amiri fs-5 font-bold"><?=$jumlah?> Ucapan</p>
                                    <hr class="border border-default border-1 opacity-50 mt-min15">
                                    <div class="scrollspy-example" data-bs-spy="scroll" data-bs-target="#lex" id="ucapan" data-offset="20" style="height: 300px; overflow: auto;">
                                        <?php foreach ($ucapanAll as $row){
                                            // print_r($row);
                                            ?>
                                        <p class="font-amiri fs-6 font-bold"><span class="badge rounded-pill bg-default"><?=$row['nama']?></span></p>
                                        <p class="font-amiri fs-6 mt-min10">
                                           <?=$row['pesan']?>
                                        </p>
                                        <hr class="border border-default border-1 opacity-50">
                                        <?php  }?>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="shadow-sm p-3 mb-5 bg-body rounded">
                                <div class="row justify-content-center">
                                    <p class="font-amiri fs-5 font-bold">4 Ucapan</p>
                                    <hr class="border border-default border-1 opacity-50 mt-min15">
                                    <div class="scrollspy-example" data-bs-spy="scroll" data-bs-target="#lex" id="ucapan" data-offset="20" style="height: 300px; overflow: auto;">
                                        <p class="font-amiri fs-6 font-bold">Ekayanti, S.Pd.,M.Pd <span class="badge rounded-pill bg-default">Hadir</span></p>
                                        <p class="font-amiri fs-6 mt-min10">
                                            Bootstrap 5 scrollspy plugin is a navigation system that highlights the navbar links as the user scrolls the page. Scrollspy indicates the position of the user on a web page which helps them to see where they are standing on that page. Scrollspy is only
                                            used with nav or list groups. Before using scrollspy the relative position must be applied to the Html body.
                                        </p>
                                        <hr class="border border-default border-1 opacity-50">
                                        <p class="font-amiri fs-6 font-bold">Ekayanti, S.Pd.,M.Pd <span class="badge rounded-pill bg-default">Hadir</span></p>
                                        <p class="font-amiri fs-6 mt-min10">
                                            Bootstrap 5 scrollspy plugin is a navigation system that highlights the navbar links as the user scrolls the page. Scrollspy indicates the position of the user on a web page which helps them to see where they are standing on that page. Scrollspy is only
                                            used with nav or list groups. Before using scrollspy the relative position must be applied to the Html body.
                                        </p>
                                        <hr class="border border-default border-1 opacity-50">
                                        <p class="font-amiri fs-6 font-bold">Ekayanti, S.Pd.,M.Pd <span class="badge rounded-pill bg-default">Hadir</span></p>
                                        <p class="font-amiri fs-6 mt-min10">
                                            Bootstrap 5 scrollspy plugin is a navigation system that highlights the navbar links as the user scrolls the page. Scrollspy indicates the position of the user on a web page which helps them to see where they are standing on that page. Scrollspy is only
                                            used with nav or list groups. Before using scrollspy the relative position must be applied to the Html body.
                                        </p>
                                        <hr class="border border-default border-1 opacity-50">
                                        <p class="font-amiri fs-6 font-bold">Ekayanti, S.Pd.,M.Pd <span class="badge rounded-pill bg-default">Hadir</span></p>
                                        <p class="font-amiri fs-6 mt-min10">
                                            Bootstrap 5 scrollspy plugin is a navigation system that highlights the navbar links as the user scrolls the page. Scrollspy indicates the position of the user on a web page which helps them to see where they are standing on that page. Scrollspy is only
                                            used with nav or list groups. Before using scrollspy the relative position must be applied to the Html body.
                                        </p>
                                        <hr class="border border-default border-1 opacity-50">
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #000;" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-delay="400"
     data-aos-duration="1500">
        <svg class="waves bg-gold" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
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
    <div class="closing-cover-photo d-flex flex-column align-items-center pt-5"  >
        <p class="font-amiri fs-3">See You in Our Big Day</p>
        <p class="font-cinzelDeco fs-1">Sandra & Farif</p>
    </div>
    </section>
    <section style="background-color: #000;">
        <div class="container" >
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <p class="font-cinzel color-one mt-5">
                            Design with ❤ by Sandra Destya.
                        </p>
                    </div>
                </div>
            </div>
            <br><br><br>
        </div>
    </section>
    <section style="background-color: #000;" hidden>
        <audio id="audio" controls autoplay loop="loop">
            <source src="<?php echo base_url(); ?>asset/bgmusic.mp3" type="audio/mp3">
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
    <script>
      var videos = document.getElementsByTagName("video");

function checkScroll() {
    var fraction = 0.8; // Play when 80% of the player is visible.

    for(var i = 0; i < videos.length; i++) {

        var video = videos[i];

        var x = video.offsetLeft, y = video.offsetTop, w = video.offsetWidth, h = video.offsetHeight, r = x + w, //right
            b = y + h, //bottom
            visibleX, visibleY, visible;

            visibleX = Math.max(0, Math.min(w, window.pageXOffset + window.innerWidth - x, r - window.pageXOffset));
            visibleY = Math.max(0, Math.min(h, window.pageYOffset + window.innerHeight - y, b - window.pageYOffset));

            visible = visibleX * visibleY / (w * h);

            if (visible > fraction) {
                video.play();
            } else {
                video.pause();
            }

    }

}

window.addEventListener('scroll', checkScroll, false);
window.addEventListener('resize', checkScroll, false);
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>