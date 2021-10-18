Funkcionális Specifikáció
==========================

Áttekintés 
-----------
 - A projectben a célunk létrehozni egy webes felületet, melyen az emberek kérdőíveket tölthetnek ki.
 - A kérdőívek témája nem kötött, illetve azoknak kitöltése nem korlátozott.
 - A kérdőívek válaszait egy adatbázisban szeretnénk eltárolni, hogy az könnyen kiértékelhető legyen.
 - A kiértékelést nem ebben a projectben fogjuk kivitelezni, de szeretnénk ezt a lehető legjobban megkönnyíteni.

Jelenlegi helyzet
------------------
Jelenleg kérdőíveink kitöltését telefonos hívásban bonyolítjuk le, amit úgy érzünk ideje lecserélni. Sok ember nem örül annak, ha telefonon zavarjuk őket, illetve vannak,
akik fel sem vesznek egy számukra ismeretlen számot. Szeretnénk, hogy a kérdőíveinket egyszerűbben ki lehessen tölteni, illetve ne igényeljen plusz munkaerőt.
Erre a legalkalmasabb egy webes felület lenne, ahova hozzáadhatjuk a kérdőíveinket és kitöltethetjük azt másokkal.

Követelménylista
-----------------
| Modul | ID | Név | version | Kifejtés |
| :---: | :---: | :---: | :---: | :--- |
| Jogosultság | KJ1 | Bejelentkezés | 1.0 | A felhasználó belép az adatainak megadásával. |
| Jogosultság | KJ2 | Regisztráció | 1.0 | A felhasználó a nevének, email címének és jelszavának valmint személyes adatainak megadásával regisztrálja magát. Ha a valamelyik hiányzik vagy nem megfelelő az elvárásoknak, akkor a rendszer figyelmezteti a felhasználót.|
| Jogosultság | KJ3 | Jelszó visszaállítás | 1.0 | A felhasználó elfelejtett jelszó esetén vissza tudja azt álíltani az e-mail címe segítségével. | 
| Felület | KF1 | Bejelentkezési felület | 1.0 | A felhasználók itt tudnak bejelentkezni a rendszerbe. |
| Felület | KF2 | Regisztrációs felület | 1.0 | A felhasználót itt tudnak regisztrálni a rendszerbe. |
| Felület | KF3 | Kérdőív kiválasztás | 1.0 | A felhasználó kiválaszt egy kérdőívet amelyre el szeretné küldeni a válaszait |
| Felület | KF4 | Kérdőív megoldása | 1.0 | A felhasználó begépeli a kérdésire adott válaszait és elküldi. A kérdőívek minden felhasználó számára egyszer kitölthetőek. Újra kitölteni csak egy bizonyos idő elteltével van lehetőség (pl. 6 hónap). |


Jelenlegi üzleti folyamatok modellje
-------------------------------------
•	A kérdőíveztetést egy erre a feldatra megbízott kolléga végzi:
o	Ez történhet az utcán egy stand mögött, illetve házalással.
•	Papír alapú kérőíveztetés zajlik jelenleg a következő módon:
o	A téma általános kérdései
o	Különböző kérdéstípusok:
	10 es skála
	Képfelismerés
	Eldöntendő kérdések
o	Lakóhelyről és élethelyzetről szóló kérdések (opcionálisan)
•	Mindezek végeztével a kész tesztet fel kell vezetni egy adatbázisba.




Igényelt üzleti folyamatok modellje
------------------------------------
- Kérdőívek hozzáadásának lehetősége és annak tárolása
- Válaszok tárolása adatbázisban
- Időkorlát megadásának lehetősége => Kérdés kategóriánként különböző időkorlátot is lehessen megadni

Használati esetek
------------------
- Regisztráció:
 - A felhasználó megadja a bejelentkezési adatait, ezután szükséges megerősíteni az e-mail címét. 
 - Bejelentkezés után szükséges megadnia néhány további adatot. Ezt a Profil menü alatt teheti meg.
- Bejelentkezés:
 - A felhasználó megadja a bejelentkezési adatatait.
 - Ha helyes a megadott jelszó + felhasználónév páros, tovább enged a rendszer.
 - Ellenkező esetben kiírja a megfelelő hibaüzenetet.
 - Lehetősége van a felhasználónak az elfelejtett jelszó gombra kattintva jelszó-emlékeztetőt kérni. 
- Kérdőív kitöltése: 
 - A felhasználó kiválasztja a számára szimpatikus kérdőívet.
 - Értelemszerűen kitölti azokat, amennyiben szükséges megad további információkat.
 - A kitöltés végeztével a mentés gombra kattintva tudja rögzíteni az adatokat.
