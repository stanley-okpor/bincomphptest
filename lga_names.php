<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"
       href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
       integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Local Government names </title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
               
              
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav mr-auto">
                   <li class="nav-item active">
                     <a class="nav-link text-danger" href="index.html">Home <span class="sr-only">(current)</span></a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link text-success" href="lga_names.php">Local Government Area</a>
                   </li>
               
                   <li class="nav-item">
                     <a class="nav-link text-warning" href="polling_units_names.php">Polling Units</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link text-primary" href="store_result.php">Store Result</a>
                   </li>
                 </ul>

               </div>
             </nav>
    
   
<div class="container-fluid">


<h1 class="text-primary"> Please select a local government to view result</h1>
<Br>
    <?php 
    
    include "database.php";

    $query="select * from `lga`";

    $result=$connection->query($query);
    
    ?>
    <form action="lga_result.php" method="post">
    <select name="lg_name" id="">
      <?php while ($row1=mysqli_fetch_assoc($result)):;?>

      <option value="<?php echo $row1["uniqueid"]; ?>">
      <?php echo $row1["lga_name"]; ?>
<?php endwhile;?>
    </option>
<input type="submit" value="View Result">

    </select>
    </form>
</body>
    
</html>