<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imeg/logo.png" type="image/x-icon">
    <title>handi man</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/slider-landing.css">
    <link rel="stylesheet" href="style/popup-landing.css">
    <link rel="stylesheet" href="style/home-landing.css">
</head>
<body>
    <header class="header">
        <?php
            include "php/header.php";
        ?>
    </header>
    <section id="home">
        <div class="letter-for-user">
            <?php include "php/message.php";?>
        </div>
        <div id="slider">

            <div class="contaner">
                <div class="wrapper">
                    <div class="wrapper-holder">
                        <div class="slider-img-1"><img src="imeg/istockphoto-901093256-612x612.jpg" alt=""></div>
                        <div class="slider-img-2"><img src="imeg/2ed9957d5a3455179539310d42bccdb2.jpg" alt=""></div>
                        <div class="slider-img-3"><img src="imeg/handyman-painting-wall-roller-brush-indoors-space-text-professional-construction-tools-150331013.jpg" alt=""></div>
                        <div class="slider-img-4"> <img src="imeg/hands-electrician-electrician-work-handyman-electrical-installation-electrician-work-home-renovation-electrical-149176404.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
       <?php
            // include "footer.php";
       ?>
    </footer>
    <script src="javascript/header-frontend.popop.js"></script>
</body>
</html>