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

		$file_content = file_get_contents( dirname(__FILE__) . '/' . $file );
		
		
		#apply regex
		preg_match_all($regex, $file_content, $matches);

		#get matches
		$count = array_count_values($matches[0]);	
		
		#Here's the magic!!!!
		array_multisort(
			array_values($count), SORT_DESC, 
			array_keys($count), SORT_ASC, 
			$count);	

		

		try 
		{	
			if (!$file_content) {

				throw new Exception('Parece que o arquivo <strong>' . $file .' </strong> não foi localizado');
			}
			if(@preg_match($regex, null) === false){
				throw new Exception('Expressão reguar inválida ');
			}

			
		} 
		
		catch (\Exception $e) 
		{

			echo "
			<pre>
			OOOOPS, tem caquinha no seu código:
			
			Detalhes: " . $e->getMessage() ;
		}

		
		return $count;
	}

	

}
?>