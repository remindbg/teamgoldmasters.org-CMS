@include('partials.header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-lg-9">
                    <h2>@yield('title')</h2>
                    @yield('content')
                </div>
                @include('partials.sidebar')
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- /.content -->

    <!-- Main content -->

</div>

<!-- /.content-wrapper -->
@include('partials.footer')