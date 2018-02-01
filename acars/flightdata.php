<?
// functions.php is required to connect to the database as usual
require("db.inc.php");

$query = mysqli_query($conn, "SELECT * FROM `flights` where flightnumber='".$_REQUEST['DATA2']."'");
$num_result = mysqli_num_rows($query);
if ($num_result > 0)
{
	for ($i=0;$i<$num_result;$i++)
	{
		$result = mysqli_fetch_array($query);
		echo "1|flightplan\n";
		echo $result['departure']."\n";
		echo $result['destination']."\n";
		echo $result['alternate']."\n";
		echo $result['route']."\n";
		echo $result['pax']."\n";
		echo $result['cargo']."\n";
		echo $result['rules']."\n";
		echo $result['aircraft']."\n";
	}
}
else
{
	echo "0|Flightnumber not found";
}
