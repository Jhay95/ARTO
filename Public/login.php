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
                        <h2>Login</h2>
                    </div>
                    <div class="col-sm-9">
                        <hr>
                    </div>
                </div>

                <div class="row">
                    <form action="" method="post">
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="col-12">
                            <p>First time here? <a href="register.php"><span>Create an account</span></a></p>
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