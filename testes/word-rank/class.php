<?php 
/**
* Rank Class
* @author  Durval Rafael <duurval@gmail.com>
* @link http://github.com/durvalrafael
* @return array
*/
class Rank
{
	
	function init($file, $regex)
	{
		#store file into a variable
		$string = file_get_contents( dirname(__FILE__) . '/' . $file );
		
		#apply regex
		preg_match_all($regex, $string, $matches);

		#get matches
		$count = array_count_values($matches[0]);	
		
		#Here's the magic!!!!
		array_multisort(
			array_values($count), SORT_DESC, 
			array_keys($count), SORT_ASC, 
			$count);	

		return $count;
	}

}
?>