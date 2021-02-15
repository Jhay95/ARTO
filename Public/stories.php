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
                        <h2>Stories</h2>
                    </div>
                    <div class="col-sm-9">
                        <hr>
                    </div>
                </div>


                <div class="row no-gutter">
                    <div class="col-sm-2">
                        <img src="http://via.placeholder.com/160x160" alt="...">
                    </div>

                    <div class="col-sm-10">

                        <div class="card-body">
                            <p class="card-text"><small class="text-muted">read duration</small></p>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>

                            <div class="row">
                                <div class="col-md-4">
                                    <img src="http://via.placeholder.com/60x60" alt="">
                                </div>
                                <div class="col-md-4">
                                    <p><small class="text-muted">Author's Name</small></p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                                <div class="col-md-4">

                                </div>
                            </div>

                        </div>
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