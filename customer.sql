--------------------------------------------------------
--  File created - Friday-October-13-2017   
--------------------------------------------------------
--------------------------------------------------------
--  DDL for Table CUSTOMER
--------------------------------------------------------

  CREATE TABLE "BIBIM"."CUSTOMER" 
   (	"CUS_ID" CHAR(5 BYTE), 
	"CUS_NAME" VARCHAR2(100 BYTE), 
	"CUS_ADDRESS" VARCHAR2(300 BYTE), 
	"CUS_EMAIL" VARCHAR2(40 BYTE), 
	"CUS_TEL" VARCHAR2(20 BYTE), 
	"TYPECUS_ID" CHAR(5 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
REM INSERTING into BIBIM.CUSTOMER
SET DEFINE OFF;
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0003','Fujikura Electronics(Thailand)','1/80 หมู่ที่ 5 สวนอุตสาหกรรมโรจนะ
ถนนโรจนะ ตำบลคานหาม อำเภออุทัย 
จังหวีดพระนครศรีอยุธยา 13210','www.fujikura-electronics.co.th','035719021-28','tc002');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0002','ITK-ALL',' 52/350 ซ.16 หมู่บ้านพฤกษา42 ต.นาดี อ.เมือง จ.สมุทรสาคร 74000','itkalls@gmail.com','0805779244','tc003');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0001','IT City','604/3 อาคารพันธุ์ทิพย์พลาซา
 ชั้น 5-6 ถนนเพชรบุรี
 แขวงถนนเพชรบุรี เขตราชเทวี 
กทม. 10400','nannaphat_t@itcity.co.th','026565049','tc003');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0004','โรงเรียนเบญจมราชรังสฤษฎิ์','222 ถนน ชุมพล ตำบล หน้าเมือง อำเภอเมืองฉะเชิงเทรา ฉะเชิงเทรา 24000',null,'038511249','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0005','ALLA','933, 935,937,939 ซอยอ่อนนุช46 ถนนอ่อนนุช แขวงสวนหลวง เขตสวนหลวง กรุงเทพฯ 10250','info@alla.co.th','027215699','tc002');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0006','เกรียงชัยโกลเด้นไรซ์','55 ม.5 ต.บางน้ำเปรี้ยว อ.บางน้ำเปรี้ยว จ.ฉะเชิงเทรา   24150',null,'0863173333','tc002');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0007','กรมศุลกากร','กรมศุลกากร เลขที่ 1 ถ.สุนทรโกษา คลองเตย กทม. 10110','64070000@customs.go.th','020425628','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0008','โรงเรียนนครนายกวิทยาคม','ข1- 330 ถนนสุวรรณศร ตำบล บ้านใหญ่ อำเภอเมืองนครนายก นครนายก 26000',null,'011049727','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0009','โรงเรียนชัยนาทพิทยาคม','หมู่ 5 ลูกเสือ 55/30 ตำบล บ้านกล้วย อำเภอเมืองชัยนาท ชัยนาท 17000',null,'055173219','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0010','กรมตรวจบัญชีสหกรณ์','กรุงเทพมหานคร จังหวัด กรุงเทพมหานคร 10300',null,'054331314','tc002');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0011','การไฟฟ้านครหลวง','การไฟฟ้านครหลวง เลขที่ 30 ซอยชิดลม ถนนเพลินจิต แขวงลุมพินี เขตปทุมวัน กรุงเทพมหานคร 10330','webmaster@mea.or.th','0818913622','tc002');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0012','โรงเรียนราชินีบูรณะ','9 ถ. หน้าพระ ตำบล พระปฐมเจดีย์ อำเภอเมืองนครปฐม นครปฐม 73000','www.rn.ac.th','0825587308','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0013','กรมการศึกษาธิการ','กระทรวงศึกษาธิการ 319 วังจันทรเกษม ถนนราชดำเนินนอก เขตดุสิต กทม. 10300','website@moe.go.th ','019526485','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0014','มหาวิทยาลัยมหาจุฬาลงกรณราชวิทยาลัย','แขวง พระบรมมหาราชวัง เขต พระนคร กรุงเทพมหานคร 10200',' webmaster@mcu.ac.th','011606374','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0015','โรงเรียนศรีบุณยานนท์','41/1 หมู่ที่ 1 ถนนนนทบุรี 1 ตำบลสวนใหญ่ อำเภอเมืองนนทบุรี จังหวัดนนทบุรี 11000','www.sb.ac.th','025192801','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0016','โรงเรียนสมุทรปราการ','498 ถนนสุขุมวิท ตำบลปากน้ำ อำเภอเมืองสมุทรปราการ จังหวัดสมุทรปราการ 10270','www.prakan.ac.th','010805403','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0017','กรมโรงงานอุตสาหกรรม','75/6 ถ.พระรามที่ 6 แขวงทุ่งพญาไท เขตราชเทวี กรุงเทพฯ 10400 ','pr@diw.mail.go.th  ','0849368801','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0018','สภากาชาดไทย','สงวนลิขสิทธิ์ โดย สภากาชาดไทย เลขที่ 1871 ถ.อังรีดูนังต์ ปทุมวัน กรุงเทพฯ 10330','webmasteratredcross.or.th','0950587228','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0019','สำนักพระราชวัง','สนามเสือป่า ถนนอู่ทองใน แขวงดุสิต เขตดุสิตกรุงเทพมหานคร','Silaporn.k@palaces.mail.go.th','0681100335','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0020','สำนักงานมาตรฐานผลิตภัณฑ์อุตสาหกรรม ','กระทรวงอุตสาหกรรม เลขที่ 75/42 ถนนพระรามที่ 6 เขตราชเทวี กรุงเทพฯ 10400','tisiwebmaster@tisi.go.th','024390884','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0021','โรงเรียนศรัทธาสมุทร','122 ถนนเอกชัย ตำบลลาดใหญ่ อำเภอเมืองสมุทรสงคราม จังหวัดสมุทรสงคราม รหัสไปรษณีย์75000 ประเทศไทย','www.sattha.ac.th','0933682811','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0022','โรงเรียนสิงห์บุรี','ตำบลบางมัญ อำเภอเมืองสิงห์บุรี จังหวัดสิงห์บุรี16000','www.sing.ac.th','039627045','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0023','โรงเรียนกรรณสูตศึกษาลัย','เลขที่ 440 ถนนมาลัยแมน ตำบลรั้วใหญ่ อำเภอเมืองสุพรรณบุรี จังหวัดสุพรรณบุรี','www.kannasoot.ac.th','029341567','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0024','บริษัท ดาต้าวัน เอเชีย (ประเทศไทย) จำกัด','บริษัท ดาต้า วันเอเชีย (ประเทศไทย) จำกัด900/29 ถนนพระราม 3 แขวงบางโพงพาง เขตยานนาวา กรุงเทพฯ 10120 ประเทศไทย','http://www.d1asia.co.th','0803985644','tc002');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0025','บริษัท เอซิส คอมพิวเตอร์ จำกัด','131 ถ.ราษฎร์บูรณะ แขวงราษฎร์บูรณะ เขตราษฎร์บูรณะ กรุงเทพฯ 10140',null,'027824965','tc003');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0026','บริษัท ลีซ อิท จำกัด','บริษัท ลีซ อิท จำกัด 900/27 ถนนพระราม 3 แขวงบางโพงพาง เขตยานนาวา กรุงเทพฯ 10120 ประเทศไทย','Info@leaseit.co.th','027114145','tc003');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0027','โรงเรียนเบญจมราชูทิศ จังหวัดจันทบุรี','เลขที่ 10 หมู่ 1 ถนนศรียานุสรณ์ ตำบลวัดใหม่ อำเภอเมืองจันทบุรี จังหวัดจันทบุรี 22000','http://www.bj.ac.th','0919700240','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0028','โรงเรียนศรียานุสรณ์','เลขที่ 1 ถนนศรียานุสรณ์ ตำบลวัดใหม่ อำเภอเมืองจันทบุรี จังหวัดจันทบุรี 22000','http://www.siya.ac.th','027622091','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0029','โรงเรียนเบญจมราชรังสฤษฎิ์','ถนน ชุมพล ตำบล หน้าเมือง อำเภอเมืองฉะเชิงเทรา ฉะเชิงเทรา 24000','www.brr.ac.th','0982248292','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0030','โรงเรียนชลราษฎรอำรุง','215 หมู่ 3 ถนนพระยาสัจจา ตำบลบ้านสวน อำเภอเมืองชลบุรี จังหวัดชลบุรี 20000','http://www.cru.ac.th','0963155214','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0031','โรงเรียนชลกันยานุกูล','เลขที่ 31 ถนนตำหนักน้ำ ตำบลบางปลาสร้อยอำเภอเมืองชลบุรี จังหวัดชลบุรี','www.chonkanya.ac.th','061168896','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0032','โรงเรียนตราษตระการคุณ','ตำบล บางพระ อำเภอเมืองตราด ตราด 23000','www.tkschool.ac.th','0808883354','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0033','โรงเรียนปราจิณราษฎรอำรุง','เลขที่ 880 ต.หน้าเมือง อ.เมืองปราจีนบุรี จ.ปราจีนบุรี รหัสไปรษณีย์ 25000','www.pra.ac.th','0843398952','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0034','โรงเรียนปราจีนกัลยาณี','เลขที่ 664, ถ.ปราจีนอนุสรณ์, ต.หน้าเมือง อ.เมือง จ.ปราจีนบุรี, 25000 25000','www.pkn.ac.th','017737012','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0035','โรงเรียนระยองวิทยาคม','179 ถ.ตากสินมหาราช ต.ท่าประดู่ อ.เมืองระยอง จ.ระยอง 21000','www.rayongwit.ac.th','0818373520','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0036','โรงเรียนสระแก้ว','58 ถนนสุวรรณศร ตำบลสระแก้ว อำเภอเมืองสระแก้ว จังหวัดสระแก้ว 27000','www.sakaeoschool.ac.th','0890967385','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0037','โรงเรียนวิสุทธรังษี','เลขที่ 32 ถนนแสงชูโต ตำบลท่าล้อ อำเภอท่าม่วง จังหวัดกาญจนบุรี 71000','www.visut.ac.th','049670507','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0038','โรงเรียนกาญจนานุเคราะห์','65 ถนนแสงชูโต ตำบลบ้านเหนือ อำเภอเมืองกาญจนบุรี จังหวัดกาญจนบุรี 71000','www.kn.ac.th','036202682','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0039','โรงเรียนตากพิทยาคม','ตำบล ระแหง อำเภอเมืองตาก ตาก 63000','www.tps.ac.th','020483273','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0040','โรงเรียนประจวบวิทยาลัย','304 สละชีพ ถนน สละชีพ ตำบลประจวบคีรีขันธ์ อำเภอเมืองประจวบคีรีขันธ์ ประจวบคีรีขันธ์ 77000',null,'022606272','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0041','โรงเรียนพรหมานุสรณ์จังหวัดเพชรบุรี','278 ถนนบันไดอิฐ ตำบลคลองกระแชง อำเภอเมืองเพชรบุรี จังหวัดเพชรบุรี 76000','www.promma.ac.th','0902732757','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0042','โรงเรียนเบญจมเทพอุทิศจังหวัดเพชรบุรี','184/2 ถนนคีรีรัฐยา ตำบลคลองกระแชง อำเภอเมืองเพชรบุรี จังหวัดเพชรบุรี 76000','www.bmp.ac.th','0913589294','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0043','โรงเรียนเบญจมราชูทิศ ราชบุรี','96 ถนนมนตรีสุริยวงศ์ ตำบลหน้าเมือง อำเภอเมืองราชบุรี จังหวัดราชบุรี','www.ben.ac.th','046705923','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0044','กรมการจัดหางาน','ถนนมิตรไมตรี เขตดินแดง กรุงเทพฯ 10400','pr@doe.go.th','0969149925','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0045','กรมวิทยาศาสตร์บริการ ','75/7 ถนนพระรามที่6 แขวงทุ่งพญาไท เขตราชเทวี กรุงเทพฯ 10400 ','pr@dss.go.th','012595414','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0046','กรมอนามัย','88/22 ม.4 ต.ตลาดขวัญ ถ.ติวานนท์ อ.เมือง จ.นนทบุรี 11000','mailmaster@anamai.mail.go.th','0637772280','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0047','โรงเรียนราชโบริกานุเคราะห์','421 ถนนยุติธรรม ตำบลหน้าเมือง อำเภอเมืองราชบุรี จังหวัดราชบุรี 70000','ratb.ac.th','021706604','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0048','โรงเรียนอำมาตย์พานิชนุกูล','10 ถนนกระบี่ ตำบลปากน้ำ อำเภอเมืองกระบี่ จังหวัดกระบี่ 81000','http://www.ammart.ac.th','013649173','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0049','โรงเรียนศรียาภัย','เลขที่ 149 ถนนพิศิษฐ์พยาบาล ตำบลท่าตะเภา อำเภอเมือง จังหวัดชุมพร 86000',null,'013158571','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0050','โรงเรียนสอาดเผดิมวิทยา',' เลขที่ 196 ถนนพิศิษฐ์พยาบาล ตำบลท่าตะเภา อำเภอเมือง จังหวัดชุมพร 86000',null,'023289283','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0051','โรงเรียนวิเชียรมาตุ','188 ถนนตรัง-ปะเหลียน หมู่ 12 ตำบลโคกหล่อ อำเภอเมืองตรังจังหวัดตรัง','www.wch.ac.th','054799087','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0052','โรงเรียนสภาราชินี ','142 ถนนวิเศษกุล ตำบลทับเที่ยง อำเภอเมืองตรัง จังหวัดตรัง 92000','spa.ac.th','025478963','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0053','โรงเรียนเบญจมราชูทิศ','เลขที่ 159 หมู่ที่ 3 ถนนนาพรุ-ท่าแพ ตำบลโพธิ์เสด็จ อำเภอเมืองนครศรีธรรมราช จังหวัดนครศรีธรรมราช รหัสไปรษณีย์ 80000','http://www.benjama.ac.th/','073693745','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0054','โรงเรียนกัลยาณีศรีธรรมราช','660 ถนนราชดำเนิน ตำบลคลัง อำเภอเมืองนครศรีธรรมราช จังหวัดนครศรีธรรมราช 80000','http://www.kanlayanee.ac.th/','066933315','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0055','โรงเรียนเบญจมราชูทิศ','เลขที่ 2 ถนนสะบารัง ตำบลสะบารัง อำเภอเมืองปัตตานี จังหวัดปัตตานี 94000','http://www.benjamapn.ac.th [1]','014584033','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0056','โรงเรียนเดชะปัตตนยานุกูล','เลขที่ 8 ถนนวัฒนธรรม ตำบลสะบารัง อำเภอเมืองปัตตานี จังหวัดปัตตานี','decha.ac.th','026271968','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0057','โรงเรียนดีบุกพังงาวิทยายน','132 ถนนเพชรเกษม ต.ท้ายช้าง อ.เมืองพังงา จ.พังงา 82000','http://www.deebuk.ac.th/','014092717','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0058','โรงเรียนพัทลุง','เลขที่ 270 ถนนราเมศวร์ ตำบลคูหาสวรรค์ อำเภอเมืองพัทลุงจังหวัดพัทลุง','www.pt.ac.th','033606057','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0059','โรงเรียนสตรีพัทลุง','250 ถนนเทศบำรุง ตำบลคูหาสวรรค์ อำเภอเมือง จังหวัดพัทลุง','www.spt.ac.th','0625886638','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0060','โรงเรียนภูเก็ตวิทยาลัย','73/3 ถนนเทพกระษัตรี ตำบลตลาดใหญ่ อำเภอเมืองภูเก็ต จังหวัดภูเก็ต 83000','www.pkw.ac.th','042382406','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0061','โรงเรียนสตรีภูเก็ต','เลขที่ 1 ถนนดำรง ตำบลตลาดใหญ่ อำเภอเมืองภูเก็ต จังหวัดภูเก็ต 83000','http://www.satreephuket.ac.th','0672131041','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0062','โรงเรียนคณะราษฎรบำรุง','125 ถนนพิพิธภักดี ตำบลสะเตง อำเภอเมืองยะลา จังหวัดยะลา 95000','www.kbyala.ac.th','025095969','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0063','โรงเรียนพิชัยรัตนาคาร','หมู่ที่ 1 ตำบลบางริ้น อำเภอเมืองระนอง จังหวัดระนอง 85000','www.pr-schoolweb.com','0961987983','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0064','โรงเรียนมหาวชิราวุธ','19 ถนนราชดำเนิน ตำบลบ่อยาง อำเภอเมืองสงขลา จังหวัดสงขลา 90000','www.mvsk.ac.th','029621999','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0065','โรงเรียนวรนารีเฉลิม','เลขที่ 1 ถนนปละท่า ตำบลบ่อยาง อำเภอเมืองสงขลา จังหวัดสงขลา 90000','http://woranari-chaloem.blogspot.com','026817308','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0066','โรงเรียนสตูลวิทยา','318 หมู่ 6 ตำบลคลองขุด อำเภอเมืองสตูล จังหวัดสตูล','http://www.stw.ac.th/','054236987','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0067','โรงเรียนสุราษฎร์ธานี','ถนนดอนนก ตำบลตลาด อำเภอเมืองสุราษฎร์ธานี จังหวัดสุราษฎร์ธานี 84000','http://www.st.ac.th/','0246208139','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0068','โรงเรียนสุราษฎร์พิทยา','เลขที่ 388, ถนนตลาดใหม่, ตำบลตลาด อำเภอเมืองสุราษฎร์ธานี จังหวัดสุราษฎร์ธานี, 84000 84000','http://www.srp.ac.th','028250650','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0069','กรมอุตสาหกรรมพื้นฐานและการเหมืองแร่','75/10 ถนนพระรามที่ 6 แขวงทุ่งพญาไท เขตราชเทวี กรุงเทพฯ 10400. ','http://www.dpim.go.th/','036980943','tc001');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0070','กลุ่มสารสนเทศอุตสาหกรรมอ้อยและน้ำตาลทราย ','ถนนพระรามที่ 6 เขตราชเทวี กรงเทพฯ 10400','http://www.ocsb.go.th','0687976303','tc002');
Insert into BIBIM.CUSTOMER (CUS_ID,CUS_NAME,CUS_ADDRESS,CUS_EMAIL,CUS_TEL,TYPECUS_ID) values ('c0071','กรมที่ดิน','ศูนย์ราชการเฉลิมพระเกียรติ ๘๐ พรรษาฯ ถ.แจ้งวัฒนะ แขวงทุ่งสองห้อง เขตหลักสี่ กรุงเทพมหานคร ๑๐๒๑๐','http://nam.dol.go.th','026106452','tc001');
--------------------------------------------------------
--  DDL for Index SYS_C0010235
--------------------------------------------------------

  CREATE UNIQUE INDEX "BIBIM"."SYS_C0010235" ON "BIBIM"."CUSTOMER" ("CUS_ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  Constraints for Table CUSTOMER
--------------------------------------------------------

  ALTER TABLE "BIBIM"."CUSTOMER" MODIFY ("CUS_ID" NOT NULL ENABLE);
  ALTER TABLE "BIBIM"."CUSTOMER" MODIFY ("CUS_NAME" NOT NULL ENABLE);
  ALTER TABLE "BIBIM"."CUSTOMER" MODIFY ("CUS_ADDRESS" NOT NULL ENABLE);
  ALTER TABLE "BIBIM"."CUSTOMER" MODIFY ("CUS_TEL" NOT NULL ENABLE);
  ALTER TABLE "BIBIM"."CUSTOMER" ADD PRIMARY KEY ("CUS_ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "BIBIM"."CUSTOMER" MODIFY ("TYPECUS_ID" NOT NULL ENABLE);
--------------------------------------------------------
--  Ref Constraints for Table CUSTOMER
--------------------------------------------------------

  ALTER TABLE "BIBIM"."CUSTOMER" ADD FOREIGN KEY ("TYPECUS_ID")
	  REFERENCES "BIBIM"."TYPE_CUSTOMER" ("TYPECUS_ID") ENABLE;
