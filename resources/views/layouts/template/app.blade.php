<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
@include('layouts.navbar.sidebar')
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        @include('layouts.navbar.app')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        @yield('content')
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    @include('layouts.footer.app')
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->