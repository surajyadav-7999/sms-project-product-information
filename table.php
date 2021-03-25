<?php
include('db.inc.php');
  $result=mysqli_query($con,"SELECT * from number ORDER by id DESC");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <style>
    body
{
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    /*align-items: center;*/
    min-height: 100vh;
    background-color: aliceblue;
    font-family: consolas;
    
}
.container
{
    background-color: aliceblue;

}
form{
    margin-top: 25px;
    
}

  </style>
</head>
<body>

<div class="container">
  
  <form class="form-inline" method ="POST" action = "function.php">
    <label for="phone" class="mb-2 mr-sm-2">Phone:</label>
    <input type="tel" class="form-control mb-2 mr-sm-2" id="phone" placeholder="Enter mobile numebr" name="phone" require>
    <label for="status" class="mb-2 mr-sm-2">DND Status:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id = "DND" placeholder="Enter DND" name="DND"  require>
    <button type="submit" class="btn btn-primary mb-2" name= "submit">Submit</button> <span style = "color:red;"></span>
  </form>
  <table class="table table-bordered">
    <tr  style = "width:45px;">
    <th>phone</th>
    <th>status</th>
  </tr>
    
<?php

while($res=mysqli_fetch_array($result)) {
  echo '<tr>';
  echo '<td>'.$res['phone'].'<td>';
  echo "DND";
  echo '<tr>';
}
?>
  </table>
</div>
</body>
</html>

