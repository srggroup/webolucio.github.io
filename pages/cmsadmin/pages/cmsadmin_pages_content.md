---
title: Oldal szerkesztése > Tartalmak
keywords: oldalkezelő, tartalom
last_updated: July 3, 2016
sidebar: cmsadmin_sidebar
permalink: cmsadmin_pages_content.html
folder: cmsadmin
hash: Page-TabContent

---

A listában régiók (fejléc, tartalom, lábléc) szerint csoportosítva található minden, az adott oldalon megjelenített tartalom. Ide tartoznak az oldal egyedi tartalomblokkjai és az oldal vázát adó sablon tartalmai. A tartalmak színei a módot jelölik:

* Zöld: Csak az oldalon megjelenő, saját tartalom.
* Kék: Az oldal vázát adó sablonból származó tartalom.
* Lila: Globális tartalom, mely több oldalon is megjelenik.
* Szürke: Kikapcsolt, inaktivált tartalom.

A tartalmak sorokba és oszlopokba rendezve kezelhetők. A régiók sorokat, a sorok oszopokat tartalmazhatnak, az oszolopokba kerülnek a tartalmak. A sorok, oszlopok, valamint tartalomblokkok drag&drop-pal sorrendezhetők, vagy áthelyezhetők másik "szülő" alá.  
Az oszlopok a szélüknél fogva állítható méretűek, 12-es osztás használatával.

A régiókkal végezhető műveletek:
* Új sor hozzáadása: Új sort fűz hozzá a régióhoz az utolsó sor után.

Az sorokkal végezhető műveletek:
* Új oszlop hozzáadása: Új oszlopot fűz hozzá a sorhoz, az utolsó oszlop után. A hozzáadás után a már meglévő oszlopok is átméreteződnek, automatikusan újrarendeződnek.
* Sor beállításai: [Sor / oszlop beállításai ablak](cmsadmin_pages_content.html#LayoutEditor-InputItemClass)
* Sor törlése: Törli a sor, amennyiben abban egy tartalom sincs. Amennyiben van tartalomblokk a sorban, előbb azokat kell törölni, vagy áthelyezni.

Az oszlopokkal végezhető műveletek:
* Tartalom hozzáadása: Tartalmat fűz hozzá az oszlop utolsó eleme után. A lehetséges opciók:
  * Új tartalom: Teljesen új tartalmat hoz létre a tartalomtípus kiválasztása után.
  * Másolt tartalom: Egy már létező tartalomból készít másolatot, és helyezi el új tartalomként az oldalon.
  * Importálás: Egy ugyanazon, vagy másik rendszerből [exportált](cmsadmin_contenttypes.html#Content-InputExport) JSON fájl alapján hoz létre új tartalmat az oldalon.
  * Tartalom csatolása: Egy más oldalon már létező tartalmat linkel be az oldalra. A tartalom teljesen úgy fog viselkedni, mintha az oldal kizárólagosan saját tartalma lenne, azonban minden a tartalom végzett változtatás az összes olyan oldalon meg fog történni, amelyhez a tartalom csatolva van.
* Oszlop beállításai: [Sor / oszlop beállításai ablak](cmsadmin_pages_content.html#LayoutEditor-InputItemClass)
* Oszlop törlése: Törli az oszlopot, amennyiben abban egy tartalom sincs. Amennyiben van tartalomblokk a oszlopban, előbb azokat kell törölni, vagy áthelyezni.

A tartalmakkal végezhető műveletek:
* Tartalom törlése: Törli a tartalmat.
* Tartalom szerkesztése: A tartalom szerkesztőoldalára ugrik.
* Tartalom kikapcsolása: Inaktiválja az adott tartalmat a frontenden, vagyis egyáltalán nem jeleníti meg az adott oldalon. Ez sablon-tartalmakra is alkalmazható.

## Sor / oszlop beállításai ablak

### Class {#LayoutEditor-InputItemClass}

A sor / oszlop egyedi CSS class-a


## Tartalom hozzáadása ablak {#ContentTypeSelector}

Az ablakban lehet választani a rendszerben használható tartalomtípusok közül. 

Új tartalomlétrehozása esetén a tartalomtípus gombjára kattintva a tartalom létrejön, és hozzácsatolódik az adott oldalhoz.

Tartalom másolása esetén csak a már létrehozott tartalomtípusok listázódnak, melyekből másolat készíthető. A tartalomtípus gombjára kattintva egy űrlap jelenik meg, melyben kiválasztható a másolandó tartalom, valamin egyéb másolási beállítások.

Tartalom csatolása esetén csak a már létrehozott tartalomtípusok listázódnak, melyek csatolhatók az oldalhoz. A tartalomtípus gombjára kattintva egy űrlap jelenik meg, melyben kiválasztható a csatolandó tartalom.

Tartalom importálása esetén a tartalomtípusok nem jelennek meg, csak egy fájlfeltöltő ablak, melyben az exportált JSON fájl kiválasztható.

### Másolandó tartalom {#ContentTypeSelector-Copy}

A listából válaszható ki a másolandó tartalom.

### Másolás leszármazott elemekkel együtt {#ContentTypeSelector-CopyWithChildren}

A jelölődoboz bepipálásval a tartalomhoz tartozó al-elemek is másolásra kerülnek. A következő tartalomtípusokhoz elérhető:

* Form tartalomtípus esetében a mezők is másolásra kerülnek
* Bejegyzések tartalomtípus esetében az egyes bejegyzések is másolásra kerülnek
* Árazás tartalomtípus esetében a csomagok is másolásra kerülnek
* Accordion tartalomtípus esetében az elem is másolásra kerülnek
* Fülek tartalomtípus esetében az egyes fülek is másolásra kerülnek
* Számlálók tartalomtípus esetében az egyes számlálók is másolásra kerülnek
* Ajánló tartalomtípus esetében az egyes ajánlók is másolásra kerülnek
* Térkép tartalomtípus esetében a jelölők is másolásra kerülnek

### Csatolandó tartalom {#ContentTypeSelector-Link}

A listából válaszható ki a csatolandó tartalom.

### Fájl kiválasztása {#ContentTypeSelector-Import}

Az exportál JSON fájl ebben a mezőben választható ki.