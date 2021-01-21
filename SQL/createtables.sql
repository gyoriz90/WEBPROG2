CREATE TABLE Iroda  (
    IrodaAzon INT(4) PRIMARY KEY,
    HazSzam INT(4),
    Utca VARCHAR(50),
    Varos VARCHAR(50),
    IrSzam INT(4));

CREATE TABLE Irodavezeto (
    Username VARCHAR(12) PRIMARY KEY, 
    Email VARCHAR(50),
    Password VARCHAR(100),
    Titulus VARCHAR(50),
    SzuletesiDatum DATE,
    VezNev VARCHAR(50),
    KerNev VARCHAR(50));

CREATE TABLE Tanacsado (
    MnbId VARCHAR(12) PRIMARY KEY, 
    Username VARCHAR(12),
    Password VARCHAR(100),
	Profilkep BLOB,
    Fizetes INT(9),
    Vegzettseg VARCHAR(50),
    Email VARCHAR(50),
    Telefonszam VARCHAR(50),
    HazSzam INT(4),
    Utca VARCHAR(50),
    Varos VARCHAR(50),
    IrSzam INT(4),
    SzuletesiDatum DATE,
    VezNev VARCHAR(50),
    KerNev VARCHAR(50),
    Beosztas VARCHAR(50),
    Iroda INT(4),
    FOREIGN KEY(Iroda) REFERENCES Iroda(IrodaAzon));

CREATE TABLE Ugyfel (
    AdoAzon VARCHAR(10) PRIMARY KEY, 
    Bevetel INT(9),
    VezNev VARCHAR(50),
    KerNev VARCHAR(50),
    SzuletesiDatum DATE,
    Nem VARCHAR(10),
    Tanacsado VARCHAR(12),
    FOREIGN KEY(Tanacsado) REFERENCES Tanacsado(MnbId));

CREATE TABLE Szerzodes  (
    SzerzodesSzam INT(9) PRIMARY KEY, 
    Tipus VARCHAR(50),
    KotesDatum DATE,
    Penzintezet VARCHAR(100),
    EvesDij INT(9),
    Ugyfel VARCHAR(10),
    FOREIGN KEY(Ugyfel) REFERENCES Ugyfel(AdoAzon));

CREATE TABLE Iranyit (
    Iroda INT(4),
    Irodavezeto VARCHAR(12),
    FOREIGN KEY(Iroda) REFERENCES Iroda(IrodaAzon),
    FOREIGN KEY(Irodavezeto) REFERENCES Irodavezeto(Username));

-- segédtáblák létrehozása

CREATE TABLE Telepulesek (
    Iranyitoszam INT(4),
    Telepules VARCHAR(50));

CREATE TABLE Utcanevek (
    Utcanev VARCHAR(50));

CREATE TABLE Penzintezetek (
    Penzintezet VARCHAR(100));

CREATE TABLE SzerzodesTipus (
    Szerzodestipusok VARCHAR(50));
