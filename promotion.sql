--------------------------------------------------------
--  File created - Friday-October-13-2017   
--------------------------------------------------------
--------------------------------------------------------
--  DDL for Table PROMOTION
--------------------------------------------------------

  CREATE TABLE "BIBIM"."PROMOTION" 
   (	"PROM_ID" VARCHAR2(10 BYTE), 
	"PRO_DETAIL" VARCHAR2(150 BYTE), 
	"PRO_TIME" NUMBER(2,0), 
	"TYPEPRO_ID" CHAR(5 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
REM INSERTING into BIBIM.PROMOTION
SET DEFINE OFF;
Insert into BIBIM.PROMOTION (PROM_ID,PRO_DETAIL,PRO_TIME,TYPEPRO_ID) values ('pro006','ซื้อสินค้าครบในหนึ่งบิล 100,000 บาท ลดราคา 5%',50,'tp001');
Insert into BIBIM.PROMOTION (PROM_ID,PRO_DETAIL,PRO_TIME,TYPEPRO_ID) values ('pro007','ซื้อสินค้าครบในหนึ่งบิล 200,000 บาท ลดราคา 7%',20,'tp001');
Insert into BIBIM.PROMOTION (PROM_ID,PRO_DETAIL,PRO_TIME,TYPEPRO_ID) values ('pro002','สินค้าลดราคา 10%',30,'tp002');
Insert into BIBIM.PROMOTION (PROM_ID,PRO_DETAIL,PRO_TIME,TYPEPRO_ID) values ('pro003','สินค้าลดราคา 20%',25,'tp002');
Insert into BIBIM.PROMOTION (PROM_ID,PRO_DETAIL,PRO_TIME,TYPEPRO_ID) values ('pro004','สินค้าลดราคา 40%',15,'tp002');
Insert into BIBIM.PROMOTION (PROM_ID,PRO_DETAIL,PRO_TIME,TYPEPRO_ID) values ('pro005','สินค้าลดราคา 50%',7,'tp002');
Insert into BIBIM.PROMOTION (PROM_ID,PRO_DETAIL,PRO_TIME,TYPEPRO_ID) values ('pro009','ซื้อสินค้าครบในหนึ่งบิล 1500,000 บาท ลดราคา 20%',20,'tp001');
Insert into BIBIM.PROMOTION (PROM_ID,PRO_DETAIL,PRO_TIME,TYPEPRO_ID) values ('pro001','สินค้าลดราคา 30%',7,'tp002');
Insert into BIBIM.PROMOTION (PROM_ID,PRO_DETAIL,PRO_TIME,TYPEPRO_ID) values ('pro010','ซื้อสินค้าครบในหนึ่งบิล 1000,000 บาท ลดราคา 15%',20,'tp001');
Insert into BIBIM.PROMOTION (PROM_ID,PRO_DETAIL,PRO_TIME,TYPEPRO_ID) values ('pro008','ซื้อสินค้าครบในหนึ่งบิล 500,000 บาท ลดราคา 10%',30,'tp001');
Insert into BIBIM.PROMOTION (PROM_ID,PRO_DETAIL,PRO_TIME,TYPEPRO_ID) values ('pro011','ซื้อสินค้าครบในหนึ่งบิล 2000,000 บาท ลดราคา 25%',15,'tp001');
--------------------------------------------------------
--  DDL for Index PROMOTION_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "BIBIM"."PROMOTION_PK" ON "BIBIM"."PROMOTION" ("PROM_ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  Constraints for Table PROMOTION
--------------------------------------------------------

  ALTER TABLE "BIBIM"."PROMOTION" MODIFY ("PROM_ID" NOT NULL ENABLE);
  ALTER TABLE "BIBIM"."PROMOTION" MODIFY ("PRO_TIME" NOT NULL ENABLE);
  ALTER TABLE "BIBIM"."PROMOTION" ADD CONSTRAINT "PROMOTION_PK" PRIMARY KEY ("PROM_ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table PROMOTION
--------------------------------------------------------

  ALTER TABLE "BIBIM"."PROMOTION" ADD FOREIGN KEY ("TYPEPRO_ID")
	  REFERENCES "BIBIM"."TYPE_PROMOTION" ("TYPEPRO_ID") ENABLE;
