
<?php 
            $sql="select * from training where id_personnel = '$employeeid'";
            $objParse = oci_parse($objConnect, $sql);
            oci_execute ($objParse,OCI_DEFAULT);
              
?>

<table class="table table-striped">
  <thead>
    <tr>
        <th><center>โครงการอบรม</center></th>
        <th><center>ประเภทการอบรม</center></th>
        <th><center>วันเริ่มต้นอบรม</center></th>
        <th><center>วันสิ้นสุดการอบรม</center></th>
        <th><center>สถานะการประเมิน</center></th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($objResult = oci_fetch_array($objParse,OCI_BOTH))
    {
    ?>
    <tr>
      <center>
        <td><?php echo $objResult["NAME"];?></td>
        <td><?php echo $objResult["DEPARTMENT"];?></td>
        <td><?php echo $objResult["DATE_START"];?></td>
        <td><?php echo $objResult["DATE_END"];?></td>
        <td>
            <?php 
                if($objResult["STATUS"] == "PASS")
                {
                    echo "<a href='#' data-toggle='popover' data-trigger='hover' data-content='Some content' title='ผ่านการอบรม'><font color='green'><center><i class='fa fa-check' aria-hidden='true'></i></center></font></a>";
                }
                else if($objResult["STATUS"] == "WAIT")
                {
                    echo "<a href='#' data-toggle='popover' data-trigger='hover' data-content='Some content' title='รอระหว่างการพิจารณา'><font color='blue'><center><i class='fa fa-clock-o' aria-hidden='true'></i></center></a>";
                }
                else if($objResult["STATUS"] == "FAIL")
                {
                    echo "<a href='#' data-toggle='popover' data-trigger='hover' data-content='Some content' title='ไม่ผ่านการอบรม'><font color='red'><center><i class='fa fa-times' aria-hidden='true'></i></center></font></a>";
                }
            ?>
        </td>
      </center>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').tooltip();   
});
</script>
