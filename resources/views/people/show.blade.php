<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
    .w3-row-padding img {margin-bottom: 12px}
    /* Set the width of the sidebar to 120px */
    .w3-sidebar {width: 120px;background: #222;}
    /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
    #main {margin-left: 120px}
    /* Remove margins from "page content" on small screens */
    @media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Avatar image in top left corner -->
{{--    @isset($path)--}}
    <img src="{{ asset('storage/uploads/image/' . $post->image) }}" style="width:100%" alt="">
{{--    @endisset--}}
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
        <i class="fa fa-home w3-xxlarge"></i>
        <p>HOME</p>
    </a>
    <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-user w3-xxlarge"></i>
        <p>ABOUT</p>
    </a>
    <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-picture-o w3-xxlarge"></i>
        <p>PHOTOS</p>
    </a>
    <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-file-video-o w3-xxlarge"></i>
        <p>VIDEOS</p>
    </a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-comments w3-xxlarge"></i>
        <p>COMMENTS</p>
    </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
        <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
        <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
        <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
        <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
    </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
    <!-- Header/Home -->
    <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
        <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> John Doe.</h1>
        <p>Photographer and Web Designer.</p>
        <img src="/w3images/man_smoke.jpg" alt="boy" class="w3-image" width="992" height="1108">
    </header>

    <!-- About Section -->
    <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
        <h2 class="w3-text-light-grey">My Name</h2>
        <hr style="width:200px" class="w3-opacity">
        <p>Some text about me. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>

    <!-- Portfolio Section -->
    <div class="w3-padding-64 w3-content" id="photos">
        <h2 class="w3-text-light-grey">My Photos</h2>
        <hr style="width:200px" class="w3-opacity">

        <!-- Grid for photos -->
        <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
                <img src="/w3images/wedding.jpg" style="width:100%">
                <img src="/w3images/rocks.jpg" style="width:100%">
                <img src="/w3images/sailboat.jpg" style="width:100%">
            </div>

            <div class="w3-half">
                <img src="/w3images/underwater.jpg" style="width:100%">
                <img src="/w3images/chef.jpg" style="width:100%">
                <img src="/w3images/wedding.jpg" style="width:100%">
                <img src="/w3images/p6.jpg" style="width:100%">
            </div>
            <!-- End photo grid -->
        </div>
        <!-- End Portfolio Section -->
    </div>

    <!-- Contact Section -->
    <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
        <p>Let's get in touch. Send me a message:</p>

        <form action="/action_page.php" target="_blank">
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
            <p>
                <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                    <i class="fa fa-paper-plane"></i> SEND MESSAGE
                </button>
            </p>
        </form>
{{--        <audio controls autoplay>--}}
{{--            <source src="{{ asset('storage/uploads/music/' . $post->musices->path) }}" type="audio/ogg; codecs=vorbis">--}}
{{--            <source src="{{ asset('storage/uploads/music/' . $post->music->path) }}" type="audio/mpeg">--}}
{{--        </audio>--}}
        <!-- End Contact Section -->
    </div>

    <!-- Footer -->
    <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
        <!-- End footer -->
    </footer>

    <!-- END PAGE CONTENT -->
</div>
</div>
<script src=" {{ asset('js/jquery.min.js') }} "></script>
<script src=" {{ asset('js/popper.min.js') }} "></script>
<script src=" {{ asset('js/bootstrap.min.js') }} "></script>
<script src=" {{ asset('js/app.js') }} "></script>

</body>
</html>
