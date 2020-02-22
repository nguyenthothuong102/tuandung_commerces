<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/ico">
    <title>Pin Tuấn Dung chuyên cung cấp các sản phẩm pin và đồ dùng điện tử cá nhân, Dịch vụ sửa chữa, thay pin hàn chế các loại pin hiếm không có trên thị trường - Pin Tuấn Dung</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/ffc4f29197.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('assets/img/favicon.ico') !!}">
    <link  href="assets/css/plugins.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{!! asset('assets/css/plugins.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('./font-awesome-5.11.2/css/all.min.css') !!}">
</head>

<body>
    @include('layouts.partials.header')
    <!-- @include('layouts.partials.slide') -->
    @yield('content')
    @include('layouts.partials.footer')
    <script src="{!! asset('assets/js/plugins.js') !!}"></script>
    <script src="{!! asset('assets/js/main.js') !!}"></script>
</body>

</html>
