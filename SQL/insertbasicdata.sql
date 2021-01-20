/*Irodák létrehozása - További iroda előzetesen nem kerül létrehozásra*/

INSERT INTO Iroda values(1234,1,'Adam Mickiewicz','Eger',3300);
INSERT INTO Iroda values(1235,2,'Akácfa-köz','Debrecen',4000);
INSERT INTO Iroda values(1236,3,'Alkonyat','Budapest',1118);
INSERT INTO Iroda values(1237,4,'Köleséri Sámuel','Gödöllő',2100);
INSERT INTO Iroda values(1238,5,'Könyves Kálmán','Monor',2200);
INSERT INTO Iroda values(1239,6,'Rozgonyi Piroska','Ráckeve',2300);
INSERT INTO Iroda values(1240,7,'Káptalandomb','Dunaújváros',2400);
INSERT INTO Iroda values(1241,8,'Nagytarcsai','Esztergom',2500);
INSERT INTO Iroda values(1242,9,'Németh László János','Vác',2600);

/*Irodavezetők létrehozása - További irodavezető előzetesen nem kerül létrehozása*/
/*generált jelszó megegyezik a felhasználónévvel - bcrypt*/

INSERT INTO Irodavezeto values('pista.kiss','pista.kiss@iroda.hu','$2y$12$ZH47ftqJU.L1fTJwwtBB.ujJcFdr122f1vFddZ.ims/Iy5ca6BMBy','Területi Vezető','12-12-1978','Kiss','Pista');
INSERT INTO Irodavezeto values('andras.nagy','andras.nagy@iroda.hu','$2y$12$Ze8IQbqiFYbWxt1owY.qCOkDJecKMiyuoRrnDd9sRU6JPw6tBbHf6','Területi Igazgató','05-12-1989','Nagy','András');
INSERT INTO Irodavezeto values('geza.eros','geza.eros@iroda.hu','$2y$12$hAr8bJ9UMKf1SV9BWO8nEOsBmYuVotcmyInWrMRsM3DiMHW34NeRW','Régió Igazgató','07-12-1990','Erős','Géza');
INSERT INTO Irodavezeto values('almos.jakab','almos.jakab@iroda.hu','$2y$12$UzAXMw66DXzYYoAyQwZS3OMbGroR5d7hxbLiflnEVrOTP1/UwfoaG','Országos Igazgató','12-12-1968','Jakab','Álmos');
INSERT INTO Irodavezeto values('elod.zele','elod.zele@iroda.hu','$2y$12$orLhmhzNZF5oyiGeOEs8NeVyQbER1PbIC6YtQmkklLoQdOryo0POC','Fiókvezető','05-11-1982','Zele','Előd');

/*Tanácsadók feltöltése adatbázis teszt miatt. - További tanácsadó előzetesen nem kerül betöltésre. */

INSERT INTO Tanacsado values(110100302020,'jakab.gipsz','$2y$12$VDoBsd.RTuWFj2Bm/GPmSeaZin2664jLEduWQU0/M.vI1Th4MJkgC',250000,'középfok','proba@proba.com','+36704318053',25,'Petőfi Sándor','Eger',3300,'07-12-1990','Gipsz','Jakab','tanácsadó',1234);

/*Ügyfelek feltöltése - További 200 ügyfél random szerűen generálásra kerül*/

INSERT INTO Ugyfel values(8451183093,500000,'Kovács','Bence','01-12-1979','férfi',110100302020);
INSERT INTO Ugyfel values(8451183094,600000,'Lüke','Máté','02-11-1971','férfi',110100302020);
INSERT INTO Ugyfel values(8451183095,700000,'Vass','Levente','03-10-1969','férfi',110100302020);
INSERT INTO Ugyfel values(8451183096,550000,'Kovács','Dominik','04-08-1979','férfi',110100302020);
INSERT INTO Ugyfel values(8451183097,650000,'Lüke','Marcell','05-12-1971','férfi',110100302020);
INSERT INTO Ugyfel values(8451183098,750000,'Vass','Noel','06-12-1967','férfi',110100302020);
INSERT INTO Ugyfel values(8451183099,575000,'Kovács','Ádám','07-12-1979','férfi',110100302020);
INSERT INTO Ugyfel values(8451183100,675000,'Lüke','Dániel','08-09-1971','férfi',110100302020);
INSERT INTO Ugyfel values(8451183101,775000,'Vass','Dávid','09-10-1972','férfi',110100302020);
INSERT INTO Ugyfel values(8451183102,475000,'Vass','Olivér','01-03-1965','férfi',110100302020);

/*Szerződések létrehozása - További 500 szerződés random szerűen generálásra kerül*/

INSERT INTO Szerzodes values(438701208,'Unit-Linked','01-01-2016', 'AEGON Magyarország Általános Biztosító Zártkörűen Működő Részvénytársaság',240000, 8451183093);
INSERT INTO Szerzodes values(375720721,'Unit-Linked nyugdíj','02-01-2018','Allianz Hungária Biztosító Zártkörűen Működő Részvénytársaság',240000,8451183094);
INSERT INTO Szerzodes values(630990758, 'Egyösszegű UL','10-11-2019', 'CIG Pannónia Életbiztosító Nyrt.',4000000, 8451183095);
INSERT INTO Szerzodes values(412801433,'Balesetbiztosítás','10-11-2020', 'D.A.S. Jogvédelmi Biztosító Zártkörűen Működő Részvénytársaság',60000, 8451183096);
INSERT INTO Szerzodes values(187708561,'Lakásbiztosítás','11-09-2019','EURÓPAI UTAZÁSI Biztosító Zártkörűen Működő Részvénytársaság',50000,8451183097);
INSERT INTO Szerzodes values(522508883, 'Egészségbiztosítás','05-08-2020','Generali Biztosító Zrt.',45000, 8451183098);
INSERT INTO Szerzodes values(927569778,'Babaváró hitel','06-03-2018','GRÁNIT Bank Zártkörűen Működő Részvénytársaság',10000000, 8451183099);
INSERT INTO Szerzodes values(219755287,'Lakáshitel','12-09-2019','KDB Bank Európa Zártkörűen Működő Részvénytársaság',7600000,8451183100);
INSERT INTO Szerzodes values(306273683, 'Személyi kölcsön','04-03-2017','MKB Bank Nyrt.',3000000, 8451183101);
INSERT INTO Szerzodes values(334609909,'OTK Hitel','08-09-2016','OTP Bank Nyrt.',10000000, 8451183102);

/*Irányít kapcsolótábla feltöltése*/
INSERT INTO Iranyit values(1234, 'pista.kiss');
INSERT INTO Iranyit values(1235, 'pista.kiss');
INSERT INTO Iranyit values(1236, 'andras.nagy');
INSERT INTO Iranyit values(1237, 'andras.nagy');
INSERT INTO Iranyit values(1238, 'geza.eros');
INSERT INTO Iranyit values(1239, 'geza.eros');
INSERT INTO Iranyit values(1240, 'almos.jakab');
INSERT INTO Iranyit values(1241, 'almos.jakab');
INSERT INTO Iranyit values(1242, 'elod.zele');
