---
title: Beállítások > Általános
keywords: beállítások, általános
last_updated: July 3, 2016
sidebar: cmsadmin_sidebar
permalink: cmsadmin_settings_general.html
folder: cmsadmin
hash: Setting-TabGeneral

---

Ezen a fülön az oldal legfontosabb, általános beállításai módosíthatók

## Fejléc {#Setting-FieldsetHeader}

### Név {#Setting-InputName}

Az oldal neve. Ez a név jelenik meg az adminisztrációs felület oldalsávjának tetején. Ez a név lesz a [„Title tag”](cmsadmin_settings_general.html#Setting-InputTitleTag) mező alapértelmezett értéke is, amennyiben az nincs megadva.

### Title tag végződés {#Setting-InputTitleTag}

Az [oldalak title tag](cmsadmin_pages_seo.html#Page-InputTitleTag)-je az adott oldal nevéből és az itt megadott szövegből áll össze, amennyiben ezt nem írja felül az adott oldal [egyedi title tag](cmsadmin_pages_seo.html#Page-InputTitleTag) mezője. Megjelenhet egyebek mellett a böngésző címsorában, a keresőoldalak találati listájában, az oldal megosztása (pl. közösségi hálózatokon) esetén pedig a megosztások címeként is.

### Meta description {#Setting-InputMetaDescription}

Az oldal alapértelmezett [meta leírása](https://moz.com/learn/seo/meta-description).  
Ez lesz minden olyan oldal meta leírása, ahol nincs beállítva egyedi érték. Megjelenhet egyebek mellett a keresőoldalak találati listájában, az oldal megosztása (pl. közösségi hálózatokon) esetén pedig a megosztások tartalmaként is.

### Meta keywords {#Setting-InputMetaKeywords}

Az oldal alapértelmezett meta kulcsszavai.  
Ezek lesznek minden olyan oldal meta kulcsszavai, ahol nincs beállítva egyedi érték.

## Admin e-mail {#Setting-InputAdminEmail}

Az oldal fő adminisztrátorának e-mail címe.
Erre az e-mail címre fognak érkezni a CMS rendszerüzenetei, valamint azon form-oknak az értesítései, amelyeknél be van kapcsolva az [adminisztrátori e-mail](cmsadmin_form.html#Form-FieldsetAdminEmail), de nincs megadva egy címzett e-mail cím sem.

## Dátum formátum {#Setting-InputDateFormat}

Alapértelmezett dátum formátum a [frontenden](cmsadmin_general.html#frontend). A formátumot [PHP date](http://php.net/manual/en/function.date.php)-kompatibilis formátumban kell megadni.

## Rendszer oldalak {#Setting-FieldsetSystemPages}

### Keresési találat oldal {#Setting-InputSearchPage}

Az az oldal, ahol a [keresési találat](cmsadmin_searchresults.html) tartalomtípus található. Minden [keresés-form](cmsadmin_searchform.html) eredményei itt lesznek megjelenítve.

### Bejelentkezés oldal {#Setting-InputLoginPage}

Az alapértelmezett bejelentkezési oldal, amelyen a bejelentkezés űrlap található. Erre abban az esetben van szükség, ha egyedi jogosultsághoz kötött tevékenységet vagy tartalmat szeretnénk beállítani a frontenden a felhasználók számára. Az itt kiválasztott oldalra lesz átirányítva a nem bejelentkezett felhasználó, mikor egy számára nem hozzáférhető oldalt (pl. felhasználói profiloldal) próbál elérni.

## Átmeneti oldal bekapcsolása {#Setting-InputTempDisabled}

Az átmeneti oldal bekapcsolásával a frontend minden tartalma átmenetileg elérhetetlenné válik, bármely oldalra érkezve egy „hibaoldal” fogadja a látogatót. Az oldal az alapértelmezett sablonban fog megjelenni, szövege a [Hibaoldalak](cmsadmin_settings_errorpages.html#Setting-InputErrorPages503) fülön állítható be.

## Szöveges tartalmak exportálása Word-be {#Setting-InputStaticExport}

A gombra kattintva a rendszer összegyűjti az összes, szöveget és képeket tartalmazó oldalt, és tartalmat, és tartalomjegyzékkel ellátott Word dokumentumba menti. Az exportált tartalmak nyelve a nyelvválasztó fülek kiválasztásával módosítható.
