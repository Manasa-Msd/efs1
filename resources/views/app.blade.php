<!doctype html>
<html lang="en">
<head>
<style>
body{
background-image: url("http://www.intrawallpaper.com/static/images/518164-backgrounds.jpg");
}
</style>
    <meta charset="UTF-8">
    <title>Eagle Financial Services</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<body>
<div class="container">
	<a href="http://localhost/efs1/public/">HOME</a> |
    <a href="{{ action('CustomerController@index') }}">Customers</a> |
    <a href="{{ action('StockController@index') }}">Stocks</a> |
    <a href="{{ action('InvestmentController@index') }}">Investments</a> |
	<a href="{{ action('MutualfundsController@index') }}">MutualFunds</a>
</div>
<hr>
<div class="container">
    @yield('content')
</div>
</body>
</html>
