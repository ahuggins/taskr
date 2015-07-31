<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Taskr: A simple Task App</title>
	
	<link href='http://fonts.googleapis.com/css?family=Lato:400,900,100' rel='stylesheet' type='text/css'>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/app.css">

</head>
<body>
	
	@include('app.partials.nav')

	<div class="container">