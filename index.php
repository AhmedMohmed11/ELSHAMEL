<!DOCTYPE html>
<html lang="ar">

<?php include("header.php"); ?>


<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php include("navbar.php"); ?>


    <!-- Carousel Start -->
    <?php include("in-index/Carousel.php"); ?>

    <!-- Carousel End -->


    <!-- Service Start -->
    <?php include("in-index/service.php"); ?>

    <!-- Service End -->


    <!-- About Start -->
    <!-- About End -->


    <!-- Categories Start -->
    <?php include("in-index/cat.php"); ?>

    <!-- Categories Start -->


    <!-- Courses Start -->
    <?php include("in-index/coursez.php"); ?>

    <!-- Courses End -->


    <!-- Team Start -->
    <?php include("in-index/team2.php"); ?>

    <!-- Team End -->


    <!-- Testimonial Start -->
    <?php include("in-index/comments_abut_site.php"); ?>

    <!-- Testimonial End -->


    <!-- Footer Start -->
    <?php include("footer.php"); ?>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>