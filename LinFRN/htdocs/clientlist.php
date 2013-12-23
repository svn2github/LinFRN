
<table>
<tr>
<th class="first" width=20%>Description</th>
<th width=20%>User</th>
<th width=60%>QTH</th>
</tr>

<?php
$row = 1;
$flag = 0;
if (($handle = fopen("client.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, "|")) !== FALSE) {
        $num = count($data);
        if ($flag==0) {
		echo '<tr class="row-a">';
		$flag = 1;
	} else {
		echo '<tr class="row-b">';
		$flag = 0;
	}
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo "<td>". $data[$c] . "</td>";
	}
	echo "</tr>";
    }
    fclose($handle);
}
?>
</table>