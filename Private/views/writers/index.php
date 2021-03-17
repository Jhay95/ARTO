<?php require_once(INC_PATH . "header.php"); ?>
    <!--Navigation bar-->
<?php require_once(INC_PATH . "navigation.php"); ?>

    <!--Banner, Writer headline-->
    <section id="pro-banner">
        <div class="container">

            <div class="row justify-content-md-center">
                <div class="col-md-8 text-center">
                    <!----- Profile Pic---->
                    <div class="pro">
                        <img src="http://via.placeholder.com/150x150" alt="">
                    </div>

                    <!----- Profile Data---->
                    <div>
                        <h5><?php echo $data['writer']->writer_fname . ', ' . $data['writer']->writer_lname; ?></h5>
                        <h6><?php echo $data['writer']->writer_city . ', ' . $data['writer']->writer_state; ?></h6>
                        <h6><?php echo $data['writer']->writer_email; ?></h6>
                        <p><?php echo $data['writer']->writer_profile; ?></p>
                    </div>

                    <div>
                        <a href="<?php echo URL_ROOT; ?>writers/edit/<?php echo $data['writer']->writer_id; ?>">Edit
                                Profile</a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Stories by Writer-->
    <section class="container">
        <div class="row">

            <div class="row section-intro">
                <div class="col-sm-2">
                    <h2>Stories</h2>
                </div>
                <div class="col-sm-8">
                    <hr>
                </div>

                <div class="col-sm-2 ms-auto">
                    <a href="<?php echo URL_ROOT; ?>stories/new/<?php echo $data['writer']->writer_id; ?>">New
                            Story</a>
                </div>
            </div>

            <!---Stories snippet--->
            <?php foreach ($data['stories'] as $story): ?>
                <div class="row">
                    <!---Story Image--->
                    <div class="col-sm-2">
                        <img src="http://via.placeholder.com/120x120" class="card-img-top" alt="...">
                    </div>

                    <!---Story features--->
                    <div class="col-sm-10">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $story->story_title; ?></h5>
                            <div class="card-time"><p><span
                                            class="text-muted"><?php echo $story->pub_date; ?> </span> . <span
                                            class="text-muted">3 mins</span></p></div>
                            <div class="card-content">
                                <p>
                                    <a href="<?php echo URL_ROOT; ?>pages/read/<?php echo $story->story_id; ?>"><?php echo $story->snippet; ?>
                                        ......</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

<?php
require_once(INC_PATH . "footer.php");
?>