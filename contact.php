<!DOCTYPE html>
<html lang="eng">

<head>
  <meta charset="utf-8">
  <title>Contact Us</title>

  <?php include('./partials/header.php') ?>

</head>

<body>
  <!-- preloader -->
  <?php include('./partials/preloader.php') ?>
  <!-- /preloader -->

  <?php include('./partials/nav.php') ?>

<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="mb-4">Contact Us</h2>
        <img src="images/contact.jpg" alt="author" class="img-fluid w-100 mb-4">
        <p class="mb-5">Strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream and, as I lie close to the earth, a thousand unknown plants are noticed by me.<br><br>When I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath of that universal love which bears and sustains.</p>
        <form action="#" class="row">
          <div class="col-lg-6">
            <input type="text" class="form-control mb-4" name="name" id="name" placeholder="Name">
          </div>
          <div class="col-lg-6">
            <input type="email" class="form-control mb-4" name="email" id="email" placeholder="Email">
          </div>
          <div class="col-12">
            <textarea name="message" id="message" class="form-control mb-4" placeholder="Message..."></textarea>
          </div>
          <div class="col-12">
            <button class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- instagram -->
<section>
  <div class="container-fluid px-0">
    <div class="row no-gutters instagram-slider" id="instafeed" data-userId="4044026246"
      data-accessToken="4044026246.1677ed0.8896752506ed4402a0519d23b8f50a17"></div>
  </div>
</section>
<!-- /instagram -->



<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- masonry -->
<script src="plugins/masonry/masonry.js"></script>
<!-- instafeed -->
<script src="plugins/instafeed/instafeed.min.js"></script>
<!-- smooth scroll -->
<script src="plugins/smooth-scroll/smooth-scroll.js"></script>
<!-- headroom -->
<script src="plugins/headroom/headroom.js"></script>
<!-- reading time -->
<script src="plugins/reading-time/readingTime.min.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>