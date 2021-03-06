Követelmény Specifiáció
========================

Áttekintés
-----------
- Az alkalmazás egy olyan felületet biztosít, amelyen keresztül kérdésekre kell választ adni. Különböző témájú kérdőívek lesznek felvezetve, amelyek mindegyike kitölthető.
- A kérdőívek kitöltésével célunk a különböző információk begyűjtése témánként. Valamint ezen adatok felvezetése egy adatbázisba, amelyek egy másik projektben kerülnek feldolgozásra. Az adatfeldolgozás nem része ennek a projektnek.
- Az adatok feldolgozásával célunk, hogy minél pontosabb statisztikát tudjunk nyújtani előreláthatólag egy-egy témában, melyet több ember tudásának, információinak és tippjeinek felmérése alapján valósítunk meg.
- Az alkalmazás egy webes felület, amely úgy van gondosan megszerkesztve, hogy a felhasználók számára érdekes legyen a kérdőív és a figyelmüket a kitöltésre tudják öszpontosítani.

Jelenlegi helyzet
------------------
- Manapság már minden online történik és az irodák már nem papírokkal, hanem számítógépekkel és digitális eszközökkel vannak tele, nálunk sem más a helyzet. Az elmúlt években nagy beruházásokra került sor, amelyek újabb technológiák bevezetésére adott lehetőséget, mivel szükséges volt számunkra is versenyképesnek maradni a mai piacon.
- Viszont jelenleg a vállalatunknak még mindig van olyan részlege ahol papírmunkát kell végezni, ezt szeretnénk digitálisra cserélni, jelen esetben ezek a kérdőívek, amelyek még nem elektronikus formában vannak.
- A kérdőívek által szerzett anyagokat fel kell vezetni számítógépes adatabázisokba, amely manapság rengeteg utómunkát igényel. Manuálisan végezve ez nagy idő kiesést produkál.

Vágyálom rendszer
------------------
- A felhasználó a bejelentkezés után képes belépni a saját fiókjába. 
- Szükség esetén a jelszót módosítani tudja a fsz. .
- A felhasználó elkezdi az általa választott kérdőívvet. -> Elkezdi a teszt kitöltését.
- Amennyiben végzett, el tudja menteni a válaszait, amely később kiértékelhetővé válik.

Jelenlegi üzleti folyamatok modellje
-------------------------------------
- A kérdőíveztetést egy erre a feldatra megbízott kolléga végzi:
    - Ez történhet az utcán egy stand mögött, illetve házalással.   
- Papír alapú kérőíveztetés zajlik jelenleg a következő módon:
    - A téma általános kérdései
    - Különböző kérdéstípusok: 
        - 10 es skála
        - Képfelismerés
        - Eldöntendő kérdések
    - Lakóhelyről és élethelyzetről szóló kérdések (opcionálisan)      
- Mindezek végeztével a kész tesztet fel kell vezetni egy adatbázisba.

Igényelt üzleti folyamatok
---------------------------
- Felhasználó regisztráció és bejelentkezés
    - Az adott felhasználó bejelenetkezik az adott oldalon, ha nincs még fiókja akkor a megadott gombbal
    regisztrál.
    - A regisztrációs felületen a mezőket kitöltve regisztrál majd bejelentkezik a regisztrált felhasználóval.
    -  Bejeéentkezés után a felhasználó a kérdőív választó oldalon találja magát.
- Kérdőív kiválasztása.
    - A felhasználó a kérdőíveket listázó oldalon kiválasztja az álltala kívánt kédrdőívet a listából
    - A kiválasztot kérdőív kezdés gombjával választhatja ki.    
- Kérdőív kitöltése
    - A Kiválasztott kérdőív minden kérdése időkorláthoz van kötve.
    - Minden kérdést megválasolva egy gombra kattintva mentheti a választ, valamint haladhat tovább
    - Az időben meg nem adott válaszok helytelennek számítanak.
    - A teszt utolsó kérdését megválaszolva véget ér a teszt és a teszt kiértékeli magát. 
    - A végén megtekinthető az eredmény, valamint a válaszai késobbiekben visszakereshetőek.

Követelménylista
-----------------
| Modul | ID | Név | version | Kifejtés |
| :---: | :---: | :---: | :---: | :--- |
| Jogosultság | KJ1 | Bejelentkezés | 1.0 | A felhasználó belép az adatainak megadásával. |
| Jogosultság | KJ2 | Regisztráció | 1.0 | A felhasználó a nevének, email címének és jelszavának valmint személyes adatainak megadásával regisztrálja magát. Ha a valamelyik hiányzik vagy nem megfelelő az elvárásoknak, akkor a rendszer figyelmezteti a felhasználót.|
| Felület | KF1 | Bejelentkezési felület | 1.0 | A felhasználók itt tudnak bejelentkezni a rendszerbe. |
| Felület | KF2 | Regisztrációs felület | 1.0 | A felhasználót itt tudnak regisztrálni a rendszerbe. |
| Felület | KF3 | Kérdőív kiválasztás | 1.0 | A felhasználó kiválaszt egy kérdőívet amelyre el szeretné küldeni a válaszait |
| Felület | KF4 | Kérdőív megoldása | 1.0 | A felhasználó begépeli a kérdésire adott válaszait és elküldi. A kérdőívek minden felhasználó számára egyszer kitölthetőek. Újra kitölteni csak egy bizonyos idő elteltével van lehetőség (pl. 6 hónap). |
