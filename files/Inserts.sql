USE CRNS0;

--INSERE USUARIOS
INSERT INTO 
  public."User"
(
  "Registration",
  "Name"
)
VALUES (
  '631210066',
  'Jean Carlo'
);

INSERT INTO 
  public."User"
(
  "Registration",
  "Name"
)
VALUES (
  '631210165',
  'Anderson Moscardini'
);

INSERT INTO 
  public."User"
(
  "Registration",
  "Name"
)
VALUES (
  '631210278',
  'Thiago Boff'
);

INSERT INTO 
  public."User"
(
  "Registration",
  "Name"
)
VALUES (
  '631210394',
  'Cristiano Marinho'
);

---------------------------

--INSERE TIPOS

INSERT INTO 
  public."Type"
(
  "Description"
)
VALUES (
  'Origem'
);

INSERT INTO 
  public."Type"
(
  "Description"
)
VALUES (
  'Destino'
);

---------------------------

--INSERE ITINERARIOS

INSERT INTO 
  public."Itinerary"
(
  "Description",
  "Lat",
  "Lng",
  "IdUser",
  "IdType"
)
VALUES (
  'Casa',
  '-29.902160',
  '-51.153232',
  1,
  1
);

INSERT INTO 
  public."Itinerary"
(
  "Description",
  "Lat",
  "Lng",
  "IdUser",
  "IdType"
)
VALUES (
  'Casa',
  '-29.902160',
  '-51.153232',
  1,
  2
);

INSERT INTO 
  public."Itinerary"
(
  "Description",
  "Lat",
  "Lng",
  "IdUser",
  "IdType"
)
VALUES (
  'Faculdade',
  '-30.036655',
  '-51.227809',
  1,
  1
);

INSERT INTO 
  public."Itinerary"
(
  "Description",
  "Lat",
  "Lng",
  "IdUser",
  "IdType"
)
VALUES (
  'Faculdade',
  '-30.036655',
  '-51.227809',
  1,
  2
);

INSERT INTO 
  public."Itinerary"
(
  "Description",
  "Lat",
  "Lng",
  "IdUser",
  "IdType"
)
VALUES (
  'Casa Pai',
  '-29.890818',
  '-51.136207',
  1,
  2
);