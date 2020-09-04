<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a href="index.html">
                <img class="img-fluid" src="png/logo-white.png" alt="Theme-Logo" />
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="feather icon-menu icon-toggle-right"></i>
            </a>
            <a class="mobile-options waves-effect waves-light">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                
                <li>
                        <a href="#!" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()" class="waves-effect waves-light" data-cf-modified-d2d1d6e2f87cbebdf4013b26-="">
                        <i class="full-screen feather icon-maximize"></i>
                        </a>
                </li>
                </ul>
                <ul class="nav-right">
                    <li class="header-notification">
                        <div class="dropdown-primary dropdown">
                            <div class="dropdown-toggle" data-toggle="dropdown">
                                <i class="feather icon-bell"></i>
                                <span class="badge bg-c-red">5</span>
                            </div>
                        </div>
                    </li>
                    <li class="user-profile header-notification">
                        <div class="dropdown-primary dropdown">
                            <div class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../plugins/images/users/user(2).png" class="img-radius" alt="User-Profile-Image">
                                <span><?php echo $ausername; ?></span>
                                <i class="feather icon-chevron-down"></i>
                            </div>
                            <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <li>
                                    <a href="#!">
                                        <i class="feather icon-settings"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="my-profile.php">
                                        <i class="feather icon-user"></i> Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="email-inbox.html">
                                        <i class="feather icon-mail"></i> My Booking
                                    </a>
                                </li>
                                <li>
                                    <a href="logout.php">
                                        <i class="feather icon-log-out"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
</nav>