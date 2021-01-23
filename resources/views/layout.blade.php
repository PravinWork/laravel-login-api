<!DOCTYPE html>
<html>
<head>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    @yield('head')


    <title>Laravel Test</title>

    <style>
		table, table tr td, table th {
			border: 1px solid #ccc;
			border-collapse: collapse;
			padding: 10px;
		}
	</style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
@yield('footer')
</html>