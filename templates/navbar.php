<!-- site-navbar start -->
<div class="navbar-area <?php echo isset($category['title']) ? strtolower($category['title']) : ''; ?>">
    <div class="container">
        <nav class="site-navbar">
            <!-- site logo -->
            <a href="index" class="site-logo"><img src="assets/logo/logo_christmas.png" alt="ökoLOGISCH" loading="lazy"></a>

            <!-- site menu/nav -->
            <ul>
                <li id="nav-home">
                    <a href="." >
                        <span class="material-icons">
                            home
                        </span>
                        <span>
                            Start
                        </span>
                    </a>
                </li>
                <li id="nav-lessons">
                    <a href="./lessons">
                        <span class="material-icons">
                            live_tv
                        </span>
                        <span>
                            Lektionen
                        </span>
                    </a>
                </li>
                <li id="nav-glossar">
                    <a href="./glossar">
                        <span class="material-icons">
                            assignment
                        </span>
                        <span>
                            Glossar
                        </span>
                    </a>
                </li>
                <li id="nav-about">
                    <a href="./about?de=true">
                        <span class="material-icons">
                            public
                        </span>
                        <span>
                            Über
                        </span>
                    </a>
                </li>
            </ul>

            <!-- nav-toggler for mobile version only -->
            <button class="nav-toggler">
                <span></span>
            </button>
        </nav>
    </div>
</div><!-- navbar-area end -->