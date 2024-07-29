<!DOCTYPE html>
<html lang="en">

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

    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">دوراتنا</h1>
                    <nav aria-label="breadcrumb">
                        <!-- <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">الصفحة الرئيسية</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#"></a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">الدورات</li> -->
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <form action="#" class="search">
        <button class="search__button">
            <div class="search__icon">

            </div>
        </button>
        <input type="text" class="search__input" placeholder="Search...">
        <button class="mic__button">
            <div class="mic__icon">

            </div>
        </button>
        <button class="picture__button">
            <div class="picture__icon">

            </div>
        </button>
    </form>

    <!-- Categories Start -->

    <!-- Categories Start -->


    <!-- Courses Start -->
    <?php include("./in-index/cards.php"); ?>

    <!-- Courses End -->


    <!-- Testimonial Start -->


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