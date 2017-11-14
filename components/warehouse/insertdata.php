<html>
<head>
<title>ThaiCreate.Com PHP & Oracle Tutorial</title>
<META HTTP-EQUIV="Refresh" CONTENT="0;URL=product.php">
</head>
<body>
<?php
   include("connect.php");
$strSQL = "INSERT INTO PRODUCT ";
$strSQL .="(PRODUCT_ID,PRODUCT_NAME,PRODUCT_TYPE_ID,ID,PRODUCT_PRICE,PRODUCT_MANY,UNIT) ";
$strSQL .="VALUES ";
$strSQL .="('".$_POST["PRODUCT_ID"]."','".$_POST["PRODUCT_NAME"]."','".$_POST["PRODUCT_TYPE_ID"]."' ";
$strSQL .=",'".$_POST["ID"]."','".$_POST["PRODUCT_PRICE"]."','".$_POST["PRODUCT_MANY"]."','".$_POST["UNIT"]."') ";
$objParse = oci_parse($objConnect, $strSQL);
$objExecute = oci_execute($objParse, OCI_DEFAULT);
if($objExecute)
{
	oci_commit($objConnect); //*** Commit Transaction ***//
}
else
{
	oci_rollback($objConnect); //*** RollBack Transaction ***//

}

oci_close($objConnect);
?>
</body>
</html>
