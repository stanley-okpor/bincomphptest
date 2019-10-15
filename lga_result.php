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

  <br>
  <?php
  

if($_POST){
  
$selected= $_POST['lg_name'];  // Storing Selected Value In Variable
  // Displaying Selected Value
  //echo "the selected value is ". $selected;


include "database.php";
//using a query to sum up the results.
$querry="select lga.lga_name,announced_pu_results.polling_unit_uniqueid, 
sum(announced_pu_results.party_score) as scores, announced_pu_results.party_abbreviation from announced_pu_results, 
lga 
WHERE lga.uniqueid=announced_pu_results.polling_unit_uniqueid and announced_pu_results.polling_unit_uniqueid=$selected 
group by announced_pu_results.result_id";

$result=$connection->query($querry);
}

?>
<table class="table">
<thead>
    <tr class ="text-primary">
      <th scope="col">Party</th>
      
      <th scope="col">Scores</th>
     <th scope="col">LGA</th>
    </tr>
  </thead>

    <?php
    while($row=$result->fetch_assoc()):;
    ?>
  <tbody>
    <tr>
      <th scope="row"> <?php echo $row["party_abbreviation"];?></th>
      <td scope ="row"> <?php echo $row["scores"]; ?></td>
      <td scope ="row"> <?php echo $row["lga_name"]; ?></td>
      
    </tr>

    </tbody>
    <?php endwhile;?>
</table>


</body>
</html>



