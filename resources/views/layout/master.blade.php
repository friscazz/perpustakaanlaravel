<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
<link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/bootstrap-datepicker.css')}}">
<script src="{{asset('asset/js/jquery-3.5.1.js')}}"></script>
<script src="{{asset('asset/js/bootstrap-datepicker.js')}}"></script>

</head>
<body>
    @include('layout.header')
    @yield('content')
<script type="text/javascript">
    $('.date').datepicker({
        format:'yyyy/mm/dd',
        autoclose: true
    });
</script>
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
</body>
</html>