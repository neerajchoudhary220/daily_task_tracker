<nav class="pcoded-navbar menu-light">
    <div class="navbar-wrapper mt-3">
        <div class="navbar-content scroll-div ps">
            
            {{-- <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
                    <div class="user-details">
                        <div id="more-details">UX Designer <i class="fa fa-caret-down"></i></div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-unstyled">
                        <li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
                        <li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
                        <li class="list-group-item"><a href="auth-normal-sign-in.html"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
                    </ul>
                </div>
            </div> --}}
            
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item active">
                    <a href="{{ route('dashboard') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Tasks</label>
                </li>
               
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Task Nav</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{ route('task') }}" >All</a></li>
                        <li><a href="layout-horizontal.html" >Pending</a></li>
                        <li><a href="layout-horizontal.html" >Completed</a></li>

                    </ul>
                </li> 
                {{-- <li class="nav-item pcoded-menu-caption">
                    <label>UI Element</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Basic</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="bc_alert.html">Alert</a></li>
                        <li><a href="bc_button.html">Button</a></li>
                        <li><a href="bc_badges.html">Badges</a></li>
                        <li><a href="bc_breadcrumb-pagination.html">Breadcrumb &amp; paggination</a></li>
                        <li><a href="bc_card.html">Cards</a></li>
                        <li><a href="bc_collapse.html">Collapse</a></li>
                        <li><a href="bc_carousel.html">Carousel</a></li>
                        <li><a href="bc_grid.html">Grid system</a></li>
                        <li><a href="bc_progress.html">Progress</a></li>
                        <li><a href="bc_modal.html">Modal</a></li>
                        <li><a href="bc_spinner.html">Spinner</a></li>
                        <li><a href="bc_tabs.html">Tabs &amp; pills</a></li>
                        <li><a href="bc_typography.html">Typography</a></li>
                        <li><a href="bc_tooltip-popover.html">Tooltip &amp; popovers</a></li>
                        <li><a href="bc_toasts.html">Toasts</a></li>
                        <li><a href="bc_extra.html">Other</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Forms &amp; table</label>
                </li>
                <li class="nav-item">
                    <a href="form_elements.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Forms</span></a>
                </li>
                <li class="nav-item">
                    <a href="tbl_bootstrap.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Bootstrap table</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Chart &amp; Maps</label>
                </li>
                <li class="nav-item">
                    <a href="chart-apex.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a>
                </li>
                <li class="nav-item">
                    <a href="map-google.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Maps</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Pages</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="auth-signup.html" target="_blank">Sign up</a></li>
                        <li><a href="auth-signin.html" target="_blank">Sign in</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="sample-page.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li> --}}

            </ul>
            
            {{-- <div class="card text-center">
                <div class="card-block">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <i class="feather icon-sunset f-40"></i>
                    <h6 class="mt-3">Download Pro</h6>
                    <p>Getting more features with pro version</p>
                    <a href="https://1.envato.market/qG0m5" target="_blank" class="btn btn-primary btn-sm text-white m-0">Upgrade Now</a>
                </div>
            </div> --}}
            
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
    </div>
</nav>