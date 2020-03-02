<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ URL::asset('assets/images/logo.jpeg') }}" alt="Education" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Marcopolo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ URL::asset('assets/images/marco.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block" style="font-size: 24px;">Marco Polo</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.welcome') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Tableau de bord</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('welcome') }}" class="nav-link">
                        <i class="nav-icon fas fa-globe"></i>
                        <p>marcopolo.com</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Accueil
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('home.profile') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>marcoPolo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('home.couverture') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Couverture</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('home.fade') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Images</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.drink') }}" class="nav-link">
                        <i class="nav-icon fas fa-wine-bottle"></i>
                        <p>Boissons</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.djs') }}" class="nav-link">
                        <i class="nav-icon fas fa-headphones-alt"></i>
                        <p>Djs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.artist') }}" class="nav-link">
                        <i class="nav-icon fas fa-microphone"></i>
                        <p>Artistes</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-music"></i>
                        <p>
                            Miami
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('miami.couverture') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Couverture</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('miami.image') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Images</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('party.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Soirées</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('event.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-clipboard"></i>
                        <p>Evénements</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('gallery.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-photo"></i>
                        <p>Galerie</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
