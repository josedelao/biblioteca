<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
          <title>AdminLTE 3 | Dashboard 2</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/font.css")}}?family=Source+Sans+Pro:300,400,400i,700&display=fallback" type="text/css"/>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}" />
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{asset("assets/$theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}" />
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}" />
    </head>

    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Navbar inicio -->
            @include("theme/$theme/header")
            <!-- Navbar fin -->
            <!-- Sidebar inicio -->
            @include("theme/$theme/aside")
            <!-- Sidebar fin -->
            <div class="content-wrapper">
                <!-- content header inicio -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Boxed Layout</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">Layout</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Boxed Layout
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- content header fin -->
                <!-- main content inicio -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <!-- Default box -->
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Title</h3>

                                        <div class="card-tools">
                                            <button
                                                type="button"
                                                class="btn btn-tool"
                                                data-card-widget="collapse"
                                                title="Collapse"
                                            >
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button
                                                type="button"
                                                class="btn btn-tool"
                                                data-card-widget="remove"
                                                title="Remove"
                                            >
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        Start creating your amazing application!
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">Footer</div>
                                    <!-- /.card-footer-->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- main content fin -->
                <!-- footer inicio -->
                @include("theme/$theme/footer")
                <!-- footer fin -->
                <!-- Control Sidebar -->
                <aside class="control-sidebar control-sidebar-dark">
                    <!-- Control sidebar content goes here -->
                </aside>
                <!-- /.control-sidebar -->
            </div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="
        {{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"
        ></script>
        <!-- Bootstrap 4 -->
        <script src="
        {{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"
        ></script>
        <!-- AdminLTE App -->
        <script src="
        {{asset("assets/$theme/dist/js/adminlte.min.js")}}"
        ></script>
        <!-- AdminLTE for demo purposes -->
        <script src="
        {{asset("assets/$theme/dist/js/demo.js")}}"
        ></script>
    </body>
</html>
