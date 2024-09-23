<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:image>{{ $image }}</x-slot:image>
    <x-slot:prologue>{{ $prologue }}</x-slot:prologue>
    <x-slot:css>{{ $css }}</x-slot:css>
    <x-slot:js>{{ $js }}</x-slot:js>
    <div id="work" class="work scroll-element js-scroll fade-in-bottom">
        <div class="works">
            <div class="work-text">
                <div>
                    <p>Content</p>
                </div>
                <span id="square" class="work-square"></span>
            </div>
            <div class="work-text1">
                <p>Content</p>

            </div>
            <h3>Download <br> Free Html Template Asset </h3>
        </div><br>
        <div class="search" id="search">
            <form class="container">
                <div class="grid-search">
                    <input type="text" name="search" id="" placeholder="Search..." class="form-control">
                    <button type="input" class="btn btn-about1"><ion-icon name="search"></ion-icon></button>
                </div>
            </form><br>
        </div>
        <hr>
        <div class="work-content scroll-element js-scroll fade-in-bottom">

            @foreach ($downloads as $download)
                <a href="/download/{{ $download->slug }}" class="card">
                    <img src="img/bangkesbangpol.png" class="image" alt="">
                    <div class="boxshadow"></div>
                    <div class="image-content">
                        <h4>{{ $download->name }}</h4>
                        <p class="deskripsi">{{ $download->deskripsi }}</p>
                    </div>
                </a>
            @endforeach

        </div>
    </div>


</x-layout>
