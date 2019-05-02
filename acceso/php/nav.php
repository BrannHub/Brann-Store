            <aside id="aside" class="aside aside-left" data-fuse-bar="aside" data-fuse-bar-media-step="md" data-fuse-bar-position="left" >
                <div class="aside-content " style="background: linear-gradient(135deg, rgba(255,255,255,1) 0%,rgba(241,241,241,1) 50%,rgba(225,225,225,1) 51%,rgba(246,246,246,1) 100%);">

                    <div class="aside-toolbar">

                        <div class="logo">
                            <span class="logo-icon">BS</span>
                            <span class="logo-text">BrannStore</span>
                        </div>

                        <button id="toggle-fold-aside-button text-white" type="button" class="btn btn-icon d-none d-lg-block" data-fuse-aside-toggle-fold>
                            <i class="icon icon-backburger"></i>
                        </button>

                    </div>

                    <ul class="nav flex-column custom-scrollbar" id="sidenav" data-children=".nav-item">
                        <!--
                        <li class="subheader">
                            <span>Administrador</span>
                        </li>-->
                        <!-- 
                        <li class="nav-item" role="tab" id="heading-dashboards">
                            <a class="nav-link ripple with-arrow collapsed" data-toggle="collapse" data-target="#collapse-dashboards" href="#" aria-expanded="false" aria-controls="collapse-dashboards">
                                <i class="fa fa-th s-4"></i>
                                <span>Dashboards</span>
                            </a>
                            <ul id="collapse-dashboards" class='collapse ' role="tabpanel" aria-labelledby="heading-dashboards" data-children=".nav-item">
                                <li class="nav-item">
                                    <a class="nav-link ripple " href="index.html" data-url="user-interface-page-layouts-blank.html">
                                        <span>Project Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link ripple " href="apps-dashboards-server.html" data-url="user-interface-page-layouts-blank.html">
                                        <span>Server</span>
                                    </a>
                                </li>
                            </ul>
                        </li> -->

                        <li class="nav-item">
                            <a class="nav-link ripple <?php echo $active_inicio; ?>" href="apps-calendar.html" data-url="user-interface-page-layouts-blank.html">
                                <i class="fa fa-home s-4"></i>
                                <span>Inicio</span>
                            </a>
                        </li>                       

                    </ul>
                </div>

            </aside>
            <div class="content-wrapper">
                <nav id="toolbar" class="bg-white text-white" style="background: linear-gradient(135deg, rgba(76,76,76,1) 0%,rgba(89,89,89,1) 12%,rgba(102,102,102,1) 25%,rgba(71,71,71,1) 39%,rgba(44,44,44,1) 50%,rgba(0,0,0,1) 51%,rgba(17,17,17,1) 60%,rgba(43,43,43,1) 76%,rgba(28,28,28,1) 91%,rgba(19,19,19,1) 100%);">
                    
                    <div class="row no-gutters align-items-center flex-nowrap">

                        <div class="col">

                            <div class="row no-gutters align-items-center flex-nowrap">

                                <button type="button" class="toggle-aside-button btn btn-icon d-block d-lg-none fuse-ripple-ready" data-fuse-bar-toggle="aside">
                                    <i class="icon icon-menu text-white"></i>
                                </button>

                                <div class="shortcuts-wrapper row no-gutters align-items-center px-0 ml-4 px-sm-2 mt-2">
                                    <h4><?php echo $pagina; ?></h4>
                                </div>


                            </div>
                        </div>
                    
                        <div class="col-auto">
                            <div class="row no-gutters align-items-center justify-content-end">

                                <div class="user-menu-button dropdown">

                                    <div class="dropdown-toggle ripple row align-items-center no-gutters px-2 px-sm-4" role="button" id="dropdownUserMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="avatar-wrapper">
                                            <img class="avatar" src="https://i.imgur.com/aMVUFVx.png">
                                            <i class="status text-green icon-checkbox-marked-circle s-4"></i>
                                        </div>
                                        <span class="username mx-3 d-none d-md-block">Elias Astrada</span>
                                    </div>

                                    <div class="dropdown-menu" aria-labelledby="dropdownUserMenu">

                                        <a class="dropdown-item" href="#">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <i class="icon-account"></i>
                                                <span class="px-3">Mi perfil</span>
                                            </div>
                                        </a>

                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item" href="#">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <i class="icon-logout"></i>
                                                <span class="px-3">Cerrar sesión</span>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                                <div class="toolbar-separator"></div>

                                <div class="language-button dropdown">

                                    <div class="dropdown-toggle ripple row align-items-center justify-content-center no-gutters px-0 px-sm-4" role="button" id="dropdownLanguageMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="row no-gutters align-items-center">
                                            <i class="flag-icon flag-icon-ar"></i>&nbsp;
                                            <span class="d-none d-md-block">ES</span>
                                        </div>
                                    </div>

                                    <div class="dropdown-menu" aria-labelledby="dropdownLanguageMenu">

                                        <a class="dropdown-item" href="#">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <i class="flag-icon flag-icon-ar"></i>&nbsp;
                                                <span class="px-3">Español</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>