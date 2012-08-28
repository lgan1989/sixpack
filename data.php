<?php


global $dataset;
$dataset = array();
global $period;
$period = '[';
$today = time();
date_default_timezone_set('America/Los_Angeles');
$day = 24 * 3600;
$period .= '"' .date('M-d-Y' , $today).'"';
for ($i = 1 ; $i < 15 ; $i ++){
    $today -= $day; 
    $period .= ',"'.date('M-d-Y', $today).'"';
}
$period .= ']' ;

$db = mysql_connect('localhost', 'root', '');
$dbname = 'sixpack';
if (!$db) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db($dbname);

$query = "SELECT * FROM `situp` ORDER BY date ASC";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {
    array_push($dataset , array('amount' => $row['amount'] , 'detail' => $row['detail'] , 'date' => $row['date']));
}


mysql_close($db);



?>
