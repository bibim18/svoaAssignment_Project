<?php
include("../../lib/ThaiPDF/thaipdf.php");


 // $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 202.44.47.59)(PORT = 1521)))(CONNECT_DATA=(SID=svoa2)))";
 //     $objConnect = oci_connect("bibim","53402014Fg",$db,'AL32UTF8');
 // $strSQL = "select product_name,date_srt,pro_detail,pro_time from bank.product join (select * from PROMOTION_DETAIL join  promotion  using(prom_id)) using(product_id)";
 // $objParse = oci_parse($objConnect, $strSQL);
 // oci_execute ($objParse,OCI_DEFAULT);

		$html='<table>
<tbody>
<tr>
<td>ชื่อสินค้า</td>
<td>วันที่จัดโปรโมชั่น</td>
<td>โปรโมชั่น</td>
<td>ระยะเวลาโปรโม</td>
</tr>'

 	// while($objResult = oci_fetch_array($objParse,OCI_BOTH))
 	// {
$html.='
<tr>
<td>''</td>
<td></td>
<td></td>
<td></td>
</tr>
';
    }
$html.='
</tbody>
</table>
';


pdf_html($html);
pdf_echo();

?>