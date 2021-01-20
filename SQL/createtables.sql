CREATE TABLE Iroda  (
    IrodaAzon NUMBER(4) PRIMARY KEY,
    HazSzam NUMBER(4),
    Utca VARCHAR2(50),
    Varos VARCHAR2(50),
    IrSzam NUMBER(4));

CREATE TABLE Irodavezeto (
    Username VARCHAR2(12) PRIMARY KEY, 
    Email VARCHAR2(50)
    Password VARCHAR2(100)
    Titulus VARCHAR2(50),
    SzuletesiDatum DATE,
    VezNev VARCHAR2(50),
    KerNev VARCHAR2(50));

CREATE TABLE Tanacsado (
    MnbId NUMBER(12) PRIMARY KEY, 
    Username VARCHAR2(12)
    Password VARCHAR2(100)
    Fizetes NUMBER(9),
    Vegzettseg VARCHAR2(50),
    Email VARCHAR2(50),
    Telefonszam VARCHAR2(50),
    HazSzam NUMBER(4),
    Utca VARCHAR2(50),
    Varos VARCHAR2(50),
    IrSzam NUMBER(4),
    SzuletesiDatum DATE,
    VezNev VARCHAR2(50),
    KerNev VARCHAR2(50),
    Beosztas VARCHAR2(50),
    Iroda NUMBER(4),
    FOREIGN KEY(Iroda) REFERENCES Iroda(IrodaAzon));

CREATE TABLE Ugyfel (
    AdoAzon NUMBER(10) PRIMARY KEY, 
    Bevetel NUMBER(9),
    VezNev VARCHAR2(50),
    KerNev VARCHAR2(50),
    SzuletesiDatum DATE,
    Nem VARCHAR2(10),
    Tanacsado NUMBER(12),
    FOREIGN KEY(Tanacsado) REFERENCES Tanacsado(MnbId));

CREATE TABLE Szerzodes  (
    SzerzodesSzam NUMBER(9) PRIMARY KEY, 
    Tipus VARCHAR2(50),
    KotesDatum DATE,
    Penzintezet VARCHAR2(100),
    EvesDij NUMBER(9),
    Ugyfel NUMBER(10),
    FOREIGN KEY(Ugyfel) REFERENCES Ugyfel(AdoAzon));

CREATE TABLE Iranyit (
    Iroda NUMBER(4),
    Irodavezeto VARCHAR2(12),
    FOREIGN KEY(Iroda) REFERENCES Iroda(IrodaAzon),
    FOREIGN KEY(Irodavezeto) REFERENCES Irodavezeto(Username));

-- segédtáblák létrehozása

CREATE TABLE Telepulesek (
    Iranyitoszam NUMBER(4),
    Telepules VARCHAR2(50));

CREATE TABLE Utcanevek (
    Utcanev VARCHAR2(50));

CREATE TABLE Penzintezetek (
    Penzintezet VARCHAR2(100));

CREATE TABLE SzerzodesTipus (
    Szerzodestipusok VARCHAR2(50));
