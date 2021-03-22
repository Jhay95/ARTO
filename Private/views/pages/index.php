<?php
require_once(INC_PATH . "header.php");
?>
    <!--Navigation bar-->
<?php
require_once(INC_PATH . "navigation.php");
?>
    <!--Header-->
    <header>
        <!--Banner-->
        <div id="bannerimage">


        </div>
    </header>

    <!-- Stories-->
    <section class="container">
        <div class="content">
            <div class="row">
                <!--Featuring -->
                <div class="col-sm-9">
                    <div class="row section-intro">
                        <div class="col-sm-3">
                            <h2>Featuring</h2>
                        </div>
                        <div class="col-sm-9">
                            <hr>
                        </div>
                    </div>

                    <article>
                        <div class="row">
                            <?php foreach ($data['stories'] as $story) : ?>
                                <div class="col-md-6">
                                    <img src="http://via.placeholder.com/40x20" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $story->story_title; ?></h5>
                                        <div class="card-time"><p><span
                                                        class="text-muted"><?php echo $story->pub_date; ?> </span> .
                                                <span
                                                        class="text-muted">3 mins</span></p></div>

                                        <div class="card-content"><p>
                                                <a href="<?php echo URL_ROOT; ?>pages/read/<?php echo $story->story_id; ?>"><?php echo $story->snippet; ?>
                                                    ......</a></p></div>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-2 pro">
                                                        <img src="http://via.placeholder.com/40x40" alt="">
                                                    </div>
                                                    <div class="col-md-10 my-auto">
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
                        <div class="align-items-center"><a href="<?php echo URL_ROOT; ?>pages/stories">See more..</a>
                        </div>
                    </article>
                </div>

                <!--Side Bar-->
                <?php
                require_once(INC_PATH . "sidebar.php");
                ?>
            </div>
        </div>
    </section>

<?php
require_once(INC_PATH . "footer.php");
?>