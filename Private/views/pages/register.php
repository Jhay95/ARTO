<?php
require_once(INC_PATH . "header.php");
?>

    <!--Header-->
    <header>
        <!--Navigation bar-->
        <?php
        require_once(INC_PATH . "navigation.php");
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

                <div class="row section-intro">
                    <div class="col-sm-3">
                        <h2>Create an Account</h2>
                    </div>
                    <div class="col-sm-9">
                        <hr>
                    </div>
                </div>

                <div class="row">
                    <form action="<?php echo URL_ROOT?>writers/register" method="post">

                        <div class="col-md-6">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" name="fname" class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" id="fname">
                            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
                        </div>

                        <div class="col-md-6">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" name="lname" class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" id="lname">
                            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
                        </div>
                        <div class="col-md-6">
                            <label for="city" class="form-label">City</label>
                            <input type="text" name="city" class="form-control" id="city">
                        </div>
                        <div class="col-md-6">
                            <label for="state" class="form-label">State</label>
                            <input type="text" name="state" class="form-control" id="state">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" id="email">
                            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" id="password">
                            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                        </div>
                        <div class="col-12">
                            <p>Already created an account? <a href="<?php echo URL_ROOT?>pages/login"><span>login here</span></a></p>
                        </div>
                        <div class="col-12">
                            <input type="submit" class="btn btn-primary" name="Sign up">
                        </div>
                    </form>
                </div>
            </section>

            <!--Side Bar-->
            <?php
            require_once(INC_PATH . "sidebar.php")
            ?>
        </div>
    </main>

<?php
require_once(INC_PATH . "footer.php");
?>