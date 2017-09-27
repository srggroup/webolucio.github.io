---
title: Felhasználó szerkesztése
keywords: felhasználó, szerkesztés
last_updated: July 3, 2016
sidebar: cmsadmin_sidebar
permalink: cmsadmin_users_edit.html
folder: cmsadmin
---

## Név {#User-InputName}

A felhasználó teljes/megjelenített neve. Ez a név jelenleg csak az adminisztrációs felületen jelenik meg (amennyiben a felhasználó jogosult belépni az adminisztrációs felületre).

## Felhasználónév {#User-InputUsername}

A bejelentkezéshez és a megjelenítésre is használt felhasználónév. Ez a név jelenik meg a frontenden a felhasználó tevékenységeinél, pl. az általa írt kommentek (és ha van adminisztrátori jogosultsága, a bejegyzések) szerzőjeként.

## E-mail cím {#User-InputEmail}

A felhasználó e-mail címe

## Szerep {#User-InputRole}

A felhasználó szerepe. A listában az adminon és a frontenden használt szerepek is listázva vannak. A felhasználó a kiválasztott szerepnek megfelelő jogosultságokkal fog rendelkezni.

## Nyelv {#User-InputLang}

A felhasználó nyelve. Frontenden történt regisztráció esetén az a nyelv lesz, melyen a felhasználó a regisztrációkor az oldalt böngészte.

## Aktív {#User-InputActive}

A felhasználói profil aktív/inaktív állapota. Az inaktív felhasználók sem az adminba, sem a frontenden esetlegesen megtalálható bejelentkezési felületen keresztül nem tudnak bejelentkezni.

## API engedélyezve {#User-InputApiEnabled}

Amennyiben az API engedélyezve van, a felhasználó adataival az API-n keresztül is be lehet jelentkezni.

## Admin avatar {#User-InputAdminAvatar}

Adminisztrátor jogosultságú felhasználók számára feltölthető avatar, mely az oldalsáv tetején jelenik meg.

## További adatok {#User-FieldsetExtraData}

A felhasználó további egyedi adatai. Az itt megjelenő mezők a felhasználó szerepétől függően vannak definiálva (pl. „Regisztrált” felhasználó esetén a frontendes profil oldalon megadott adatok).

## Jelszó megváltoztatása {#User-FieldsetChangePassword}

Ez a két mező csak akkor kitöltendő, ha új jelszót szeretnénk a felhasználónak beállítani.

### Új jelszó {#User-InputNewPassword}

Az új jelszó

### Új jelszó megerősítése {#User-InputNewPasswordConfirm}

Az új jelszó megerősítése. Értékének egyeznie kell az Új jelszó mezőével

