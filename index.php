<!doctype html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>my first webpage</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">


</head>
<body>
	<div class="container bgPic">
	<div class="layer">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 sPos center">
			<h1 class="fStyle pStyle center">Weather Predictor</h1>
			<p class="lead aStyle pStyle center">Want to find out what will be the weather of your city?<br />Enter the name of your city to get weather update for next 3 days!</p>
				<form>
					<div class="form-group">
						<input type="text" class="form-control iStyle" name="city" id="city" placeholder="Eg. New York, London, Kolkata...">
						<button type="submit" class="btn btn-success aStyle pStyle" id="findWeather">Find Weather</button>
					</div>
				</form>
				<!-- <div class="alert alert-success" id="success">Success!</div>
				<div class="alert alert-danger" id="danger">Could not find the weather for this city. Make sure it's a valid city or is not a state.</div> -->
			</div>
		</div>
	</div>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>
	
</body>
</html>