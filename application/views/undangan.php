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
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/chtbox.css">
</head>

<body>
<style>
        .cover{
            background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php echo base_url(); ?>asset/image/coveralter1.jpg');
            height: 100vh;background-position: center;
            background-repeat: no-repeat;
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

@keyframes mymove {
  50% {transform: rotate(180deg);}
}

    </style>
        <section>
            <div class="cover img-fluid mx-auto" style="display: flex; flex-direction: column; justify-content: space-between;">
                <div class="col-12">
                    <div class="text-center" >
                        <p class="font-amiri text-white  pt-5 ">The Wedding Of</p>
                        <p class="font-cinzelDeco glow-text fs-1">Farif & Sandra</p>
                        <p class="font-amiri  pt-3 mb-0 text-white">Kepada Yth :</p>
                        <p class="font-amiri mb-0 text-white"><?=$panggilan.". ".$nama?></p>
                    </div>
                </div>
                <div class="col-12 pb-5">
                    <div class="text-center">
                    <a class="btn btn-default font-two fw-bold" href="<?php echo base_url(); ?>index.php/Unweb/main/<?=$id?>" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="18    " height="18    " fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                        </svg>&nbsp; Buka Undangan
                    </a>
                    </div>
                </div>
            </div>
        </section>
      
    <section>
        <audio id="audio" autoplay loop="loop">
            <source src="<?php echo base_url(); ?>asset/bgmusic.mp3" type="audio/mp3">
        </audio>
        <button id="playPauseBTN" style="position: absolute;top:20px; z-index:1000" class="btn btn-audio" onclick="playPause()">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>