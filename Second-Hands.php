<?php
  
	function test_1 ($n, $k, $vetor): string
	{
	  $qtd = max(array_count_values($vetor));
		
		if ($n > ($k * 2) || ($qtd > 2)) return "NO";
		
		return "YES";
	}
  
  
  /*Testes*/
  
  $pointers = [[1, 2, 2], [1, 2, 3, 3, 1], [1, 2, 3, 4, 5], [1, 1, 2, 2, 1], [1]];
	$boxies = [[3, 2], [5, 3], [5, 2],[5, 5], [1, 1]];
	
	for ($i=0; $i<5; $i++) {
		echo test_1($boxies[$i][0], $boxies[$i][1], $pointers[$i]) . "\n";
	}
