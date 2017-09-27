---
title: Oldalkezelő
keywords: oldalkezelő
last_updated: July 3, 2016
sidebar: cmsadmin_sidebar
permalink: cmsadmin_pages_list.html
folder: cmsadmin
---

Az oldalkezelőben listába szedve látható a rendszerben létrehozott összes oldal és aloldal. A lista fastruktúrájú, tehát az aloldalak a szülőoldalaikat lenyitva láthatóak.  
Az oldalak a lista drag & drop működésének köszönhetően szabadon mozgathatóak, így változtatható a sorrendjük, valamint a fastruktúrában elfoglalt pozíciójuk is.  

A sorokban az oldalak neve, slug-ja, és aktív állapota, valamint a műveletek gombjai találhatóak.

Az egeret az oldalak fölé mozgatva két gyorslink jelenik meg:
* Szerkesztés: Ugyanazt a funkciót látja el, mint a sorok végén található szerkesztő gomb
* Tartalmak: Az adott oldalon szereplő tartalmakat listázza. Ezzel azonnal a kiválasztott tartalom szerkesztéséhez ugorhatunk.

Az oldalakkal végezhető műveletek:
* Új oldal hozzáadása: Új oldalt ad hozzá a fastruktúra legmagasabb szintjén
* Szerkesztés: Az oldal szerkesztőfelületére ugrik
* Duplikálás: Másolja az adott oldalt, valamint opcionálisan az oldal tartalmait is.
* Aloldal hozzáadása: Hozzáad egy aloldalt az adott (szülő)oldal alá
* Oldal törlése: A sort kijelölve a fejlécben található gombbal törölhető az oldal. Az oldal törlése esetén annak minden tartalma is automatikusan törlődni fog. Szülő oldalt csak abban az esetben enged törölni a rendszer, ha előtte leszármazottait is töröljük (vagy más oldal alá helyezzük át)
* Aktiválás/inaktiválás: A sorokban található jelölőnégyzetre kattintva állítható, hogy az oldal látható és elérhető legyen a frontenden (beleértve az oldaltérképet is), vagy sem.
