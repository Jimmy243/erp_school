<div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
    <ul class="navbar-nav">
        <li class="navbar-item header-search-bar">
            <div class="input-group stylish-input-group">
                <span class="input-group-addon">
                </span>
            </div>
        </li>
    </ul>
    <ul class="navbar-nav">
        <li class="navbar-item dropdown header-admin">
            <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-expanded="false">
                <div class="admin-title">
                    <h5 class="item-title">{{Auth::user()->admin->nom}}</h5>
                    <span>{{Auth::user()->role->role_name }}</span>
                    
                </div>
                <div class="admin-img">
                    <img src="{{asset('assets/img/figure/admin.jpg')}}" alt="Admin">
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="item-header">
                    <h6 class="item-title">                       
                    {{Auth::user()->admin->nom}} {{Auth::user()->admin->prenom}} {{Auth::user()->admin->postnom}}
                    </h6>
                </div>
                <div class="item-content">
                    <ul class="settings-list">
                        <li><a href="#"><i class="flaticon-user"></i>Profile</a></li>
                        <li><a href="#"><i class="flaticon-gear-loading"></i>Parametre</a></li>
                        <li>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <div class="container">
                                    <button type="submit" class="btn btn-primary btn-block" type="submit">
                                        <i class="flaticon-turn-off"></i> <b>Se déconnecter</b>
                                    </button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <li class="navbar-item dropdown header-message">
            <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-expanded="false">
                <i class="far fa-envelope"></i>
                <div class="item-title d-md-none text-16 mg-l-10">Message</div>
                <span>1</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <div class="item-header">
                    <h6 class="item-title">01 Message</h6>
                </div>
                <div class="item-content">
                    <div class="media">
                        <div class="item-img bg-violet-blue">
                            <img src="assets/img/figure/student11.png" alt="img">
                        </div>
                        <div class="media-body space-sm">
                            <div class="item-title">
                                <a href="#">
                                    <span class="item-name">JJ</span>
                                    <span class="item-time">12:35</span>
                                </a>
                            </div>
                            <p>.....</p>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="navbar-item dropdown header-notification">
            <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-expanded="false">
                <i class="far fa-bell"></i>
                <div class="item-title d-md-none text-16 mg-l-10">Notification</div>
                <span>1</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <div class="item-header">
                    <h6 class="item-title">01 Notifiacations</h6>
                </div>
                <div class="item-content">
                    <div class="media">
                        <div class="item-icon bg-violet-blue">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <div class="media-body space-sm">
                            <div class="post-title">---</div>
                            <span>---</span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>