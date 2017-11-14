<html>
<head>
<title>ThaiCreate.Com PHP & Oracle Tutorial</title>
</head>
<body>
<?php
include("connect.php");

$strSQL = "UPDATE PRODUCT SET ";
$strSQL .="PRODUCT_ID = '".$_POST["PRODUCT_ID"]."' ";
$strSQL .=",PRODUCT_NAME = '".$_POST["PRODUCT_NAME"]."' ";
$strSQL .=",PRODUCT_TYPE_ID = '".$_POST["PRODUCT_TYPE_ID"]."' ";
$strSQL .=",ID = '".$_POST["ID"]."' ";
$strSQL .=",PRODUCT_PRICE = '".$_POST["PRODUCT_PRICE"]."' ";
$strSQL .=",PRODUCT_MANY = '".$_POST["PRODUCT_MANY"]."' ";
$strSQL .=",UNIT = '".$_POST["UNIT"]."' ";
$strSQL .="WHERE PRODUCT_ID = '".$_POST["IDS"]."' ";
$objParse = oci_parse($objConnect, $strSQL);
$objExecute = oci_execute($objParse, OCI_DEFAULT);
if($objExecute)
{
	oci_commit($objConnect); //*** Commit Transaction ***//
	?>
<META HTTP-EQUIV="Refresh" CONTENT="0;URL=product.php">
<?php }
else
{
	oci_rollback($objConnect); //*** RollBack Transaction ***//
	echo "Error Save [".$strSQL."";
}
oci_close($objConnect);
?>
</body>
</html>
