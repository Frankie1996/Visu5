<nav class="navbar navbar-icon-top navbar-expand navbar-light bg-light <?php echo isset($category['title']) ? strtolower($category['title']) : ''; ?>">
    <div class="container">
        <a class="navbar-brand" href=".">
            <img src="assets/logo/logo.png" alt="ökoLOGISCH" loading="lazy">
        </a>

        <div class="navbar-expand">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" id="nav-home" href=".">
                        <span class="material-icons">
                            home
                        </span>
                        <span>
                            Start
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-lessons" href="./lessons.php">
                        <span class="material-icons">
                            live_tv
                        </span>
                        <span>
                            Lektionen
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-about" href="./about.php">
                        <span class="material-icons">
                            public
                        </span>
                        <span>
                            Über
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>