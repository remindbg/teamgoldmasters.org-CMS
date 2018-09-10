@include('admin._partials.header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-lg-9">
                    <h2>@yield('title')</h2>
                    @if (Session::has('message'))
                        <div class="alert alert-info alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fa fa-info"></i> Message!</h5>
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    @yield('content')
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- /.content -->

    <!-- Main content -->

</div>

<!-- /.content-wrapper -->
@include('admin._partials.footer')
