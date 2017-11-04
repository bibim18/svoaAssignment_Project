<?php
    $key = $_GET["ID_GENDERINSURE"];
?>

<?php
     $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.59)(PORT = 1521)))(CONNECT_DATA=(SID=svoa2)))";
     $objConnect = oci_connect("tee","oracle",$db,'AL32UTF8');

     $sqls="select * from GENDERINSURE where ID_GENDERINSURE = '$key'";
     $objParses = oci_parse($objConnect, $sqls);
     oci_execute ($objParses,OCI_DEFAULT);
     $objResultz = oci_fetch_array($objParses,OCI_BOTH);
?>
<form>
    <!-- ส่วนของฟอร์มเพิ่มฝ่าย -->
    <div class="form-group">
        <label for="exampleInputEmail1">รหัสประเภททการบริการ</label>
        <input type="text" name="GENDERSERVICEID" class="form-control" value="<?php echo $objResultz["ID_GENDERINSURE"];?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">ชื่อประเภททการบริการ *</label>
        <input type="text" name="NAMEGENDER" class="form-control"  value="<?php echo $objResultz["NAME"];?>" placeholder="กรุณาใส่ชื่อประเภททการบริการ" required>
    </div>

</form>
<div class="modal-footer">
        <button type="submit" name="save_editcatagory_insures" id="save_editcatagory_insures" class="btn btn-primary btn-sm" ><i class="fa fa-save fa-fw"></i> บันทึก</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
</div>
