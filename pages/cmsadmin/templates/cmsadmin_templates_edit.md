---
title: Template szerkesztése
keywords: template, szerkesztés
last_updated: July 3, 2016
sidebar: cmsadmin_sidebar
permalink: cmsadmin_templates_edit.html
folder: cmsadmin
---

## Tartalomtípus {#Template-InputContentType}

A felülírandó template tartalomtípusának kiválasztása. A szabály mező ennek alapján jeleníti meg az elérhető template-szabályokat, valamint az egyes tartalmak is ez alapján lesznek szűrve. 
Ha sem [Tartalom](cmsadmin_templates_edit.html#Template-InputContent), sem [CSS class](cmsadmin_templates_edit.html#Template-InputClass) nincs megadva, akkor az adott tartalomtípus összes tartalmára vonatkozóan alkalmazásra kerül (ez) a szabály.

## Tartalom {#Template-InputContent}

Ha csak egy adott tartalomra akarjuk alkalmazni a template szabályt, akkor azt itt tudjuk beállítani.

## Csak adott class-szal rendelkező tartalmak {#Template-InputClass}

Megadható egyedi CSS class („.“ nélkül, pl.: class), így a template szabály csak olyan tartalmakra lesz érvényes, amelyek ezzel a class-szal rendelkeznek.

## Fájl {#Template-InputFile}

A fájl, amiben a módosított kiíratás található. A fájlnak a „tpl” mappában kell lennie. A legördülő lista a „tpl” mappában megtalálható fájlokat listázza. 

## Szabály {#Template-InputRule}

Egy tartalomtípushoz több fájl is tartozhat, ami a típus különböző részeinek/módjainak kiíratásait tartalmazza (pl. bejegyzések listázása, egy bejegyzés kifejtőoldala). A listából ki kell választani, hogy a template fájl melyik fájlnak a felülírása.

## Nyelv {#Template-InputLang}

Ha csak egy adott nyelvre szeretnénk alkalmazni a szabályt, az itt választható ki. Amennyiben ez üres, a szabály a tartalmak minden nyelvű változatára alkalmazásra kerül.
