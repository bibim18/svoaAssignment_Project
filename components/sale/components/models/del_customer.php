<?
$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.59)(PORT = 1521)))(CONNECT_DATA=(SID=svoa2)))";
    $objConnect = oci_connect("bibim","53402014Fg",$db,'AL32UTF8');
$id=$_GET["id"];
if ($submit=="DEL"){
              $txt="delete from customer where cus_id =".$id;
              $objParse = oci_parse($objConnect, $txt);
              $objExecute = oci_execute($objParse, OCI_DEFAULT);
              oci_commit($objConnect);
       }
?>
