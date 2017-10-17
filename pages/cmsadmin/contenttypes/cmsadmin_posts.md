---
title: Bejegyzések
keywords: posts, bejegyzések
last_updated: July 3, 2016
sidebar: cmsadmin_sidebar
permalink: cmsadmin_posts.html
folder: cmsadmin
---

A bejegyzések tartalomtípus szabályosan ismételhető, hasonló felépítésű tartalmak (pl. blogbejegyzések, termékek) egy csoportját jelenti. A tartalomtípus alatt bejegyzések hozhatóak létre, melyek a tartalomtípus beállításaitól függően egyedi tulajdonságokkal, részletes beállítási lehetőségekkel rendelkezhetnek.

Egy tartalomtípus (blokk) vagy a saját bejegyzéseit, vagy egy másik „Bejegyzések” blokkból [behúzott bejegyzéseket](cmsadmin_posts.html#Post-FieldsetConnectPost) tartalmazhatja.

A tartalomtípus egy listaoldalból, és az egyes bejegyzések kifejtőoldalaiból állhat.

## Általános beállítások {#Post-TabGeneral}

### Rendezés {#Post-OrderBy}

A bejegyzések listázási sorrendje. Az elérhető módok:
* Beállított sorrend szerint (alapértelmezett): A bejegyzések sorrendje ebben az esetben drag & drop állítható
* Név szerint növekvő sorrendben: A rendezés alapja a bejegyzés neve
* Név szerint csökkenő sorrendben: A rendezés alapja a bejegyzés neve
* Dátum szerint növekvő sorrendben: A rendezés alapja a bejegyzés beállított dátuma
* Dátum szerint csökkenő sorrendben: A rendezés alapja a bejegyzés beállított dátuma
* Értékelés szerint növekvő sorrendben: A rendezés alapja a bejegyzés értékelése
* Értékelés szerint csökkenő sorrendben: A rendezés alapja a bejegyzés értékelése
* Véletlenszerű sorrendben: A bejegyzések véletlenszerű sorrendben lesznek listázva

### Egy oldalon megjelenített bejegyzések száma {#Post-InputPaging}

Itt szabályozhatjuk, hány elem jelenjen meg egyszerre a blokk listaoldalán. Amennyiben a blokk az itt beállított értéknél több bejegyzést tartalmaz, egy lapozó fog megjelenni a listaoldalon, amellyel a további (vagy előző) oldalakat érheti el a látogató. Amennyiben üres, vagy „0”, minden bejegyzés egy oldalon kerül megjelenítésre.

### AJAX lapozás (Lazy loading) {#Post-InputPagingAjax}

Amennyiben be van állítva, a hagyományos lapozó helyett egy „Továbbiak betöltése” gomb fog megjelenni, és a következő oldal bejegyzései az aktuális lista alá töltődnek be.

### Tovább link szövege {#Post-InputMoreLink}

Amennyiben a bejegyzésnek van kifejtőoldala, a listaoldalon megjelenik a bejegyzés alatt egy link, ami a kifejtőoldalra vezet. Az érték ennek a linknek a szövege lesz.

### Leírás {#Post-InputDesc}

Szövegszerkesztővel formázható általános leírás, amely a listaoldalon jelenik meg.

## Tulajdonságok {#Post-TabSpecialProperties}

### Tulajdonságok {#Post-InputSpecialProperties}

Lehetőségünk van arra, hogy a blokk bejegyzései számára tetszőleges tulajdonság-típusokat hozzunk létre, melyek értékét ezt követően minden bejegyzéshez egyedileg határozhatjuk meg. Az itt létrehozott tulajdonságokkal jól strukturált módon határozhatjuk meg egy-egy bejegyzés jellemzőit, kiírathatjuk a frontenden, és értékük alapján szűrhetővé tehetjük a bejegyzéseket vagy épp hasonló (kapcsolódó) bejegyzéseket ajánlhatunk a felhasználók számára.

A tulajdonságokat és azok értékeit drag & drop-pal tetszőleges sorrendbe állíthatjuk, melyek ezt követően így fognak megjelenni a bejegyzések szerkesztőoldalán és a frontenden is.

#### Név {#PostProperty-InputName}

A tulajdonság neve

#### Slug {#PostProperty-InputSlug}

A „tulajdonság” egyedi azonosítója

#### Típus {#PostProperty-InputType}

Itt választhatjuk ki, milyen jellegű értéket (szabadon megadható szöveg, igaz/hamis érték, kiválasztás előre megadott értékekből) vehetnek fel a bejegyzések ehhez a tulajdonsághoz. A rendszer a tulajdonságtípusnak megfelelő szerkesztőfelületet biztosít az adminon, valamit a(z esetleges) frontendes szűrő mező típusát is ehhez igazítja. Az elérhető tulajdonságtípusok:
* Szöveg: egyszerű szöveg, melyet minden bejegyzéshez egyedileg adhatunk meg
* Logikai: Igaz/Hamis érték
* Kiválasztás: Egy adott értékkészletből kiválasztható egyetlen elem
* Többszörös kiválasztás: Egy adott értékkészletből kiválasztható több elem

#### Megjelenítés {#PostProperty-InputDisplay}

Eldönthetjük, egy adott tulajdonságot csak adminisztrációs célokra (pl. csoportosítás) szeretnénk használni, vagy olyan értéket tartalmaz, amelyet a frontenden is megjelenítenénk. Ha a jelölőnégyzet be van pipálva, a tulajdonság neve és értéke a frontenden is megjelenik

#### „Igaz” szöveg {#PostProperty-InputTrueText}

Ez a szöveg fog (megjelenített adat esetén) megjelenni a kiíratásokban, ha az adatmező értéke „Igaz”.

Ez a mező abban az esetben jelenik meg, ha a „Típus” mező értéke „Logikai”.

#### „Hamis” szöveg {#PostProperty-InputFalseText}

Ez a szöveg fog (megjelenített adat esetén) megjelenni a kiíratásokban, ha az adatmező értéke „Hamis”.

Ez a mező abban az esetben jelenik meg, ha a „Típus” mező értéke „Logikai”.

#### Opciók {#PostProperty-InputOptions}

Itt állítható be az értékkészlet, amelyből a bejegyzés szerkesztőoldalán választani lehet. Az opciók listájában dupla kattintással szerkeszthetőek az egyes elemek.

Ez a mező abban az esetben jelenik meg, ha a „Típus” mező értéke „Kiválasztás” vagy „Többszörös kiválasztás”. 

### Csoportosítás {#Post-InputGroupBy}

Kiválaszthatunk egyet a tartalomtípusban megadott tulajdonságok közül, amely alapján a listaoldalon csoportokba rendezhetőek a bejegyzések.

### URL prefix tulajdonság {#Post-InputPrefixBy}

Ha ki van választva egy tulajdonság, akkor annak a slug-jával lesz kiegészíve a bejegyzések URL-je. Példa: /[bejegyzés URL]/[tulajdonság slug-ja]/[bejegyzés slug-ja]

## Speciális {#Post-TabSpecial}

### Megjelenített bejegyzések száma {#Post-InputLimit}

Itt szabályozhatjuk, összesen legfeljebb hány bejegyzést jelenítsünk meg a listázásban, a lapozótól függetlenül. Amennyiben üres, vagy „0”, minden bejegyzés megjelenítésre kerül.

### Kifejtőoldal {#Post-InputIntro}

Ha be van pipálva, a bejegyzésekhez kifejtőoldal is kapcsolódni fog, amely a bejegyzés részletes tartalmát mutatja.

### AJAX URL-ek használata {#Post-InputAJAXUrl}

Ha be van pipálva, a rendszer AJAX URL-eket fog használni a kifejtőoldalakhoz, amelyek Javascript-tel kezelhetők le. A kifejtőoldalak továbbra is indexelhetők maradnak.

### Index oldali képek {#Post-InputIndexImg}

Ezzel a beállítással lehet szabályozni, hogy a bejegyzésekhez csatolt képek közül melyek jelenjenek meg a listaoldalon. Az elérhető opciók:
* Mindegyik: Minden csatolt kép megjelenik a listaoldalon.
* Csak az első: Csak a sorrendben első kép jelenik meg a listaoldalon.
* Default-ként megjelölt: Csak az(ok) a kép(ek) jelennek meg a listaoldalon, amely „default”-ként van megjelölve.
* Adott class-szal rendelkező: Csak az(ok) a kép(ek) jelennek meg, amelyhez egy megadott class hozzá van rendelve.

#### Index oldalon csak az adott class-szal rendelkező képek megjelenítése {#Post-InputIndexClassImg}

Az a class, ami azonosítja a listaoldalon megjelenítendő képeket.

Ez a mező csak akkor jelenik meg, ha az „Index oldali képek” mező értéke „Adott class-szal rendelkező”

### RSS engedélyezése {#Post-InputRss}

A jelölőnégyzettel engedélyezhető az RSS feed a tartalomhoz. A feed automatikusan generálódik le a bejegyzések beállításai alapján. Az oldal forráskódjában, az adott oldalon az RSS elérhetőségét meta tag jelzi, valamint a „/_rss/[tartalomID]/[nyelv]” URL-en is elérhető lesz.

### Hozzászólások {#Post-FieldsetCommenting}

Lehetőség van a bejegyzésekhez „hozzászólások” modult engedélyezni, ezzel az egyes bejegyzések kifejtőoldalán megjelenik egy hozzászólások (kommentek)  beküldésére és listázására alkalmas blokk.

#### Engedélyezés {#Comment-InputEnable}

A jelölőnégyzettel engedélyezhetjük a „hozzászólás” funkciót a bejegyzésekhez.

#### Moderálás {#Comment-InputModerate}

Ha a jelölőnégyzet be van pipálva, az újonnan beküldött hozzászólások csak abban az esetben jelennek meg a frontenden, ha azokat az adminisztrációs felület „[Hozzászólások](cmsadmin_comments.html)” menüpontjában jóváhagytuk .

#### Cím {#Comment-InputTitle}

A hozzászólások blokk frontenden megjelenített címe.

#### Leírás {#Comment-InputDesc}

A hozzászólások blokk szövegszerkesztővel formázható leírása, amely a frontenden jelenik meg.

#### Hozzászólások száma {#Comment-InputDisplayLimit}

Az egyszerre megjelenített hozzászólások (és válaszok) száma. Az ezen felüli hozzászólások csak az „Összes mutatása” gombra kattintva jelennek meg. Ha az érték üres, vagy „0”, az összes hozzászólást megjelenítjük.

#### Szerepek {#Comment-InputRoles}

Csak az itt megadott szerepekkel rendelkező felhasználók tudnak hozzászólásokat írni.

### Kapcsolódó bejegyzések {#Post-FieldsetRelated}

A kapcsolódó bejegyzésekkel kapcsolatokat lehet létrehozni „Bejegyzések”-típusú tartalmak között, így például az aktuális bejegyzéshez hasonló további bejegyzéseket javasolni a felhasználónak. Az összekapcsolt tartalmakból származó kapcsolódó bejegyzések az egyes bejegyzések kifejtőoldalán jelennek meg, csoportokba szervezve. Az egyes kapcsolatok a sorokban lévő szerkesztés gombra kattintva szerkeszthetőek.

#### Név {#Post-InputRelatedName}

A kapcsolat neve. Ez a név fog megjelenni a frontenden is, a kapcsolódó bejegyzések csoport neveként.

#### Slug {#Post-InputRelatedSlug

A kapcsolat slug-ja.

#### Kapcsolódó bejegyzések száma {#Post-InputRelatedCount}

Ha meg van adva, és nem „0”, akkor a kapcsolódó bejegyzések blokk az itt megadott  számú kapcsolódó bejegyzést fog megjeleníteni.

#### Egyedi kapcsolódó bejegyzések feltöltése random elemekkel {#Post-InputRelatedFillCustom}

Amennyiben egy adott bejegyzéshez manuálisan vannak kiválasztva kapcsolódó bejegyzések, de kevesebb, mint a „Kapcsolódó bejegyzések számánál” megadott érték, a jelölőnégyzet bepipálása esetén a rendszer véletlenszerű bejegyzésekkel fogja fel tölteni a blokkot a szükséges mennyiségben.

#### Véletlenszerű {#Post-InputRelatedRandom}

Amennyiben ez a jelölőnégyzet be van pipálva, a rendszer a megadott feltételek alapján véletlenszerű sorrendben választ ki kapcsolódó bejegyzéseket.

#### Kapcsolódó bejegyzések {#Post-InputRelatedPosts}

Ebben a mezőben választható ki az a „Bejegyzés”-típusú tartalom, ahonnan a kapcsolódó bejegyzéseket szeretnénk behúzni.

#### Sorrendezés {#Post-InputRelatedOrderBy}

A legördülő listából kiválasztva állítható a kapcsolódó bejegyzések sorrendje.

#### Címke kategóriák {#Post-InputRelatedTagCategories}

Címke kategóriák kiválasztása esetén csak azokat a bejegyzéseket fogja a rendszer kapcsolódnak választani, melyeknek van közös címkéje az éppen megjelenített bejegyzéssel.

#### Leírás {#Post-InputRelatedDesc}

A „Kapcsolódó bejegyzések” blokk szövegszerkesztővel formázható leírása, amely a frontenden jelenik meg.

### Bejegyzések átvétele másik dinamikus oldalról {#Post-FieldsetConnectPost}

Lehetőség van arra is, hogy egy „Bejegyzések” tartalomblokk ne saját bejegyzéseket tartalmazzon, hanem egy másik „Bejegyzések” blokk elemeit használja fel, azokat tetszőleges módon és szűrőkkel listázva.

#### Dinamikus tartalom {#Post-InputConnectPostId}

Az a tartalomblokk, amelyből a rendszer a bejegyzéseket, valamint azok tulajdonságait átveszi.

#### Csak kiválasztott bejegyzések {#Post-InputConnectSelectedPosts}

Ha csak bizonyos bejegyzéseket szeretnénk átvenni, itt választhatjuk ki azokat.

#### Csak megadott címkékkel rendelkező bejegyzések átvétele {#Post-InputConnectTags}

Ha azt szeretnénk, hogy csak megadott címkékkel rendelkező bejegyzéseket vegyen át a rendszer a másik tartalomból, itt választhatjuk ki a címkéket.

### Szűrők {#Post-FieldsetPostFilter}

Lehetőségünk van szűrő formot létrehozni a frontenden, mely a tartalomblokk listaoldalán jelenik meg. A szűrő segítségével a felhasználó a bejegyzések meghatározott tulajdonságai alapján szűkíthetik a listázást, kereshetnek a bejegyzések tartalmában, van változtathatják a bejegyzések megjelenítési sorrendjét.

#### Szűrő bekapcsolása {#Post-FilterEnable}

Ezzel a jelölőnégyzettel engedélyezhetjük a szűrő form megjelenítését.

#### Szűrők {#Post-FilterFilters}

Itt szerkeszthetjük a szűrő form mezőit. Minden mező egy-egy szűrési feltételt jelent, melyek értékét a felhasználó szabadon kombinálhatja a frontenden.Az egyes szűrő mezők a sorokban található szerkesztés gombbal szerkeszthetőek.

##### Név {#Post-InputFilterName}

A szűrő mező megjelenített neve.

##### Slug {#Post-InputFilterSlug}

A szűrő mező slug-ja, valamint a mező „name” attribútuma.

##### Class {#Post-InputFilterClass}

Egyedi CSS class-ok.

##### Tulajdonságok {#Post-InputFilterProperty}

Itt választhatjuk ki, milyen szűrési tulajdonság legyen hozzárendelve a mezőhöz. A mezőket két fő csoportra oszthatjuk:
* Alapértelmezett mezőtípusok
	* Sorrend: Segítségével a bejegyzések megjelenítési sorrendje állítható.
	* Oldal méret: Segítségével a felhasználó beállíthatja, egyszerre hány bejegyzést jelenítsen meg a rendszer. Amennyiben a blokk több bejegyzést tartalmaz, egy lapozó fog megjelenni a listaoldalon.
	* Szabad szöveges kereső: A bejegyzések tartalmában és címében keresve szűr.
	* Kezdő dátum: Segítségével a felhasználó beállíthat egy dátumot, amelynél csak újabb bejegyzéseket szeretne látni.
	* Vég dátum: Segítségével a felhasználó beállíthat egy dátumot, amelynél csak régebbi bejegyzéseket szeretne látni.
* Tulajdonságok alapján elkészített mezők:  
Ezek segítségével a tartalomtípus beállításainál meghatározott tulajdonságok alapján szűrheti a bejegyzéseket a felhasználó. A tulajdonságok kiválasztható értékeinek listáját a rendszer automatikusan állítja össze, csak azokból az értékekből, amelyek legalább egy bejegyzésben aktívak.

##### Típus {#Post-InputFilterType}

A mező típusa. A lehetséges opciók:
* Multiselect (Többszörös választólista): Több opció kiválasztására alkalmas gördíthető lista.
* Multicheckbox (Több jelölőnégyzet): Több opció kiválasztására alkalmas jelölőnégyzetek.

##### Kapcsolat (logikai művelet) {#Post-InputFilterOperation}

Szabályozhatjuk, hogy több opció kiválasztása esetén milyen logikai kapcsolattal szűrje a bejegyzéseket a rendszer. Az elérhető opciók:
* Vagy (OR): Több opció kiválasztása esetén minden olyan bejegyzés megjelenik, amely a kiválasztott értékek valamelyikével rendelkezik.
* És (AND): Több opció kiválasztása esetén csak azok a bejegyzések jelennek meg, amelyek a kiválasztott értékek mindegyikével rendelkeznek.

##### Alapértelmezett/üres érték {#Post-InputFilterDefault}

A mező alapértelmezett, szűrés nélküli állapot esetén megjelenő értéke.

### Form-kapcsolódás {#Post-FieldsetForms}

Lehetőség van arra, hogy egy űrlap és a „Bejegyzések”-típusú tartalom között kapcsolatot hozzunk létre. Ebben az esetben egy megadott rendszer-függvény segítségével a beállított űrlapból érkező adatok egy bejegyzést fognak létrehozni, inaktív állapotban. A szerkesztés és aktiválás után az újonnan létrehozott tartalom teljesen szokványos bejegyzésként fog viselkedni. Több ilyen kapcsolatot is megadhatunk, több űrlapból, -más függvénnyel. Az egyes kapcsolatok a sorokban található „szerkesztés” gombra kattintva szerkeszthetőek:

#### Kapcsolódó Form

Itt választhatjuk ki azt az űrlapot, melyből az adatok érkeznek.

#### Függvény neve

A transzformációt végző függvény neve. A függvényt a DataMap.php fájlban kell elhelyezni.

## SEO {#Post-TabSEO}

### Név tag-je a listaoldalon  {#Post-InputNameTagList}

A bejegyzés nevének HTML tag-je a tartalom listaoldalán.

### Név tag-je a kifejtőoldalon {#Post-InputNameTag}

A bejegyzés nevének HTML tag-je a tartalom kifejtőoldalán.

### Meta description {#Post-InputMetaDescription}

Általános „meta description”, amely a blokk minden olyan bejegyzésénél alkalmazásra kerül, amely beállításaiban nincs megadva egyedi „meta description”. A leírásban használhatóak az „Elérhető változók” listájában található kulcsszavak, melyeket a kiíratásban a rendszer a megfelelő értékekkel helyettesít be.

### Meta keywords {#Post-InputMetaKeywords}

Általános „meta keywords”, amely a blokk minden olyan bejegyzésénél alkalmazásra kerül, amely beállításaiban nincs megadva egyedi „meta keywords”. A leírásban használhatóak az „Elérhető változók” listájában található kulcsszavak, melyeket a kiíratásban a rendszer a megfelelő értékekkel helyettesít be.





