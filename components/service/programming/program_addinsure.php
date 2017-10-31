<?php
    echo $_POST["id_department"]; 
    echo $_POST["name_department"];
?>

<?php

     $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.59)(PORT = 1521)))(CONNECT_DATA=(SID=svoa2)))";
     $objConnect = oci_connect("oat","oracle",$db,'AL32UTF8');


     $sql="INSERT INTO DEPARTMENT (ID_DEPARTMENT,NAME_DEPARTMENTS) VALUES ('".$_POST["id_department"]."','".$_POST["name_department"]."')";
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
