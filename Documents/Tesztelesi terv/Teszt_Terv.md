# Tesztelési terv

## 1. Bevezetés

### 1.1 Tesztelési terv célja

- A tesztelési terv célja a tesztelés teljes körűségének biztosítása, a tesztelés során alkalmazott eljárások és megoldások meghatározásával.

### 1.2. Elvárások

- Az olvasó ismeri az alapdokumentumokat, amelyek meghatározzák a rendszert. 
- A tesztprogram az ebben a dokumentumban meghatározott tesztterv alapján fut. 
----------------------------------------------------

## 2. Szükséges erőforrások

### 2.1. Feladatkörök 
| Feladatkör | Felelősség | Személy 
| :---: | :--- | :---: 
| Tesztelő: | A teszt végrehajtása. <br> Észrevételek dokumentálása és archiválása. <br> Tesztelési jegyzőkönyv írása | Deák Ruben, <br> Dobos Zoltán, <br> Varga Krisztián, <br> Bánfalvi Márk Tamás, <br> Balla Csaba
| Szakértő: | A szakértő az észrevételek elemzi és megoldást javasol. | Deák Ruben
| Teszt-koordinátor: | Teszt terv készítése. <br> Helyes és időbeni hibakezelés. <br> Szükség esetén problémák eszkalálása. <br> Teszt forgatókönyvek létrehozása <br> Az észrevételek státuszának követése, ill. dokumentálása. | Deák Ruben   
| Projektvezető: | Teszt terv jóváhagyása <br> Teszt forgatókönyv | Dobos Zoltán
    
### 2.2. Teszkörnyezet
- Fejlesztői környezetben megy végbe a tesztelés.
- A tesztelők az alkalmazáshoz való hozzáférést tekintve a saját fejlesztői ágaikban végzik a tesztek végrehajtását, nem éles környezetben.

### 2.3. Teszt dokumentumok
| Cím | Felelős személy 
| :---: | :--- 
| Teszt terv | Deák Ruben
| Teszt-esetek | Varga Krisztián, Bánfalvi Márk Tamás, Deák Ruben
| Tesztjegyzőkönyvek | Deák Ruben
--------------

## 3. Tesztelési terv

### 3.1 Fejlesztői teszt
- A rendszer alapvető funkcióinak ellenőrzése, a hibakezelés és az alapvető funkciók működésének vizsgálata. 
- Módszere
    - manuális tesztelés
    - unit tesztelés

### 3.2 Prototípus (modul) teszt
- A prototípustesztelés célja a rendszer már működő moduljainak önálló tesztelése
- Módszere
    - manuális teszt (bejelentkezés, regisztráció, kérdőív létrehozás, kérdőív kitöltés)

| Teszteset | Dátum és időpont | Tesztelést végző személy | Elvárt eredmény | Tesztelés eredménye | 
| :---: | :---: | :---: | :---: | :---
| Regisztráció | 2021.12.04 12:30 | Varga  Krisztián | Sikeres regisztráció | Megfelelt |
| Bejelentkezés | 2021 .12.04 12:35 | Varga Krisztián | Sikeres bejelentkezés | Megfelelt |
    
### 3.3 Integrációs teszt
- Az integrációs teszt célja a rendszer más rendszerekhez történő illesztésének vizsgálata, a több rendszereken keresztül átívelő funkciók tesztelésének érdekében. 
- Módszere 
    - integrálás más környezetek
    - fejlesztői környezetek

### 3.4 Elfogadási teszt
- Az elfogadási teszt (angolul User Acceptance Test) célja a rendszer teljes funkcionalitásának vizsgálata a felhasználók szemszögéből. 
- Módszere
    - manuális tesztelés

### 3.5	Terheléses teszt 
- A terheléses teszt célja a tervezett kapacitások, valamint a rendelkezésre álló növekedési potenciál meghatározása. 
- Módszere 
    - unit teszt: adatbázis kérések

### 3.6	Tesztelési ütemterv – tesztforgatókönyv
- A tesztek elvégzésének meghatározott sorrendje és dokumentációja a tesztforgatókönyvben rögzítésre kerül.

-----------------
## 4. Tesztelési jegyzőkönyv 

### 4.1	Tesztelési jegyzőkönyv
- A tesztelők a tesztforgatókönyvnek megfelelően elvégzik a tesztelést és az eredményt tesztjegyzőkönyvekben dokumentálják. 

### 4.2 Tesztelési jelentés
- A tesztelési jelentést a tesztkoordinátor készíti el. 
- Egy részletes áttekintése a lefutott teszteknek, azok eredményeinek, státuszának és a megjegyzéseknek.

---------------

## 5. Tesztjegyzőkönyv minta 
| Teszteset | Dátum és időpont | Tesztelést végző személy | Elvárt eredmény | Tesztelés eredménye |
| :---: | :---: | :---: | :---: | :---
| Példa | Példa | Példa | Példa | Példa
| Bejelentkezés az alkalmazába | 2021-11-28 20:15 | Deák Ruben | Sikeres belépés | megfelelt (megjegyzés)
| Üdvözlő felület megjelenik belépés után | 2021-11-28 20:20 | Deák Ruben | Üdvözlő felületre átírányítva | nem felelt meg 

## 6. Jóváhagyások - Tesztelési jelentés minta
| Jegyzőkönyv neve | Modul(ok) neve | Tesztelést elvégezte | Jóváhagyás |
| :---: | :--- | :--- | :---
| Példa | Példa | Példa | Példa
| Regisztrálás | Regisztrációs felület <br> Adatbázis tábla ellenőrzése | Varga Krisztián | Dobos Zoltán
| Bejelentkezés | Bejelentkező felület <br> Adatbázis tábla ellenőrzése | Bánfalvi Márk Tamás | Deák Ruben

