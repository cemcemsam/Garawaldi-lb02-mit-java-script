<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css">
    <script language="javascript" type="text/javascript" src="javascript.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>

    <header>
        <?php include 'header.php';?>
    </header>

    <main id="color_mode">
        <section id="slide">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"
                        aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6"
                        aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/home/home(8).jpg" class="d-block w-100" alt="Bild">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>What do you think this is?</h5>
                            <p>This was in Iceland. I walked by this massive wall of stone and when<br>
                            the light hit it perfectly i could finaly take the picture.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/home/home(7).jpg" class="d-block w-100" alt="Bild">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>A very special one</h5>
                            <p>In Amsterdam, there are many old warehouses that are used by artists<br>
                                to live and work. A little side effect is that they look very beautiful.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/home/home(6).jpg" class="d-block w-100" alt="Bild">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>"I'm not very well"</h5>
                            <p>Again in front of the warehouse in Amsterdam.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/home/home(5).jpg" class="d-block w-100" alt="Bild">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>The containers</h5>
                            <p>There where six massive containers stacked on to eachother<br>
                        and artists with big cranes spraying it.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/home/home(4).jpg" class="d-block w-100" alt="Bild">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>It</h5>
                            <p>It was a totaly normal wall until I photographed it.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/home/home(3).jpg" class="d-block w-100" alt="Bild">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Streetart</h5>
                            <p>As you may know now I like art, especially streetart and graffiti.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/home/home(2).jpg" class="d-block w-100" alt="Bild">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Mhm... Architecture</h5>
                            <p>Its always about the perspective.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>


        <button type="button" id="color_mode_button_dark"
            onclick="changeColorMode(this)">
            Dark Mode</button>
        <button type="button"  id="color_mode_button_light"
              onclick="changeColorMode(this)">
            light Mode</button>
            <button type="button"  id="color_mode_button_blue"
              onclick="changeColorMode(this)">
            blue Mode</button>


        <div class="title_mother">
            <b class="title"><span class="overline_title">ABOUT M</span>E</b>
            <p class="red_test" >I am a hobby photographer doing an apprenticeship as mediamatition.<br>
                I love creativity, design and perfection and it is also this I stive for. <br>
                With my photography I try to tell a story, make you think and maybe <br>
                even put a smile on your face. Often, I just walk around and try to <br>
                look at common things a little bit different and then this difference <br>
                with my gear.
            </p>
        </div>
        <img class="img_landingpage_1" src="img/vintage_stuff/vintage_stuff(7).jpg">
        <img class="img_landingpage_2" src="img/home/home(1).jpg">
        <img class="img_landingpage_3" src="img/vintage_stuff/vintage_stuff(9).jpg">
    </main>


    <footer>

        <?php include 'footer.php';?>

    </footer>

</body>

</html>