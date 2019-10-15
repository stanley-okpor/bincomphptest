
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
    <title>Polling-Unit-names</title>
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


<h1 class="text-primary"> Please select a polling unit to view result</h1>
<Br>
    <?php 
    
    include "database.php";

    $query="select * from `polling_unit`";

    $result=$connection->query($query);
    
    
    $polling_unit_name;
    
    ?>
     
    
<form action="polling_unit_result.php" method="post">

<select name="polling_unit">
<?php
    while($row=$result->fetch_assoc()):
        $polling_unit_name=$row["polling_unit_name"];
    ?>
<option class="text-success" value="<?php echo $row["uniqueid"]; ?>"> <?php echo $polling_unit_name; ?>
 </option>
 
<?php endwhile;?>

<input class="text-danger" type="submit" name="submit" value="View result" />
    </select>
</form>

</div>
</body>

</html>