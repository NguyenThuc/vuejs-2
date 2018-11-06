<template>
    <div>
        <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
                        data-toggle="menubar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="hamburger-bar"></span>
                </button>
                <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
                        data-toggle="collapse">
                    <i class="icon md-more" aria-hidden="true"></i>
                </button>
                <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
                    <img class="navbar-brand-logo" src="../assets/images/logo1.png" title="Stringee">
                    <span class="navbar-brand-text hidden-xs-down"> Stringee</span>
                </div>
                <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
                        data-toggle="collapse">
                    <span class="sr-only">Toggle Search</span>
                    <i class="icon md-search" aria-hidden="true"></i>
                </button>
            </div>
            <div class="navbar-container container-fluid">
                <!-- Navbar Collapse -->
                <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">

                    <div class="nav-tickets">
                        <ul class="nav nav-tabs navbar-toolbar" id="navTickets">
                            <li class="nav-item nav-ticket-item">
                                <a class="nav-link" data-toggle="tab" href="#">
                                    <span class="thumb-ticket"><i class="md-layers" aria-hidden="true"></i></span>
                                    Day la ticket 1 qua dai thi hien thi the nao
                                    <span class="close-tab"><i class="md-close" aria-hidden="true"></i></span>
                                </a>
                            </li>
                            <li class="nav-item nav-ticket-item">
                                <a class="nav-link" data-toggle="tab" href="#">
                                    <span class="thumb-ticket"><i class="md-layers" aria-hidden="true"></i></span>
                                    Day la ticket 2
                                    <span class="close-tab"><i class="md-close" aria-hidden="true"></i></span>
                                </a>
                            </li>
                            <li class="nav-item nav-ticket-item">
                                <a class="nav-link" data-toggle="tab" href="#">
                                    <span class="thumb-ticket"><i class="md-layers" aria-hidden="true"></i></span>
                                    Day la ticket 3
                                    <span class="close-tab"><i class="md-close" aria-hidden="true"></i></span>
                                </a>
                            </li>
                            <li class="nav-item nav-ticket-item">
                                <a class="nav-link" data-toggle="tab" href="#">
                                    <span class="thumb-ticket"><i class="md-layers" aria-hidden="true"></i></span>
                                    Day la ticket 4
                                    <span class="close-tab"><i class="md-close" aria-hidden="true"></i></span>
                                </a>
                            </li>
                            <li class="nav-item nav-add-ticket-item">
                                <a class="nav-link" href="#">
                                    <span class="icon-add-task"><i class="md-plus" aria-hidden="true"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- End Navbar Toolbar -->
                    <!-- Navbar Toolbar Right -->
                    <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="" data-animation="scale-up"
                               aria-expanded="false" role="button">
                                <span class="flag-icon flag-icon-us"></span>
                            </a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="" role="menuitem">
                                    <span class="flag-icon flag-icon-gb"></span> English</a>
                                <a class="dropdown-item" href="#" role="menuitem">
                                    <span class="flag-icon flag-icon-fr"></span> French</a>
                                <a class="dropdown-item" href="#" role="menuitem">
                                    <span class="flag-icon flag-icon-cn"></span> Chinese</a>
                                <a class="dropdown-item" href="#" role="menuitem">
                                    <span class="flag-icon flag-icon-de"></span> German</a>
                                <a class="dropdown-item" href="#" role="menuitem">
                                    <span class="flag-icon flag-icon-nl"></span> Dutch</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                               data-animation="scale-up" role="button">
						<span class="avatar avatar-online">
							<img src="../assets/images/5.jpg" alt="...">
							<i></i>
						</span>
                            </a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#" role="menuitem"><i class="icon md-account" aria-hidden="true"></i> Profile</a>
                                <a class="dropdown-item" href="#" role="menuitem"><i class="icon md-card" aria-hidden="true"></i> Billing</a>
                                <a class="dropdown-item" href="#" role="menuitem"><i class="icon md-settings" aria-hidden="true"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" role="menuitem"><i class="icon md-power" aria-hidden="true"></i> Logout</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link waves-effect waves-light waves-round" data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false" data-animation="scale-up" role="button">
                                <i class="icon md-notifications" aria-hidden="true"></i>
                                <span class="badge badge-pill badge-danger up">5</span>
                            </a>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link waves-effect waves-light waves-round" data-toggle="dropdown" href="javascript:void(0)" title="Messages" aria-expanded="false" data-animation="scale-up" role="button">
                                <i class="icon md-email" aria-hidden="true"></i>
                                <span class="badge badge-pill badge-info up">3</span>
                            </a>
                            <!--<div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">-->
                                <!--<div class="dropdown-menu-header">-->
                                    <!--<h5>MESSAGES</h5>-->
                                    <!--<span class="badge badge-round badge-info">New 3</span>-->
                                <!--</div>-->
                                <!--<div class="list-group" role="presentation">-->
                                    <!--<div data-role="container">-->
                                        <!--<div data-role="content">-->
                                            <!--<a class="list-group-item dropdown-item waves-effect waves-light waves-round" href="javascript:void(0)" role="menuitem">-->
                                                <!--<div class="media">-->
                                                    <!--<div class="pr-10">-->
                          <!--<span class="avatar avatar-sm avatar-online">-->
                            <!--<img src="../../global/portraits/2.jpg" alt="...">-->
                            <!--<i></i>-->
                          <!--</span>-->
                                                    <!--</div>-->
                                                    <!--<div class="media-body">-->
                                                        <!--<h6 class="media-heading">Mary Adams</h6>-->
                                                        <!--<div class="media-meta">-->
                                                            <!--<time datetime="2017-06-17T20:22:05+08:00">30 minutes ago</time>-->
                                                        <!--</div>-->
                                                        <!--<div class="media-detail">Anyways, i would like just do it</div>-->
                                                    <!--</div>-->
                                                <!--</div>-->
                                            <!--</a>-->
                                            <!--<a class="list-group-item dropdown-item waves-effect waves-light waves-round" href="javascript:void(0)" role="menuitem">-->
                                                <!--<div class="media">-->
                                                    <!--<div class="pr-10">-->
                          <!--<span class="avatar avatar-sm avatar-off">-->
                            <!--<img src="../../global/portraits/3.jpg" alt="...">-->
                            <!--<i></i>-->
                          <!--</span>-->
                                                    <!--</div>-->
                                                    <!--<div class="media-body">-->
                                                        <!--<h6 class="media-heading">Caleb Richards</h6>-->
                                                        <!--<div class="media-meta">-->
                                                            <!--<time datetime="2017-06-17T12:30:30+08:00">12 hours ago</time>-->
                                                        <!--</div>-->
                                                        <!--<div class="media-detail">I checheck the document. But there seems</div>-->
                                                    <!--</div>-->
                                                <!--</div>-->
                                            <!--</a>-->
                                            <!--<a class="list-group-item dropdown-item waves-effect waves-light waves-round" href="javascript:void(0)" role="menuitem">-->
                                                <!--<div class="media">-->
                                                    <!--<div class="pr-10">-->
                          <!--<span class="avatar avatar-sm avatar-busy">-->
                            <!--<img src="../../global/portraits/4.jpg" alt="...">-->
                            <!--<i></i>-->
                          <!--</span>-->
                                                    <!--</div>-->
                                                    <!--<div class="media-body">-->
                                                        <!--<h6 class="media-heading">June Lane</h6>-->
                                                        <!--<div class="media-meta">-->
                                                            <!--<time datetime="2017-06-16T18:38:40+08:00">2 days ago</time>-->
                                                        <!--</div>-->
                                                        <!--<div class="media-detail">Lorem ipsum Id consectetur et minim</div>-->
                                                    <!--</div>-->
                                                <!--</div>-->
                                            <!--</a>-->
                                            <!--<a class="list-group-item dropdown-item waves-effect waves-light waves-round" href="javascript:void(0)" role="menuitem">-->
                                                <!--<div class="media">-->
                                                    <!--<div class="pr-10">-->
                          <!--<span class="avatar avatar-sm avatar-away">-->
                            <!--<img src="../../global/portraits/5.jpg" alt="...">-->
                            <!--<i></i>-->
                          <!--</span>-->
                                                    <!--</div>-->
                                                    <!--<div class="media-body">-->
                                                        <!--<h6 class="media-heading">Edward Fletcher</h6>-->
                                                        <!--<div class="media-meta">-->
                                                            <!--<time datetime="2017-06-15T20:34:48+08:00">3 days ago</time>-->
                                                        <!--</div>-->
                                                        <!--<div class="media-detail">Dolor et irure cupidatat commodo nostrud nostrud.</div>-->
                                                    <!--</div>-->
                                                <!--</div>-->
                                            <!--</a>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                                <!--<div class="dropdown-menu-footer" role="presentation">-->
                                    <!--<a class="dropdown-menu-footer-btn waves-effect waves-light waves-round" href="javascript:void(0)" role="button">-->
                                        <!--<i class="icon md-settings" aria-hidden="true"></i>-->
                                    <!--</a>-->
                                    <!--<a class="dropdown-item waves-effect waves-light waves-round" href="javascript:void(0)" role="menuitem">-->
                                        <!--See all messages-->
                                    <!--</a>-->
                                <!--</div>-->
                            <!--</div>-->
                        </li>


                        <li class="nav-item" id="toggleChat">
                            <a class="nav-link" data-toggle="site-sidebar" href="#" title="Chat"
                               data-url="site-sidebar.tpl">
                                <i class="icon md-comment" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- End Navbar Toolbar Right -->
                </div>
                <!-- End Navbar Collapse -->
                <!-- Site Navbar Seach -->
                <div class="collapse navbar-search-overlap" id="site-navbar-search">
                    <form role="search">
                        <div class="form-group">
                            <div class="input-search">
                                <i class="input-search-icon md-search" aria-hidden="true"></i>
                                <input type="text" class="form-control" name="site-search" placeholder="Search...">
                                <button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search"
                                        data-toggle="collapse" aria-label="Close"></button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End Site Navbar Seach -->
            </div>
        </nav>


        <div class="site-menubar site-menubar-dark mm-menu mm-hasnavbar-bottom-1">
            <div class="mm-navbar mm-navbar-bottom mm-navbar-bottom-1 mm-navbar-size-1">

                <div class="site-menubar-footer">

                    <a   v-on:click="logout" class="fold-show" href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
                        <span class="icon md-power" aria-hidden="true"></span>
                    </a>
                </div>



            </div>
            <div class="mm-panels scrollable scrollable-inverse scrollable-vertical is-disabled">
                <div class="mm-panel mm-hasnavbar mm-opened mm-current scrollable-container" id="mm-0" style="">

                    <ul class="site-menu mm-listview scrollable-content" style="">

                        <li class="site-menu-item">
                            <a class="animsition-link "  href="#"  >
                                <i class="site-menu-icon md-home" aria-hidden="true"></i>
                                <span class="site-menu-title">Home</span>
                            </a>
                        </li>
                        <li class="site-menu-item active">
                            <a class="animsition-link" href="#" data-placement="right"
                               data-toggle="tooltip" data-original-title="Company">
                                <i class="site-menu-icon md-city-alt" aria-hidden="true"></i>
                                <span class="site-menu-title">Company</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="#" data-placement="right"
                               data-toggle="tooltip" data-original-title="Contact">
                                <i class="site-menu-icon md-account-box" aria-hidden="true"></i>
                                <span class="site-menu-title">Contact</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="#" data-placement="right" data-toggle="tooltip"
                               data-original-title="Filter">
                                <i class="site-menu-icon md-label" aria-hidden="true"></i>
                                <span class="site-menu-title">Filter</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="#" data-placement="right" data-toggle="tooltip"
                               data-original-title="Report">
                                <i class="site-menu-icon md-chart" aria-hidden="true"></i>
                                <span class="site-menu-title">Report</span>
                            </a>
                        </li>

                        <li class="site-menu-item">
                            <a class="animsition-link" href="#" data-placement="right" data-toggle="tooltip"
                               data-original-title="Settings">
                                <i class="site-menu-icon md-settings" aria-hidden="true"></i>
                                <span class="site-menu-title">Setting</span>
                            </a>
                        </li>


                    </ul>
                </div>
                <div class="scrollable-bar scrollable-bar-vertical is-disabled scrollable-bar-hide" draggable="false">
                    <div class="scrollable-bar-handle"></div>
                </div>
            </div>
        </div>


    </div>
</template>

<script>
    export default {
        name: "SideBarLeft" ,
        methods:{
            logout :function () {
                localStorage.clear();
                this.$router.push('/login');

            }
        }
    }


</script>

<style scoped>


</style>