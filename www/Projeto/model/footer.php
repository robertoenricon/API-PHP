<?php

require_once('../controller/class/cfg.class.php');

?>
<footer class="text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4 pb-0">

    <!-- Section: Copyright -->
    <section class="p-3 pt-0">
      <div class="row d-flex align-items-center">
        <!-- Grid column -->
        <div class="col-md-7 col-lg-8 text-center text-md-start">
          <!-- Copyright -->
          <div class="p-3">
            © 2021 Copyright:
            <a class="text-dark" href="#">Roberto Enrico</a>
          </div>
          <!-- Copyright -->
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">

          <!-- Linkedin -->
          <a class="btn btn-outline-dark btn-floating m-1" role="button"><i class="fab fa-linkedin-in"></i></a>

          <!-- Github -->
          <a class="btn btn-outline-dark btn-floating m-1" role="button"><i class="fab fa-github"></i></a>

        </div>
        <!-- Grid column -->
      </div>
    </section>
    <!-- Section: Copyright -->
  </div>
  <!-- Grid container -->
</footer>

<?php


$js = new cssJs();
echo $js->js(basename($_SERVER['PHP_SELF'], '.php'));

?>

</html>