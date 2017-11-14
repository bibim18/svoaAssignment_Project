<html>
<head>
<title>ThaiCreate.Com PHP & Oracle Tutorial</title>
<META HTTP-EQUIV="Refresh" CONTENT="0;URL=pack.php">
</head>
<body>
  <?php
   include("connect.php");
   $date=$_POST["date"];

  $strSQL = "INSERT INTO PACK ";
  $strSQL .="(PACK_ID,ID_PERSONNEL,PACK_DAY,PACK_MANY)";
  $strSQL .="VALUES ";
  $strSQL .="('".$_POST["id_pack"]."','".$_POST["ID_PERSONNEL"]."',TO_DATE('$date', 'YYYY-MM-DD')";
  $strSQL .=",'".$_POST["count"]."') ";
  $objParse = oci_parse($objConnect, $strSQL);
  $objExecute = oci_execute($objParse, OCI_DEFAULT);
  $strSQL1 = "INSERT INTO DETAIL_PACK ";
  $strSQL1 .="(DETAIL_PACK_ID,TYPE_SEND_ID,PACK_ID)";
  $strSQL1 .="VALUES ";
  $strSQL1 .="('".$_POST["DETAIL_PACK_ID"]."','".$_POST["TYPE_SEND"]."'";
  $strSQL1 .=",'".$_POST["id_pack"]."') ";
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
