<?php
require_once(INC_PATH ."header.php");
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
    <main class="container">
        <div class="row">
            <section class="col-sm-9">
                <!--Meet the Team-->
                <div>
                    <div class="row section-intro">
                        <div class="col-sm-3">
                            <h2>Meet the Team</h2>
                        </div>
                        <div class="col-sm-9">
                            <hr>
                        </div>
                    </div>

                    <div class="row justify-content-start">
                        <div class="col-4">
                            <img src="<?php echo URL_ROOT; ?>Assets/images/team.png" alt="" width="150px" height="150px">
                            <h5>James Scott</h5>
                        </div>
                        <div class="col-4">
                            <img src="<?php echo URL_ROOT ;?>Assets/images/team2.png" alt="" width="150px" height="150px">
                            <h5>Kelly Duke</h5>
                        </div>
                        <div class="col-4">
                            <img src="<?php echo URL_ROOT ;?>Assets/images/team.png" alt="" width="150px" height="150px">
                            <h5>Sofia Arnold</h5>
                        </div>
                    </div>
                    <div class="row justify-content-evenly">
                        <div class="col-4">
                            <img src="<?php echo URL_ROOT ;?>Assets/images/team2.png" alt="" width="150px" height="150px">
                            <h5>Chikey Sloan</h5>
                        </div>
                        <div class="col-4">
                            <img src="<?php echo URL_ROOT ;?>Assets/images/team.png" alt="" width="150px" height="150px">
                            <h5>Mabel Klein</h5>
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
                            <img src="<?php echo URL_ROOT ;?>Assets/images/team.png" alt="" width="150px" height="150px">
                            <h5>Connection</h5>
                        </div>
                        <div class="col-4">
                            <img src="<?php echo URL_ROOT ;?>Assets/images/team2.png" alt="" width="150px" height="150px">
                            <h5>Globalism</h5>
                        </div>
                        <div class="col-4">
                            <img src="<?php echo URL_ROOT ;?>Assets/images/team.png" alt="" width="150px" height="150px">
                            <h5>Inclusivity</h5>
                        </div>
                    </div>
                    <div class="row justify-content-evenly">
                        <div class="col-4">
                            <img src="<?php echo URL_ROOT ;?>Assets/images/team2.png" alt="" width="150px" height="150px">
                            <h5>Memorable</h5>
                        </div>
                        <div class="col-4">
                            <img src="<?php echo URL_ROOT ;?>Assets/images/team.png" alt="" width="150px" height="150px">
                            <h5>Intriguing</h5>
                        </div>
                    </div>

                </div>
            </section>

            <!--Side Bar-->
            <?php require_once(INC_PATH . "sidebar.php") ;?>
        </div>

    </main>

<?php require_once(INC_PATH . "footer.php"); ?>