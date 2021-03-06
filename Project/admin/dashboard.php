<!DOCTYPE html>
<html lang="">
	<head>
	 	<!-- Required meta tags always come first -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dashboard</title>

		 <!-- Materialize css. Compiled and minified CSS -->
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
	</head>
	<body>
<?php
  include '../header.php';
?>
<div class="alert alert-info" role="alert" style="text-align: center">Today's appointments</div>
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Address</th>
      <th>Phone</th>
      <th>More</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Legon</td>
      <td>000</td>
      <td>View Details</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>Legon</td>
      <td>000</td>
      <td>View Details</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry the Bird</td>
      <td>Ezekiel</td>
      <td>Legon</td>
      <td>000</td>
      <td>View Details</td>
    </tr>
  </tbody>
</table>
<div class="container col-md-12">
<div class="row">
      <div class="col-md-4">
        <div class="card-panel">
          <span class="white-text">
          	<div class="alert alert-info" role="alert" style="text-align: center;">Quick mail</div>
          	<form action="" method="post" accept-charset="utf-8">
          		<div class="input-group input-group-sm">
				  <span class="input-group-addon" id="sizing-addon1">To</span>
				  <input type="email" class="form-control" placeholder="Recipeint(s) email" aria-describedby="sizing-addon1">
				</div><br>
				<div class="input-group input-group-sm">
				  <span class="input-group-addon" id="sizing-addon1">Subject</span>
				  <input type="text" class="form-control" placeholder="Subject" aria-describedby="sizing-addon1">
				</div><br>
				<div class="input-group input-group-sm">
				  <span class="input-group-addon" id="sizing-addon1">Message</span>
				  <textarea class="form-control" placeholder="Type your message" aria-describedby="sizing-addon1"></textarea>
				</div><br>
				<div class="input-group input-group-sm">
				  <button type="submit" class="btn btn-info" aria-describedby="sizing-addon1" style="width: 100%"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>Send</button>
				</div>
				</form>
          </span>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-panel">
          <span class="white-text">
                <div class="alert alert-info" role="alert" style="text-align: center;">To do list</div>
  <div class="collection">
    <a href="#!" class="collection-item"><span class="badge red">overdue</span>Eat</a>
    <a href="#!" class="collection-item"><span class="badge red">overdue</span>Run</a>
    <a href="#!" class="collection-item"><span class="badge orange">heads up!</span>Clean</a>
    <a href="#!" class="collection-item"><span class="badge yellow">check</span>Jump</a>
    <a href="#!" class="collection-item"><span class="badge green">good</span>Go home</a>
    <a href="#!" class="collection-item"><span class="badge green">good</span>Fly</a>
  </div>
        </div>
      </div>
            <div class="col-md-4">
        <div class="card-panel">
          <span class="white-text">
          <div class="alert alert-info" role="alert" style="text-align: center;">Updates at a glance</div>
            <div class="collection">
    <a href="#!" class="collection-item"><span class="new badge">1</span>Messages</a>
    <a href="#!" class="collection-item"><span class="new badge">4</span>Appointments</a>
    <a href="#!" class="collection-item"><span class="new badge">4</span>To do</a>
    <a href="#!" class="collection-item"><span class="new badge">14</span>Calls</a>
  </div>
          </span>
        </div>
      </div>
</div>
</div>

<?php
  include '../footer.php';
?>
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
		<!-- Materialize JavaScript. Compiled and minified JavaScript -->
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
	</body>
</html>