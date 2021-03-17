<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?= URL_ROOT; ?>pages">
            <img src="<?= URL_ROOT; ?>/Assets/images/logo.png" width="90" height="45"
                 class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">

                <?php if (loggedin()) : ?>
                    <a class="nav-link" href="<?php echo URL_ROOT; ?>writers/index/<?= $_SESSION['id']; ?>">My
                        Stories</a>
                <?php else:?>
                    <a class="nav-link" href="<?php echo URL_ROOT; ?>pages">Home</a>
                <?php endif; ?>

                <a class="nav-link" href="<?php echo URL_ROOT; ?>pages/about">About</a>

                <a class="nav-link" href="<?php echo URL_ROOT; ?>pages/stories">Stories</a>
                <a class="nav-link" href="<?php echo URL_ROOT; ?>pages/contact">Contact</a>

                <?php if (loggedin()) : ?>
                    <a class="nav-link" href="<?php echo URL_ROOT; ?>writers/logout">Sign out</a>
                <?php else: ?>
                    <a class="nav-link" href="<?php echo URL_ROOT; ?>pages/login">Sign in</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>