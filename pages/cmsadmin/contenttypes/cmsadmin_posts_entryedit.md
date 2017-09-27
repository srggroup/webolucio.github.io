---
title: Bejegyzés szerkesztése
keywords: posts, bejegyzés, szerkesztés
last_updated: July 3, 2016
sidebar: cmsadmin_sidebar
permalink: cmsadmin_posts_entryedit.html
folder: cmsadmin
---

## Beállítások {#PostEntry-TabSettings}

### Név {#PostEntry-InputName}

A bejegyzés címe. A lista- és kifejtőoldalon, valamint a title tag-ben is megjelenik

## Slug {#PostEntry-InputSlug}

A bejegyzés slug-ja, mely a bejegyzés URL-jében fog megjelenni.

## Dátum {#PostEntry-InputDate}

A bejegyzés dátuma, mely alapértelmezetten a bejegyzés létrehozásának  dátuma.

## Vég dátum {#PostEntry-InputDateTo}

Opcionálisan megadható egy „vég dátum”, mely abban az esetben hasznos, ha a bejegyzés eseményként viselkedik, és van hozzá kapcsolva [naptár-típusú tartalom](cmsadmin_calendar.html). Ebben az esetben a naptár-bejegyzés vég dátumát adhatjuk itt meg.

## Speciális beállítások {#PostEntry-FieldsetSpecial}

### Egyedi értékelés {#PostEntry-InputManualRating}

Amennyiben a mező ki van töltve, a frontenden a bejegyzés értékeléseként nem a valós, felhasználói értékelések alapján kalkulált átlag jelenik meg, hanem az itt megadott érték.

### Manuális URL {#PostEntry-InputManualUrl}

Amennyiben meg lett adva „Manuális URL”, akkor a bejegyzéshez a rendszer nem hoz létre kifejtőoldalt, és a listaoldalon a bejegyzés linkjére kattintva az itt kiválasztott oldalra vagy megadott URL-re irányít a rendszer.

### Canonical URL {#PostEntry-InputCanonicalUrl}

Itt adható meg „canonical URL” a bejegyzéshez.

### Meta description {#PostEntry-InputMetaDescription}

Egyedi „meta description”. Ha üresen hagyjuk, a tartalomblokkban beállított meta description-t fogja beszúrni a rendszer.

### Meta keywords {#PostEntry-InputMetaKeywords}

Egyedi „meta keywords”. Ha üresen hagyjuk, a tartalomblokkban beállított meta keywords-öt fogja beszúrni a rendszer.

### Szerző {#PostEntry-InputAuthor}

Lehetőségünk van a megadott [szerző-listából](cmsadmin_settings_system.html#Setting-Setting-InputAuthorGrid) kiválasztani a bejegyzés szerzőjét, ami így a frontenden is megjelenik.

## Tartalom {#PostEntry-TabContent}

A bejegyzések tartalma szekciókra (szakaszokra) van bontva. A szekciók mind szövegszerkesztővel formázható tartalmak, amelyeknek nevet címet is adhatunk.

Egyedi szekciók hozzáadására is lehetőség van, melyek alapértelmezetten csak a kifejtőoldalon jelennek meg, nevük és slug-juk szabadon szerkeszthető.

Minden bejegyzéshez két védett, törölhetetlen szekció tartozik: a “Bevezető” és a “Tartalom”. Előbbi alapértelmezetten a listaoldalon, utóbbi pedig a kifejtőoldalon jelenik meg. Amennyiben a tartalomblokkhoz (behúzott bejegyzések esetén a szülő tartalomblokkhoz) nincs engedélyezve kifejtőoldal, a „Tartalom” szekció, és az esetlegesen létrehozott további szekciók is a listaoldalon jelennek meg.

A szekciók kiíratási feltételeit és sorrendjét a template-ekben lehet szabályozni.

### Szekciók {#PostEntry-InputSections}

A szekciók tartalmát azok sorára kattintva szerkeszthetjük, az aktuálisan kiválasztott szekció tartalma a lista alatt található szövegszerkesztőben jelenik meg.

A szekció sorára duplán kattintva szerkeszthető annak neve és slug-ja.

## Képek {#PostEntry-InputImages}

A bejegyzésekhez a szövegtörzsbe illesztett képeken kívül egyedileg felhasználható, dedikált képeket, videókat is csatolhatunk, melyeket előre meghatározott célokra (pl. galéria) használhatunk. A listaoldalon megjelenített képek a tartalom „Index-oldali képek” beállításával szabályozhatóak.

## Tulajdonságok {#PostEntry-InputProperties}

A „Tulajdonságok” fül alatt a tartalomblokkhoz beállított [tulajdonságok](cmsadmin_posts.html#Post-TabSpecialProperties) értékeit állíthatjuk be. A mező típusa a tulajdonság típusától függ.

### Címkék {#PostEntry-FieldsetTags}

A bejegyzésekhez már létező, vagy újonnan létrehozott címkéket rendelhetünk a megadott [címke kategóriákon](cmsadmin_settings_tags.html) belül. Ezeket a címkéket megjelenítésre, valamint a háttérben, [bejegyzések összekapcsolására](cmsadmin_posts.html#Post-FieldsetRelated) is használhatjuk.

## Mellékletek {#PostEntry-InputAttachments}

A bejegyzésekhez letölthető mellékleteket is csatolhatunk a fájlkezelőből, a kiválasztott fájlok a bejegyzés kifejtőoldalán egy letöltés-blokkban jelennek meg.


