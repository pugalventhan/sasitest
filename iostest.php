
	<?php

	$name=$_GET['name'];

	if($name=='sasi'){
		$a = array('green', 'red', 'yellow');

	}

	if($name=='dharani'){
		$a = array('avocado', 'apple', 'banana');

	}

	if($name=='shankar'){
		$a = array("orange", "banana", "apple", "raspberry");

	}
	
	echo json_encode($a);

	

	?>