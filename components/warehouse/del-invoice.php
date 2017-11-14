<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <META HTTP-EQUIV="Refresh" CONTENT="0;URL=invoice.php">
    <title></title>
  </head>
  <body>
    <?php
    include("connect.php");

    $strSQL1 = "select *  FROM INVOICE_DETAIL  WHERE INVOICE_ID ='".$_GET["id"]."' ";
    $objParse1 = oci_parse($objConnect, $strSQL1);
    oci_execute ($objParse1,OCI_DEFAULT);
    while($objResult1 = oci_fetch_array($objParse1,OCI_BOTH))
    {
      $DETAIL_PACK_ID=$objResult1["INVOICE_DETAIL_ID"];
    }

    $strSQL2 = "DELETE FROM INVOICE_DETAIL ";
    $strSQL2 .="WHERE INVOICE_DETAIL_ID ='$DETAIL_PACK_ID' ";
    $objParse2 = oci_parse($objConnect, $strSQL2);
    $objExecute2 = oci_execute($objParse2, OCI_DEFAULT);
    $strSQL = "DELETE FROM INVOICE ";
    $strSQL .="WHERE INVOICE_ID ='".$_GET["id"]."' ";
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
