---
title: Szerep szerkesztése
keywords: szerep, szerkesztés
last_updated: July 3, 2016
sidebar: cmsadmin_sidebar
permalink: cmsadmin_roles_edit.html
folder: cmsadmin
---

## Név {#Role-InputName}

A szerep neve

## Slug {#Role-InputSlug}

A szerep slug-ja

## Adminisztrátor {#Role-InputAdmin}

A jelölőnégyzettel állítható, hogy a szerephez tartozó felhasználók elérhessék-e az adminisztrációs felületet.

## Adatok {#Role-InputData}

Egyedi adatmezők hozzáadásával a felhasználók az alapértelmezett információkon túl további adatokkal is elláthatók. Ezek az adatok a frontend regisztrációs űrlapon és a felhasználó szerkesztőfelületein is meg fognak jelenni.

### Név {#RoleProperty-InputName}

Az egyedi adatmező neve

### Slug {#RoleProperty-InputSlug}

Az egyedi adatmező slug-ja. Ezzel az azonosítóval érhetjük el (és módosíthatjuk) az adatmező értékét például az [„Adatmódosítás”](cmsadmin_accountdata.html) blokk beépített űrlapjában is, vagy automatikus értesítő e-mailek szövegében, beszúrható változóként.

### Típus {#RoleProperty-InputType}

Az egyedi adatmező típusa. A rendszer ez alapján generálja le az adat kiíratását, valamint szerkesztőfelületét. Az elérhető típusok:
* Szöveg: egyszerű szöveg
* Logikai: Igaz/Hamis érték
* Kiválasztás: Egy adott értékkészletből kiválasztható elem
* Többszörös kiválasztás: Egy adott értékkészletből kiválasztható több elem

### Megjelenítés {#RoleProperty-InputDisplay}

Ha ez a jelölőnégyzet be van pipálva, az adat értéke a frontenden is megjelenik

### „Igaz” szöveg {#RoleProperty-InputTrueText}

Ez a szöveg fog (megjelenített adat esetén) megjelenni a kiíratásokban, ha az adatmező értéke „Igaz”.

Ez a mező abban az esetben jelenik meg, ha a [„Típus”](cmsadmin_roles_edit.html#RoleProperty-InputType) mező értéke „Logikai”.

### „Hamis” szöveg {#RoleProperty-InputFalseText}

Ez a szöveg fog (megjelenített adat esetén) megjelenni a kiíratásokban, ha az adatmező értéke „Hamis”.

Ez a mező abban az esetben jelenik meg, ha a [„Típus”](cmsadmin_roles_edit.html#RoleProperty-InputType) mező értéke „Logikai”.

### Opciók {#RoleProperty-InputOptions}

Itt állítható be az értékkészlet, amelyből a regisztráció ill. szerkesztés során választani lehet. Az opciók listájában dupla kattintással szerkeszthetőek az egyes elemek.

Ez a mező abban az esetben jelenik meg, ha a [„Típus”](cmsadmin_roles_edit.html#RoleProperty-InputType) mező értéke „Kiválasztás” vagy „Többszörös kiválasztás”. 