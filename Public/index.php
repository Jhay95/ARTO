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
                        <h2>Featuring</h2>
                    </div>
                    <div class="col-sm-9">
                        <hr>
                    </div>
                </div>

                <article>
                    <div class="row">
                        <div class="card col-6">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>

                        <div class="card col-6">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </article>
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