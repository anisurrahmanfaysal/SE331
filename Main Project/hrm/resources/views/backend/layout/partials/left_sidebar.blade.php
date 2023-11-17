<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{asset('/')}}backend/assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{asset('/')}}backend/assets/images/logo-dark.png" alt="" height="20">
            </span>
        </a>

        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{asset('/')}}backend/assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{asset('/')}}backend/assets/images/logo-light.png" alt="" height="20">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('dashboard')}}">
                        <i class="fa fa-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
{{-- Employees --}}
                <li>
                    <a href="">
                        <i class="fa fa-users"></i>
                        <span>Employees</span>
                    </a>
                </li>
{{--  Admin --}}
                <li>
                    <a href="index.html">
                        <i class="fa fa-users"></i>
                        <span>Admin</span>
                    </a>
                </li>
{{-- Department --}}
                <li>
                    <a href="index.html">
                        <i class="fa fa-briefcase"></i>
                        <span>Department</span>
                    </a>
                </li>
{{-- Holidays --}}
                <li>
                    <a href="index.html">
                        <i class="fa fa-send"></i>
                        <span>Holidays</span>
                    </a>
                </li>

                

{{-- Attendance --}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-window-section"></i>
                        <span>Attendance</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" >Make Attendance</a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" >View Attendance</a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">Leave Types</a>
                        </li>
                    </ul>
                </li>
{{-- Leave Application --}}
                <li>
                    <a href="index.html">
                        <i class="uil-home-alt"></i>
                        <span>Leave Application</span>
                    </a>
                </li>

{{-- Notice Board --}}
                <li>
                    <a href="index.html">
                        <i class="uil-home-alt"></i>
                        <span>Notice Board</span>
                    </a>
                </li>
{{-- Settings --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-window-section"></i>
                        <span>Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Vertical</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                <li><a href="layouts-boxed.html">Boxed Width</a></li>
                                <li><a href="layouts-preloader.html">Preloader</a></li>
                                <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                <li><a href="layouts-hori-topbar-dark.html">Topbar Dark</a></li>
                                <li><a href="layouts-hori-boxed-width.html">Boxed Width</a></li>
                                <li><a href="layouts-hori-preloader.html">Preloader</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu-title">Apps</li>

                <li>
                    <a href="calendar.html" class="waves-effect">
                        <i class="uil-calender"></i>
                        <span>Calendar</span>
                    </a>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->