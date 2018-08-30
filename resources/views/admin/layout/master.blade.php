<!DOCTYPE html>
<html lang="en">
<head>
   @include('admin.layout.header')
   
</head>

<body class="fixed-nav sticky-footer" id="page-top">


<!-- ===============================
    Navigation Start
====================================-->
@include('admin.layout.navbar')
<!-- =====================================================
                    End Navigations
======================================================= -->

<div class="content-wrapper">
    <div class="container-fluid">

       @yield('content')

    </div>
    <!-- /.content-wrapper -->



   @include('admin.layout.footer')
</div>
<!-- Wrapper -->

</body>
</html>
