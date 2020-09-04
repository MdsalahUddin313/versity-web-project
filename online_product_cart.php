<?php
  define ('DB_HOST','localhost');
  define ('DB_PASS','');
  define ('DB_USER','root');
  define ('DATABASE','user');

    $connection= new mysqli(DB_HOST, DB_USER, DB_PASS,DATABASE);  
	$SQL_query="SELECT id,title,semititle,images,rating_star,creator_name,last_update,language,total_hours,description,price FROM product_cart_details ORDER BY id ASC";

	$Query_fire= mysqli_query($connection,$SQL_query);
  $num_of_rows= mysqli_num_rows($Query_fire);
  echo "<table><tr><th>ID</th><th>Name</th><th>Image</th></tr>";
  
  if ($num_of_rows>0){
    while($product= mysqli_fetch_array($Query_fire)){

      echo "<tr><td>".$product["id"]."</td><td>".$product["title"]." ".$product["creator_name"]."</td><td></td></tr>";
      
    }  echo "</table>";

  }else{
    echo "0 result";
  }


	?>

