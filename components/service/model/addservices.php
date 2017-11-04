
<?php
     $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.59)(PORT = 1521)))(CONNECT_DATA=(SID=svoa2)))";
     $objConnect = oci_connect("tee","oracle",$db,'AL32UTF8');
?>

<!-- Modal addinsure-->
<div class="modal fade" id="addservices" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form  method="post" enctype="multipart/form-data" id="formaddservices" name="formaddservices">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลบริการ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- ส่วนของฟอร์มบริการงาน-->
                <div class="form-group">
                    <label for="exampleInputEmail1">รหัสบริการ</label>
                    <?php
                        $sqlsss = "select * from GENDERSERVICE";
                        $objParsesss = oci_parse($objConnect, $sqlsss);
                        oci_execute ($objParsesss,OCI_DEFAULT);
                        $objResultz = oci_fetch_array($objParsesss,OCI_BOTH);
                    ?>
                    <input type="text" name="GENDERSERVICEID" class="form-control" value="<?php echo $objResultz["GENDERSERVICEID"]+1;?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">ชื่อบริการ *</label>
                    <input type="text" name="NAMEGENDER" class="form-control" placeholder="กรุณาใส่ชื่อบริการ" required>
                </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="save-services" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </form>

  </div>
</div>
