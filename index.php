<?php
$pertama = str_replace(".","","1.225.441");
$jumlah = strlen($pertama);

echo $pertama."<br>";
echo $jumlah."<br><br>";

for($i=0; $i <= $jumlah; $i++){
   echo substr($pertama,$i,1);
   $k=$i+1;
   for($j=1; $j <=$jumlah-$k;$j++){
     echo "0";
   }
  echo "<br>";
}

?>
