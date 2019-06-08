<?php
error_reporting(0);

$file=fopen("contact_data.csv","r");
while(!feof($file)){
	
	$content=fgetcsv($file);
	$count=count($content);
	for($i=0;$i<$count;$i++){
	echo $content[$i]."\t";
	
}
echo "<br/>";
}

?>
    