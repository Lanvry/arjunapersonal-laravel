setTimeout(() => {
     document.querySelector('.loader-bg').style.opacity = '0%'
   setTimeout(() => {
     document.querySelector('.loader-bg').style.display = 'none'
   }, 500);
    // Inisialisasi Locomotive Scroll
const scroll = new LocomotiveScroll({
    el: document.querySelector('[data-scroll-container]'),
    smooth: true
});

// Mendengarkan event scroll dari Locomotive Scroll
scroll.on('scroll', (instance) => {
    let value = instance.scroll.y;

    // Animasi untuk berbagai elemen
    document.querySelector('.welcome-label').style.top = "-" + value / 13 + "px";
    document.querySelector('.welcome-text').style.top = 30 - value / 5 + "px";
    document.querySelector('.skill-label').style.top = "-" + value / 13 + "px";
    document.querySelector('.skill-text').style.top = 150 - value / 5 + "px";
    document.querySelector('.container-skill').style.top = 200 - value / 5 + "px";
    document.querySelector('.switch').style.top = 200 - value / 5 + "px";
    document.querySelectorAll('.card-label').forEach(card => {
        card.style.top = 190 - value / 11 + "px";
    });
    document.querySelectorAll('.card-text').forEach(card => {
        card.style.top = 200 - value / 10 + "px";
    });
    document.querySelector('.project-label').style.top = "-" + value / 13 + "px";
    document.querySelector('.project-text').style.top = 320 - value / 5 + "px";
});

scroll.on('scroll', (obj) => {
    const scrollPosition = Math.round(obj.scroll.y);
    const navbar = document.querySelector('.navbar');

    if (scrollPosition > 190) {
        navbar.style.top = '0px'; // Tampilkan navbar
    } else {
        navbar.style.top = '-100px'; // Sembunyikan navbar
    }
});
}, 2000);

function toggle() {
    var caretElement = document.getElementById("navbar");
    if (caretElement.classList.contains("active")) {
        caretElement.classList.remove("active");
    } else {
        caretElement.classList.add("active");
    }

}

function check() {
    checkBox = document.getElementById('check-skill');
    // Check if the element is selected/checked
    if (checkBox.checked) {
        // Respond to the result
        document.getElementById("skill-show").style.display = "none"
        document.getElementById("tools-show").style.display = "block"
        setTimeout(() => {
            document.getElementById("tools-show").style.opacity = "100%"
            document.getElementById("skill-show").style.opacity = "0%"
        }, 10);
    }
    else {
        document.getElementById("tools-show").style.display = "none"
        document.getElementById("skill-show").style.display = "block"
        setTimeout(() => {
            document.getElementById("skill-show").style.opacity = "100%"
            document.getElementById("tools-show").style.opacity = "0%"
        }, 10);
    }
}

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

document.addEventListener('mousemove', function (e) {
    mouseX = e.pageX;
    mouseY = e.pageY;
});

document.addEventListener('click', function (e) {
    e.preventDefault;
    bob.classList.remove('active');
    //some rando comment

    void bob.offsetWidth;

    bob.classList.add('active');

}, false);

const checkbox = document.getElementById('switch');
const body = document.body;

// Cek status checkbox saat halaman dimuat
window.onload = function () {
    if (localStorage.getItem('dark-mode') === 'enabled') {
        checkbox.checked = true;
        body.classList.add('dark-mode');
        document.getElementById('peta').src="img/indonesia-dark.svg"
    }
};

// Tambahkan event listener untuk checkbox
checkbox.addEventListener('change', function () {
    if (this.checked) {
        body.classList.add('dark-mode');
        document.getElementById('peta').src="img/indonesia-dark.svg"
        localStorage.setItem('dark-mode', 'enabled'); // Simpan status di localStorage
    } else {
        body.classList.remove('dark-mode');
        document.getElementById('peta').src="img/indonesia.svg"
        localStorage.setItem('dark-mode', 'disabled'); // Simpan status di localStorage
    }
});

function backtotop(){
    scroll.scrollTo(0, 0);
}