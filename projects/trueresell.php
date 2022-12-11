<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1.0">
    <meta http-equiv=X-UA-Compatible content="ie=edge">
    <link rel="shortcut icon" href=./../images/icon.PNG type=image/x-icon>
    <title>Md. Fahad Monshi - Full Stack Web Developer From Bangladesh.</title>
    <link rel=stylesheet href=./../css/bootstrap.min.css type=text/css>
    <link rel=stylesheet href=./../fonts/icons/css/all.min.css>
    <link rel=stylesheet href=./../css/slick.css>
    <link rel=stylesheet href=./../css/slick-theme.css type=text/css>
    <link rel=stylesheet href=./../styles.css type=text/css>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="100">

    <!-- Heading of Project Starts Here -->
    <section class="preloader" id="preloader">
        <h1>Loading...</h1>
    </section>
    <section class='projectsDone d-flex justify-content-center align-items-center flex-column'>
        <!-- Navigation bar starts here -->
        <nav class="navbar navbar-expand-md" id=navbar>
            <a href="./../index.php" class=navbar-brand>Md. Fahad Monshi</a>
            <span class="mobilemenu right">
                <li style=list-style:none><button onclick=toggle()><i class="fas fa-bars"></i></button></li>
            </span>
            <ul id=nav-mobile class="navbar-nav ml-auto">
                <li class=nav-item><a href="./../index.php" class="nav-link active">Home</a></li>
                <li class=nav-item><a class=nav-link href=./../index.php#portfolio>Projects</a></li>
                <li class=nav-item><a class=nav-link href=./../index.php#skills>Skills</a></li>
                <li class=nav-item><a class=nav-link href=./../index.php#about>About</a></li>
                <li class=nav-item><a class=nav-link href=./../index.php#contact>Contact</a></li>
                <li class=nav-item><a class="btn btn-warning" href="./../images/md_fahad_monshi_resume.pdf"
                        target="_blank">Download
                        Resume</a></li>
            </ul>
        </nav>
        <!-- Navigation bar ends here -->
        <h1>True Resell</h1>
        <p>A Second Hand Watch Reselling Website</p>
    </section>
    <!-- Heading of Projects Ends Here -->

    <!-- Details Section Starts Here -->
    <section class="container">

    <div class="my-5">
        <a href="https://true-resell.web.app/" target="_blank" class="btn btn-primary">Visit Site</a>
        <a href="https://github.com/MohammadFahad1/TrueResell-Used-Watch-Reselling-Marketplace" target="_blank" class="btn btn-warning">View Code at Github</a>
    </div>

        <div class="mt-4">
            <h2>The Registration Form</h2>
            <p>Below you can see the registration form. here an user can register in 2 different roles such as buyer or
                seller. or they can just login through there google or github accout. if they do login through google or
                github there role will be a buyer by default.</p>
        </div>
        <img src="./../images/regFormOfTrueResell.png" class="img-fluid" alt="">

        <div class="mt-4">
            <h2>When you're logged in as a buyer!</h2 <p>if you're logged in as a buyer you will see two different
            options available for you. such as My Orders where you will see the products that you've ordered and My
            Wishlist where you can the products you've added to the wishlist</p>
        </div>
        <img src="./../images/buyerOfTrueResell.png" alt="" class="img-fluid">

        <div class="mt-4">
            <h2>When you're logged in as a seller!</h2>
            <p>
                if you're logged in as a seller you'll see two different options are available for you in the admin
                dashboard. 1st is My Products where you can see and perform different operations with the products that
                you're selling to others and the second is Add A Product from where you will be able to add your
                product.
            </p>
        </div>
        <img src="./../images/sellerOfTrueResell.png" alt="" class="img-fluid">

        <div class="mt-4">
            <h2>When you're the admin!</h2>
            <p>
                If you're the admin of the website you will see two different options such as All Buyers and All
                Sellers. Here you can do various operations with these users such as verifying an user or just deleting
                an user.
            </p>
            <img src="./../images/adminOfTrueResell.png" alt="" class="img-fluid mb-5">
        </div>

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