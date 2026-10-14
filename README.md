# WPU Visa mer

Gratis plugin från [wordpressutveckling.se](https://wordpressutveckling.se/). Koden förklaras rad för rad i guiden: **[https://wordpressutveckling.se/gutenberg-block-interactivity-api/](https://wordpressutveckling.se/gutenberg-block-interactivity-api/)**

Byggt av [Kristoffer Pihlfelt](https://pihlfelt.se) på [Pihlfelt & Vänner](https://pihlfelt.se). Licens: GPL-2.0-or-later.

- **Bidragsgivare:** Pihlfelt & Vänner
- **Kräver WordPress:** 6.5
- **Kräver PHP:** 8.2
- **Version:** 1.0.0
- **Licens:** GPL-2.0-or-later

## Vad det gör

Blocket Visa mer: en rubrik som alltid syns, en knapp och en text som är hopfälld tills besökaren klickar. Byggt med Interactivity API: starttillståndet renderas på servern (hidden, aria-expanded och knapptext), och en liten modul tar över i webbläsaren. Flera block på samma sida fälls ut oberoende av varandra. Inget byggsteg, filerna laddas som de är. Blocket har ingen egen CSS och ärver temats stilar; klasserna är wpu-visa-mer__knapp, ar-oppen och wpu-visa-mer__text.

## Installation

1. Gå till Tillägg > Lägg till nytt > Ladda upp tillägg och välj zip-filen. Aktivera.
2. Lägg till blocket Visa mer i ett inlägg eller en sida, fyll i rubriken och texten.
3. Ändrar du view.js, räkna upp versionen i view.asset.php så att besökarnas webbläsare hämtar den nya filen.

## Källa

Koden förklaras rad för rad i guiden "Bygg ett Gutenberg-block med Interactivity API":
https://wordpressutveckling.se/gutenberg-block-interactivity-api/

Den senaste versionen finns alltid på samma adress:
https://wordpressutveckling.se/ladda-ner/wpu-visa-mer/

## Ändringslogg

### 1.0.0
* Första versionen, samma kod som i guiden.
