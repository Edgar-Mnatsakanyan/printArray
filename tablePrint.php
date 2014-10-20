<?php

$test_array = array(
    array(
        'Name' => 'Trixie',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers'
        ),
    array(
        'Name' => 'Tinkerbell',
        'Element' => 'Air',
        'Likes' => 'Singning',
        'Color' => 'Blue'
        ), 
    array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Blum',
        'Color' => 'Pink'
        ),
);

function arrayPrint($arr)
{
	$out='';
	$arrTMP = array();

	foreach($arr as $arrElem)
	{
		foreach($arrElem as $elem)
		{
			$arrTMP[key($arrElem)] = $elem;
		}

		$out.= '<tr><td class="col1" >' . $arrElem['Name'] . '</td><td class="col2" >' . $arrElem['Color'] . '</td><td class="col3">' . $arrElem['Element'] . '</td><td class="col4">' . $arrElem['Likes'] . '</td></tr>';
	}
$out.= '</table>';
return $out;
}




?>



<!doctype html>
<html>
<head>
<title>Array Print</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style>
table {margin-top:50px;}
th, td {text-align:center;}
.col1{background-color: #428bca;}
.col2{background-color: #5cb85c;}
.col3{background-color: #5bc0de;}
.col4{background-color: #f0ad4e;}
</style>
</head>
<body>
<center>
<h3> The test table</h3>
<table class="table table-bordered">
<tr>
<th style="background-color: #428bca " >Name</th>
<th style="background-color: #5cb85c ">Color</th>
<th style="background-color: #5bc0de ">Element</th>
<th style="background-color: #f0ad4e">Likes</th>
</tr>

<?php echo arrayPrint($test_array);?>

</table>
</center>
</body>
</html>



