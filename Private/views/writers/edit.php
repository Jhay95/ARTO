<!------This page is where the writer makes updates to profile, Updates includes editing and deleting --------->
<?php require_once(INC_PATH . 'header.php'); ?>

<?php require_once(INC_PATH . 'navigation.php'); ?>

    <section class="content">
        <div class="container">
            <div class="justify-content-center">
                <h2>Update Information</h2>
                <br>
                <!--------Form for Editing profile------->
                <form class="row g-3" action="<?php echo URL_ROOT ;?>writers/edit/<?php echo $data['id'] ;?>"
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
                        <button class="btn btn-primary text-white"><a href="<?php echo URL_ROOT; ?>writers/index/<?php echo $data['id'] ;?>">Cancel</a></button>
                    </div>
                    <!--------Prompt for deactivating profile------->
                    <div  class="form-group col-md-3 ml.auto">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Deactivate Profile
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Are you sure you want to delete this profile?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Selecting yes will remove this profile along with any information created from our system. Stories told will no longer be available to the public.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary"><a href="<?php echo URL_ROOT; ?>writers/delete/<?php echo $data['id'] ;?>">Yes! Continue</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php
require_once(INC_PATH . 'footer.php');
?>