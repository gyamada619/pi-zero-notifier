<?php 

    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, "https://www.adafruit.com/products/2885"); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $return = curl_exec($ch); 
    curl_close($ch);      

    $find = '<meta name="twitter:data2" content="';
    $find2 = '">';
    $outOfStock = "OUT OF STOCK";
    $inStock = "64 IN STOCK";
    $inStock2 = "IN STOCK";

    $data = substr($return, strlen($find)+strpos($return, $find, strlen($find)),strlen($outOfStock));

    if ($data != $outOfStock) {
    	//string substr ( string $string , int $start [, int $length ] )
    	//mixed strpos ( string $haystack , mixed $needle [, int $offset = 0 ] )
    	$data = substr($return, strlen($find)+strpos($return, $find),strpos($return, $inStock2,(strlen($find)+strpos($return, $find)))-strpos($return, $find)-strlen($find));
    	// substr($return, start at the end of $find, go to the beginning of $inStock2)
    }
    else $data = "0";

    // echo $data . "\n";
    //$json_string = '{"stock":"' . $data . '"}' . "\n";
    //echo $json_string;

	require_once ('MysqliDb.php');
	$db = new MysqliDb ('localhost', 'root', 'admin', 'pi-zeros');

	$data2 = Array ("stock" => $data);
	$id = $db->insert ('adafruitstock', $data2);
	if ($id)
	    echo 'Success' . "\n";
	else
	    echo 'insert failed: ' . $db->getLastError();

?>
