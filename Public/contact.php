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
                        <h2>Contact</h2>
                    </div>
                    <div class="col-sm-9">
                        <hr>
                    </div>
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