<html>
<head>
<title>ThaiCreate.Com PHP & Oracle Tutorial</title>
<META HTTP-EQUIV="Refresh" CONTENT="0;URL=invoice.php">
</head>
<body>
  <?php
   include("connect.php");
   $date=$_POST["date"];

  $strSQL = "INSERT INTO INVOICE";
  $strSQL .="(INVOICE_ID,ID_PERSONNEL,SO_ID)";
  $strSQL .="VALUES ";
  $strSQL .="('".$_POST["INVOICE"]."','".$_POST["ID_PERSONNEL"]."'";
  $strSQL .=",'".$_POST["SALES_ORDER"]."') ";
  $objParse = oci_parse($objConnect, $strSQL);
  $objExecute = oci_execute($objParse, OCI_DEFAULT);
  $strSQL1 = "INSERT INTO INVOICE_DETAIL ";
  $strSQL1 .="(INVOICE_DETAIL_ID,INVOICE_ID,DAY_TO_SEND,CAR_ID)";
  $strSQL1 .="VALUES ";
  $strSQL1 .="('".$_POST["INVOICE_DETAIL_ID"]."','".$_POST["INVOICE"]."'";
  $strSQL1 .=",TO_DATE('$date', 'YYYY-MM-DD'),'".$_POST["CAR_ID"]."') ";
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
