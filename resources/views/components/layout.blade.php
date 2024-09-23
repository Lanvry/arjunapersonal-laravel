<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" href="img/facion.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ $css }}">

    <title>Arjuna Personal | {{ $title }}</title>
</head>

<body>
    <div class="dotted"></div>
    <div class="backdropblur"></div>
    <div class="nav-popup" id="navbar">
        <button onclick="navbaroff()"><ion-icon name="close-outline"></ion-icon></button>
        <h2>MENU</h2>
        <x-navbar-phone></x-navbar-phone>
    </div>
    <div id="top" class="top">
        <div>
            <h2 class="">
                <b>ARJUNA PERSONAL</b><text> .Site</text>
            </h2>
        </div>
        <div class="navbar">
            <x-navbar></x-navbar>
        </div>
        <div class="navbar-hp ">
            <button class="btn-navbar">
                <h1 onclick="navbar()"><ion-icon name="menu-outline"></ion-icon></h1>
            </button>
        </div>
    </div>
    <div class="isi">
        <div id="display">
            <img src="{{ $image }}" class="display-img" alt="">
            <div class="display-text ">
                <h1>{{ $prologue }}</h1>
                <a href="#readmore"><button>READ MORE</button></a>
            </div>
            <div class="social-media ">
                <a href="https://www.instagram.com/arjnln_"><ion-icon name="logo-instagram"></ion-icon><text
                        class="span-title">Instagram</text></a>
                <a href="https://www.tiktok.com/@sylfnxs"><ion-icon name="logo-tiktok"></ion-icon><text
                        class="span-title">TikTok</text></a>
                <a href=""><ion-icon name="logo-github"></ion-icon><text class="span-title">Github</text></a>
                <span id="square"></span>
            </div>
            <div class="scroll ">
                <a href="#readmore">SCROLL</a>
                <span id="square"></span>
            </div>
        </div>
        <div id="readmore"></div>
        <!-- akhir display -->
        <!-- body -->

        {{ $slot }}


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
                <input type="submit" value="Kirim" style="float: right;" class="btn-about1">
            </form>
        </div>
        <br><br><br><br>
    </div>
    <footer>
        <h3 style="position: absolute; transform:translate(-50%, -0%); left:50%; font-weight: bold;">
            Social Media
        </h3>
        <p
            style="position: absolute; transform:translate(-50%, -50%); left:50%; top: 90%; font-size:13px; width: 100%; text-align: center; font-weight: bold;">
            &copy; 2024 Arjuna Lanang. All rights reserved.</p>
        <div class="container-social-media">
            <a href="https://wa.me/+6285730426264">
                <div class="social-media-card" id="whatsapp">
                    <div class="social-media-icons"><ion-icon name="logo-whatsapp"></ion-icon></div>
                    <div id="label-whatsapp">Whatsapp</div>
                </div>
            </a>
            <a href="https://www.instagram.com/arjnln_">
                <div class="social-media-card" id="instagram">
                    <div class="social-media-icons"><ion-icon name="logo-instagram"></ion-icon></div>
                    <div id="label-instagram">Instagram</div>
                </div>
            </a>
            <a href="#">
                <div class="social-media-card" id="github">
                    <div class="social-media-icons"><ion-icon name="logo-github"></ion-icon></div>
                    <div id="label-github">Github</div>
                </div>
            </a>
            <a href="https://www.tiktok.com/@sylfnxs">
                <div class="social-media-card" id="tiktok">
                    <div class="social-media-icons"><ion-icon name="logo-tiktok"></ion-icon></div>
                    <div id="label-tiktok">Tiktok</div>
                </div>
            </a>
        </div>

    </footer>
    <!-- script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        const scrollElements = document.querySelectorAll(".js-scroll");

        const elementInView = (el, dividend = 1) => {
            const elementTop = el.getBoundingClientRect().top;

            return (
                elementTop <=
                (window.innerHeight || document.documentElement.clientHeight) / dividend
            );
        };

        const elementOutofView = (el) => {
            const elementTop = el.getBoundingClientRect().top;

            return (
                elementTop > (window.innerHeight || document.documentElement.clientHeight)
            );
        };

        const displayScrollElement = (element) => {
            element.classList.add("scrolled");
        };

        const hideScrollElement = (element) => {
            element.classList.remove("scrolled");
        };

        const handleScrollAnimation = () => {
            scrollElements.forEach((el) => {
                if (elementInView(el, 1.25)) {
                    displayScrollElement(el);
                } else if (elementOutofView(el)) {
                    hideScrollElement(el)
                }
            })
        }

        window.addEventListener("scroll", () => {
            handleScrollAnimation();
        });
        const bob = document.querySelectorAll('.dotted')[0];

        let mouseX = 0;
        let mouseY = 0;

        let ballX = 0;
        let ballY = 0;

        let speed = 0.1; //how fast ball catches up to mouse pointer;

        function animate() {
            let distX = mouseX - ballX;
            let distY = mouseY - ballY;

            ballX = ballX + (distX * speed);
            ballY = ballY + (distY * speed);

            bob.style.left = ballX + 'px';
            bob.style.top = ballY + 'px';

            requestAnimationFrame(animate)

        };

        animate();

        document.addEventListener('mousemove', function(e) {
            mouseX = e.pageX;
            mouseY = e.pageY;
        });

        document.addEventListener('click', function(e) {
            e.preventDefault;
            bob.classList.remove('active');
            //some rando comment

            void bob.offsetWidth;

            bob.classList.add('active');

        }, false);
    </script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="{{ $js }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
