<?php require_once(INC_PATH . 'header.php'); ?>

<?php require_once(INC_PATH . 'navigation.php'); ?>

    <section class="content">
        <div class="container">
            <div class="justify-content-center">
                <h2>Update Information</h2>
                <form class="row g-3" action="<?= URL_ROOT ?>writers/edit/<?= $data['id'] ?>"
                      method="post">

                    <div class="form-group col-md-6">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname"
                               class="form-control <?php echo (!empty($data['fname_err'])) ? 'is-invalid' : ''; ?>"
                               value="<?php echo $data['fname']; ?>">
                        <span class="invalid-feedback"><?php echo $data['fname_err']; ?></span>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="lname">Last Name</label>
                        <input type="text"
                               class="form-control <?php echo (!empty($data['lname_err'])) ? 'is-invalid' : ''; ?>"
                               name="lname" value="<?php echo $data['lname']; ?>">
                        <span class="invalid-feedback"><?php echo $data['lname_err']; ?></span>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="email">Email address</label>
                        <input type="email"
                               class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
                               name="email" value="<?php echo $data['email']; ?>">
                        <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                    </div>


                    <div class="form-group col-md-12">
                        <label for="email">About</label>
                        <textarea class="form-control" name="profile" id="profile"
                                  rows="5"><?php echo $data['profile']; ?></textarea>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="city">City</label>
                        <input type="text"
                               class="form-control"
                               name="city" value="<?php echo $data['city']; ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="state">State</label>
                        <input type="text"
                               class="form-control"
                               name="state" value="<?php echo $data['state']; ?>">
                    </div>

                    <div class="form-group col-md-3">
                        <input type="submit" class="btn btn-primary" name="submit">
                        <button class="btn btn-primary"><a href="<?= URL_ROOT ?>writers/index/<?= $data['id'] ?>">Cancel</a></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php
require_once(INC_PATH . 'footer.php');
?>