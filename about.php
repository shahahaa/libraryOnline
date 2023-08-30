<?php

include 'config.php';

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

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Choose us for your book needs because we offer a curated selection of high-quality books at competitive prices. Our diverse range of titles ensures there's something for every reader. With easy online ordering and fast, reliable shipping, getting your hands on your favorite books is quick and convenient.</p>
         <p> We value our customers and provide excellent customer service to address any queries or concerns you may have. Trust us to provide a fulfilling reading experience and help you discover your next literary adventure.</p>
         <a href="contact.php" class="btn">Contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/arif.jpg" alt="">
         <p>"I absolutely love shopping at this book web store! They have an amazing selection of books, and I always find something new and exciting to read. The ordering process is straightforward, and their shipping is quick and reliable. Highly recommend!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Arif</h3>
      </div>

      <div class="box">
         <img src="images/asif.jpg" alt="">
         <p>"I'm so glad I discovered this book web store. The prices are unbeatable, and the quality of their books is exceptional. I appreciate the personalized book recommendations they provide based on my interests. It's like having my own personal book curator!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Asif</h3>
      </div>

      <div class="box">
         <img src="images/nahid.jpg" alt="">
         <p>"This book web store is my go-to place for all my reading needs. Their customer service is top-notch and helpful in addressing any questions. The reviews and ratings from other customers help me make informed decisions about the books I choose. I'm a loyal customer for life!" </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nahid</h3>
      </div>

      <div class="box">
         <img src="images/mahdi.jpg" alt="">
         <p>"As a book lover, I appreciate the wide range of genres available at this web store. They cater to different tastes, and I've discovered some hidden gems thanks to their recommendations. The ordering process is smooth, and the books always arrive in excellent condition. Highly recommended for fellow book enthusiasts!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mahdi</h3>
      </div>

      <div class="box">
         <img src="images/alif.jpg" alt="">
         <p>"Shopping at this book web store is a delightful experience. Their website is user-friendly, making it easy to browse and find the books I'm interested in. The prices are reasonable, and the occasional promotions are a bonus. I'm always excited to receive my package, and they never disappoint!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alif</h3>
      </div>

      <div class="box">
         <img src="images/el.jpg" alt="">
         <p>"I've been a loyal customer of this book web store for years, and I can't imagine buying books anywhere else. Their collection is extensive, covering both popular titles and niche genres. The quality of their books is consistently high, and their customer service team is friendly and responsive." </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ma Boi</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Great Authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/stephenking.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Stephen King</h3>
      </div>

      <div class="box">
         <img src="images/jg.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>John Green</h3>
      </div>

      <div class="box">
         <img src="images/jk.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>J.K Rowling</h3>
      </div>

      <div class="box">
         <img src="images/Franzkafka.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Franz Kafka</h3>
      </div>

      <div class="box">
         <img src="images/rd.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Roald Dahl</h3>
      </div>

      <div class="box">
         <img src="images/rk.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Rupi Kaur</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>