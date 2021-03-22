<?php require_once(INC_PATH . 'header.php'); ?>

<?php require_once(INC_PATH . 'navigation.php'); ?>

    <section class="content">
        <div class="container">
            <div class="row justify-content-md-center">

                <div class="col-md-8 text-center">
                    <br>
                    <h2>Update Profile Photo</h2>
                    <br>
                    <div class="pro">
                            <img src="http://via.placeholder.com/150x150" alt="">
                    </div>
                    <br>
                    <div class="justify-content-md-center">
                        <form action="<?php echo URL_ROOT; ?>writers/upload/<?php echo $data['id']; ?>"
                              method="post" enctype="multipart/form-data">

                            <div class="col-md-9  text-center">
                                <span>file upload types: *.png, *.jpeg, *.gif</span>
                                <input type="file" name="profile" accept="image/png, image/jpeg" class="form-control <?php echo (!empty($data['file_err'])) ? 'is-invalid' : ''; ?>">
                                <span class="invalid-feedback"><?php echo $data['file_err']; ?></span>
                            </div>
                            <br>
                            <div class="col-md-3 text-center">
                                <input class="btn btn-primary form-control" type="submit" name="save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
require_once(INC_PATH . 'footer.php');
?>