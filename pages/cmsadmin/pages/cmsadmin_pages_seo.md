---
title: Oldal szerkesztése > SEO
keywords: oldalkezelő, seo
last_updated: July 3, 2016
sidebar: cmsadmin_sidebar
permalink: cmsadmin_pages_seo.html
folder: cmsadmin
hash: Page-TabSEO

---

Ezen a fülön az oldalhoz tartozó keresőoptimalizálási beállításokat lehet módosítani.

## Title tag {#Page-InputTitleTag}

Az oldal title tag-je. Abban ez esetben szükséges kitölteni, ha az oldal nevétől eltérő title tag-et szeretnének beállítani.

## Title tag felülírása {#Page-InputTitleTagOverwrite}

Ha a jelölőnégyzet be van pipálva, a rendszer nem fogja hozzáfűzni az [alapértelmezett title tag végződést](cmsadmin_settings_general.html#Setting-InputTitleTag) az oldal címéhez, hanem kizárólag az oldal címét (nevét vagy title tag-jét) fogja használni.

## NoIndex {#Page-InputNoindex}

Ha be van pipálva, az oldalhoz beállításra kerül a [noindex meta tag](http://www.robotstxt.org/meta.html). Ezáltal a keresőrobotok nem fogják indexálni az adott oldalt.

## Név a menüben {#Page-InputMenuName}

A menükben alapértelmezés szerint az [oldal neve](cmsadmin_pages_general.html#Page-InputName) jelenik meg. Kitöltés esetén, ennek a mezőnek az értéke fog megjelenni a menüben a breadcrumb-ban, és az oldaltérképben.

## Meta description {#Page-InputMetaDescription}

Az oldal egyedi meta description beállítása. Amennyiben üres, a rendszer az [alapértelmezett meta description](cmsadmin_settings_general.html#Setting-InputMetaDescription)-t fogja használni.

## Meta keywords {#Page-InputMetaKeywords}

Az oldal egyedi meta keywords beállítása. Amennyiben üres, a rendszer az [alapértelmezett meta keywords](cmsadmin_settings_general.html#Setting-InputMetaKeywords) beállítást fogja használni.

## Canonical URL {#Page-InputCanonicalUrl}

Az oldalhoz megadható egy [canonical URL](https://moz.com/learn/seo/canonicalization).

## Sitemap XML Priority {#Page-InputSmxPriority}

Az oldal egyedi [sitemap-xml priority](https://www.sitemaps.org/protocol.html) értéke. Alapértelmezésben 0.5.

## Sitemap XML Change frequency {#Page-InputSmxChangefreq}

Az oldal egyedi [sitemap-xml change_frequency](https://www.sitemaps.org/protocol.html) értéke. Alapértelmezésben „daily”.

## Kategória {#Page-InputPageCategory}

Az oldal [schema.org](https://schema.org/category) kategóriája. Alapértelmezésben „Other”.

## Alapértelmezett kép {#Page-InputDefaultImage}

Az oldalhoz tartozó indexkép, amely az [OpenGraph protokoll](http://ogp.me/) „image” típusába lesz beállítva, ezáltal a közösségi megosztások ezt a képet fogják használni az oldal/poszt megjelenítéséhez. [Bejegyzések](cmsadmin_posts.html) esetén az oldal alapértelmezett indexképe felülíródhat a bejegyzés alapértelmezett képével.