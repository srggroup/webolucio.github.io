---
title: Tartalomtípusok általános beállítása
keywords: tartalomtípusok
last_updated: July 3, 2016
sidebar: cmsadmin_sidebar
permalink: cmsadmin_contenttypes.html
folder: cmsadmin
---

Az itt szereplő beállítások mindegyik tartalomtípus szerkesztőfelületén megtalálhatóak.

## Tartalom {#Content-TabGeneral}

### Név {#Content-InputName}

A blokk megjelenített neve.

Ez jelenik meg a frontenden, amennyiben a „[Mutassa a nevet](cmsadmin_contenttypes.html#Content-InputBlockShowName)” jelölőnégyzet be van kapcsolva, valamint ez alapján azonosíthatjuk az adminon, ha nincs megadva egyedi „[Név az adminon](cmsadmin_contenttypes.html#Content-InputBlockAdminName)”

## SEO {#Content-TabSEO}

### Fejléc név tag-je {#Content-InputBlockNameTag}

A blokk frontenden [megjelenített nevének](cmsadmin_contenttypes.html#Content-InputName) HTML tag-je. Alapértelmezetten „h2”.

## Rendszer {#Content-TabSystem}

### Extra class {#Content-InputBlockExtraClass}

Egyedi CSS class-ok a blokk kiíratásában, szóközzel elválasztva.

### Egyedi horgony név {#Content-InputBlockCustomSlug}

A blokkra mutató horgony (anchor) egyedi neve. Amennyiben ez a mező nincs kitöltve, a horgony neve a blokk nevéből automatikusan generált slug lesz.

### Név az adminon {#Content-InputBlockAdminName}

A blokknak az adminisztrátorok számára beszédesebb, könnyebben megkülönböztethető nevet is adhatunk. Ez az egyedi név csak az admin felületen lesz látható, a frontenden továbbra is a beállított [megjelenített név](cmsadmin_contenttypes.html#Content-InputName) fog szerepelni.

### Admin infó szöveg {#Content-InputBlockAdminInfo}

Egy csak az adminisztrációs felületen megjelenő szöveg, mely a tartalomkezelőknek hasznos információkat, jegyzeteket tartalmazhat. Amennyiben ki van töltve, a tartalom szerkesztőoldalán egy felső sávban is megjelenik.

### Mutassa a nevet {#Content-InputBlockShowName}

A jelölőnégyzet bepipálása esetén a blokk neve meg fog jelenni a frontendes kiíratásban. A blokk neve alapértelmezetten rejtve marad.

### Exportálás {#Content-InputExport}

A gombra kattintva a tartalom fontosabb beállításai egy JSON fájlba exportálhatók. Ez a fájl csak azokat a beállításokat tartalmazza, melyek nem függnek az aktuális rendszer egyéb tartalmaitól (pl. Mellékletek, belső linkek, stb.). Így az exportált fájlban meglévő beállítások egy másik rendszerbe is importálhatók.

## Jogosultságok {#Content-TabPermission}
A tartalomblokk frontend és admin jogosultságai állíthatók be ezen a fülön. Szabályozhatjuk az adminisztrátorok szerkesztési és törlési jogát, a frontenden pedig elrejthetjük a blokkot bizonyos felhasználók elől.




