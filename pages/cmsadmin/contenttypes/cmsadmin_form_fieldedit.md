---
title: Űrlap mező szerkesztése
keywords: űrlap, mező, szerkeszté
last_updated: July 3, 2016
sidebar: cmsadmin_sidebar
permalink: cmsadmin_form_fieldedit.html
folder: cmsadmin
---

## Név {#FormField-InputName}

A mező neve. Megjelenik a frontenden, és ez alapján azonosíthatjuk a mezőt az adminon is.

## Típus {#FormField-InputType}

A mező típusa. A rendszerben elérhető mezőtípusok:

* Text (Szöveg): Altípusai
	* Text (Szöveg): Egysoros, rövidebb, szabad szövegek bevitelére alkalmas. 
	* Szám: Számok bevitelére alkalmas. 
	* Date (Dátum): Dátum bevitelére alkalmas. 
	* Datetime (Dátum és idő): Dátum és idő bevitelére alkalmas. 
	* Time (Idő): Csak idő bevitelére alkalmas. 
	* Range (Csúszka): Megadott értékek közötti csúszkás kiválasztására alkalmas. A két szélső érték egy validátor hozzáadásával állítható be. 
	* Search (Keresés): Keresőszavak bevitelére optimalizált mező. 
	* Telefonszám: Telefonszámok bevitelére optimalizált mező. 
	* URL: Linkek bevitelére optimalizált mező. 
* Textarea (Szövegdoboz): Többsoros, hosszabb, formázatlan szövegek bevitelére alkalmas mező. 
* Button (Gomb): Kattintható „gomb” elem. Altípusai:
	* Submit (Küldés): Ezzel a gombbal küldhető el az űrlap. 
	* Button (Gomb): Egyedileg definiált művelet elvégzése lehetséges ilyen gombbal.
	* Reset (Visszaállítás): Az alap értékekre állítja vissza az űrlap mezőit.
* Multiselect (Többszörös választólista): A [megadott opciók](cmsadmin_form_fieldedit.html#FormField-InputSpecialsOptions) közül több érték is kiválasztható egy görgethető listából.
* Select (Lenyíló lista): A [megadott opciók](cmsadmin_form_fieldedit.html#FormField-InputSpecialsOptions) közül egy elem választható ki a legördülő listából.
* Radio (Választókapcsoló): A [megadott opciók](cmsadmin_form_fieldedit.html#FormField-InputSpecialsOptions) közül egy választható ki, választókapcsolók segítségével.
* Checkbox (Jelölőnégyzet): Igaz/Hamis érték választható ki a jelölőnégyzet kiválasztásával.
* Multicheckbox (Több jelölőnégyzet): A [megadott opciók](cmsadmin_form_fieldedit.html#FormField-InputSpecialsOptions) közül több is kiválasztható, jelölőnégyzetek segítségével.
* Jelszó: Jelszó mező rejtett karakterekkel.
* Captcha: „Nem vagyok robot” ellenőrzésre használható mező, amely az űrlap elküldése előtt segít megkülönböztetni és kiszűrni a spambot-okat a valódi felhasználóktól. A mező altípusai:
	* Kép: A felhasználónak egy képen látható karaktereket kell beírnia a megjelenített mezőbe.
	* ReCaptcha: [Google reCAPTCHA](https://www.google.com/recaptcha) - egyedi feladvány megoldásával  ellenőrizhető a felhasználó.
	* Invisible ReCaptcha: [Google Invisible reCAPTCHA](https://www.google.com/recaptcha) - a legtöbb esetben egyedi feladvány megoldása nélkül ellenőrizhető a felhasználó.
* Fájl: Egy vagy több fájl feltöltésére alkalmas mező. A feltöltött fájlok helye a „[Feltöltés mappája](cmsadmin_form_fieldedit.html#FormField-InputUploadFolder)” mezőben kiválasztott mappa lesz a fájlkezelőben.
* HTML: Nem valós űrlapmező, hanem formázott szöveg megjelenítésére szolgál az űrlapon belül. A formázott szöveget a „[Leírás](cmsadmin_form_fieldedit.html#FormField-InputDesc)” mezőben lehet megadni.
* Országválasztó: A rendszerben előre meghatározott országneveket lehet egy „Lenyíló listá”-ból kiválasztani.

## Altípus {#FormField-InputSubType}

Itt választható ki a mező altípusa, amennyiben van ilyen.

Ez a mező csak „Text” és „Button” típusok esetén jelenik meg. 

## Slug {#FormField-InputSlug}

A mező slug-ja, valamint „name” attribútuma. Ez lesz az e-mail értesítőkben és a köszönőoldalon használható változó neve is.

## Extra class {#FormField-InputClass}

A mezőhöz beállítható egyedi CSS class.

## Placeholder {#FormField-InputPlaceholder}

A mező „placeholder” attribútuma. Az itt megadott szöveg a szövegmezőben jelenik meg egyfajta segítség gyanánt, hogy a felhasználó tudja milyen típusú adatot kell a mezőbe beadni. A mező kitöltésekor eltűnik.

## Alapértelmezett {#FormField-InputDefault}

A mező alapértelmezett értéke. A [placeholder](cmsadmin_form_fieldedit.html#FormField-InputPlaceholder)-rel ellentétben nem csak akkor jelenik meg, amikor a mező üres, hanem az elküldött űrlapban is szerepelni fog ez az érték, ha a felhasználó nem változtatja meg.

## Leírás {#FormField-InputDesc}

A mező szövegszerkesztővel formázható leírása, amely a frontenden is megjelenik.

## Csoport {#FormField-InputGroup}

Ebből a listából választhatjuk ki, hogy az űrlap melyik [csoportjához](cmsadmin_form.html#Form-InputGroups) szeretnénk sorolni a mezőt. Ha nincs kiválasztva érték, a mező az űrlap alapértelmezett csoportjába fog kerülni.

## Validátorok {#FormField-InputValidators}

Ez a lista a mezőhöz csatolt ellenőrzési szabályokat (validátor) tartalmazza. A validátorok elküldéskor a megadott sorrendben ellenőrzik a felhasználó által megadott értéket, és amennyiben az adat hibás, az űrlapot a rendszer nem küldi el, hanem hibát jelez a felhasználónak. 

A validátor a listában lévő szerkesztés gombra kattintva szerkeszthető.

### Típus {#FormField-InputValidationType}

A validátorok típusai:  
Bizonyos validátorok nem érhetők el minden mező esetén, ezek csak akkor jelennek meg, ha az adott [mezőtípus](cmsadmin_form_fieldedit.html#FormField-InputType)-hoz hozzárendelhetőek.
* Nem lehet üres: A mezőnek valamilyen értéket tartalmaznia kell (vagy pl. a jelölőnégyzetet be kell pipálni).
* Minden más validátor csak kitöltött mezőket ellenőriz, vagyis ha a kitöltetlen mező hibásnak tekintendő, ezt a validátort hozzá kell adni.
* Csak betűk és számok: A mező csak betűket és számokat tartalmazhat.
* Csak betűk: A mező csak betűket tartalmazhat.
* Két érték között: A mező értéke két érték között kell hogy legyen. A határértékek az [opciókban](cmsadmin_form_fieldedit.html#FormField-InputValidationOption) adhatók meg. Amennyiben az értéke egyenlő valamelyik határértékkel, a mező értéke helyes lesz.
* Dátum: A mező értéke csak abban az esetben lesz helyes, ha olyan formátumban van, ami megfelel a [standard](http://php.net/manual/en/datetime.createfromformat.php)-eknek
* Csak számok: A mező értéke csak számokból állhat
* E-mail cím: A mező értéke valós e-mail cím kell, hogy legyen (a megadott érték formátuma meg kell, hogy feleljen az e-mailcímek szabványos formátumának)
* Nagyobb, mint: A mező értéke nagyobb kell, hogy legyen mint az [opciókban](cmsadmin_form_fieldedit.html#FormField-InputValidationOption) megadott érték. Ha a mező értéke egyenlő a megadott opcióval, az érték hibás lesz.
* Kisebb, mint: A mező értéke kisebb kell, hogy legyen mint az [opciókban](cmsadmin_form_fieldedit.html#FormField-InputValidationOption) megadott érték. Ha a mező értéke egyenlő a megadott opcióval, az érték hibás lesz.
* Reguláris kifejezés: Egy szabványos [reguláris kifejezéssel](https://hu.wikipedia.org/wiki/Reguláris_kifejezés) lesz ellenőrizve a mező értéke.
* Szöveg hossza: Az érték csak akkor lesz helyes, ha a szöveg hossza az [opciókban](cmsadmin_form_fieldedit.html#FormField-InputValidationOption) megadott értékek között van.
* Egyedi függvény: Az érték egy, a „Datamap” fájlban megadott függvénnyel lesz ellenőrizve.
* Kötelező kiválasztani: A mező megadott értékei közül kötelező választani egyet.
* Többszörös kiválasztás: A mező megadott értékei közül a megadott határértékek közötti számú opciót kell kiválasztani.
* Captcha: Captcha-típusú mező esetén kötelező egy ilyen validátort hozzáadni.
* Kiterjesztés: Megadhatjuk, milyen kiterjesztésű fájlokat tölthet fel a fájl mezőbe a felhasználó.
* Képméret: Kép feltöltése esetén megadható a kép maximális és minimális szélessége és magassága.
* Méret: A feltöltött fájlok mérete (alsó és felső határértéke) összesen, szabványos formátumban (B, kB, MB) megadva.
* Darabszám: A feltölthető fájlok minimális és maximális száma.

### Hibaüzenet {#FormField-InputValidationMessage}

Ez az üzenet fog megjelenni a mező mellett, amennyiben a megadott érték nem felel meg a kiválasztott validátornak.

### Opciók {#FormField-InputValidationOption}

Az opciók között adhatjuk meg az egyes validátorok használatához szükséges további paramétereket (pl. legkisebb/legnagyobb érték). Minden opció csak olyan mezőtípusok és validátorok kiválasztása esetén jelenik meg, amelyekhez az alkalmazható.

#### Minimális értéke {#FormField-InputBetweenMin}

A mező minimális értéke.

#### Maximális értéke {#FormField-InputBetweenMax}

A mező maximális értéke.

#### Reguláris kifejezés {#FormField-InputValidationRegex}

A reguláris kifejezés, amelyre illeszteni szeretnénk az elküldött értéket.

#### Függvény {#FormField-InputValidationFunction}

A használni kívánt PHP függvény neve.

#### Kiterjesztés {#FormField-InputValidationExtension}

A feltöltendő fájlok engedélyezett kiterjesztéseinek listája, vesszővel elválasztva.

#### Minimális szélesség {#FormField-InputValidationImageSizeMinWidth}

Kép esetén a kép minimális szélessége, képpontban.

#### Maximális szélesség {#FormField-InputValidationImageSizeMaxWidth}

Kép esetén a kép maximális szélessége, képpontban.

#### Minimális magasság {#FormField-InputValidationImageSizeMinHeight}

Kép esetén a kép minimális magassága, képpontban.

#### Maximális magasság {#FormField-InputValidationImageSizeMaxHeight}

Kép esetén a kép maximális magassága, képpontban.

## Opciók (Multiselect, Select, Radio, Multicheckbox) {#FormField-InputSpecialsOptions}

Az opciók listája, amelyek közül a felhasználó választhat. Az „alapértelmezett” oszlopban kiválasztható, hogy mely érték legyen az űrlap betöltésekor előre kiválasztva.

Ez a mező csak „Multiselect”, „Select”, „Radio” és „Multicheckbox” típusok esetén jelenik meg.

## Captcha típusa {#FormField-InputSpecialsCaptcha}

Captcha típus esetén itt választható ki, hogy milyen típusú captcha ellenőrizze a felhasználót.

## Feltöltés mappája {#FormField-InputUploadFolder}

„Fájl” típusú mező esetén itt választható ki a fájlkezelőből az a mappa, ahova a rendszer menteni fogja a feltöltött fájlokat.






