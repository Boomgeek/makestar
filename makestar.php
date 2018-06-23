<?php
/*	$num = 7;
	*******
	**_*_**
	*_***_*
	*__*__*
	*_***_*
	**_*_**
	*******
*/

/*	$num = 9;
	*********
	**__*__**
	*_*_*_*_*
	*__***__*
	*********
	*__***__*
	*_*_*_*_*
	**__*__**
	*********
*/


	$num = 9;
	$mean = ($num+1)/2;
	$loop = $mean-1;
	
	$topRound = 0;
	// Block top
	for($y=0; $y<$loop; $y++){
		// first line
		print("*");
		
		// left
		for($x=1; $x<=$mean-2; $x++){
			if($y==0){
				print("*");
			}else if($x==$topRound){
				print("*");
			}else{
				print("_");
			}
		}
		
		// mean line
		print("*");
		
		// right
		for($x=$mean-2; $x>=1; $x--){
			if($y==0){
				print("*");
			}else if($x==$topRound){
				print("*");
			}else{
				print("_");
			}
		}
		
		// last line
		print("*");
		print("<br>");
		$topRound++;
	}
	
	// Diameter line
	if($mean%2 == 0) {
		for($x=0; $x<$num; $x++){
			if($x==0 || $x==$mean-1 || $x==$num-1){
				print("*");
			}else{
				print("_");
			}
		}
	}else{
		for($x=0; $x<$num; $x++){
			print("*");
		}
	}
	print("<br>");

	// Block below
	$belowRound = 1;
	for($y=0; $y<$loop; $y++){
		// first line
		print("*");
		
		// left
		for($x=$mean-2; $x>=1; $x--){
			if($y==$loop-1){
				print("*");
			}else if($x==$belowRound){
				print("*");
			}else{
				print("_");
			}
		}
		
		// mean line
		print("*");
		
		// right
		for($x=1; $x<=$mean-2; $x++){
			if($y==$loop-1){
				print("*");
			}else if($x==$belowRound){
				print("*");
			}else{
				print("_");
			}
		}
		
		// last line
		print("*");
		print("<br>");
		$belowRound++;
	}
