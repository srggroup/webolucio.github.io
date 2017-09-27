---
title: Hírlevélcsoport szerkesztése > Form integráció
keywords: hírlevél, form
last_updated: July 3, 2016
sidebar: cmsadmin_sidebar
permalink: cmsadmin_newsletters_form.html
folder: cmsadmin
hash: Newsletter-TabFormIntegration

---

Ezen a fülön állítható be, hogy a frontend mely űrlapjaiból, milyen feltételekkel, és milyen adatokat vegyünk fel a Form elküldésekor a hírlevélcsoportra feliratkozottak listájára.

## Formok {#Newsletter-InputForms}

Egy listához több formból is gyűjthetünk adatokat, formonként egyedi beállításokkal. A listában találhatók a már bekonfigurált form integrációk.

### Form {#Newsletter-InputFormForm}

A legördülő listából kiválaszthatjuk az űrlapot, amelyből elküldése esetén adatokat szeretnénk felvenni a feliratkozottak listájára

### „Feltétel mező” {#Newsletter-InputFormConditionField}

A lista a kiválasztott [„Form”](cmsadmin_newsletters_form.html#Newsletter-InputFormForm) mezőit tartalmazza. Mező kiválasztása esetén csak abban az esetben vesszük fel a feliratkozót a feliratkozottak listájára, amennyiben a kiválasztott mező nem üres. (Példa: ha a hírlevélre feliratkozási szándékot jelölőnégyzettel is meg kell erősíteni, akkor ebből a listából választjuk ki, hogy melyik az a jelölőnégyzet.

### „E-mail cím” mező {#Newsletter-InputFormEmailField}

A lista a kiválasztott [„Form”](cmsadmin_newsletters_form.html#Newsletter-InputFormForm) mezőit tartalmazza. Az itt kiválasztott mezőnek az értéke lesz az új feliratkozó e-mail címe a feliratkozottak listájában.

### További mezők {#Newsletter-InputFormFields}
Az importáláshoz megadhatóak további, egyedi értékmezők is. Az ezeket tartalmazó értékeket szintén felvesszük a hírlevél-rendszerbe, és a feliratkozókhoz hozzá lesznek rendelve.

#### Név

Az egyedi értékmező neve (amennyiben már más formból is importálunk ilyen értéket, a korábban már létrehozott egyedi értékmező neve)

#### Slug

Az egyedi értékmező slug-ja (amennyiben már más formból is importálunk ilyen értéket, a korábban már létrehozott egyedi értékmező slug-ja)

#### Mező

A kiválasztott [„Form”](cmsadmin_newsletters_form.html#Newsletter-InputFormForm) mezője, amelyből az adatokat importálni szeretnénk feliratkozáskor.

