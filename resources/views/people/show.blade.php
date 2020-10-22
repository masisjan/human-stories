<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:url"           content="{{ url("/people/{$post->id}") }}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Your Website Title" />
<meta property="og:description"   content="Your description" />
<meta property="og:image"         content="{{ asset('storage/uploads/image/' . $post->friend_id . '/' . $post->image) }}" />
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
    <img src="{{ asset('storage/uploads/image/' . $post->friend_id . '/' . $post->image) }}" style="width:100%" alt="">
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
        <i class="fa fa-home w3-xxlarge"></i><br>ԳԼԽԱՎՈՐ
    </a>
    <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-user w3-xxlarge"></i><br>ՄԱՍԻՆ
    </a>
    <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-picture-o w3-xxlarge"></i><br>ՆԿԱՐՆԵՐ
    </a>
    <a href="#videos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-file-video-o w3-xxlarge"></i><br>ՏԵՍԱՆՅՈՒԹԵՐ
    </a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-comments w3-xxlarge"></i><br>ԿԱՐԾԻՔՆԵՐ
    </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
        <a href="#" class="w3-bar-item w3-button" style="width:25% !important">ԳԼԽԱՎՈՐ</a>
        <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ՄԱՍԻՆ</a>
        <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">ՆԿԱՐՆԵՐ</a>
        <a href="#videos" class="w3-bar-item w3-button" style="width:25% !important">ՏԵՍԱՆՅՈՒԹԵՐ</a>
    </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
    <!--                                        Home              -->
    <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
        <h1 class="w3-jumbo">{{ $post->name }}</h1>
        <p>{{ $post->position }}</p>
        <img src="{{ asset('storage/uploads/image/' . $post->friend_id . '/' . $post->image) }}" alt="boy" class="w3-image" width="700">
    </header>

    <!-- About Section -->
    <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
        <h2 class="w3-text-light-grey">ԿԵՆՍԱԳՐՈՒԹՅՈՒՆ</h2>
        <hr style="width:200px" class="w3-opacity">
        <p>{{ $post->biography }}</p>

    <!--                                       photo                         -->
    <div class="w3-padding-64 w3-content" id="photos">
        <h2 class="w3-text-light-grey">ՆԿԱՐՆԵՐ</h2>
        <hr style="width:200px" class="w3-opacity">

        <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
                <img src="/w3images/wedding.jpg" style="width:100%">
            </div>

            <div class="w3-half">
                <img src="/w3images/underwater.jpg" style="width:100%">
            </div>
        </div>
    </div>

        <!--                                       video                         -->
    <div class="w3-padding-64 w3-content" id="videos">
        <h2 class="w3-text-light-grey">ՏԵՍԱՆՅՈՒԹԵՐ</h2>
        <hr style="width:200px" class="w3-opacity">

        <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
                <iframe width="450" height="253.125" src="https://www.youtube.com/embed/aPoNUhUzjg8" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;
                        picture-in-picture" allowfullscreen>
                </iframe>
            </div>
            <div class="w3-half">
                <iframe width="450" height="253.125" src="https://www.youtube.com/embed/aPoNUhUzjg8" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;
                        picture-in-picture" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>

    <div class="w3-padding-64 w3-content" id="videos">
        <h2 class="w3-text-light-grey">ԿԱՐԾԻՔՆԵՐ</h2>
        <hr style="width:200px" class="w3-opacity">

        <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
            </div>
            <div class="w3-half">
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
        <hr>
        <p>Թողնել կարծիք {{ $post->name }}ի մասին:</p>

        <form action="/action_page.php" target="_blank">
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Tel" required name="Subject"></p>
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
            <p>
                <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                    <i class="fa fa-paper-plane"></i> ԹՈՂՆԵԼ ԿԱՐԾԻՔ
                </button>
            </p>
        </form>
        <!-- End Contact Section -->
    </div>
        <audio controls autoplay>
            <source src="{{ asset('storage/uploads/music/'. $post->music->singer_id . "/" . $post->music->path) }}" type="audio/ogg">
            <source src="{{ asset('storage/uploads/music/'. $post->music->singer_id . "/" . $post->music->path) }}" type="audio/mpeg">
        </audio>

    <!-- Footer -->
    <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
        <div class="fb-share-button"
             data-href="{{ url("/people/{$post->id}") }}"
             data-layout="button_count">
        </div>
        <p class="w3-medium"><a href="/" target="_blank" class="w3-hover-text-blue">Մարդկային պատմություններ</a></p>
        <!-- End footer -->
    </footer>

    <!-- END PAGE CONTENT -->
</div>
</div>
<script src=" {{ asset('js/jquery.min.js') }} "></script>
<script src=" {{ asset('js/popper.min.js') }} "></script>
<script src=" {{ asset('js/bootstrap.min.js') }} "></script>
<script src=" {{ asset('js/app.js') }} "></script>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>
