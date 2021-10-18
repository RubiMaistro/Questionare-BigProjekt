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
-	Felszanáló regisztrációja : 1.1. A felhasználó létrehoz egy fiókot saját felhasználóén, jelszóval, amiből ki be lehet lépni, jelszót lehet módosítani => 1.2. Kérdőívek közötti választás
-	Keresés : 2.1. A már létrehozott felhasználóval bejelentkezés. => 2.2. A kívánt kérdőívet megkeresi az elérhető kérdőívek között.
-	kérdőív  : 3.1. Szükség van a 1.1. és 1.2 lépések végrehajtására. => 3.2. A felhasználó kitölti a kiválasztott kérdőívet=> 2.3. a  kérdésekre választ tud választani 1 legördülő menüből/ saját választ tud beírni => 3.4 Amennyiben végzett, el tudja menteni a válaszait, amely később kiértékelhetővé válik.
-	kiértékelés: 4.1. Az elmentett kérdőív egy adatbázisba kerül => 4.2. A kiértékelés megtörténik, és erről összegzés készül=> 4.3. A kiértékelés eredményét elmenti a rendszer, annak érdekében, hogy a kitöltési idő végén közzétehető legyen az összegzett eredmény


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
