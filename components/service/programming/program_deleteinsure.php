<?php
$a = $_GET["key"];
$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.59)(PORT = 1521)))(CONNECT_DATA=(SID=svoa2)))";
$objConnect = oci_connect("tee","oracle",$db,'AL32UTF8');
$SQL = "DELETE  FROM insure  WHERE ID_INSURE = '$a'";
$objParse = oci_parse($objConnect, $SQL);
$abc = oci_execute($objParse, OCI_DEFAULT);
if($abc)
{
	oci_commit($objConnect); //*** Commit Transaction ***//
	echo "1";
}
else
{
	oci_rollback($objConnect); //*** RollBack Transaction ***//
	echo "0";
}
?>
