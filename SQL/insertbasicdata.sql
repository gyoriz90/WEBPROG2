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

INSERT INTO Irodavezeto values('pista.kiss','pista.kiss@iroda.hu','$2y$12$ZH47ftqJU.L1fTJwwtBB.ujJcFdr122f1vFddZ.ims/Iy5ca6BMBy','Területi Vezető','1978-12-12','Kiss','Pista');
INSERT INTO Irodavezeto values('andras.nagy','andras.nagy@iroda.hu','$2y$12$Ze8IQbqiFYbWxt1owY.qCOkDJecKMiyuoRrnDd9sRU6JPw6tBbHf6','Területi Igazgató','1989-05-12','Nagy','András');
INSERT INTO Irodavezeto values('geza.eros','geza.eros@iroda.hu','$2y$12$hAr8bJ9UMKf1SV9BWO8nEOsBmYuVotcmyInWrMRsM3DiMHW34NeRW','Régió Igazgató','1990-07-12','Erős','Géza');
INSERT INTO Irodavezeto values('almos.jakab','almos.jakab@iroda.hu','$2y$12$UzAXMw66DXzYYoAyQwZS3OMbGroR5d7hxbLiflnEVrOTP1/UwfoaG','Országos Igazgató','1968-12-12','Jakab','Álmos');
INSERT INTO Irodavezeto values('elod.zele','elod.zele@iroda.hu','$2y$12$orLhmhzNZF5oyiGeOEs8NeVyQbER1PbIC6YtQmkklLoQdOryo0POC','Fiókvezető','1982-05-11','Zele','Előd');

/*Tanácsadók feltöltése adatbázis teszt miatt. - További tanácsadó előzetesen nem kerül betöltésre. */

INSERT INTO Tanacsado values('110100302020','jakab.gipsz','$2y$12$VDoBsd.RTuWFj2Bm/GPmSeaZin2664jLEduWQU0/M.vI1Th4MJkgC',LOAD_FILE('C:\Users\gyori\Documents\GitHub\WEBPROG2\SQL\pic.jpg'),250000,'középfok','proba@proba.com','+36704318053',25,'Petőfi Sándor','Eger',3300,'1990-07-12','Gipsz','Jakab','tanácsadó',1234);

/*Ügyfelek feltöltése - További 200 ügyfél random szerűen generálásra kerül*/

INSERT INTO Ugyfel values('8451183093',500000,'Kovács','Bence','1979-01-12','férfi','110100302020');
INSERT INTO Ugyfel values('8451183094',600000,'Lüke','Máté','1971-02-11','férfi','110100302020');
INSERT INTO Ugyfel values('8451183095',700000,'Vass','Levente','1969-03-10','férfi','110100302020');
INSERT INTO Ugyfel values('8451183096',550000,'Kovács','Dominik','1979-04-08','férfi','110100302020');
INSERT INTO Ugyfel values('8451183097',650000,'Lüke','Marcell','1971-05-12','férfi','110100302020');
INSERT INTO Ugyfel values('8451183098',750000,'Vass','Noel','1967-06-12','férfi','110100302020');
INSERT INTO Ugyfel values('8451183099',575000,'Kovács','Ádám','1979-07-12','férfi','110100302020');
INSERT INTO Ugyfel values('8451183100',675000,'Lüke','Dániel','1971-08-09','férfi','110100302020');
INSERT INTO Ugyfel values('8451183101',775000,'Vass','Dávid','1972-09-10','férfi','110100302020');
INSERT INTO Ugyfel values('8451183102',475000,'Vass','Olivér','1965-01-03','férfi','110100302020');

/*Szerződések létrehozása - További 500 szerződés random szerűen generálásra kerül*/

INSERT INTO Szerzodes values(438701208,'Unit-Linked','2016-01-01', 'AEGON Magyarország Általános Biztosító Zártkörűen Működő Részvénytársaság',240000,'8451183093');
INSERT INTO Szerzodes values(375720721,'Unit-Linked nyugdíj','2018-02-01','Allianz Hungária Biztosító Zártkörűen Működő Részvénytársaság',240000,'8451183094');
INSERT INTO Szerzodes values(630990758, 'Egyösszegű UL','2019-10-11', 'CIG Pannónia Életbiztosító Nyrt.',4000000, '8451183095');
INSERT INTO Szerzodes values(412801433,'Balesetbiztosítás','2020-10-11', 'D.A.S. Jogvédelmi Biztosító Zártkörűen Működő Részvénytársaság',60000, '8451183096');
INSERT INTO Szerzodes values(187708561,'Lakásbiztosítás','2019-11-09','EURÓPAI UTAZÁSI Biztosító Zártkörűen Működő Részvénytársaság',50000,'8451183097');
INSERT INTO Szerzodes values(522508883, 'Egészségbiztosítás','2020-05-08','Generali Biztosító Zrt.',45000, '8451183098');
INSERT INTO Szerzodes values(927569778,'Babaváró hitel','2018-06-03','GRÁNIT Bank Zártkörűen Működő Részvénytársaság',10000000, '8451183099');
INSERT INTO Szerzodes values(219755287,'Lakáshitel','2019-12-09','KDB Bank Európa Zártkörűen Működő Részvénytársaság',7600000,'8451183100');
INSERT INTO Szerzodes values(306273683, 'Személyi kölcsön','2017-04-03','MKB Bank Nyrt.',3000000, '8451183101');
INSERT INTO Szerzodes values(334609909,'OTK Hitel','2016-08-09','OTP Bank Nyrt.',10000000, '8451183102');

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
