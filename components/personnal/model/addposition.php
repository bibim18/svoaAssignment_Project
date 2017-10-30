<?php
    include 'connect.php';
?>

<!-- Modal addposition-->
<div class="modal fade" id="addposition" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form  method="get" enctype="multipart/form-data" id="formaddposition" name="formaddposition">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลตำแหน่งงาน</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- ส่วนของฟอร์มตำแหน่งงาน-->
                <div class="form-group">
                    <label for="exampleInputEmail1">รหัสตำแหน่ง</label>
                    <?php 
                        $sql="select max(id_position) as id_position from position order by id_position";
                        $objParse = oci_parse($objConnect, $sql);
                        oci_execute ($objParse,OCI_DEFAULT);
                        $objResult = oci_fetch_array($objParse,OCI_BOTH);
                    ?>
                    <input type="text" name="id_position" class="form-control" value="<?php echo $objResult["ID_POSITION"]+1;?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">ชื่อตำแหน่ง *</label>
                    <input type="text" name="name_position" class="form-control" placeholder="กรุณาใส่ชื่อฝ่าย" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">แผนก</label>
                        <select name="name_department" class="form-control" id="sel1">
                            <?php 
                                $sql="select * from department order by id_department";
                                $objParse = oci_parse($objConnect, $sql);
                                oci_execute ($objParse,OCI_DEFAULT);
                                $objResult = oci_fetch_array($objParse,OCI_BOTH);
                                while($objResult = oci_fetch_array($objParse,OCI_BOTH))
                                {
                            ?>
                                      <option  value="<?php echo $objResult['ID_DEPARTMENT'];?>" selected="selected"><?php echo $objResult['NAME_DEPARTMENTS'];?></option>
                            <?php
                                }
                            ?>
                        </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">ฐานเงินเดือน *</label>
                    <input type="text" name="basesalary" class="form-control" placeholder="กรุณาใส่ฐานเงินเดือน" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="save-position" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </form>
    
  </div>
</div>


