<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">
    <!-- Brand demo (see assets/css/demo/demo.css) -->
    <div class="app-brand demo">
        <span class="app-brand-logo demo">
            <img src="{{ asset('backend') }}/img/logo.png" alt="Brand Logo" class="img-fluid">
        </span>
        {{-- <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Empire</a>
        <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto"> --}}
            {{-- <i class="ion ion-md-menu align-middle"></i> --}}
        </a>
    </div>
    <div class="sidenav-divider mt-0"></div>

    <!-- Links -->
    <ul class="sidenav-inner py-1">

        <!-- Dashboards -->
        <li class="sidenav-item">
            <a href="{{ route('home') }}" class="sidenav-link">
                <i class="sidenav-icon feather icon-home"></i>
                <div>Dashboards</div>
            </a>
        </li>

        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-home"></i>
                <div>Hosting Package</div>
                {{-- <div class="pl-1 ml-auto">
                    <div class="badge badge-danger">Hot</div>
                </div> --}}
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <a href="{{ route('hosting.category') }}" class="sidenav-link">
                        <div>Category</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{ route('hosting_package.create') }}" class="sidenav-link">
                        <div>Add Hosting</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{ route('hosting_package.index') }}" class="sidenav-link">
                        <div>List Hosting</div>
                    </a>
                </li>
            </ul>
        </li>
        
        <li class="sidenav-item">
            <a href="{{ route('client.index') }}" class="sidenav-link">
                <i class="sidenav-icon feather icon-printer"></i>
                <div>Client</div>
            </a>
        </li>
        <li class="sidenav-item">
            <a href="{{ route('sendMessage.index') }}" class="sidenav-link">
                <i class="sidenav-icon feather icon-printer"></i>
                <div>Message</div>
            </a>
        </li>
        
    </ul>
</div>