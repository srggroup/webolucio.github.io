---
title: Általános tudnivalók
keywords: general
last_updated: July 3, 2016
sidebar: cmsadmin_sidebar
permalink: cmsadmin_general.html
folder: cmsadmin
---

## Slug {#slug}

A slug egy úgynevezett „rendszer-név”. Ez általában egy „név” beállítás mindenféle speciális és ékezetes karakterek, szóközök nélküli verziója, mely legtöbb az URL-ben, vagy CSS class-okban jelenik meg. 

A CMS-ben slug-ok generálására mindenhol elérhető egy gomb, mellyel a hozzá kapcsolt név-mező értéke alapján automatikusan is legenerálhatjuk a slug-ot.

## Frontend {#frontend}

Az oldal publikusan is látható felülete

## Listamezők

Az adminisztrációs felületen a „szerkesztés” űrlap részeként több helyen találhatunk olyan „mezőket”, amik elemek hozzáadására, törlésére és szerkesztésére alkalmas listaként működnek. Ezek a mezők minden elemmel együtt szintén mentésre kerülnek. A lista elemeivel elvégezhető műveletek:
* Hozzáadás: A lista fejlécében található hozzáadás gombra kattintva egy új, üres elemet hoz létre a rendszer a lista végén.
* Szerkesztés: A lista sorainak végén található „szerkesztés” gombra kattintva egyszerűbb elemek esetén a lista oszlopainak értéke válik szerkeszthető mezővé, komplexebb elemek esetén pedig egy szerkesztés ablak nyílik meg.
* Törlés: Egy adott sort kijelölve (rákattintva) a fejlécben található törlés gomb aktívvá válik, erre kattintva törölhető az elem.
* Duplikálás: Bizonyos listamezőkben a „szerkesztés” gomb mellett található „duplikálás” gombra kattintva lehetőség van az adott elem másolására is.

## Többnyelvű szerkesztés
Amennyiben a CMS telepítésekor több nyelvet is elérhetővé tettünk a frontendes tartalmak megjelenítésére, az adminisztrációs felületen minden űrlap alján megjelennek a nyelvválasztó fülek. Ezekkel a fülekkel lehet az aktuális elem tartalmainak különböző nyelvi változatai között váltani. Az alapértelmezett nyelven az űrlap valamennyi eleme látható és módosítható, a további nyelveken viszont már csak azok a mezők jelennek meg, amelyek lefordítható szöveget tartalmaznak. Jelölőnégyzetek, legördülő listák és egyéb, hasonló elemek nem fordíthatóak le, mivel nem szabad szöveget tartalmaznak.

## A szövegszerkesztő használata

A formázott szövegek az adminisztrációs felületen a [CKEditor](https://ckeditor.com/) típusú szövegszerkesztővel szerkeszthetőek. A CKEditor alapértelmezett eszközein kívül az alábbi lehetőségek állnak rendelkezésre:

### Stílus

A stílus-legördülő mezőben a beépített stílusokon kívül esetlegesen egyéb, előre definiált, oldal-specifikus stílusok is megjelenhetnek.

### Hivatkozás beillesztése

A CKEditor alapértelmezett URL-mezője helyett a rendszer egy olyan mezőt alkalmaz, ahol az egyszerű szöveges URL-eken túl a CMS-ben definiált oldalak közül is választhatunk. Ha egy oldal hivatkozása így van beállítva, a link nem lesz érzékeny az esetleges URL-változásokra, a hivatkozás mindig a kiválasztott oldalra fog mutatni.  
Az így kiválasztott oldalakhoz extra paramétereket is megadhatunk, melyek az URL után lesznek fűzve.
Hivatkozásként lehetőség van fájl beillesztésére is, melyet a „Fájl kiválasztása” gombra kattintva a Fájlkezelőből lehet kiválasztani. Az így kiválasztott fájlok nem lesznek érzékenyek a fájl elérési útjának esetleges változásaira.

### Kép beillesztése

Kép beillesztése esetén a képet a Fájlkezelőből lehet kiválasztani. Az így kiválasztott fájlok nem lesznek érzékenyek a fájl elérési útjának esetleges változásaira.

### Változók beillesztése

Több helyen (pl. form-ok e-mail beállításai) elérhetőek olyan változók, melyek a szövegben {valtozo} formátumban jelennek meg, és a szöveg felhasználásakor a rendszer a megfelelő értékekkel helyettesít be. Az elérhető változók a „Változó beillesztése” gombra kattintva megtekinthetőek és kiválaszthatóak.
