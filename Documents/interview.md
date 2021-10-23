Interview
==========
- Jártasság felmérő kérdések vannak a kérdőív elején az adott témában, aztán több tematikus kérdés.
- A kérdőívre adott válaszokat kell tárolni adatbázisban, amit nem kell feldolgozni.
- Több téma. (12 maybe?)
- Időkorlát beállítás. (Kérdésenként, vagy bevezető kérdések és további kérdésekre együtt)
- Láthatóság: Hogyan lesznek elválasztva a kérdések egymástól? (Miután meg lett válaszolva egy kérdés vagy az idő lejárt, megjelenik a következő kérdés. Vagy tömbösítve a tudást felmérő kérdések és a további kérdések)
- Letiltás: Az adott idő lejárta után nem adható meg válasz. 
- A projekt web applikációként lesz megvalósítva.
- Keretrendszert célszerű használni. (Laravel)

Egyeztetés a Stakeholderrel
=================

- A rendszernek 2 szereplője van, a kérdést felteveő(továbbiakban kérdező) és a kérdéseket megválaszoló(továbbiakban válaszoló)
- A kérdező egy form on keresztül fel tudja tölteni a kérdéseit, amik vegyesen, de előre megjelölve tartalmaznak a téma ismeretét érintő, vélemény kérdéseket is. 
- A válaszoló nem ismeri, hogy melyik kérdés, melyik alcsoportba tartozik.
- A válaszoló csak egyszer tötlhet ki egy kérdőívet.
- Az eltárolt kérdesknél meg kell jelölni, melyik alcsoportba tartozik, de nem szükséges a témaismeretet illető kérdésekhez a válaszokat tárolni.
- Célszerű relációs adatbázist használni.
- Képeket nem kell tárolni és/vagy feltöltenie a kérdezőnek.
