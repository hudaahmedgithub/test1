<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{asset('css/backend_css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/backend_css/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/backend_css/uniform.css')}}" />
    <link rel="stylesheet" href="{{asset('css/backend_css//select2.css')}}" />
    
<link rel="stylesheet" href="{{asset('css/backend_css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{asset('css/backend_css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{asset('css/backend_css/matrix-media.css')}}" />
        
<link href="font-awesome/{{asset('fonts/backend_fonts/css/font-awesome.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('css/backend_css/jquery.gritter.css')}}" />
 
</head>
<body>

<!--Header-part-->
@include('layouts.adminLayout.admin_header')
<!--close-top-serch-->

    
    <!--sidebar-menu-->
@include('layouts.adminLayout.admin_sidebar')
<!--sidebar-menu-->

<!--start-main-container-part-->
  @yield('content')

<!--end-main-container-part-->

<!--Footer-part-->
@include('layouts.adminLayout.admin_footer')


<!--end-Footer-part-->

 
    <script src=
"{{ asset('js/backend_js/jquery.min.js')}}"></script> 
<script src=
"{{ asset('js/backend_js/jquery.ui.custom.js')}}"></script> 
<script src=
"{{ asset('js/backend_js/bootstrap.min.js')}}"></script> 
<script src=
"{{ asset('js/backend_js/jquery.uniform.js')}}"></script> 
<script src="{{ asset('js/backend_js/jquery.dataTables.min.js')}}"></script> 
<script src=
"{{ asset('js/backend_js/select2.min.js')}}"></script> 
<script src=
"{{ asset('js/backend_js/jquery.validate.js')}}"></script> 
<script src=
"{{ asset('js/backend_js/matrix.js')}}"></script> 
<script src=
"{{ asset('js/backend_js/matrix.form_validation.js')}}"></script>
    
<script src="{{ asset('js/backend_js/matrix.tables.js')}}"></script>
    
 
</body>
</html>
