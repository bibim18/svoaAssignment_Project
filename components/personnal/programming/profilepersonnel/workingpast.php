
<?php 
            $sql="select * from career where id_personnel = '$employeeid'";
            $objParse = oci_parse($objConnect, $sql);
            oci_execute ($objParse,OCI_DEFAULT);
              
?>

<table class="table table-striped">
  <thead>
    <tr>
        <th>บริษัท</th>
        <th>ตำแหน่ง</th>
        <th>เริ่มงาน</th>
        <th>วันที่ออกจากงาน</th>
        <th>เงินเดือนที่เคยได้รับ</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($objResult = oci_fetch_array($objParse,OCI_BOTH))
    {
    ?>
    <tr>
      <td><?php echo $objResult["NAME"];?></td>
      <td><?php echo $objResult["OLD_POSITION"];?></td>
      <td><?php echo $objResult["START_WORK"];?></td>
      <td><?php echo $objResult["END_WORK"];?></td>
      <td><?php echo @$objResult["SALARY"]."บาท";?></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>