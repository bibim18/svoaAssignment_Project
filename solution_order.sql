--------------------------------------------------------
--  File created - Friday-October-13-2017   
--------------------------------------------------------
--------------------------------------------------------
--  DDL for Table SOLUTION_ORDER
--------------------------------------------------------

  CREATE TABLE "BIBIM"."SOLUTION_ORDER" 
   (	"SOLUTION_ID" CHAR(5 BYTE), 
	"SOLUTION_NAME" VARCHAR2(30 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
REM INSERTING into BIBIM.SOLUTION_ORDER
SET DEFINE OFF;
Insert into BIBIM.SOLUTION_ORDER (SOLUTION_ID,SOLUTION_NAME) values ('sol01','��Ẻ��������');
Insert into BIBIM.SOLUTION_ORDER (SOLUTION_ID,SOLUTION_NAME) values ('sol02','��Ẻ������');
--------------------------------------------------------
--  DDL for Index SOLUTION_ORDER_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "BIBIM"."SOLUTION_ORDER_PK" ON "BIBIM"."SOLUTION_ORDER" ("SOLUTION_ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  Constraints for Table SOLUTION_ORDER
--------------------------------------------------------

  ALTER TABLE "BIBIM"."SOLUTION_ORDER" MODIFY ("SOLUTION_ID" NOT NULL ENABLE);
  ALTER TABLE "BIBIM"."SOLUTION_ORDER" MODIFY ("SOLUTION_NAME" NOT NULL ENABLE);
  ALTER TABLE "BIBIM"."SOLUTION_ORDER" ADD CONSTRAINT "SOLUTION_ORDER_PK" PRIMARY KEY ("SOLUTION_ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
