<?php
require_once(INC_PATH . "header.php");
?>

    <!--Navigation bar-->
<?php
require_once(INC_PATH . "navigation.php");
?>

    <!-- Stories-->

    <section class="container">
        <div class="">
            <h2><?php echo $data['story']->story_title; ?></h2>
        </div>
        <div class="col-sm-10">
            <hr>
        </div>

        <div class="row">
            <!-----Story Content----->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-9"><p><span
                                    class="text-muted  mr-auto"><?php echo $data['story']->pub_date; ?></span>
                            . <span class="text-muted">5 mins</span>
                        </p></div>

                    <div class="col-md-3 dropend">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" id="story-control" aria-haspopup="true"
                           aria-expanded="false">
                            ...
                        </a>
                        <ul class="dropdown-menu multi-level" aria-labelledby="story-control">
                            <?php if (loggedin() && $data['story']->writer_id == $_SESSION['id']) : ?>
                                <li><a class="dropdown-item"
                                       href="<?php /*echo URL_ROOT; */ ?>stories/edit/<?php /*echo $story->story_id; */ ?>">Edit
                                        Story</a></li>
                                <li><a class="dropdown-item"
                                       href="<?php /*echo URL_ROOT; */ ?>stories/delete/<?php /*echo $story->story_id; */ ?>">Delete
                                        Story</a></li>
                            <?php endif; ?>
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="">Share Story</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">copy link</a></li>
                                    <li><a class="dropdown-item fa fa-facebook" href="#"></a></li>
                                    <li><a class="dropdown-item fa fa-twitter" href="#"></a></li>
                                    <li><a class="dropdown-item fa fa-linkedin" href="#"></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-11">
                        <p class="story-body"><?php echo $data['story']->story_body; ?>
                        </p>
                    </div>
                </div>
            </div>

            <!-----About the Writer----->

            <div class="col-md-4 text-center">
                <!----- Profile Pic---->
                <div class="pro">
                    <img src="http://via.placeholder.com/130x130" alt="">
                </div>

                <!----- Profile Data---->
                <div>
                    <h5><?php echo $data['story']->writer_fname . ', ' . $data['story']->writer_lname; ?></h5>
                    <h6><?php echo $data['story']->writer_city . ', ' . $data['story']->writer_state; ?></h6>
                    <div class="story-body">
                        <p><?php echo $data['story']->writer_profile; ?></p>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php
require_once(INC_PATH . "footer.php");
?>