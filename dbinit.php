<?php
include('db.php');
$seedfile = 'sql/TravelExperts_FullSeed.sql';
$readList = file($seedfile);
$seedList = Null;
foreach ($readList as $key=>$val)
{
	if ($val != "\n")
	{
		$seedList .= $val;
	}
}
$sqlList = explode(';', $seedList);
foreach ($sqlList as $key=>$val)
{
	print "$key: " . strlen($val) . ": $val;<br />";
	$result = mysqli_query($con, $val . ';') or die('Query Failed: ' . mysqli_error($con));
}
mysqli_close($con);
?>