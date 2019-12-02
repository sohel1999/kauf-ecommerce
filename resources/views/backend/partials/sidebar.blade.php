<div class="nav-left-sidebar" style="background: #ffffff;">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName()=='setting.index'?'active':''}}"
                           href="{{route('setting.index')}}">
                            <i class="ti-settings"></i>Setting</a>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName()=='categories.index'?'active':''}}"
                           href="{{route('categories.index')}}">
                            Category</a>
                    </li>
                    <div class="dropdown-divider"></div>

                </ul>
            </div>
        </nav>
    </div>
</div>
