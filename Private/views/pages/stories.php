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
                        <h2>Stories</h2>
                    </div>
                    <div class="col-sm-10">
                        <hr>
                    </div>
                </div>

                <div class="row no-gutters">
                    <?php foreach ($data['stories'] as $story) : ?>
                        <div class="col-sm-3">
                            <img src="http://via.placeholder.com/120x130" class="card-img-top" alt="...">
                        </div>
                        <div class="col-sm-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $story->story_title; ?></h5>
                                <div class="card-time"><p><span
                                                class="text-muted"><?php echo $story->pub_date; ?> </span> . <span
                                                class="text-muted">3 mins</span></p></div>
                                <div class="card-content">
                                    <p><a href="<?php echo URL_ROOT; ?>pages/read/<?php echo $story->story_id; ?>"><?php echo $story->snippet; ?>......</a>
                                    </p>
                                </div>

                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-1 pro">
                                                <img src="http://via.placeholder.com/40x40" alt="">
                                            </div>
                                            <div class="col-md-11 my-auto">
                                                <p class="card-text"><?php echo $story->writer_fname . ', ' . $story->writer_lname; ?></p>
                                                <p class="card-text"><?php echo $story->writer_city; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2" id="share-icons">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
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