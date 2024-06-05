<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link href="images/logo.jpg" rel="shortcut icon">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>Tentang kami</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Mengapa Memilih Kami?</h3>
         <p>Memilih Yum-Yum Pizza adalah keputusan cerdas karena restoran ini tidak hanya menyajikan pizza dengan rasa luar biasa, tetapi juga menawarkan variasi topping yang menggoda selera. Dengan suasana nyaman, layanan cepat, dan harga yang terjangkau, Yum-Yum Pizza menjadi pilihan utama bagi mereka yang menginginkan pengalaman kuliner yang memuaskan tanpa harus mengorbankan kualitas dan kenyamanan.</p>
         <a href="menu.php" class="btn">menu kami</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">langkah sederhana</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>pilih pesanan</h3>
         <p>Kami menyediakan banyak menu makanan dan minuman yang beragam.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>pengiriman cepat</h3>
         <p>kami mengutamakan pengiriman yang cepat agar anda bisa menikmati makanan kami .</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>menikmati makanan</h3>
         <p>kami menjamin kepuasan pelanggan nomor 1.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">customer's reivews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <p>Setiap potongan pizza di Pizza Yum-Yum adalah karya seni rasa. Kreativitas dalam penyajian dan kombinasi rasa membuat pengalaman menyantap pizza menjadi lebih istimewa.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>joko</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <p>Bagi penggemar keju, Pizza Yum-Yum adalah surganya. Keju melimpah pada setiap potongan pizza memberikan kepuasan luar biasa bagi para pecinta keju sejati.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>siti maisaroh</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <p>Pizza Yum-Yum tidak hanya menggoda selera para penggemar daging, tetapi juga menyajikan pilihan ramah vegetarian yang tak kalah lezat. Variasi menu untuk semua selera!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>udin</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p>Pizza Yum-Yum berhasil menyajikan kelezatan pizza tanpa tanding. Rasa adonan yang sempurna dan kombinasi topping yang kreatif menciptakan pengalaman makan yang tak terlupakan.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>susi susanti</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <p>Restoran ini memikat selera dengan beragam pilihan topping. Dari yang klasik hingga eksotis, setiap hidangan disiapkan dengan teliti, memberikan variasi yang memanjakan lidah..</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <p>Restoran ini membuktikan bahwa pizza lezat tak harus mahal. Dengan harga yang terjangkau, Pizza Yum-Yum memberikan kualitas rasa yang tak terbantahkan, memuaskan lidah dan dompet.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>anggun</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>