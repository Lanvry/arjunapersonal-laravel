<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <x-slot:image>{{$image}}</x-slot:image>
    <x-slot:prologue>{{$prologue}}</x-slot:prologue>
    <x-slot:css>{{$css}}</x-slot:css>
    <x-slot:js>{{$js}}</x-slot:js>
    <div id="EXP" class="experience">
        <div class="exp-item scroll-element js-scroll slide-left">
            <div class="exp-grid">
                <div class="exp-icon">
                    <h1><ion-icon name="medal-outline"></ion-icon></h1>
                </div>
                <div class="exp-text">
                    <h1>3+</h1>
                    <p><b>Years of Experience</b></p>
                </div>
            </div>
        </div>
        <div class="exp-item scroll-element js-scroll slide-left" style="animation-delay: 0.1s;">
            <div class="exp-grid">
                <div class="exp-icon">
                    <h1><ion-icon name="checkmark-outline"></ion-icon></h1>
                </div>
                <div class="exp-text">
                    <h1>10+</h1>
                    <p><b>Complete Projects</b></p>
                </div>
            </div>
        </div>
        <div class="exp-item scroll-element js-scroll slide-left" style="animation-delay: 0.2s;">
            <div class="exp-grid">
                <div class="exp-icon">
                    <h1><ion-icon name="people-outline"></ion-icon></h1>
                </div>
                <div class="exp-text">
                    <h1>10+</h1>
                    <p><b>Clients</b></p>
                </div>
            </div>
        </div>
    </div>


    <!-- about -->
    <div id="about" class="scroll-element js-scroll slide-right">
        <div>
            <img src="img/img.png" class="about-img" alt="">
        </div>
        <div class="about-me scroll-element js-scroll fade-in-bottom">
            <div class="aboutme-text">
                <div>
                    <p>About Me</p>
                </div>
                <span id="square" class="aboutme-square"></span>
            </div>
            <div class="aboutme-text1">
                <p>About Me</p>

            </div>
            <h3>Need a Creative <br> Product? I can Help You !</h3>
            <p>Hello I' am Arjuna, Iam FrontEnd Developer who has passion for building clean web with intuitive
                functionalities. I Enjoy the process of turning ideas Into Realy Using creative Solution. im always
                curious, about learning new skills, tools, and concept, In addiction to working on varicus solo full
                stack projects, I have worked with creative Teams</p>
            <div class="scroll-element js-scroll slide-right">
                <button class="btn-about1">HIRE ME</button>
                <button class="btn-about2"><a href="#contact">CONTACT</a></button>
            </div>
        </div>
    </div>

    <!-- Skills -->
    <div id="skill" class="skill scroll-element js-scroll fade-in-bottom">

        <div class="skills">
            <div class="skills-text">
                <div>
                    <p>My Skills</p>
                </div>
                <span id="square" class="aboutme-square"></span>
            </div>
            <div class="skills-text1">
                <p>My Skills</p>

            </div>
            <h3>This! <br>Programming Language That I Use</h3>
            <p>I am proficient in doing my coding assignments using programming languages ​​such as the following. I
                am
                most proficient in Javascript and PHP, and the following tools are examples of Visual Studio Code
                and
                GitHub.</p>
            <div class="">
                <label class="switch scroll-element js-scroll fade-in-bottom" style="animation-delay: 0.1s;">
                    <input type="checkbox" onclick="check()" id="check-skill">
                    <span class="slider round">
                    </span>
                    <div class="slider-grid">
                        <p>Skills</p>
                        <p>Tools</p>
                    </div>
                </label>
            </div>
        </div>
        <div>
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
        </div>

    </div>

    <!-- Work -->
    <div id="work" class="work scroll-element js-scroll fade-in-bottom">
        <div class="works">
            <div class="work-text">
                <div>
                    <p>Works</p>
                </div>
                <span id="square" class="work-square"></span>
            </div>
            <div class="work-text1">
                <p>Works</p>

            </div>
            <h3>My Work <br> You Can See Anything Of My Works</h3>
        </div><br>
        <div class="work-content scroll-element js-scroll fade-in-bottom">
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

    <!-- Blog -->
    <div id="blog" class="scroll-element js-scroll slide-right">
        <div class="blog-card">
            <div class="card">Tidak Ada blog Untuk saat Ini</div>
        </div>
        <div class="blog-me">
            <div class="blog-text">
                <div>
                    <p>My Blog</p>
                </div>
                <span id="square" class="blog-square"></span>
            </div>
            <div class="blog-text1">
                <p>My Blog</p>

            </div>
            <h3>My Story <br> When Entering the Coding Industry</h3>
            <p></p>
            <div class="scroll-element js-scroll slide-right">
                <button class="btn-blog">READ MORE BLOG</button>
            </div>
        </div>
    </div>
</x-layout>