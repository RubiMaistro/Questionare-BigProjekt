Rendszerterv
=============

A rendszer célja
-----------------
- A rendszer egy társadalomkutatást támogató alkalmazás. Ebben a verzióban nem jelenik meg még a kiértékelés, viszont szükséges minden feltételt megteremteni, hogy ez később lehetővé váljon.
- A kérdések feltevése és kitöltése regisztrációhoz kötött. Különböző jogosultásgokkal rendelkezik a két csoport. A kérdés feltöltő egy előre elkészített ürlapon megadja a kérdéseket, amelyek az adatbázisban tárolódnak, illetve létrehoznak egy új táblát a válaszok tárolására.
- A válaszoló az általa kiválasztott kérdőívet kiválasztja egy lsitából, majd kitölti azt. Fontos, hogy a témában való jártasságra utaló kérdések bele vannak ágyazva a többi kérdésbe.
- A válaszoló amint végzett, elmenti a válaszait, ami így később kiértékelhető. 

Projektterv
------------
- ### 1. Projektszerepkörök, felelőségek ###
    - A projektszerepkörök és felelőségek a feladatok típusától és összetettségétől függ. A feladat elosztás elsődleges szempontja a hatékonyság, az egyéni igények, valamint a kompetenciák függvényében történik.
    - Valamilyen szinten ezek a szerepkörök átjárhatók inspiráció, segítség nyújtás vagy egyéni igények alapján.

- ### 2. Projektmunkások és felelőségek ###
    - ### Frontend munkálatok: ### 
        - Résztvevői: Deák Ruben, Dobos Zoltán, Varga Krisztián, Bánfalvi Márk Tamás, Balla Csaba
        - Feladatuk a weblap felhasználói felületének kialakítása és design elemek megvalósítása.

    - ### Backend munkálatok: ###
        - Résztvevői: Dobos Zoltán, Deák Ruben 
        - Feladatuk az adatok tárolásához szükséges adatszerkezetek kialakítása, funkciók létrehozása, a különböző platformok kiszolgálása adatokkal.
        
- ### 3. Ütemterv ###
    - Időszakosan heti sprintekben, valamint szükségszerűen spontán időpontokban való egyeztetések alapján történik a fejlesztés.

- ### 4. Mérföldkövek ###
    1. A dokumentációk elkészítése jelenti a fejlesztés első mérföldkövét.
    2. A funkciók létrehozása és manuális vagy kisebb tesztelések a működés szempontjából.
    3. A program tesztelése. Ennél a mérföldkőnél rendelkezésére fog állni a program váza, illetve működőképes lesz. Lehetőség van átfogóbb tesztelésekre.
    4. A kényelmi funkciók kialakítása és tökéletesítése, illetve a dizájn kerül beépítésre.
    

Üzleti folyamatok modellje
--------------------------
- 
- 

Követelmények
--------------
- Dizájn
    - Egyszerű és átlátható dizájn
    - Reszponzív felület
- Regisztráció / Bejelentkezés
    - A felhasználó tudjon bejelentkezni, valamint regisztrálni, ha nincsen még fiókja 
    felhasználó névvel / E-Mail segítségével, valamint egy álltaluk megadott jelszóval.
- Kérdőívek 
    - Kérdőívek létrehozása a megadott témában 
    - A felhasználó kiválaszthatja a kérdőívet melyet megszeretne oldani.
    - A megoldott kérdőívek eredményeit minden felhasználónak külön egy adatbázisban tárolni
    melyből könnyen lehet csoportosítani.
    - A kérdőívek mind szöveges formájúak vagy választhatóak így nem kell médiát vagy filét 
    feltöltenie a felhasználónak.
- Adatbázis
    - Relációs adatbázis az adatok tárolására a megoldott kérdőívekkel kapcsolatosan
    minden felhasználóra.


Funkcionális terv
-----------------
### 1. Rendszerszereplők ###
- Felhasználó
- Kérdező

### 2. Rendszerhasználati esetek és lefutásaik ###
- #### Felhasználó ####
    - Regisztrálhat és bejelentkezhet a rendszerbe
    - Kereshet a kérdőívek között
    - Kiválaszthat egy kérdőívet, amelyet kitölt
    - Elküldheti a kiválasztott a kérdőívre adott válaszait 
- #### Kérdező ####
    - Regisztrálhat mint Kérdező és bejelentkezhet a rendszerbe
    - Feltölthet kérdőíveket, a sajátjait törölheti
    - Látja, hogy hány ember töltötte ki a kérdőívet.
    
### 3. Menü-hierarchiák ###
- #### Bejelentkezés: ####
    - Belépés
    - Regisztráció

- #### Main Menü: ####
    - Keresés a kérdőívek közt
    - Kérdőívek kezelése (csak Kérdezőnek látszik)
    - Kérdőív kiválasztás
    - Kijelentkezés

- #### Kérdőív: ####
    - Kérdések megválaszolása
    - Válaszok elküldése

Fizikai környezet
------------------
- Az alkalmazás webes felületre, elsősorban (nagyobb képernyős eszközökre) asztali számítógépekre, laptopokra és táblagépekre készül, ezért a felhasználói élmény érdekében célszerű így használni, viszont elérhető okostelefonról és kisebb tabletről is.
- A projekt Laravel keretrenszer segítségével lesz megvalósítva.
- A szerver oldalon PHP programnyelvet, felhasználó oldalon pedig HTML5 és CSS3 webtechnológiákat használunk. Bootstrapet is alkalmazunk.
- Adatbázist használunk az adatok tárolására.
- A webalkalmazás használatához Internet kapcsolatra van szükség.

Implementációs terv
--------------------
- A webes alkalmazások előnyeit kihasználva nincs szükség kompatibilitásra, hiszen a php szerver oldalon fut.
- A megjelenítéshez használt technológiák minimális követelményekkel rendelkeznek, egyedül az Interner Explorernél léphetnek fel komplikációk, de mivel hivatalosan nem támogatott böngésző, ezért nem készül rá implementáció, nem kerül bele a tesztbe se. 
- A MariaDB használata során(a XAMPP beépített relációs-adatbáziskezelő szoftvere) előléphetnek kis- és nagybetűs érzékenységi problémák, de ez a működést nem befolyásolja, csak   a fejlesztés során igényel nagyobb figyelmet.  

Tesztterv
----------
- Az tesztelési a fejlesztéssel párhuzamosan, funkciók elkészítését követően, az oldal építése közben történik mind ameddig el nem jutunk egy szinte kész állapotba, amit az alpha teszt követ. 
- Az alpha tesztet a fejlesztő csapat fogja elvégezni, ekkor a funkciók, különboző böngészői környezetekben hogyan viselkedik az oldal. Amennyiben ez a könyvelt tesztelési folyamat lezárul következik az béta teszt.
- A béta tesztet felhasználók egy szűk csoportja fogja végezni, ennek feladata, hogy a felhasználóktól visszajelzést kapjanak a fejlesztők az alkalmazás működését, hibáit illetően. A tesztelők az eredményeket, hibákat egy előre összeállított forma szerint könyvelik, értékelik
