

<html>
   <head>
        <title> @yield('title') </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap-theme.min.css">
       <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
       <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
       <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>


<body>

@include('shared.navbar')
@yield('content')

</body>

</html>
