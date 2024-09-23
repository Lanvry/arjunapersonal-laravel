<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/beta.css">
    <link href="https://api.fontshare.com/v2/css?f[]=clash-grotesk&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="{{ asset('css/locomotive-scroll.min.css') }}">
    <title>Arjuna Personal | Beta Version</title>
</head>

<body>
    <div id="navbar" class="navbar">
        <img class="img-navbar" src="img/facion.png" alt="">
        <button class="button-toggle" onclick="toggle()"><ion-icon name="reorder-three-outline"></ion-icon></button>
        <nav class="content-navbar">
            <ul>
                <li class="logo"><img src="img/facion.png" alt=""></li>
                <x-navbar-beta></x-navbar-beta>
            </ul>
        </nav>
    </div>
    <div class="dotted"></div>

    <div class="top">
        <div class="backtotop" onclick="backtotop()"><a href="#">0px</a></div>
        <div class="darktoggle">
            <input type="checkbox" id="switch" />
            <label for="switch">Toggle</label>
        </div>
    </div>


    <div style="padding-bottom: 10px" id="scroll-container" data-scroll-container>

        <div class="header">
            <h1 class="label"><b>Arjuna Personal</b></h1>
            <div class="link">
                <ul>
                    <x-navbar-beta></x-navbar-beta>
                </ul>
            </div>
        </div>



        <div class="welcome">
            <h1 class="welcome-label">Contact</h1>
            <p class="welcome-text">I' Am Arjuna Lanang Adiwarsana a Full Stack Developer</p>
        </div>


        <div id="contact" class="card contact-me ">
            <h3><b>Contact Me</b></h3>
            <form action="{{url('contact')}}" method="post">
                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col">
                        <label for="" class="label-control">Nama Lengkap</label>
                        <input type="text" name="namaLengkap" id="" class="form-control">
                    </div>
                    <div class="col">
                        <label for="" class="label-control">Nomor Telepon</label>
                        <input type="tel" name="nomorTelepon" id="" class="form-control">
                    </div>
                </div>
                <label for="" class="label-control">Email</label>
                <input type="email" name="email" id="" class="form-control">
                <label for="" class="label-control">Pesan</label>
                <textarea name="pesan" class="form-control" id=""></textarea><br>
                <input type="submit" value="Kirim" class="btn">
            </form>
        </div>



        <center>
            <p><b>@Copyright By Arjuna Lanang Adiwarsana </b></p>
        </center>
        <footer>
            <div class="grid">
                <div class="item">
                    <ul>
                        <li><h2><b>Myself</b></h2></li>
                         <p>Hello I' am Arjuna, Iam FrontEnd Developer who has passion for building clean web with intuitive functionalities. I Enjoy the process of turning ideas Into Realy Using creative Solution. im always curious, about learning new skills, tools, and concept, In addiction to working on varicus solo full stack projects, I have worked with creative Teams</p>
                    </ul>
                </div>
                <div class="grid-2">
                    <div class="item">
                        <ul>
                            <li><h2><b>Skill</b></h2></li>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JS</li>
                            <li>PHP</li>
                        </ul>
                    </div>
                    <div class="item">
                        <ul>
                            <li><h2><b>Projects</b></h2></li>
                            <li>Bakesbangpol</li>
                            <li>SMKBiodata</li>
                            <li>RPLClass</li>
                            <li>Mother Of Yarn</li>
                        </ul>
                    </div>
                    <div class="item">
                        <ul>
                            <li><h2><b>Contact</b></h2></li>
                            <li>Wardilanang46@gmail.com</li>
                            <li>085648077829</li>
                            <li>Dsn Tarebungan RT 04 RW 02 <br> Kalianget Timur, Sumenep, Jawa Timur</li>
                        </ul>
                    </div>
                </div>
            </div><br><br><br>
        </footer><br><br>
    </div>

    <script src="{{ asset('js/locomotive-scroll.min.js') }}"></script>
    <script src="js/beta.js"></script>
</body>

</html>
