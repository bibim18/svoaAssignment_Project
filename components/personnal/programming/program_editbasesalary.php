<?php
    $key = $_GET["key"];
?>

<?php 
     $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.59)(PORT = 1521)))(CONNECT_DATA=(SID=svoa2)))";
     $objConnect = oci_connect("oat","oracle",$db,'AL32UTF8');

     $sql="select * from basesalaryfull where id_basesalary = '$key'";
     $objParse = oci_parse($objConnect, $sql);
     oci_execute ($objParse,OCI_DEFAULT);
     $objResult = oci_fetch_array($objParse,OCI_BOTH);
?>
<form>
    <!-- ส่วนของฟอร์มเพิ่มฝ่าย -->
    <div class="form-group">
        <label for="exampleInputPassword1">รหัสเงินเดือน</label>
        <input type="text" name="id_basesalary" class="form-control" value="<?php echo $objResult["ID_BASESALARY"];?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">ชื่อตำแหน่ง</label>
        <input type="text" name="name_basesalary" class="form-control" value="<?php echo $objResult["NAME_POSITION"];?>" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">เงินเดือน</label>
        <input type="text" name="name_basesalary" class="form-control" value="<?php echo $objResult["BASESALARY"];?>" required>
    </div>
</form>
<div class="modal-footer">
        <button type="submit" name="save_basesalary" id="save_basesalary" class="btn btn-primary btn-sm" ><i class="fa fa-save fa-fw"></i> บันทึก</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
</div>