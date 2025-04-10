<?php

include '../component/database.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include '../component/like_post.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>category</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include '../component/user_header.php'; ?>
<!-- header section ends -->




<section class="categories">

   <h1 class="heading">post categories</h1>

   <div class="box-container">
      <div class="box"><span>01</span><a href="category.php?category=nature">Nature</a></div>
      <div class="box"><span>02</span><a href="category.php?category=eduction">Education</a></div>
      <div class="box"><span>03</span><a href="category.php?category=technology">Technology</a></div>
      <div class="box"><span>04</span><a href="category.php?category=food and drinks">Food and drinks</a></div>
      <div class="box"><span>05</span><a href="category.php?category=fashion">Fashion</a></div>
      <div class="box"><span>06</span><a href="category.php?category=entertainment">Entertainment</a></div>
      <div class="box"><span>07</span><a href="category.php?category=movies">Movies</a></div>
      <div class="box"><span>08</span><a href="category.php?category=gaming">Gaming</a></div>
      <div class="box"><span>09</span><a href="category.php?category=music">Music</a></div>
      <div class="box"><span>10</span><a href="category.php?category=sports">Sports</a></div>
      <div class="box"><span>11</span><a href="category.php?category=news">News</a></div>
      <div class="box"><span>12</span><a href="category.php?category=travel">Travel</a></div>
      <div class="box"><span>13</span><a href="category.php?category=comedy">Comedy</a></div>
      <div class="box"><span>14</span><a href="category.php?category=health and fitness">Health and Fitness</a></div>
      <div class="box"><span>15</span><a href="category.php?category=business">Business</a></div>
      
   </div>

</section>

<?php include '../component/footer.php'; ?>

<!-- custom js file link  -->
<script src="../js/script.js"></script>

</body>
</html>