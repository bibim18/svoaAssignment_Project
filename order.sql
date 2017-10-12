--------------------------------------------------------
--  File created - Friday-October-13-2017   
--------------------------------------------------------
--------------------------------------------------------
--  DDL for Table ORDERS
--------------------------------------------------------

  CREATE TABLE "BIBIM"."ORDERS" 
   (	"OD_ID" VARCHAR2(10 BYTE), 
	"SOLUTION_ID" CHAR(5 BYTE), 
	"DATE_SENT" DATE, 
	"CIRCLE_SENT" NUMBER(3,0)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
REM INSERTING into BIBIM.ORDERS
SET DEFINE OFF;
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od003','sol02',to_date('25-OCT-10','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od001','sol01',to_date('03-OCT-10','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od002','sol01',to_date('10-OCT-10','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od004','sol01',to_date('26-DEC-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od005','sol01',to_date('22-DEC-14','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od006','sol01',to_date('05-MAR-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od007','sol01',to_date('30-DEC-14','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od008','sol02',to_date('10-MAY-13','DD-MON-RR'),5);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od009','sol02',to_date('15-NOV-16','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od010','sol02',to_date('19-DEC-16','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od011','sol02',to_date('08-OCT-15','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od012','sol01',to_date('12-DEC-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od013','sol02',to_date('28-SEP-13','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od014','sol02',to_date('29-OCT-16','DD-MON-RR'),4);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od015','sol02',to_date('05-AUG-14','DD-MON-RR'),5);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od016','sol01',to_date('23-NOV-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od017','sol01',to_date('24-DEC-16','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od018','sol02',to_date('20-AUG-14','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od019','sol01',to_date('20-FEB-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od020','sol02',to_date('29-NOV-13','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od021','sol02',to_date('10-DEC-14','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od022','sol01',to_date('29-OCT-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od023','sol01',to_date('03-OCT-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od024','sol01',to_date('14-MAR-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od025','sol02',to_date('29-OCT-14','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od026','sol02',to_date('13-AUG-13','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od027','sol01',to_date('06-APR-16','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od028','sol02',to_date('17-SEP-13','DD-MON-RR'),5);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od029','sol01',to_date('11-JAN-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od030','sol01',to_date('22-FEB-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od031','sol02',to_date('12-JUN-15','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od032','sol01',to_date('04-APR-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od033','sol01',to_date('09-MAR-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od034','sol02',to_date('27-OCT-13','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od035','sol02',to_date('09-DEC-16','DD-MON-RR'),4);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od036','sol02',to_date('29-MAR-16','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od037','sol01',to_date('05-MAY-16','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od038','sol01',to_date('15-MAR-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od039','sol02',to_date('17-SEP-14','DD-MON-RR'),4);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od040','sol02',to_date('02-AUG-14','DD-MON-RR'),4);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od041','sol01',to_date('30-JUN-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od042','sol02',to_date('22-APR-13','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od043','sol02',to_date('30-MAR-14','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od044','sol02',to_date('01-APR-15','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od045','sol02',to_date('09-JUN-14','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od046','sol02',to_date('15-MAY-15','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od047','sol01',to_date('17-MAR-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od048','sol01',to_date('29-JUN-16','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od049','sol01',to_date('18-AUG-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od050','sol02',to_date('30-NOV-15','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od051','sol02',to_date('19-JUL-16','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od052','sol02',to_date('28-MAY-16','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od053','sol02',to_date('21-JUN-16','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od054','sol02',to_date('27-JUL-13','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od055','sol01',to_date('27-MAY-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od056','sol01',to_date('11-JAN-16','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od057','sol02',to_date('20-AUG-15','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od058','sol01',to_date('24-MAY-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od059','sol01',to_date('29-SEP-16','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od060','sol02',to_date('08-DEC-16','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od061','sol01',to_date('21-JUL-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od062','sol02',to_date('16-JAN-15','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od063','sol01',to_date('22-MAR-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od064','sol02',to_date('17-OCT-16','DD-MON-RR'),4);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od065','sol02',to_date('27-OCT-13','DD-MON-RR'),4);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od066','sol02',to_date('20-SEP-16','DD-MON-RR'),4);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od067','sol01',to_date('05-MAR-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od068','sol02',to_date('08-JUN-16','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od069','sol02',to_date('01-OCT-13','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od070','sol01',to_date('06-MAR-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od071','sol01',to_date('26-JUL-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od072','sol02',to_date('24-FEB-15','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od073','sol01',to_date('15-MAY-16','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od074','sol01',to_date('13-FEB-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od075','sol02',to_date('12-JUL-16','DD-MON-RR'),6);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od076','sol01',to_date('02-JUL-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od077','sol02',to_date('29-OCT-13','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od078','sol01',to_date('05-JAN-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od079','sol02',to_date('22-JUL-14','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od080','sol01',to_date('10-NOV-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od081','sol02',to_date('25-FEB-16','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od082','sol01',to_date('25-JAN-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od083','sol01',to_date('18-SEP-16','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od084','sol02',to_date('12-SEP-14','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od085','sol02',to_date('06-JUN-15','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od086','sol02',to_date('16-FEB-14','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od087','sol02',to_date('11-OCT-15','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od088','sol01',to_date('12-FEB-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od089','sol01',to_date('22-JAN-14','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od090','sol01',to_date('25-SEP-14','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od091','sol02',to_date('28-DEC-14','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od092','sol01',to_date('13-MAY-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od093','sol02',to_date('09-NOV-15','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od094','sol01',to_date('14-MAR-16','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od095','sol02',to_date('10-JUN-13','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od096','sol02',to_date('01-APR-15','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od097','sol02',to_date('18-FEB-15','DD-MON-RR'),4);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od098','sol01',to_date('12-JUN-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od099','sol02',to_date('18-AUG-13','DD-MON-RR'),4);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od100','sol01',to_date('27-FEB-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od101','sol02',to_date('30-MAR-13','DD-MON-RR'),4);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od102','sol02',to_date('03-JUN-14','DD-MON-RR'),5);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od103','sol02',to_date('23-JUL-14','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od104','sol02',to_date('02-FEB-13','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od105','sol02',to_date('07-DEC-16','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od106','sol02',to_date('22-SEP-14','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od107','sol01',to_date('20-DEC-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od108','sol02',to_date('15-APR-16','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od109','sol02',to_date('04-SEP-13','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od110','sol01',to_date('10-JAN-16','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od111','sol01',to_date('28-OCT-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od112','sol02',to_date('18-APR-13','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od113','sol02',to_date('22-DEC-13','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od114','sol02',to_date('13-DEC-16','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od115','sol01',to_date('14-MAY-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od116','sol01',to_date('10-JAN-16','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od117','sol02',to_date('01-NOV-16','DD-MON-RR'),4);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od118','sol02',to_date('01-APR-16','DD-MON-RR'),4);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od119','sol01',to_date('09-MAY-14','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od120','sol02',to_date('19-AUG-16','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od121','sol02',to_date('15-MAR-16','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od122','sol02',to_date('14-SEP-13','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od123','sol01',to_date('17-AUG-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od124','sol01',to_date('26-APR-14','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od125','sol02',to_date('01-OCT-15','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od126','sol01',to_date('29-JAN-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od127','sol01',to_date('30-MAR-14','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od128','sol01',to_date('17-AUG-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od129','sol02',to_date('07-JUL-15','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od130','sol01',to_date('23-FEB-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od131','sol01',to_date('17-MAR-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od132','sol02',to_date('30-JAN-15','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od133','sol01',to_date('06-MAY-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od134','sol01',to_date('16-DEC-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od135','sol02',to_date('25-FEB-16','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od136','sol01',to_date('14-JAN-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od137','sol01',to_date('18-AUG-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od138','sol02',to_date('19-OCT-14','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od139','sol02',to_date('06-APR-13','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od140','sol02',to_date('03-JUN-13','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od141','sol01',to_date('02-MAR-14','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od142','sol02',to_date('25-NOV-16','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od143','sol02',to_date('05-DEC-14','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od144','sol02',to_date('12-DEC-15','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od145','sol01',to_date('07-JUL-16','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od146','sol01',to_date('19-MAY-16','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od147','sol02',to_date('21-FEB-13','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od148','sol01',to_date('14-SEP-14','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od149','sol02',to_date('24-JAN-16','DD-MON-RR'),4);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od150','sol02',to_date('30-JAN-13','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od151','sol02',to_date('07-NOV-13','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od152','sol01',to_date('03-JUL-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od153','sol02',to_date('12-JAN-15','DD-MON-RR'),5);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od154','sol01',to_date('15-NOV-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od155','sol01',to_date('06-MAR-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od156','sol02',to_date('25-APR-14','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od157','sol01',to_date('19-JAN-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od158','sol01',to_date('03-AUG-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od159','sol01',to_date('20-OCT-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od160','sol02',to_date('15-FEB-13','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od161','sol01',to_date('14-APR-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od162','sol02',to_date('12-MAY-13','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od163','sol01',to_date('03-JUL-14','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od164','sol01',to_date('14-JUN-14','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od165','sol01',to_date('03-JUN-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od166','sol01',to_date('16-DEC-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od167','sol02',to_date('19-JUL-16','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od168','sol02',to_date('11-MAY-15','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od169','sol01',to_date('17-AUG-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od170','sol02',to_date('28-NOV-15','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od171','sol02',to_date('04-SEP-15','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od172','sol01',to_date('01-DEC-16','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od173','sol02',to_date('10-OCT-13','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od174','sol02',to_date('24-FEB-14','DD-MON-RR'),4);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od175','sol01',to_date('08-APR-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od176','sol02',to_date('05-FEB-15','DD-MON-RR'),4);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od177','sol02',to_date('22-NOV-14','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od178','sol02',to_date('28-DEC-15','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od179','sol02',to_date('13-JUL-15','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od180','sol02',to_date('07-JUL-15','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od181','sol01',to_date('15-JAN-14','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od182','sol01',to_date('22-DEC-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od183','sol01',to_date('18-MAR-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od184','sol02',to_date('11-SEP-13','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od185','sol02',to_date('01-FEB-15','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od186','sol02',to_date('13-JAN-15','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od187','sol01',to_date('21-AUG-16','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od188','sol02',to_date('15-NOV-15','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od189','sol01',to_date('28-DEC-16','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od190','sol01',to_date('03-JUN-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od191','sol02',to_date('14-JUL-14','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od192','sol02',to_date('18-DEC-13','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od193','sol01',to_date('02-APR-16','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od194','sol02',to_date('14-JAN-15','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od195','sol01',to_date('17-MAY-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od196','sol01',to_date('23-JUL-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od197','sol01',to_date('14-FEB-16','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od198','sol02',to_date('12-AUG-16','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od199','sol02',to_date('04-AUG-15','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od200','sol02',to_date('05-APR-14','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od201','sol02',to_date('16-APR-16','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od202','sol01',to_date('10-AUG-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od203','sol01',to_date('13-DEC-14','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od204','sol02',to_date('11-SEP-15','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od205','sol02',to_date('20-FEB-14','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od206','sol02',to_date('06-SEP-13','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od207','sol01',to_date('25-JUL-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od208','sol02',to_date('26-JAN-13','DD-MON-RR'),3);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od209','sol01',to_date('27-OCT-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od210','sol02',to_date('20-JUN-15','DD-MON-RR'),2);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od211','sol01',to_date('10-SEP-15','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od212','sol01',to_date('10-AUG-16','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od213','sol01',to_date('04-MAY-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od214','sol02',to_date('20-JAN-15','DD-MON-RR'),4);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od215','sol01',to_date('24-MAR-13','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od216','sol02',to_date('23-NOV-13','DD-MON-RR'),5);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od217','sol01',to_date('30-AUG-16','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od218','sol01',to_date('19-SEP-16','DD-MON-RR'),null);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od219','sol02',to_date('19-APR-13','DD-MON-RR'),4);
Insert into BIBIM.ORDERS (OD_ID,SOLUTION_ID,DATE_SENT,CIRCLE_SENT) values ('od220','sol01',to_date('04-APR-13','DD-MON-RR'),null);
--------------------------------------------------------
--  DDL for Index DETAIL_ORDER_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "BIBIM"."DETAIL_ORDER_PK" ON "BIBIM"."ORDERS" ("OD_ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  Constraints for Table ORDERS
--------------------------------------------------------

  ALTER TABLE "BIBIM"."ORDERS" MODIFY ("OD_ID" NOT NULL ENABLE);
  ALTER TABLE "BIBIM"."ORDERS" MODIFY ("SOLUTION_ID" NOT NULL ENABLE);
  ALTER TABLE "BIBIM"."ORDERS" MODIFY ("DATE_SENT" NOT NULL ENABLE);
  ALTER TABLE "BIBIM"."ORDERS" ADD CONSTRAINT "DETAIL_ORDER_PK" PRIMARY KEY ("OD_ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table ORDERS
--------------------------------------------------------

  ALTER TABLE "BIBIM"."ORDERS" ADD FOREIGN KEY ("SOLUTION_ID")
	  REFERENCES "BIBIM"."SOLUTION_ORDER" ("SOLUTION_ID") ENABLE;
