<style type="text/css">
table, th, td
{
border: 1px solid black;
}
</style>
<?php

$json=file_get_contents("http://reassent.no-ip.biz:7777/web/graph_data/miner_hash_rates/last_day");
$entries=json_decode($json);

echo '<table>';
foreach($entries as $entry)
{
	echo '<tr>';
		echo '<td>'.$entry[0].'</td>';
		$properties = get_object_vars($entry[1]);
		foreach($properties as $key=>$value)
		{
			echo '<td>'.$key.':'.$value.'</td>';
		}
		echo '<td>'.$entry[2].'</td>';
		echo '<td>'.$entry[3].'</td>';
	echo '</tr>';
}
echo '</table>';
?>