<?php 


$randomkey = array("Random Text 1","Random Text 2","Random Text 3","Random Text 4");
$rand_keys = array_rand($randomkey, 1);
$usekey=$randomkey[$rand_keys];

echo $usekey;

?>