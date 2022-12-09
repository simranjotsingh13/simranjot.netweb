@php
// session_start();

// print_r($_SESSION['status']);
@endphp

@push('script')
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script>
 

    

</script>
@endpush
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ url('/dash') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard 
           
                 
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
            @if(auth()->user()->checkAdmin())
                <a class="nav-link collapsed result" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Department
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('/department/create') }}">Add Department</a>
                        <a class="nav-link" href="{{ url('/department') }}">View Department</a>
                    </nav>
                </div>
                

                <a class="nav-link collapsed result" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayout"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa fa-user"></i></div>
                    user
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayout" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('/user/create') }}">Add user</a>
                        <a class="nav-link" href="{{ url('/user') }}">view user</a>
                    </nav>
                </div>
                <a class="nav-link collapsed result" href="#" data-bs-toggle="collapse" data-bs-target="#skillsLayout"
                aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fa fa-code"></i></div>
                skills
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="skillsLayout" aria-labelledby="headingOne"
                data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ url('/skills/create') }}">add skills</a>
                    <a class="nav-link" href="{{ url('/skills') }}">View skills</a>
                </nav>
            </div>
            <a class="nav-link collapsed result" href="#" data-bs-toggle="collapse" data-bs-target="#TaskLayout"
            aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fa fa-code-fork"></i></div>
            Task 
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="TaskLayout" aria-labelledby="headingOne"
            data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{ url('/task/create') }}">Assign Task</a>
            </nav>
        </div>
            
            @endif
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#noteLayout"
            aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fa fa-sticky-note"></i></div>
         Notes
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="noteLayout" aria-labelledby="headingOne"
            data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{ url('/note/create') }}">Add Note</a>
                <a class="nav-link" href="{{ url('/note') }}">View Note</a>
            </nav>
        </div>
     @if (!auth()->user()->checkAdmin())
         
     
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#assignedLayout"
        aria-expanded="false" aria-controls="collapseLayouts">
        <div class="sb-nav-link-icon"><i class="fa fa-hourglass-2"></i></div>
     Assigned Task
        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="assignedLayout" aria-labelledby="headingOne"
        data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="{{ url('/task') }}">Your Tasks</a>
            
            {{-- <a class="nav-link" href="{{ url('/note') }}">View Note</a> --}}
        </nav>
    </div>
 
    @endif
        
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>
