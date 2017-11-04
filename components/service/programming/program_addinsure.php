<meta charset="utf-8">


<?php
    $id_insure = $_POST["id_insure"];
    $name_insure = $_POST["name_insure"];
    $type_insure = $_POST["type_insure"];
?>

<?php

     $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.59)(PORT = 1521)))(CONNECT_DATA=(SID=svoa2)))";
     $objConnect = oci_connect("tee","oracle",$db,'AL32UTF8');


     $sql="INSERT INTO INSURE (ID_INSURE,NAME_INSURE,ID_GENDERINSURE) VALUES ('".$id_insure."','".$name_insure."','".$type_insure."')";
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
