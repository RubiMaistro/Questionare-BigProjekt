# Fejlesztői teszt
| Teszteset | Dátum és időpont | Tesztelést végző személy | Elvárt eredmény | Tesztelés eredménye |
| :---: | :---: | :---: | :--- | :---
| Weblapok közötti átírányítások és linkek | 2021.12.04 19:51 | Deák Ruben | Az átirányítás a kívánt helyre történik | Megfelelt
| Regisztrációs modul ellenőrzése | 2021.12.04 19:56 | Deák Ruben | Helyesen megadott adatok esetén megtörénik a regisztráció és az adatok adatbázisban eltárolódnak | Megfelelt
| Belépés modul ellenőrzése | 2021.12.04 19:58 | Deák Ruben | Helyesen megadott adatok esetén megtörénik a belépés | Megfelelt
| Navigációs sáv ellenőrzése hitelesítetlenül | 2021.12.04 20:01 | Deák Ruben | Hitelesítetlen (vendég) felhasználók csak a regisztráció, belépés és kérdőívek lehetőséget látják | Megfelelt
| Navigációs sáv ellenőrzése kérdező felhasználóval hitelesítve | 2021.12.04 20:05 | Deák Ruben | Minden hitelesített (regisztrált) felhasználó, aki kérdőívet is tud létrehozni látja az 'új kérdőív', 'kérdőívek' és 'kijelentkezés' lehetőséget | Megfelelt 
| Navigációs sáv ellenőrzése választ adó felhasználóval hitelesítve | 2021.12.04 20:07 | Deák Ruben | Minden hitelesített (regisztrált) felhasználó, aki csak kérdőívet tud megválaszolni látja a 'kérdőívek' és 'kijelentkezés' lehetőséget | Megfelelt
| Felhasználói adatok kezelése | 2021.12.04 20:13 | Deák Ruben | Van és megjelenik a lehetőség jelszó változtatáshoz és elfelejtés esetén újabb kéréséhez  | Nem felelt meg (nincs sehol ilyen lehetőség)
| Kérdőívek listázása | 2021.12.04 20:51 | Deák Ruben | Vendég és bejelentkezett felhasználóknak megjelenik a kérdőívek listája | Megfelelt
| Kérdőív létrehozása | 2021.12.06 10:11 | Deák Ruben | Az adatbázisban el vannak mentve a megadott kérdések és a válaszok. | Megfelelt
| Kérdőívre való átirányítás | 2021.12.06 10:14 | Deák Ruben | A kérdőívek listájából kiválasztott kérdőívhez tartozó kérdés lista jelenik meg. |  Megfelelt
| Kérdőív kitöltése vendégként | 2021.12.06 10:15 | Deák Ruben | A kérdésekre adott válaszok a 'Befejez' gomb megnyomása után az adatbázisban mentésre kerül | Megfelelt
| Kérdőív kitöltése regisztrált felhasználóként | 2021.12.06 10:17 | Deák Ruben | A kérdésekre adott válaszok a 'Befejez' gomb megnyomása után az adatbázisban mentésre kerül | Megfelelt

