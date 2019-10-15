
<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet"
       href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
       integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Result Page</title>
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
  <h1 class="text-success">The Result</h1>
  <br>

    <?php

if(isset($_POST['submit'])){

$selected_val = $_POST['polling_unit'];  // Storing Selected Value In Variable
  // Displaying Selected Value
}
?>

<?php
include "database.php";

//querring the database
$query="select `party_abbreviation`, `party_score` from`announced_pu_results` where `polling_unit_uniqueid`=$selected_val";

//storing the result from the polling unit a variable $result.
$result=$connection->query($query);

/*Displaying the result  in a table*/
?>


<table class="table">
<thead>
    <tr class ="text-primary">
      <th scope="col">Party</th>
      
      <th scope="col">Scores</th>
     
    </tr>
  </thead>

    <?php
    while($row=$result->fetch_assoc()):
    ?>
    
  
  <tbody>
    <tr>
      <th scope="row"> <?php echo $row["party_abbreviation"];?></th>
      <td scope ="row"> <?php echo $row["party_score"]; ?></td>
      
      
    </tr>
   
  </tbody>
    <?php endwhile;?>
</table>



</body>
</html>

