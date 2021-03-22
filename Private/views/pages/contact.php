<?php
require_once(INC_PATH . "header.php");
?>

<?php
require_once(INC_PATH . "navigation.php");
?>

    <!-- Stories-->
    <section class="container">
        <!--Featuring -->
        <div class="section-intro">

            <h2>Contact</h2>
            <hr>

            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <h4>Send Us a Message</h4>
                        <form action="mailto:s.anwunah@rgu.ac.uk" method="get" enctype="text/plain">
                            <div class="form-group col-md-12">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <br>
                            <div class="form-group col-md-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email"
                                       class="form-control">
                            </div>
                            <br>
                            <div class="form-group col-md-12">
                                <label for="subject">Subject</label>
                                <select name="subject" class="form-select form-control">
                                    <option value="Enquiry">Enquiry</option>
                                    <option value="Feedback">Feedback</option>
                                    <option value="Suggestions">Suggestions</option>
                                    <option value="Compliment">Compliment</option>
                                </select>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <label for="message" class="form-label">Message</label>
                                <textarea name="message" class="form-control" cols="15"
                                          rows="10">Share your thoughts with the team</textarea>
                            </div>
                            <br>
                            <div class="col-12">
                                <input type="submit" name="login" class="btn btn-primary">
                                <input type="reset" name="clear" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6 ml-auto">
                    <div>
                        <h5>Office Location</h5>
                        <p>123 Highway Avenue</p>
                    </div>
                    <div>
                        <h5>Contact Telephone</h5>
                        <p>+44 7975403349</p>
                    </div>
                    <div>
                        <h5>Social media Handle</h5>
                        <p><a href="#">Facebook</a></p>
                        <p><a href="#">Twitter</a></p>
                        <p><a href="#">Youtube</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once(INC_PATH . "footer.php");
?>