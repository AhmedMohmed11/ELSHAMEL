<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academy | C++ fundimentals</title>
    <link rel="stylesheet" href="./css/coursedetails.css" />
    <link rel="icon" type="image/x-icon" href="images/icon.png">
</head>

<body>

    <header>
        <nav>
            <div class="menu">
                <div class="logo">
                    <a href="index.html"><button class="button" data-text="Awesome">
                            <span class="actual-text">&nbsp;Academy&nbsp;</span>
                            <span aria-hidden="true" class="hover-text">&nbsp;Academy&nbsp;</span>
                        </button> </a>
                </div>
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="about.html">About</a></li>

                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container">

        <!-- Left Column  -->
        <div class="left-column">
            <img src="images/c++.png">
        </div>


        <!-- Right Column -->
        <div class="right-column">

            <!-- Product Description -->
            <div class="product-description">
                <span>Online Course</span>
                <h1>C++_Fundimentals</h1>
                <p>Master the basics of C++ programming with our comprehensive course.
                    Learn essential concepts and techniques to kickstart your journey into the world of software development.</p>
            </div>

            <!-- Course Items -->
            <div class="product-configuration">


                <!-- Course Items -->
                <div class="course-config">
                    <span>This course includes:</span>

                    <div class="course-choose">
                        <ul>
                            <li><button>46 hours on-demand video</button> </br> </li>
                            <li><button>Certificate of completion</button> </li>
                            <li> <button>46 coding exercises</button></br> </li>
                            <li><button>Assignments</button></br> </li>

                    </div>
                    </ul>
                    <a href="#">How to simplify your daily tasks and enhance productivity</a>
                </div>
            </div>

            <!-- Product Pricing & ratings -->
            <div class="rating">
                <input value="5" name="rating" id="star5" type="radio">
                <label for="star5"></label>
                <input value="4" name="rating" id="star4" type="radio">
                <label for="star4"></label>
                <input value="3" name="rating" id="star3" type="radio">
                <label for="star3"></label>
                <input value="2" name="rating" id="star2" type="radio">
                <label for="star2"></label>
                <input value="1" name="rating" id="star1" type="radio">
                <label for="star1"></label>
            </div> </br>

            <div class="product-price">
                <span>70$</span>
                <a href="#" class="cart-btn">Buy Now</a>
            </div>
        </div>
    </main>

    <footer id="bottom" class="footer">
        <div class="container">
            <p>&copy; 2024 Educational Platform. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>