<meta charset="utf-8">


<?php
        $id = @$_POST["ID_GENDERINSURE"];
        $name = @$_POST["NAME"];

?>

<?php

     $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.59)(PORT = 1521)))(CONNECT_DATA=(SID=svoa2)))";
     $objConnect = oci_connect("tee","oracle",$db,'AL32UTF8');


     $sql="INSERT INTO GENDERINSURE (ID_GENDERINSURE,NAME) VALUES ('".$id_insure."','".$name_insure."')";
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
