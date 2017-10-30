<?php 
    $position = $_POST["id_position"]; 
    $_POST["name_position"];
    $_POST["name_department"];
    $_POST["basesalary"];
?>

<?php

     $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.59)(PORT = 1521)))(CONNECT_DATA=(SID=svoa2)))";
     $objConnect = oci_connect("oat","oracle",$db,'AL32UTF8');

     $sql="select max(id_basesalary) as id_basesalary from basesalary order by id_basesalary";
     $objParse = oci_parse($objConnect, $sql);
     oci_execute ($objParse,OCI_DEFAULT);
     $objResult = oci_fetch_array($objParse,OCI_BOTH);

     $idsalary = substr($objResult['ID_BASESALARY'], 2, 5);
     $intsalary = intval($idsalary+1);;

     $sql2="INSERT INTO basesalary (ID_BASESALARY,BASESALARY,ID_POSITION) VALUES ('"."BS0".$intsalary."','".$_POST["basesalary"]."','". $_POST["id_position"]."')";
     $objParse2 = oci_parse($objConnect, $sql2);
     oci_execute($objParse2, OCI_DEFAULT);

     $sql="INSERT INTO position (ID_POSITION,NAME_POSITION,ID_DEPARTMENT) VALUES ('".$_POST["id_position"]."','".$_POST["name_position"]."','". $_POST["name_department"]."')";
     $objParse = oci_parse($objConnect, $sql);
     $objExecute = oci_execute($objParse, OCI_DEFAULT);
     if($objExecute)
     {
         oci_commit($objConnect); //*** Commit Transaction ***//
         echo "0";
     }
     else
     {
         oci_rollback($objConnect); //*** RollBack Transaction ***//
         echo "1";
     }
     
     oci_close($objConnect);




?>
