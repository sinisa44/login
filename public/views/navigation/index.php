<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <?php if(! isset( $_SESSION['user'])) { ?>
            <li class="nav-item ">
                <a class="nav-link" href="<?= PAGE ?>login">Login <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="<?= PAGE ?>register">Register<span class="sr-only">(current)</span></a>
            </li>
        <?php } else { ?>
            <li class="nav-item">
                <a href="logout" class="nav-link">Logout</a>
            </li>
        <?php } ?>
        </ul>
    </div>
</nav>