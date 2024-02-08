<?php 
  $emp = array
  (
    array(1,"Rajashri",50000),
    array(2,"Revati",40000),
    array(3,"Anuja",30000),
    array(4,"Pranali",20000),
  );
  for($row = 0;$row<3;$row++)
   {
      for($col = 0;$col<3;$col++)
	{
           echo $emp[$row][$col]."";
	}
   
   echo"<br/>";
   }
?>