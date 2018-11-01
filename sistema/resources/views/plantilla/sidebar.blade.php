        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="main.html"><i class="icon-speedometer"></i> Sistema Clasificados</a>
                    </li>
                    <li class="nav-title">
                        Sistema clasificados
                    </li>
                    <li @click="menu=0" class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bag"></i> Dashboard</a>
                    </li>
                    <li @click="menu=1" class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-pie-chart"></i> Banners</a>
                    </li>
                    <li @click="menu=2" class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i> Usuarios</a>
                    </li>
                    <li @click="menu=3" class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-pie-chart"></i> Spots</a>
                    </li>
                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>