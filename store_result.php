<?php include "database.php";?>
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
    <title>Store Result</title>
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



<div class="form-group">
        <form action="store_result.php" method="post">
        <label for="result_id  ">RESULT_ID</label>
        <input type="text" class="form-control" name="result_id"><br>
        
</div>
<div class="form-group">
            <label for="polling_unit  ">POLLING_UNIT_UNIQUEID</label>
    <input type="text" class="form-control" name="polling_unit_uniqueid">
    
</div>
<div class="form-group">
    <label for="party_abb  ">PARTY-ABBREVIATION</label>
    <input class="form-control" type="text" name="party_abbreviation" >
</div>
<div class="form-group">
    <label for="party_score   ">PARTY-SCORE</label>
    <input class="form-control" type="text" name="party_score" >
</div>
<div class="form-group">
    <label for="entered_user  ">ENTERED-BY-USER</label>
    <input class="form-control"  type="text" name="entered_user" >
</div>
    

    <input type="submit" class="btn btn-primary" name="submit">
</form>

</div>
    
<?php


if($_POST){
    
    $result_id=$_POST["result_id"];
       $polling_unit_uniqueid=$_POST['polling_unit_uniqueid'];
       $party_abbreviation=$_POST["party_abbreviation" ];
       $party_score=$_POST["party_score"];
       $entered_user=$_POST["entered_user"];
      
      
         $query1="INSERT INTO announced_pu_results(result_id,polling_unit_uniqueid,party_abbreviation, party_score,
         entered_by_user) values
         ('$result_id', $polling_unit_uniqueid,'$party_abbreviation', $party_score ,'$entered_user')";

     if ($connection->query($query1)===true){
           
         echo "saved";
         
         
     }
     else{
         die("an error occured". $connection->error);
     }
        
   }


?>
</body>
</html>