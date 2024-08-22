<div class="wrapper">
    <aside id="sidebar">
        <div class="d-flex">
            <button class="toggle-btn" type="button">
                <i class="lni lni-list"></i>
            </button>
            <div class="sidebar-logo">
                <a href="{{ route('alumni') }}">Alumni</a>
            </div>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a href="{{ route('alumni') }}" class="sidebar-link">
                    <i class="lni lni-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('kuesioner.index') }}" class="sidebar-link">
                    <i class="lni lni-library"></i>
                    <span>Tracerstudy</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('cv') }}" class="sidebar-link">
                    <i class="lni lni-remove-file"></i>
                    <span>Data Alumni</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('loker.index') }}" class="sidebar-link">
                    <i class="lni lni-notepad"></i>
                    <span>Lowongan Kerja</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('logang.index') }}" class="sidebar-link">
                    <i class="lni lni-calendar"></i>
                    <span>Lowongan Magang</span>
                </a>
            </li>
        </ul>
        <div class="sidebar-footer">
            <a href="/profilealumni" class="sidebar-link">
                <i class="lni lni-user"></i>
                <span>Profile</span>
            </a>
        </div>
        <div class="sidebar-footer">
            <a href="{{ route('logout') }}" class="sidebar-link">
                <i class="lni lni-exit"></i>
                <span>Logout</span>
            </a>
        </div>
    </aside>
    <div class="main p-3">
        @yield('content')
    </div>
</div>