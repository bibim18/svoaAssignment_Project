<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <META HTTP-EQUIV="Refresh" CONTENT="0;URL=product.php">
    <title></title>
  </head>
  <body>
    <?php
    include("connect.php");

    $strSQL = "DELETE FROM PRODUCT ";
    $strSQL .="WHERE PRODUCT_ID = '".$_GET["id"]."' ";
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
