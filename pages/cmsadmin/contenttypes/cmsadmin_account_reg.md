---
title: Regisztráció
keywords: regisztráció
last_updated: July 3, 2016
sidebar: cmsadmin_sidebar
permalink: cmsadmin_reg.html
folder: cmsadmin
---

A tartalomtípus egy regisztrációs űrlapot hoz létre a kiválasztott szerepnek megfelelő mezőkkel. Az űrlapon az alapértelmezett adatok (e-mail cím, felhasználónév, jelszó) mellett a szerep egyedi adatai is megjelennek, melyek közül a szükségtelennek tartott elemek a form-kezelőben inaktiválhatóak. A tartalomtípushoz egy automatikusan generált form tartozik, melynek elemei és beállításai a [Form-kezelőben](cmsadmin_form.html) változtathatóak meg.

## Tartalom

### Szerep {#Account-InputRegRoleId}

Ki kell választani, hogy a regisztrációs form milyen szerephez tartozik (milyen szerepű felhasználót hoz létre), mivel a rendszer ennek megfelelően generálja le az 
űrlap mezőit. 

### Aktiváció szükséges {#Account-InputRegActivation}

Ha ez be van pipálva, az új regisztráció csak azt követően válik aktívvá, ha a felhasználó a rendszer által kiküldött aktiváló e-mailben (mely a form-kezelőben állítható be) található linkre kattint. Ha nincs bepipálva, a felhasználó automatikusan aktív státuszt kap.

### Form {#Account-InputRegForm}

Link a regisztráció-form szerkesztőjébe