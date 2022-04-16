<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<title>
		{{ __('Task management web app') }}
	</title>
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
	<!-- Font Awesome Icons -->
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<!-- Material Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
	<!-- Css Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="g-sidenav-show  bg-gray-200">
	<x-layout.sidebar />
	<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    	<x-layout.navbar />
		<div class="container-fluid py-4">
			<div class="row min-vh-80 h-100">
				<div class="col-12">
					@yield('content')
				</div>
			</div>
		</div>
		<x-layout.footer />
  	</main>
  	<x-layout.right-sidebar />
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script>
		var win = navigator.platform.indexOf('Win') > -1;
		if (win && document.querySelector('#sidenav-scrollbar')) {
		var options = {
			damping: '0.5'
		}
		Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
		}
	</script>
	<script src="{{ asset('js/material-ui-dashboard/material-dashboard.js') }}"></script>
	<!-- Js Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
	@yield('scripts')
</body>
</html>