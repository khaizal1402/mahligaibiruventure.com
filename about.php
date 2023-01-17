<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>MAHLIGAI BIRU VENTURE adalah sebuah syarikat perniagaan 100% yang dimiliki oleh 
bumiputera dan berdaftar pada 15 Mac 2015. Syarikat MAHLIGAI BIRU 
VENTURE telah mendapat pengiktirafan Sijil Pendaftaran Perniagaan, Sijil 
Kewangan Malaysia, Sijil Dewan Usahawan Bumiputera Bersatu Malaysia.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>Syarikat kami menyediakan perkhidmatan membekalkan bahan pembersihan dan pencucian kepada kontraktor - kontraktor pembersihan termasuk orang awam di seluruh Malaysia dengan harga yang berpatutan. Setiap produk kami adalah original dari kilang dan berkualiti tinggi.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>Kami juga bertanggungjawab dan mengklasifikasikan bahan-bahan pembersihan mengikut piawaian kontraktor .</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>Perkhidmatan yang baik dan berkualiti, saya sangat berpuas hati !.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Abdul Hakim</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>Setiap barangan yang dibekalkan memang berkualiti tinggi. Saya pasti repeat beli kat sini.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Amina Bakri @ MentariSuriaManagement</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>Mantap !!! Pasti repeat beli di sini. Harga boleh tahan</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Zack BGM Enterprise</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>Murah laa beli sini !!! kat tempat lain harga cekik darah</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Salina Zunaidi</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>Not bad laa punya service.. tip top. saya bagi 4.5 star</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Zikri @ Fine Cleaning and Services</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>Puas hati !! Senang beli kat sini, jimat pon jimat dan yang penting ada delivery</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Dhabitah Sabri</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>