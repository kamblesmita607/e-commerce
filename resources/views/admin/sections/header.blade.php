<header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <div class="dropdown d-inline-block" align-right>
                        <b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Role: {{ auth()->user()->name }}</b>
                        </div>
                        <div class="navbar-brand-box" style="background: #0000004D 0% 0% no-repeat padding-box;">
                            <a href="/" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="/assets/Minible_v1.0.1/Vertical/dist/assets/images/logo-dark.png" alt="" height="20">
                                </span>
                            </a>

                            <a href="/" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="" alt="" height="20">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                    </div>

                    <div class="d-flex">
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
                                <img class="rounded-circle header-profile-user" src="" 
                                   >
                                
                                <span class="d-none d-xl-inline-block ml-1 font-weight-medium font-size-15"></span>
                                <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('logout') }}"><i class="uil uil-sign-out-alt font-size-18 align-middle mr-1 text-muted"></i> <span class="align-middle">Logout</span></a>
                            </div>
                        </div>
            
                    </div>
                </div>
            </header>