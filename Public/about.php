<?php
require_once("header.php");
?>

    <!--Header-->
    <header>
        <!--Navigation bar-->
        <?php
        require_once("navigation.php");
        ?>

        <!--Banner-->
        <div id="bannerimage">

        </div>
    </header>

    <!-- Stories-->
    <main class="container">
        <div class="row">
            <section class="col-sm-9">
                <!--Meet the Team-->
                <div>
                    <div class="row">
                        <div class="col-sm-3">
                            <h2>Meet the Team</h2>
                        </div>
                        <div class="col-sm-9">
                            <hr>
                        </div>
                    </div>

                    <div class="row justify-content-start">
                        <div class="col-4">
                            <img src="../Assets/images/team.png" alt="" width="150px" height="150px">
                            <h5>Team Member</h5>
                        </div>
                        <div class="col-4">
                            <img src="../Assets/images/team2.png" alt="" width="150px" height="150px">
                            <h5>Team Member</h5>
                        </div>
                        <div class="col-4">
                            <img src="../Assets/images/team.png" alt="" width="150px" height="150px">
                            <h5>Team Member</h5>
                        </div>
                    </div>
                    <div class="row justify-content-evenly">
                        <div class="col-4">
                            <img src="../Assets/images/team2.png" alt="" width="150px" height="150px">
                            <h5>Team Member</h5>
                        </div>
                        <div class="col-4">
                            <img src="../Assets/images/team.png" alt="" width="150px" height="150px">
                            <h5>Team Member</h5>
                        </div>
                    </div>

                </div>

                <!--The Team's Objectives-->
                <div>
                    <div class="row">
                        <div class="col-sm-3">
                            <h2>Our Objectives</h2>
                        </div>
                        <div class="col-sm-9">
                            <hr>
                        </div>
                    </div>

                    <div class="row justify-content-start">
                        <div class="col-4">
                            <img src="../Assets/images/team.png" alt="" width="150px" height="150px">
                            <h5>Team Member</h5>
                        </div>
                        <div class="col-4">
                            <img src="../Assets/images/team2.png" alt="" width="150px" height="150px">
                            <h5>Team Member</h5>
                        </div>
                        <div class="col-4">
                            <img src="../Assets/images/team.png" alt="" width="150px" height="150px">
                            <h5>Team Member</h5>
                        </div>
                    </div>
                    <div class="row justify-content-evenly">
                        <div class="col-4">
                            <img src="../Assets/images/team2.png" alt="" width="150px" height="150px">
                            <h5>Team Member</h5>
                        </div>
                        <div class="col-4">
                            <img src="../Assets/images/team.png" alt="" width="150px" height="150px">
                            <h5>Team Member</h5>
                        </div>
                    </div>

                </div>
            </section>

            <!--Side Bar-->
            <?php
            require_once("sidebar.php")
            ?>
        </div>

    </main>

<?php
require_once("footer.php");
?>