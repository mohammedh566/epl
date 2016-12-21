<html>
<head>
    <title> @yield('title') </title>
    <!-- Material Design fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet"  href="//fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Bootstrap Material Design -->
    <link rel="stylesheet"  href="/css/bootstrap-material-design.css">
    <link rel="stylesheet"  href="/css/ripples.min.css">
    
	<link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>

@include('shared.navbar')

@yield('content')
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="/js/ripples.min.js"></script>
<script src="/js/material.min.js"></script>
<script>
    $(document).ready(function() {
        // This command is used to initialize some elements and make them work properly
        $.material.init();
    });
</script>

</body>
</html>