<?php 
$server_name = "localhost"; //host name
$mysql_username = "root";
$mysql_password = "";
$db_name = "db_healthycocktails";

$sql = "select * from recipes;";

$conn = mysqli_connect($server_name,$mysql_username,$mysql_password,
					$db_name);

$result = mysqli_query($conn, $sql);

$response = array();

while($row = mysqli_fetch_array($result))//function fetch_array
{
	array_push($response,array("recipeID"=>$row[0],"recipeName"=>$row[1],
				"recipeCal"=>$row[2],"recipeAlcLevel"=>$row[3],
				"recipeSugar"=>$row[4],"recipeIngredients"=>$row[5],
				"recipePreparation"=>$row[6],"recipeGlass"=>$row[7]));
	
	
}

echo json_encode(array("server_response"=>$response));
mysqli_close($conn);



?> 