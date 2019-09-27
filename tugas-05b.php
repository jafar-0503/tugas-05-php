<?php
echo "<h1>Operator String</h1>";

//Deklarasi
$input1 = 'Ayo';
$input2 = 'Belajar';
$input3 = 'Bersama';
$input4 = 'Niomic';



//
echo "
	<table border>
		<tr>
			<th>Input 1</th>
			<th>Input 2</th>
			<th>Hasil</th>
		</tr>
		<tr>
			<td>$input1</td>
			<td>$input2</td>
			<td>$input1&nbsp$input2</td>
		</tr>
		<tr>
			<td>$input3</td>
			<td>$input4</td>
			<td>$input3&nbsp$input4</td>
		</tr>
	</table>
	<br>
";

echo "Gabungan: $input1&nbsp$input2&nbsp$input3&nbsp$input4 :)";
?>