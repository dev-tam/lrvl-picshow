<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PhotoShow</title>
	<link rel="stylesheet" href="http://delltop:8888/public/dellassets/foundation/css/foundation.css">
</head>
<body>
	@include('inc.topbar')
	<br>
	<div class="row">
		<div class="medium-10 columns">
			@include('inc.messages')
			@yield('content')
		</div>
	</div>


	<script src="http://delltop:8888/public/dellassets/jquery/jquery-3.1.0.min.js"></script>
	<script src="http://delltop:8888/public/dellassets/foundation/js/vendor/foundation.js"></script>
	<script>
		$(document).foundation();
	</script>
</body>
</html>
