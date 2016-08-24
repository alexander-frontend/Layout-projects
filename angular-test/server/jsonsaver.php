<?

$postdata = file_get_contents("php://input");
$request = json_encode($postdata);

$fp = fopen('../json/data.json', 'w');
fwrite($fp, $request);
fclose($fp);


?>