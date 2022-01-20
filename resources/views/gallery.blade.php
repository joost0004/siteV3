<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/mystyles.css">
    <title>SiteV3</title>
    <style>
        .end {
            justify-content: flex-end !important;
        }

    </style>
    <style>
        * {
            box-sizing: border-box
        }

        .mySlides {
            display: none
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 800px;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {

            .prev,
            .next,
            .text {
                font-size: 11px
            }
        }

    </style>
</head>

<body>

    <section class="hero is-primary is-fullheight">
        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
            <nav class="navbar is-fixed-top is-primary">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item">
                            <img src="/img/logo.png" alt="Logo">
                        </a>
                    </div>
                    <div id="navbarMenuHeroA" class="navbar-menu">
                        <div class="navbar-end">
                            <a class="navbar-item" href="/">
                                Home
                            </a>
                            <a class="navbar-item">
                                About Me
                            </a>
                            <a class="navbar-item">
                                Contact
                            </a>
                            <a class="navbar-item is-active">
                                Gallery
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
            <div class="container has-text-centered">
                <p class="title">
                    Gallery
                </p>
            </div>
        </div>
    </section>

    <section class="hero is-medium">
        <div class="hero-body">
        </div>

    </section>

    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 7</div>
            <img src="/img/gallery/Untitled-1.jpg" style="width:100%">
            <div class="text">Hout</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 7</div>
            <img src="/img/gallery/Untitled-2.jpg" style="width:100%">
            <div class="text">Toren</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 7</div>
            <img src="/img/gallery/Untitled-3.jpg" style="width:100%">
            <div class="text">Cute</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 7</div>
            <img src="/img/gallery/Untitled-4.jpg" style="width:100%">
            <div class="text">Beeld</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / 7</div>
            <img src="/img/gallery/Untitled-5.jpg" style="width:100%">
            <div class="text">Surfin</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">6 / 7</div>
            <img src="/img/gallery/Untitled-6.jpg" style="width:100%">
            <div class="text">Zee</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">7 / 7</div>
            <img src="/img/gallery/Untitled-7.jpg" style="width:100%">
            <div class="text">Zout</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <section class="hero is-medium">
        <div class="hero-body">
        </div>

    </section>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>

</body>

</html>
