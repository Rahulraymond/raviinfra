<!-- partial: -->
<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{route('admin.home')}}" class="sidebar-brand">
            <span><img  src="{{ asset('../../assets/img/Kshipra-Icon-Logo.png') }}"></span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('admin.home') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Project Progress</li>
            <li class="nav-item">
                <a href="{{ route('progress.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="activity"></i>
                    <span class="link-title">Project Progress</span>
                </a>
            </li>
            <li class="nav-item nav-category">Grievances</li>
            <li class="nav-item">
                <a href="{{ route('grievances.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="flag"></i>
                    <span class="link-title">Grievances</span>
                </a>
            </li>
            
            <li class="nav-item nav-category">PD & RM</li>
            <li class="nav-item">
                <a href="{{ route('contacts.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="phone"></i>
                    <span class="link-title">PD & RM</span>
                </a>
            </li>

           
            
        </ul>
    </div>
</nav>
