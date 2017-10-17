<?
$i=$_GET["i"];
$n=$_GET["n"];
$a=$_GET["a"];
$e=$_GET["e"];
$t=$_GET["t"];
$tp=$_GET["tp"];

$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.59)(PORT = 1521)))(CONNECT_DATA=(SID=svoa2)))";
    $objConnect = oci_connect("bibim","53402014Fg",$db,'AL32UTF8');
 $txt = "UPDATE CUSTOMER
SET CUS_NAME = '$n', CUS_ADDRESS ='$a',CUS_EMAIL='$e',CUS_TEL='$t',TYPECUS_ID='$tp'
WHERE CUS_ID='$i'";
$objParse = oci_parse($objConnect, $txt);
$objExecute = oci_execute($objParse, OCI_DEFAULT);
if($objExecute)
{
	oci_commit($objConnect); //*** Commit Transaction ***//
	echo "<script>alert('ข้อมูลได้รับการแก้ไขแล้ว')</script>";
  echo "<script>window.close();</script>";
}
else
{
	oci_rollback($objConnect); //*** RollBack Transaction ***//
	echo "Error Save [".$strSQL."";
}
oci_close($objConnect);
?>
