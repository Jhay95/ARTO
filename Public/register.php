<?php
require_once("header.php");
?>

    <!--Header-->
    <header>
        <!--Navigation bar-->
        <?php
        require_once("navigation.php");
        ?>

        <!--Banner-->
        <div id="bannerimage">

        </div>
    </header>

    <!-- Stories-->
    <main class="container">
        <div class="row">
            <!--Featuring -->
            <section class="col-sm-9">

                <div class="row">
                    <div class="col-sm-3">
                        <h2>Create an Account</h2>
                    </div>
                    <div class="col-sm-9">
                        <hr>
                    </div>
                </div>

                <div class="row">
                    <form action="" method="post">
                        <div class="col-md-6">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="fname">
                        </div>
                        <div class="col-md-6">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lname">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="col-md-6">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" id="city">
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <p>Already created an account? <a href="login.php"><span>login here</span></a></p>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </form>
                </div>

            </section>

            <!--Side Bar-->
            <?php
            require_once("sidebar.php")
            ?>
        </div>
    </main>

<?php
require_once("footer.php");
?>