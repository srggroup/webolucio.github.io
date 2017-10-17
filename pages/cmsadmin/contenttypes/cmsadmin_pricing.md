---
title: Árazás
keywords: pricing, posts
last_updated: July 3, 2016
sidebar: cmsadmin_sidebar
permalink: cmsadmin_pricing.html
folder: cmsadmin
---

Az árazás tartalomtípussal egy táblázat hozható létre, ami különböző csomagok árainak és tulajdonságainak összehasonlítására szolgál.

## Általános beállítások {#Pricing-TabGeneral}

### Leírás {#Pricing-InputDesc}

Szövegszerkesztővel formázható általános leírás, amely a táblázat előtt jelenik meg.

## Tulajdonságok {#Pricing-TabSpecialProperties}

### Tulajdonságok {#Pricing-InputSpecialProperties}

A listában definiálhatók azok a tulajdonságok, melyek az egyes csomagokhoz beállíthatók lesznek, és amik a táblázat sorait fogják alkotni.

A tulajdonságokat és azok értékeit drag & drop-pal tetszőleges sorrendbe állíthatjuk, melyek ezt követően így fognak megjelenni a bejegyzések szerkesztőoldalán és a frontenden is.

#### Név {#PricingProperty-InputName}

A tulajdonság neve

#### Slug {#PricingProperty-InputSlug}

A „tulajdonság” egyedi azonosítója

#### Típus {#PricingProperty-InputType}

Itt választhatjuk ki, milyen jellegű értéket (szabadon megadható szöveg, igaz/hamis érték, kiválasztás előre megadott értékekből) vehetnek fel a csomagok ehhez a tulajdonsághoz. A rendszer a tulajdonságtípusnak megfelelő szerkesztőfelületet biztosít az adminon. Az elérhető tulajdonságtípusok:
* Szöveg: egyszerű szöveg, melyet minden csomaghoz egyedileg adhatunk meg
* Logikai: Igaz/Hamis érték
* Kiválasztás: Egy adott értékkészletből kiválasztható egyetlen elem
* Többszörös kiválasztás: Egy adott értékkészletből kiválasztható több elem

#### Megjelenítés {#PricingProperty-InputDisplay}

Eldönthetjük, egy adott tulajdonságot csak adminisztrációs célokra (pl. csoportosítás) szeretnénk használni, vagy olyan értéket tartalmaz, amelyet a frontenden is megjelenítenénk. Ha a jelölőnégyzet be van pipálva, a tulajdonság neve és értéke a frontenden is megjelenik

#### „Igaz” szöveg {#PricingProperty-InputTrueText}

Ez a szöveg fog (megjelenített adat esetén) megjelenni a kiíratásokban, ha az adatmező értéke „Igaz”.

Ez a mező abban az esetben jelenik meg, ha a „Típus” mező értéke „Logikai”.

#### „Hamis” szöveg {#PricingProperty-InputFalseText}

Ez a szöveg fog (megjelenített adat esetén) megjelenni a kiíratásokban, ha az adatmező értéke „Hamis”.

Ez a mező abban az esetben jelenik meg, ha a „Típus” mező értéke „Logikai”.

#### Opciók {#PricingProperty-InputOptions}

Itt állítható be az értékkészlet, amelyből a csomag szerkesztőoldalán választani lehet. Az opciók listájában dupla kattintással szerkeszthetőek az egyes elemek.

Ez a mező abban az esetben jelenik meg, ha a „Típus” mező értéke „Kiválasztás” vagy „Többszörös kiválasztás”. 

## SEO {#Pricing-InputNameTagList}

### Név tag-je a listaoldalon  {#Pricing-InputNameTagList}

A csomag nevének HTML tag-je.





