<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{$title}}</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->

<!-- icheck bootstrap -->
<link rel="stylesheet" href="/template/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="/template/admin/dist/css/adminlte.min.css">

<meta name="csrf-token" content="{{ csrf_token() }}">

@yield('head')

<style>
    .hidden {
        display: none;
    }
</style>
<link href="{{asset('niceadmin/assets/css/login.css')}}" rel="stylesheet">
