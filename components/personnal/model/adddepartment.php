<?php
    include 'connect.php';
?>

<!-- Modal Adddepartment-->
<div class="modal fade" id="adddepartment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form  method="get" enctype="multipart/form-data" id="formadddepartment" name="formadddepartment">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลฝ่ายงาน</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- ส่วนของฟอร์มเพิ่มฝ่าย -->
                <div class="form-group">
                    <label for="exampleInputEmail1">รหัสฝ่าย</label>
                    <?php 
                        $sql="select max(id_department) as id_department from department order by id_department";
                        $objParse = oci_parse($objConnect, $sql);
                        oci_execute ($objParse,OCI_DEFAULT);
                        $objResult = oci_fetch_array($objParse,OCI_BOTH);
                    ?>
                    <input type="text" name="id_department" class="form-control" value="<?php echo $objResult["ID_DEPARTMENT"]+1;?>" disabled>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">ชื่อฝ่าย *</label>
                    <input type="text" name="name_department" class="form-control" placeholder="กรุณาใส่ชื่อฝ่าย" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="save-department" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </form>
    
  </div>
</div>


