---
title: Űrlap
keywords: form, űrlap
last_updated: July 3, 2016
sidebar: cmsadmin_sidebar
permalink: cmsadmin_form.html
folder: cmsadmin
---

Részletesen konfigurálható űrlap korlátlan számú mezővel, beállítható e-mail értesítésekkel, konfigurálható köszönőoldallal.

## Általános {#Form-TabGeneral}

### Csoportok {#Form-InputGroups}

Az űrlap mezői csoportokba (fieldset-ekbe) rendezhetőek. 

A csoportos elrendezés minden esetben megjelenik, de alapértelmezetten csak egy csoport szerepel a listában. A csoport elnevezése megegyezik az űrlap nevével.

Az egyes mezőket azok szerkesztésénél sorolhatjuk az itt megadott csoportok valamelyikébe. A csoportok sorrendje állítható, és a mezők beállított sorrendje csak a csoportokon belül lesz érvényes.

Ha egy mezőhöz nincs kiválasztva csoport, a mező a többi csoportot követően, az alapértelmezett csoportban fog megjelenni.

#### Név

A csoport neve, amely meg fog jelenni a frontendes kiíratásban is.

#### Slug

A csoport slug-ja.

## E-mail beállítások {#Form-TabEmail}

Itt módosíthatjuk az űrlap kitöltése után automatikusan küldött értesítő e-mailek beállításait. Automatikus e-mailt az adminisztrátor(ok)nak, valamint az űrlapot elküldő felhasználónak is küldhetünk (a felhasználónak abban az esetben, amennyiben az űrlapon megadta az e-mail címét). Az e-mail szövegébe az űrlap kitöltött mezőinek értékét is beszúrhatjuk (Pl.: a név mezőben  megadott nevet), az azokat szimbolizáló változók használatával. 

### Adminisztrátornak {#Form-InputEmailAdmin}

A jelölőnégyzet kiválasztásával a rendszer minden elküldött űrlapról értesítő e-mailt küld az előre megadott e-mail cím(ek)re.

### Felhasználónak {#Form-InputEmailUser}

A jelölőnégyzet kiválasztásával a rendszer automatikus válaszüzenetet küld a felhasználó által megadott e-mail címre.

### Adminisztrátori e-mail {#Form-FieldsetAdminEmail}

Az adminisztrátor(ok) számára küldött e-mail beállításai.

#### E-mail címek {#Form-InputEmailAdminAddresses}

A listába több e-mail cím is felvehető, melyek mindegyikére kiküldi a rendszer az értesítő e-mailt. Amennyiben nincs megadva egy e-mail cím sem, az általános beállításokban szereplő [alapértelmezett e-mail címre](cmsadmin_settings_general.html#Setting-InputAdminEmail) lesz kiküldve az e-mail.

#### Tárgy {#Form-InputEmailAdminSubject}

Az adminisztrátor(ok) számára küldött e-mail tárgya.

#### Tartalom {#Form-InputEmailAdminTemplate}

Az adminisztrátor(ok) számára küldött e-mail szövege. 

A szövegbe beilleszthetőek az elküldött űrlap adatainak változói is.

Az itt megadott szöveg az e-mail kiküldésekor az általános beállításokban megadott [fejléccel](cmsadmin_settings_system.html#Setting-InputEmailHeader) és [lábléccel](cmsadmin_settings_system.html#Setting-InputEmailFooter) lesz kiegészítve.

### Felhasználói e-mail {#Form-FieldsetUserEmail}

A felhasználó számára küldött e-mail beállításai.

#### E-mail címet tartalmazó mező {#Form-InputEmailUserAddresses}

Az űrlapnak azon mezője, amelyben a felhasználó az e-mail címét megadhatja. Az e-mail csak abban az esetben lesz kiküldve, ha itt kiválasztottunk egy mezőt, és a felhasználó az elküldött űrlapban kitöltötte azt a mezőt.

#### Tárgy {#Form-InputEmailUserSubject}

A felhasználó számára küldött e-mail tárgya.

#### Tartalom {#Form-InputEmailUserTemplate}

A felhasználó számára küldött e-mail szövege. 

A szövegbe beilleszthetőek az elküldött űrlap adatainak változói is.

Az itt megadott szöveg az e-mail kiküldésekor az általános beállításokban megadott [fejléccel](cmsadmin_settings_system.html#Setting-InputEmailHeader) és [lábléccel](cmsadmin_settings_system.html#Setting-InputEmailFooter) lesz kiegészítve.

## Köszönőoldal {#Form-TabThanks}

Az űrlap sikeres elküldése után megjelenített köszönőoldal beállításai.

### Köszönőoldal {#Form-InputThanksPage}

Erre az oldalra irányítjuk a felhasználót az űrlap sikeres elküldését követően.

Kiválaszthatunk egy a CMS-ben már létező teljes értékű oldalt, vagy az alábbi mezők segítségével készíthetünk egy „virtuális, beépített köszönőoldalt”, amely a form helyén fog megjelenni.

### Köszönőoldal slug-ja {#Form-InputThanksUrl}

A beépített köszönőoldal slug-ja, mely az űrlapot tartalmazó oldal URL-je után lesz fűzve. Az alapértelmezetten megadott „ok” esetén a köszönőoldal URL-je „/form-oldal-slug-ja/ok” lesz.

Ez a mező csak akkor jelenik meg, ha a „[Köszönőoldal](cmsadmin_form.html#Form-InputThanksPage)” típusa „Beépített”.

### Tartalom {#Form-InputThanksContent}
A beépített köszönőoldal szövegszerkesztővel formázható szöveges tartalma.

Ez a mező csak akkor jelenik meg, ha a „[Köszönőoldal](cmsadmin_form.html#Form-InputThanksPage)” típusa „Beépített”.

### Script a köszönőoldalon a <head> tag-ben {#Form-InputThanksScriptHead}

A <head> tag-en belül megjelenő egyedi script-eket és meta tag-eket adhatjuk meg itt. Az érték szűrés nélkül kerül a <head> és </head> tag-ek közé a beépített köszönőoldalon.

Ez a mező csak akkor jelenik meg, ha a „[Köszönőoldal](cmsadmin_form.html#Form-InputThanksPage)” típusa „Beépített”.

### Script a köszönőoldalon a <body> tag elején {#Form-InputThanksScriptBodyStart}

Az itt megadott érték szűrés nélkül, közvetlenül a nyitó <body> tag után kerül elhelyezésre a beépített köszönőoldalon.

Ez a mező csak akkor jelenik meg, ha a „[Köszönőoldal](cmsadmin_form.html#Form-InputThanksPage)” típusa „Beépített”.

### Script a köszönőoldalon a <body> tag végén {#Form-InputThanksScriptBodyEnd}

Az itt megadott érték szűrés nélkül, közvetlenül a záró <body> tag előtt kerül elhelyezésre a beépített köszönőoldalon.

Ez a mező csak akkor jelenik meg, ha a „[Köszönőoldal](cmsadmin_form.html#Form-InputThanksPage)” típusa „Beépített”.

### Üzenet sikeres elküldés esetén {#Form-InputThanksMessage}

A frontenden megjelenő szöveges rendszerüzenet, ami abban az esetben jelenik meg, ha a form elküldése sikeres volt.

### Üzenet sikertelen elküldés esetén {#Form-InputErrorMessage}

A frontenden megjelenő szöveges rendszerüzenet, ami abban az esetben jelenik meg, ha a form elküldése technikai okokból sikertelen volt.






