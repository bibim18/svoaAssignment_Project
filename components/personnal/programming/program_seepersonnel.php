<?php 
     $employeeid= $_GET["employeeid"];
?>
<?php
      $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.59)(PORT = 1521)))(CONNECT_DATA=(SID=svoa2)))";
      $objConnect = oci_connect("oat","oracle",$db,'AL32UTF8');
?>
<div class="container">
    <?php 
                $sql="select distinct * from employees where id_personnel = '$employeeid'";
                $objParse = oci_parse($objConnect, $sql);
                oci_execute ($objParse,OCI_DEFAULT);
                $objResult = oci_fetch_array($objParse,OCI_BOTH);    
    ?>
    <h1>
          <?php echo $objResult['NAME'].'  '.$objResult['LASTNAME'];?>
          <small><h4> <?php echo $objResult['NAME_DEPARTMENTS']; ?></h4></small>
    </h1>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php?depart=employees">จัดการพนักงาน</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $objResult['NAME'];?></li>
        </ol>
    </nav>

    <?php 
            $sql="select * from locator join (select * from district join (select * from province join (select * from address join (select * from blood join (select * from personnel join department using (id_department)) using (id_blood)) using (id_personnel)) using (id_province)) using (id_district)) using (id_locator) where id_personnel = '$employeeid'";
            $objParse = oci_parse($objConnect, $sql);
            oci_execute ($objParse,OCI_DEFAULT);
            $objResult = oci_fetch_array($objParse,OCI_BOTH);    
    ?>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">ประวัติพนักงาน</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">ประวัติการศึกษา/ประวัติการทำงาน/ข้อมูลอื่นๆ</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <?php include("profilepersonnel/personnelprofile.php"); ?>
        </div>
    </div>


</div>

