<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/beta.css">
    <link rel="shortcut icon" href="img/facion.png" type="image/x-icon">
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
    <div class="loader-bg">
        <div class="loader"></div>
    </div>
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



        <div id="about" class="welcome">
            <h1 class="welcome-label">Welcome To My Website</h1>
            <p class="welcome-text">I' Am Arjuna Lanang Adiwarsana a Full Stack Developer</p>
        </div>


        <div class="section-map">
            <div class="map">
                <img id="peta" src="img/indonesia.svg" alt="">
            </div>
            <p>Address : Jawa Timur, Sumenep, Kalianget</p>
        </div>


        <div id="skill" class="skill">
            <h1 class="skill-label">My Skill</h1>
            <div style="">
                <p class="skill-text">This is a skill that I have mastered in creating websites, starting from the HTML,
                    CSS, JS and PHP programming languages ​​I have mastered, and I like the PHP programming language the
                    most</p>
            </div>
            <div class="container-skill scroll-element js-scroll fade-in-bottom">
                <div id="skill-show">
                    <div class="skill-grid">
                        <div class="skill-item"><img src="img/HTML-logo.png" title="HTML" alt=""></div>
                        <div class="skill-item"><img src="img/CSS-logo.png" alt=""></div>
                        <div class="skill-item"><img src="img/JavaScript-logo.png" alt=""></div>
                        <div class="skill-item"><img src="img/PHP-logo.png" alt=""></div>
                    </div>
                    <div class="skill-grid">
                        <div class="skill-item"><img src="img/C-sharp-logo.png" alt=""></div>
                        <div class="skill-item"><img src="img/JAVA-logo.png" alt=""></div>
                        <div class="skill-item"><img src="img/Bootstap-logo.svg" alt=""></div>
                    </div>
                </div>
                <div id="tools-show">
                    <div class="skill-grid">
                        <div class="skill-item"><img src="img/Visual-Studio-Code-logo.png" alt=""></div>
                        <div class="skill-item"><img src="img/Visual-Studio-logo.png" alt=""></div>
                        <div class="skill-item"><img src="img/Git-logo.png" alt=""></div>
                        <div class="skill-item"><img src="img/Github-logo.png" alt=""></div>
                        <div class="skill-item"><img src="img/GitLab-logo.svg" alt=""></div>
                    </div>
                    <div class="skill-grid">
                        <div class="skill-item"><img src="img/GitBucket-logo.png" alt=""></div>
                        <div class="skill-item"><img src="img/npm-logo.png" alt=""></div>
                    </div>
                </div>
            </div>
            <label class="switch" style="animation-delay: 0.1s;">
                <input type="checkbox" onclick="check()" id="check-skill">
                <span class="slider round">
                </span>
                <div class="slider-grid">
                    <p>Skills</p>
                    <p>Tools</p>
                </div>
            </label>
        </div>


        <section class="creative-cards style-one">
            <div class="container">
                <div class="row">
                    <div class="card-column">
                        <div class="card-details">
                            <div class="card-icons">
                                <ion-icon name="school"></ion-icon>
                            </div>
                            <h3 class="card-label"><a href="https://www.fiverr.com/aliali44">Grade</a></h3>
                            <p class="card-text">I'm still in school in grade 12, majoring in Software Engineering or what is usually called RPL</p>
                            <a class="read-more-btn" href="https://www.fiverr.com/aliali44"><ion-icon
                                    name="chevron-forward"></ion-icon></a>
                        </div>
                    </div>
                    <div class="card-column">
                        <div class="card-details">
                            <div class="card-icons">
                                <ion-icon name="medal"></ion-icon>
                            </div>
                            <h3 class="card-label"><a href="https://www.fiverr.com/aliali44">Achievements</a>
                            </h3>
                            <p class="card-text">The achievements I got while at school were that I took part in many website programming competitions and gained a lot of experience in creating websites</p>
                            <a class="read-more-btn" href="https://www.fiverr.com/aliali44"><ion-icon
                                    name="chevron-forward"></ion-icon></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div id="project" class="project">
            <h1 class="project-label">My Project</h1>
            <p class="project-text">I' Am Arjuna Lanang Adiwarsana a Full Stack Developer</p>
            <div class="work-content">
                <a href="" class="card">
                    <img src="img/bangkesbangpol.png" class="image" alt="">
                    <div class="boxshadow"></div>
                    <div class="image-content">
                        <h4>Bakesbangpol</h4>
                        <p class="deskripsi">On December 20, I was asked to create a website for bakesbangpol (National
                            and
                            Political Unity Agency) which has the task of carrying out Government Affairs in the field
                            of
                            national and political unity based on the provisions of the Legislative Regulations.</p>
                    </div>
                </a>
                <a href="" class="card">
                    <img src="img/smkbiodata.png" class="image" alt="">
                    <div class="boxshadow"></div>
                    <div class="image-content">
                        <h4>SMKBiodata</h4>
                        <p class="deskripsi">When I was almost in grade 12, my teacher assigned me to create a website
                            for
                            vocational student biodata, which aims to make it easier to manage student data at SMK 1
                            Sumenep.</p>
                    </div>
                </a>
                <a href="" class="card">
                    <img src="img/motherofyarn.png" class="image" alt="">
                    <div class="boxshadow"></div>
                    <div class="image-content">
                        <h4>Mother Of Yarn</h4>
                        <p class="deskripsi">Mother of Yarn is an e-commerce website that makes key chains from knitted
                            fabric and bouquet flowers that I made for the first time, which I directly linked to the
                            WhatsApp API.</p>
                    </div>
                </a>
                <a href="" class="card">
                    <img src="img/rplclass.png" class="image" alt="">
                    <div class="boxshadow"></div>
                    <div class="image-content">
                        <h4>RplClass</h4>
                        <p class="deskripsi">Rplclass is a class website that I created myself from grade 10 and until
                            now
                            the website is still running well. The aim of creating this website is that it includes a
                            lesson
                            schedule and homework donations when someone wants to give charity and share their homework
                            with
                            their friends. then it will be on the homework website, and the main goal is as a medium so
                            that
                            the lesson plans in our class are different from the others, only my class has a website
                            that
                            has been hosted.</p>
                    </div>
                </a>
            </div>
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
