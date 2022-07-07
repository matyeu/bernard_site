<?php include("includes/header.php"); ?>
<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
    <div class="container">
        <a class="navbar-brand" href="index.php"><?= $name_bot; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown active">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $link_bot; ?>" target="_blank">Add <?= $name_bot; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $link_server; ?>" target="_blank">Server discord</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"><?= $name_bot; ?>
                        <span><i class="ti-angle-down"></i></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= $link_documentation; ?>" target="_blank">Documentation</a></li>
                        <li><a class="dropdown-item" href="about.php" target="_blank">About <?= $name_bot; ?></a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Useful links
                        <span><i class="ti-angle-down"></i></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= $link_dashboard; ?>" target="_blank">Dashboard</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
