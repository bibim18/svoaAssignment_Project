<html>
<head>
<title>ThaiCreate.Com PHP & Oracle Tutorial</title>
<META HTTP-EQUIV="Refresh" CONTENT="0;URL=product-in.php">
</head>
<body>
  <?php
   include("connect.php");
   $date=$_POST["date"];

  $strSQL = "INSERT INTO PRODUCT_IN ";
  $strSQL .="(PRODUCT_IN_ID,PARTNER_ID,PRODUCT_IN_TIME)";
  $strSQL .="VALUES ";
  $strSQL .="('".$_POST["PRODUCT_IN_ID"]."','".$_POST["PARTNER"]."',TO_DATE('$date', 'YYYY-MM-DD'))";
  $objParse = oci_parse($objConnect, $strSQL);
  $objExecute = oci_execute($objParse, OCI_DEFAULT);
  $strSQL1 = "INSERT INTO PRODUCT_IN_DETAIL ";
  $strSQL1 .="(PRODUCT_IN_DETAIL_ID,PRODUCT_ID,PRODUCT_IN_ID,PRODUCT_IN_MANY)";
  $strSQL1 .="VALUES ";
  $strSQL1 .="('".$_POST["PRODUCT_IN_DETAIL"]."','".$_POST["PRODUCT_ID"]."'";
  $strSQL1 .=",'".$_POST["PRODUCT_IN_ID"]."','".$_POST["sumassess"]."') ";
  $objParse1 = oci_parse($objConnect, $strSQL1);
  $objExecute1 = oci_execute($objParse1, OCI_DEFAULT);
  if($objExecute && $objExecute1)
  {
  	oci_commit($objConnect); //*** Commit Transaction ***//

  }
  else
  {  echo $strSQL1 ; echo $strSQL;
  	oci_rollback($objConnect); //*** RollBack Transaction ***//
  	echo "Error Save [".$strSQL."";
  }

  oci_close($objConnect);
  ?>
</body>
</html>
