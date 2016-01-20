<?php
$data = file_get_contents('http://www.goal.com/en/teams/spain/barcelona/2017?ICID=HP_TN_5_2_1');

$dom = new domDocument;

@$dom->loadHTML($data);
$dom->preserveWhiteSpace = false;
$tables = $dom->getElementsByTagName('table');

$rows = $tables->item(1)->getElementsByTagName('tr');

foreach ($rows as $row) {
        $cols = $row->getElementsByTagName('td');
       foreach($cols as $node)
	   {
		   echo "<pre>"; print_r($node); echo "</pre>";
	   }
}


?>
