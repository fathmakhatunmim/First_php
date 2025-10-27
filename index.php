<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       
       echo "my name is mim <br>";

       echo "MIM <br>";

       $variable = "Fathma <br>";
       echo $variable;


     $cars = array("Volvo", "BMW", "Toyota");
    foreach($cars as $car){
    echo $car . "<br>";
    }
      
    $cars = array("Volvo", "BMW", "Toyota");
    echo count($cars);
    echo "<br>";

    // update
    $cars = array("Volvo", "BMW", "Toyota");
    $cars[1] = "Ford";
      foreach($cars as $car){
    echo $car . "<br>";
    }

    //add array items
    $cars = array("brand" => "Ford", "model" => "Mustang");
    $cars["color"] = "Red";
   foreach($cars as $car){
    echo "<span style='display:block; margin-bottom:20px;'>$car</span>";
}


    //remove array items
    $cars = array("Volvo", "BMW", "Toyota");
    array_splice($cars, 1, 1);
    foreach($cars as $car){
    echo $car . "<br>";
    }
     
//sorting
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
      foreach($cars as $car){
    echo $car . "<br><br>";
    }

       ?>
</body>
</html>