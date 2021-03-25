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
                    <div class="col-md-9">
                        <p>
                            <?php if (empty($data['story']->mod_date)): ?>
                                <span class="text-muted">created at <?php echo $data['story']->pub_date; ?></span>
                            <?php else: ?>
                                <span class="text-muted">modified at <?php echo $data['story']->mod_date; ?> </span>
                            <?php endif; ?>

                            <span>.</span>
                            <span class="text-muted">3 mins read</span>
                        </p>
                    </div>

                    <div class="col-md-3 dropend">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" id="story-control" aria-haspopup="true"
                           aria-expanded="false">
                            <strong>...</strong>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="story-control">
                            <?php if (loggedin() && $data['story']->writer_id == $_SESSION['id']) : ?>
                                <li><a class="dropdown-item"
                                       href="<?php echo URL_ROOT; ?>stories/edit/<?php echo $data['story']->writer_id; ?>/<?php echo $data['story']->story_id; ?>">Edit
                                        Story</a></li>
                                <li><a class="dropdown-item"
                                       href="<?php echo URL_ROOT; ?>stories/delete/<?php echo $data['story']->writer_id; ?>/<?php echo $data['story']->story_id; ?>">Delete
                                        Story</a></li>
                            <?php endif; ?>
                            <li><a class="dropdown-item" href="#">Share Story</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-10">
                        <p class="story-body" style="white-space: pre-wrap;"><?php echo $data['story']->story_body; ?>
                        </p>
                    </div>
                    <div class="col-md-2">
                        <a class="fas fa-bookmark" href="#"></a>
                        <br>
                        <a class="fas fa-heart" href="#"></a>
                        <br>
                        <a class="fas fa-thumbs-up" href="#"></a>
                    </div>
                </div>
            </div>

            <!-----About the Writer----->

            <div class="col-md-4 text-center">
                <div>
                    <!----- Profile Pic---->
                    <div class="pro">
                        <?php if (empty($data['story']->photo_title)) : ?>
                            <img src="<?php echo URL_ROOT; ?>Assets/images/team.png" alt="" width="150px" height="150px">
                        <?php else : ?>
                            <img src="<?php echo URL_ROOT; ?>Assets/images/uploads/profiles/<?php echo $data['story']->photo_title; ?>"
                                 alt="" width="150px" height="150px">
                        <?php endif; ?>
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
                <hr>
                <div>
                    <h4>Story Location</h4>
                    <p></p><?php echo $data['story']->story_location; ?>
                    </p>
                    <br>
                    <h4>Tags</h4>
                    <p><?php echo $data['story']->story_tag; ?>
                    </p>
                </div>
            </div>

        </div>
    </section>

<?php
require_once(INC_PATH . "footer.php");
?>