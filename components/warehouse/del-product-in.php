<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <META HTTP-EQUIV="Refresh" CONTENT="0;URL=product-in.php">
    <title></title>
  </head>
  <body>
    <?php
    include("connect.php");

    $strSQL1 = "select *  FROM PRODUCT_IN_DETAIL  WHERE PRODUCT_IN_ID ='".$_GET["id"]."' ";
    $objParse1 = oci_parse($objConnect, $strSQL1);
    oci_execute ($objParse1,OCI_DEFAULT);
    while($objResult1 = oci_fetch_array($objParse1,OCI_BOTH))
    {
      $PRODUCT_IN_DETAIL_ID=$objResult1["PRODUCT_IN_DETAIL_ID"];
    }

    $strSQL2 = "DELETE FROM PRODUCT_IN_DETAIL ";
    $strSQL2 .="WHERE PRODUCT_IN_DETAIL_ID ='$PRODUCT_IN_DETAIL_ID' ";
    $objParse2 = oci_parse($objConnect, $strSQL2);
    $objExecute2 = oci_execute($objParse2, OCI_DEFAULT);
    $strSQL = "DELETE FROM PRODUCT_IN ";
    $strSQL .="WHERE PRODUCT_IN_ID ='".$_GET["id"]."' ";
    $objParse = oci_parse($objConnect, $strSQL);
    $objExecute = oci_execute($objParse, OCI_DEFAULT);
    if($objExecute && $objExecute2)
    {
    	oci_commit($objConnect); //*** Commit Transaction ***//
    }
    else
    {
      echo $strSQL;
    	oci_rollback($objConnect); //*** RollBack Transaction ***//

    }
    oci_close($objConnect);
    ?>
  </body>
</html>
