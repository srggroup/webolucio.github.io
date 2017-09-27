---
title: Fájl szerkesztése
keywords: fájlkezelő, szerkesztése
last_updated: July 3, 2016
sidebar: cmsadmin_sidebar
permalink: cmsadmin_filemanager_edit.html
folder: cmsadmin
---

Az ablakban szerkeszthetőek a kiválasztott fájl vagy mappa adatai.

## Név {#Attachment-InputDescName}

A fájl vagy mappa neve. Ez a név jelenik meg a kiíratásokban, valamint letöltéskor is ezt a nevet kapja meg a fájl.

## Class {#Attachment-InputClass}

Egyedi CSS class adható a fájlnak vagy mappának.

## Leírás {#Attachment-InputDescription}

Formázható leírás, mely a fájl kiíratásában fog megjelenni (pl. galéria (slideshow) esetén a slide szövege).

## Videó {#Attachment-FieldsetVideo}

Ez a csoport csak abban az esetben jelenik meg, ha a szerkesztett fájl egy videó.

### Indexkép típusa {#Attachment-InputVideoIndexType}

Az indexkép a videó betekintő képe, amely a frontenden a videó lejátszásának megkezdése előtt, illetve az adminban a fájl ikonjaként látható. A videó indexképe többféle módon legenerálható.

* Egyedi kép: Egyedileg feltöltött kép, amely a „[Kép](cmsadmin_filemanager_edit.html#Attachment-InputVideoIndexImage)” mezőben adható meg.
* Képkocka kiválasztása: A rendszer kivágja a „[Timecode](cmsadmin_filemanager_edit.html#Attachment-InputVideIndexTimecode)” mezőben beállított képkockát a videóból, és ezt fogja indexképként használni
* Automatikus: A rendszer automatikusan választja ki az indexképet.

### Kép {#Attachment-InputVideoIndexImage}

Csak akkor jelenik meg, ha az „[Indexkép típusa](cmsadmin_filemanager_edit.html#Attachment-InputVideoIndexType)”-ként „Egyedi kép”-et választottunk ki. Itt tölthető fel az egyedi indexkép.

### Timecode {#Attachment-InputVideIndexTimecode}

Csak akkor jelenik meg, ha az „[Indexkép típusa](cmsadmin_filemanager_edit.html#Attachment-InputVideoIndexType)”-ként „Képkocka kiválasztása”-t választottunk ki. A kiválasztott képkocka timecode-ját hh:mm:ss.ff ([óra]:[perc]:[másodperc].[képkocka sorszáma]) formátumban kell megadni. A rendszer a timecode módosításakor legenerálja az indexkép előnézetét.


