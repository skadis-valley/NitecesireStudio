<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>@yield('title')</title>
	<link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
	<!-- Bootstrap core CSS-->
	<link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<!-- Custom fonts for this template-->
	<link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<!-- Custom styles for this template-->
	<link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">
	<link href="{{asset('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

	<style>

		a {
			color: gray
		}

		body {
			-webkit-animation: fadein 1s;
			/* Safari, Chrome and Opera > 12.1 */
			-moz-animation: fadein 1s;
			/* Firefox < 16 */
			-ms-animation: fadein 1s;
			/* Internet Explorer */
			-o-animation: fadein 1s;
			/* Opera < 12.1 */
			animation: fadein 1s;
		}

		.col-xl-2,
		.col-xl-4 {
			font-size: 11pt;
			-webkit-transition: all 0.5s ease-in-out;
			-moz-transition: all 0.5s ease-in-out;
			-o-transition: all 0.5s ease-in-out;
			-ms-transition: all 0.5s ease-in-out;
			transition: all 0.5s ease-in-out;
		}

		tr {
			cursor: pointer
		}

		label {
			text-align: right;
		}

		.card-header,
		.centre,
		table,
		tbody,
		thead,
		th,
		tr {
			text-align: center;
		}
	</style>
</head>
@yield('content')

</html>