    <?php include("header.php"); ?>

    <?php include("navbar.php"); ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile Card</title>
        <style>
            .profile-card {
                max-width: 900px;
                margin: 20px auto;
                background: #f8f9fa;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .profile-header {
                display: flex;
                align-items: center;
            }

            .profile-header img {
                width: 100px;
                height: 100px;
                border-radius: 50%;
                margin-right: 20px;
            }

            .profile-header .info {
                flex-grow: 1;
            }

            .profile-header .info h2 {
                margin: 0;
            }

            .profile-social {
                display: flex;
                justify-content: space-around;
                margin-top: 20px;
            }

            .progress {
                height: 10px;
            }
        </style>
    </head>

    <body>

        <div class="profile-card">
            <div class="profile-header">
                <img src="./img/osama.jpg" alt="Profile Picture">
                <div class="info">
                    <h2>Osama Elzero</h2>
                    <p>Full Stack Developer</p>
                    <p>EGY</p>
                    <button class="btn btn-primary">Follow</button>
                    <button class="btn btn-secondary">Message</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h4>Full Name</h4>
                    <p>Osama Mohamed</p>
                </div>
                <div class="col-md-6">
                    <h4>Email</h4>
                    <p>Osama.elzero@gmail.com</p>
                </div>
                <div class="col-md-6">
                    <h4>Phone</h4>
                    <p>01018912735</p>
                </div>
                <div class="col-md-6">
                    <h4>Mobile</h4>
                    <p>01278345637</p>
                </div>
                <div class="col-md-6">
                    <h4>Address</h4>
                    <p>Cairo, madindty, block</p>
                </div>
                <div class="col-md-6 text-right">
                    <button class="btn btn-info">Edit</button>
                </div>
                <?php include("socialin.php"); ?>

            </div>


            <div class="row mt-4">
                <div class="col-md-6">
                    <h4>Project Status</h4>
                    <div>
                        <strong>Web Design</strong>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 80%"></div>
                        </div>
                    </div>
                    <div>
                        <strong>Website Markup</strong>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 60%"></div>
                        </div>
                    </div>
                    <div>
                        <strong>One Page</strong>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 90%"></div>
                        </div>
                    </div>
                    <div>
                        <strong>Mobile Template</strong>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 50%"></div>
                        </div>
                    </div>
                    <div>
                        <strong>Backend API</strong>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Project Status</h4>
                    <div>
                        <strong>Web Design</strong>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 80%"></div>
                        </div>
                    </div>
                    <div>
                        <strong>Website Markup</strong>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 60%"></div>
                        </div>
                    </div>
                    <div>
                        <strong>One Page</strong>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 90%"></div>
                        </div>
                    </div>
                    <div>
                        <strong>Mobile Template</strong>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 50%"></div>
                        </div>
                    </div>
                    <div>
                        <strong>Backend API</strong>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>

    </html>