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
            <?php include("profilepersonnel/personnelprofile.php"); ?>  
     <br>
     <br>
     <div class="col-md-12" style="float:left;">
     <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">ประวัติการศึกษา</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">ประวัติการทำงาน</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">ประวัติการฝึกอบรม</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu3">สัญญาจ้างงาน</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>  
                <?php include("profilepersonnel/eduwork.php"); ?>  
            </div>
            <div id="menu1" class="container tab-pane fade"><br>
                <?php include("profilepersonnel/workingpast.php"); ?> 
            </div>
            <div id="menu2" class="container tab-pane fade"><br>
                <?php include("profilepersonnel/training.php"); ?> 
            </div>
            <div id="menu3" class="container tab-pane fade"><br>
                <?php include("profilepersonnel/contract.php"); ?> 
            </div>
        </div>
    </div>
</div>

