<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php require_once("./topnavbar.php");?>

<div class="container" style="border: 2px;">
  <h2>Basic Table</h2>
  <p>VEIW COUNTRY STATE CITY DATA</p>            
  <table class="table">
    <thead>
      <tr>
        <th>CONSTAIN</th>
        <th>VIEW</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>COUNTRY</td>
        <td><a href="viewcountry.php">COUNTRY</a></td>
      </tr>
      <tr>
      <td>COUNTRY</td>
        <td><a href="viewstate.php">STATE</a></td>
      </tr>
      <tr>
      <td>COUNTRY</td>
        <td><a href="viewcity.php">CITY</a></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
