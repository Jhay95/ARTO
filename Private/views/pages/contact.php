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
                        <h2>Contact</h2>
                    </div>
                    <div class="col-sm-10">
                        <hr>
                    </div>
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