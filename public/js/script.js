// setInterval(() => {
    var screen = window.innerHeight;
    document.getElementById("display").style.height = screen + "px";
    // }, 10);
    var element = document.body;
    
    function myFunction() {
       element.classList.toggle("dark-mode");
       document.querySelector("#sunny").style.display = "block";
       document.querySelector("#sunnypc").style.display = "block";
       document.querySelector("#moon").style.display = "none";
       document.querySelector("#moonpc").style.display = "none";
       // Simpan preferensi ke localStorage
       localStorage.setItem('darkMode', 'enabled');
    }
    
    function myFunction1() {
       element.classList.toggle("dark-mode");
       document.querySelector("#sunny").style.display = "none";
       document.querySelector("#sunnypc").style.display = "none";
       document.querySelector("#moon").style.display = "block";
       document.querySelector("#moonpc").style.display = "block";
       // Simpan preferensi ke localStorage
       localStorage.setItem('darkMode', 'disabled');
    }
    
    // Periksa preferensi saat halaman dimuat
    setTimeout(function () {
       const darkModePreference = localStorage.getItem('darkMode');
       if (darkModePreference === 'enabled') {
          element.classList.add("dark-mode");
          document.getElementById("sunny").style.display = "block";
          document.getElementById("sunnypc").style.display = "block";
          document.getElementById("moon").style.display = "none";
          document.getElementById("moonpc").style.display = "none";
       } else {
          document.getElementById("sunny").style.display = "none";
          document.getElementById("sunnypc").style.display = "none";
          document.getElementById("moon").style.display = "block";
          document.getElementById("moonpc").style.display = "block";
       }
    }, 100);
    
    window.onload = function () {
       // Jika ada hash di URL, hapus hash-nya
       if (window.location.hash) {
          history.replaceState(null, null, window.location.pathname + window.location.search);
       }
    };
    
    function navbar() {
       document.getElementById("navbar").style.width = "60%";
    }
    function navbaroff() {
       document.getElementById("navbar").style.width = "0%";
    }
    window.addEventListener('scroll', function () {
       const navbar = document.querySelector('.top');
       if (window.scrollY > 50) { // Ganti 50 dengan jarak scroll yang Anda inginkan
          navbar.classList.add('bg');
       } else {
          navbar.classList.remove('bg');
       }
    });
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
    window.addEventListener('scroll', function () {
       var isi = document.querySelector('.isi');
       const footer = document.querySelector('footer');
       var scrollPosition = window.scrollY + window.innerHeight;
       var documentHeight = document.documentElement.scrollHeight - 35;
    
       if (scrollPosition >= documentHeight) {
          isi.classList.add('expanded');
          footer.classList.add('visible');
       } else {
          // Mengembalikan tinggi footer ke kondisi semula
          isi.classList.remove('expanded');
          footer.classList.remove('visible');
    
       }
    });