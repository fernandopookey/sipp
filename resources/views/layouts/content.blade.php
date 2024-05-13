<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ isset($title) ? $title : '' }}</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>

    <!-- Content Row -->
    @include('sweetalert::alert')
    <div class="row">
        {{-- <div class="col-12"> --}}
            @if ($content)
                @include($content)
            @endif
        {{-- </div> --}}

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
