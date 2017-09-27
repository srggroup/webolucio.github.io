---
title: Beállítások > Rendszer
keywords: beállítások, rendszer
last_updated: July 3, 2016
sidebar: cmsadmin_sidebar
permalink: cmsadmin_settings_system.html
folder: cmsadmin
hash: Setting-TabSystem

---

Ezeket a beállításokat elsősorban az oldal fejlesztői használják.

## CSS {#Setting-InputCSS}

Az oldalon használandó, betöltendő CSS fájlok adhatók meg itt, enterrel elválasztva. A fájlok elérési útvonalát a mappastruktúra „public” mappájához képest kell megadni.  
A mezőbe jobb gombbal kattintva tallózhatjuk a „public/css” mappában található CSS fájlokat, a szükséges fájlok így egy-egy kattintással is hozzáadhatók.

## JS {#Setting-InputJS}

Az oldalon használandó, betöltendő Javascript fájlok adhatók meg itt, enterrel elválasztva. A fájlok elérési útvonalát a mappastruktúra „public” mappájához képest kell megadni.  
A mezőbe jobb gombbal kattintva tallózhatjuk a „public/js” mappában található JS fájlokat, a szükséges fájlok így egy-egy kattintással is hozzáadhatók.

## Fejlesztés alatt mód {#Setting-InputDevMode}

Ezt a módot bekapcsolva az oldalhoz tartozó [robots.txt](http://www.robotstxt.org/robotstxt.html) automatikusan legenerálódik, elrejtve ezzel az oldalt a keresőmotorok elől. 

## Robots.txt tartalma {#Setting-InputRobots}

Megadható a [robots.txt](http://www.robotstxt.org/robotstxt.html) egyedi tartalma. Ez az érték nem érvényes, ha be van kapcsolva a [Fejlesztés alatt mód](cmsadmin_settings_system.html#Setting-InputDevMode), mivel az akkor generált robots.txt felülbírálja az itt megadott beállításokat.

## Admin eszköztár engedélyezése {#Setting-InputFrontendToolbar}

Az admin eszköztár a frontenden jelenik meg akkor, ha ez a kapcsoló engedélyezve van, és az admin felhasználó be van jelentkezve ugyanabban a böngészőben.  
A frontenden megjelenő eszköztár lehetővé teszi a tartalmak közvetlen szerkesztését, valamint egyéb funkciókkal (pl. LiveReload - a frontend automatikus frissítése a szerkesztés közben) teszik gyorsabbá az oldalkezelő munkáját.

## Google Analytics ID {#Setting-InputAnalyticsID}

A Google Analytics ID-t megadva („UA-000000-01” formátumban) az adminisztrációs felület vezérlőpultján is megjeleníthetők a legfontosabb analitikai adatok. Ahhoz, hogy az adatokat a CMS lekérhesse a Google Analytics rendszeréből, az itt megadott ID-hoz tartozó fiókhoz hozzá kell adni az „srgcms2@srgcms2.iam.gserviceaccount.com” e-mail címmel rendelkező felhasználót is, „Olvasás és elemzés” módban.

## Script a <head>-ben {#Setting-InputScriptHead}

A <head> tag-en belül megjelenő egyedi script és meta tag-eket adhatjuk meg itt. Az érték szűrés nélkül kerül a <head> és </head> tag-ek közé.

## Script a <body> elején {#Setting-InputScriptBodyStart}

Az itt megadott érték közvetlenül a nyitó <body> tag után kerül elhelyezésre, szűrés nélkül.

## Script a <body> végén {#Setting-InputScriptBodyEnd}

Az itt megadott érték közvetlenül a záró </body> tag előtt kerül elhelyezésre, szűrés nélkül.

## E-mail fejléc {#Setting-InputEmailHeader}

A rendszer által kiküldött értesítések, form kitöltés után elküldött levelek fejléce (tartalom előtti része) adható meg itt.

## E-mail lábléc {#Setting-InputEmailFooter}

A rendszer által kiküldött értesítések, form kitöltés után elküldött levelek lábléce (tartalom utáni része) adható meg itt.

## Szerzők {#Setting-Setting-InputAuthorGrid}

A listában megadhatók a rendszer szinten használható szerzők, amelyek például blog post-okhoz [rendelhetőek hozzá](cmsadmin_posts_entryedit.html#PostEntry-InputAuthor). Az itt megadott adatok automatikusan megjelennek az adott post kifejtőoldalán. Az egyes szerzők adatai a szerkesztés gombbal módosíthatóak. A szerző lehetséges adatai:

### Név {#Author-InputName}

A szerző megjelenítendő neve

### Link {#Author-InputLink}

Link a szerző weboldalához/profiljához

### Google+ ID {#Author-InputGoogleplusid}

Az itt megadott Google+ ID bekerül az adott oldal author meta tag-jébe

### Leírás {#Author-InputDesc}

A szerző szabad szöveges leírása

### Kép {#Author-InputImg}

A szerzőhöz tartozó profilkép