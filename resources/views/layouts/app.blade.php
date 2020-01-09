@include('layouts.header')
@include('layouts.menu')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          @yield('breadcrum')
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
          <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            
            @yield('content')

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@include('layouts.footer')
