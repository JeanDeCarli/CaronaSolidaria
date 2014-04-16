USE postgres;

--CRIA BANCO DE DADOS DO PROJETO

CREATE DATABASE CRNS0
  WITH ENCODING = 'UTF8';


USE CRNS0;

--CRIA TABELA USER

CREATE TABLE public."User" (
  "Id" SERIAL,
  "Registration" VARCHAR(20) NOT NULL,
  "Name" VARCHAR NOT NULL,
  CONSTRAINT "User_pkey" PRIMARY KEY("Id")
) 
WITH (oids = false);

-------------------------------------------

--CRIA TABELA TYPE

CREATE TABLE public."Type" (
  "Id" SERIAL,
  "Description" VARCHAR(20) NOT NULL,
  CONSTRAINT "Type_pkey" PRIMARY KEY("Id")
) 
WITH (oids = false);

-------------------------------------------

--CRIA TABELA ITINERARY

CREATE TABLE public."Itinerary" (
  "Id" INTEGER DEFAULT nextval('"Itinerario_Id_seq"'::regclass) NOT NULL,
  "Description" VARCHAR(20) NOT NULL,
  "Lat" VARCHAR NOT NULL,
  "Lng" VARCHAR NOT NULL,
  "IdUser" INTEGER NOT NULL,
  "IdType" INTEGER NOT NULL,
  CONSTRAINT "Itinerario_pkey" PRIMARY KEY("Id"),
  CONSTRAINT "Itinerary_fk" FOREIGN KEY ("IdUser")
    REFERENCES public."User"("Id")
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    NOT DEFERRABLE,
  CONSTRAINT "Itinerary_fk1" FOREIGN KEY ("IdType")
    REFERENCES public."Type"("Id")
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    NOT DEFERRABLE
) 
WITH (oids = false);

ALTER TABLE public."Itinerary"
  ALTER COLUMN "Description" SET STATISTICS 0;