<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1.0">
    <meta http-equiv=X-UA-Compatible content="ie=edge">
    <link rel="shortcut icon" href=./images/icon.PNG type=image/x-icon>
    <title>Md. Fahad Monshi - Full Stack Web Developer From Bangladesh.</title>
    <link rel=stylesheet href=./css/bootstrap.min.css type=text/css>
    <link rel=stylesheet href=./fonts/icons/css/all.min.css>
    <link rel=stylesheet href=./css/slick.css>
    <link rel=stylesheet href=./css/slick-theme.css type=text/css>
    <link rel=stylesheet href=./styles.css type=text/css>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="100">

    <!-- Heading of Project Starts Here -->
    <section class="preloader" id="preloader">
        <h1>Loading...</h1>
    </section>
    <section class='projectsDone d-flex justify-content-center align-items-center flex-column'>
        <!-- Navigation bar starts here -->
        <nav class="navbar navbar-expand-md" id=navbar>
            <a href="./index.php" class=navbar-brand>Md. Fahad Monshi</a>
            <span class="mobilemenu right">
                <li style=list-style:none><button onclick=toggle()><i class="fas fa-bars"></i></button></li>
            </span>
            <ul id=nav-mobile class="navbar-nav ml-auto">
                <li class=nav-item><a href="./index.php" class="nav-link active">Home</a></li>
                <li class=nav-item><a class=nav-link href=./index.php#portfolio>Projects</a></li>
                <li class=nav-item><a class=nav-link href=./index.php#skills>Skills</a></li>
                <li class=nav-item><a class=nav-link href=./index.php#about>About</a></li>
                <li class=nav-item><a class=nav-link href=./index.php#contact>Contact</a></li>
                <li class=nav-item><a class=nav-link href=./blog.php>Blog</a></li>
                <li class=nav-item><a class="btn btn-warning" href="./images/md_fahad_monshi_resume.pdf"
                        target="_blank">Download
                        Resume</a></li>
            </ul>
        </nav>
        <!-- Navigation bar ends here -->
        <h1>Blogs</h1>
    </section>
    <!-- Heading of Projects Ends Here -->

    <!-- Details Section Starts Here -->
    <section class="container py-5">
    <h1 class="display-1">
        Comming Soon
    </h1>
    </section>
    <!-- Details Section Ends Here -->


    <section class=footer>
        <h5>Copyright &copy; Mohammad Fahad (2015 - 2019)</h5>
        <a href=https://facebook.com/mdfahad.index><i class="fab fa-facebook"></i></a>
        <a href=https://twitter.com/bd_fahad><i class="fab fa-twitter-square"></i></a>
        <a href=https://facebook.com/mdfahad.index><i class="fab fa-google-plus"></i></a>
        <a href=https://facebook.com/mdfahad.index><i class="fab fa-linkedin"></i></a>
    </section>

    <script src=js/jquery-3.4.1.min.js type=text/javascript></script>
    <script>
        window.onload(document.getElementById('preloader').style.display = 'none')
    </script>
</body>

</html>