
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#myTables').DataTable();
    });
    </script>
<body>
<?
$submit=$_GET["submit"];
$id=$_GET["id"];
$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.59)(PORT = 1521)))(CONNECT_DATA=(SID=svoa2)))";
$objConnect = oci_connect("bibim","53402014Fg",$db,'AL32UTF8');

if ($submit=="DEL"){
              $txt="delete from promotion where PROM_ID ='".$id."'";
              $objParse = oci_parse($objConnect, $txt);
              $objExecute = oci_execute($objParse, OCI_DEFAULT);
              oci_commit($objConnect);
              echo ' <script>alert("Deleted Success");</script>    
              <Script Language="JavaScript">
              window.history.back(); 
              </Script>';
       }
?>

   
</body>
</html>
