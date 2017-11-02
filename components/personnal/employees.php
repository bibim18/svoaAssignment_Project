<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="js/jquery.dataTables.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
    </script>
        <?php
            include 'connect.php';
        ?>
</head>
<body>
        <?php 

         ?>
        <?php
             if(isset($_GET["employeeid"]))
             {
                $page = @$_GET["employeeid"];
                @$sql="select distinct * from employees where id_personnel='$page'";
                $objParse = oci_parse($objConnect, $sql);
                oci_execute ($objParse,OCI_DEFAULT);
                $objResult = oci_fetch_array($objParse,OCI_BOTH);
                if($page == $objResult['ID_PERSONNEL'])
                {
                    include("programming/program_seepersonnel.php");
                }
             }
             else
             {
                 include ('include/employees_include.php');
             }
        ?>
</body>
</html>