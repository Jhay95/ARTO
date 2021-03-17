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
                    <div class="col-sm-2">
                        <h2>Login</h2>
                    </div>
                    <div class="col-sm-10">
                        <hr>
                    </div>
                </div>

                <div class="row">
                    <form action="<?php echo URL_ROOT?>writers/login" method="post">
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                        </div>
                        <div class="col-12">
                            <p>First time here? <a href="<?php echo URL_ROOT?>pages/register"><span>Create an account</span></a></p>
                        </div>
                        <div class="col-12">
                            <input type="submit" name="login" class="btn btn-primary">
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