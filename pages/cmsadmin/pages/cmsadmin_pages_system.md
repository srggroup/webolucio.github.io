---
title: Oldal szerkesztése > Rendszer
keywords: oldalkezelő, rendszer
last_updated: July 3, 2016
sidebar: cmsadmin_sidebar
permalink: cmsadmin_pages_system.html
folder: cmsadmin
hash: Page-TabSystem

---

Az oldal mélyebb, rendszer beállításai

## Extra class {#Page-InputClass}

Egyedi CSS class, ami az oldal „#container” eleméhez adódik hozzá.

## Script a <head>-ben {#Page-InputScriptHead}

A <head> tag-en belül megjelenő egyedi script és meta tag-eket adhatjuk meg itt. Az érték szűrés nélkül kerül a <head> és </head> tag-ek közé.

## Script a <body> elején {#Page-InputScriptBodyStart}

Az itt megadott érték közvetlenül a nyitó <body> tag után kerül elhelyezésre, szűrés nélkül.

## Script a <body> végén {#Page-InputScriptBodyEnd}

Az itt megadott érték közvetlenül a záró </body> tag előtt kerül elhelyezésre, szűrés nélkül.

## Sablon {#Page-InputLayout}

Az oldal sablonja/váza ami az oldalon szereplő fix elemeket tartalmazza. Ilyen fix elemek általában a fejléc tartalmai (logó, menüsor, keresés) vagy a lábléc. Új oldal létrehozásakor az alapértelmezettként beállított sablon lesz alkalmazva.

## Főoldal {#Page-InputMain}

Ha be van jelölve, ez az oldal lesz a főoldal, tehát ez fog megjelenni a „http://example.com/” URL-en.

## Csak a menüben (nincs tartalom) {#Page-InputMenuOnly}

Ha ezt bejelöljük, akkor a létrehozott oldal neve csak a menüben jelenik meg, maga az oldal nem lesz elérhető. Az erre az oldalra mutató linkek „href” attribútuma „javascript:void(0)” lesz (így nem lesz érzékeny a kattintásokra), az oldal URL-jét megnyitva pedig [404-es hibaoldalt](cmsadmin_settings_errorpages.html#Setting-InputErrorPages404) kapunk.
Amennyiben az „﻿URL-re ugrás” mezőben kiválasztottunk egy oldalt vagy egyedi URL-t, a navigációs menükben lévő linkek arra az oldalra fognak mutatni, az oldal URL-jét megnyitva pedig a kiválasztott oldalra fog átirányítani a rendszer.

## URL-re ugrás {#Page-InputJumpToUrl}

Oldal kiválasztása vagy egyedi URL megadása esetén az oldalra mutató navigációs menük linkjei a kiválasztott oldalra fognak mutatni, az oldal URL-jét megnyitva pedig a kiválasztott oldalra fog átirányítani a rendszer.
