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
    <section class="container">
        <div class="content">
            <!--Featuring -->
            <div class="row section-intro">
                <div class="col-sm-2">
                    <h2>Stories</h2>
                </div>
                <div class="col-sm-10">
                    <hr>
                </div>
            </div>

            <div class="row">
                <!----- Story Listings ----->
                <div class="col-md-9">
                    <div class="row no-gutters">
                        <?php foreach ($data['stories'] as $story) : ?>
                            <div class="col-sm-3">
                                <img src="http://via.placeholder.com/120x130" class="card-img-top" alt="...">
                            </div>
                            <div class="col-sm-9">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $story->story_title; ?></h5>
                                    <div class="card-time">
                                        <p>
                                            <?php if (empty($story->mod_date)): ?>
                                                <span class="text-muted">created at <?php echo $story->pub_date; ?></span>
                                            <?php else: ?>
                                                <span class="text-muted">modified at <?php echo $story->mod_date; ?> </span>
                                            <?php endif; ?>

                                            <span>.</span>
                                            <span class="text-muted">3 mins read</span>
                                        </p>
                                    </div>
                                    <div class="card-content">
                                        <p>
                                            <a href="<?php echo URL_ROOT; ?>pages/read/<?php echo $story->story_id; ?>"><?php echo $story->snippet; ?>
                                                ......</a>
                                        </p>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-1 pro">
                                                    <?php if (empty($story->photo_title)) : ?>
                                                        <img src="<?php echo URL_ROOT; ?>Assets/images/team.png" alt=""
                                                             width="40px" height="40px">
                                                    <?php else : ?>
                                                        <img src="<?php echo URL_ROOT; ?>Assets/images/uploads/profiles/<?php echo $story->photo_title; ?>"
                                                             alt="" width="40px" height="40px">
                                                    <?php endif; ?>
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
                </div>

                <!-----Side Bar for search and filter ----->
                <div class="col-md-3">
                    <form action="#" method="post">
                        <!------By Time----->
                        <div id="date">
                            <h5>Sort by Date</h5>
                            <div class="form-check">
                                <input class="form-check-input" name="date" value="Earliest" type="radio">
                                <label for="date" class="form-check-label">
                                    Earliest
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="date" value="Latest" type="radio">
                                <label for="date" class="form-check-label">
                                    Latest
                                </label>
                            </div>
                        </div>

                        <hr>

                        <!------By Location----->
                        <div id="location">
                            <h5>Search by Location</h5>
                            <div class="form-outline">
                                <input type="text" name="location" class="form-control">
                            </div>
                        </div>

                        <hr>

                        <!------By Category----->
                        <div id="category">
                            <h5>Category</h5>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="War" name="category[]">
                                <label class="form-check-label" for="category">
                                    War
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Family" name="category[]">
                                <label class="form-check-label" for="category">
                                    Family
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Tradition" name="category[]">
                                <label class="form-check-label" for="category">
                                    Tradition
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Politics" name="category[]">
                                <label class="form-check-label" for="category">
                                    Politics
                                </label>
                            </div>
                            <div>
                                <input class="btn" type="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
require_once(INC_PATH . "footer.php");
?>