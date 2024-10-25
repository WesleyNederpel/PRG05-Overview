# Changelog

## 25/10/'24

Vandaag heb ik de zoekfunctie toegevoegd. Hiermee kunnen gebruikers zoeken naar LEGO sets op naam.

## 23/10/'24

Vandaag heb ik een edit functie toegevoegd. De knop hiervoor staat op de Show view en hier heb ik ook de Delete optie
naartoe verplaatst.

## 21/10/'24

Vandaag heb ik gezorgd dat LEGO sets alleen worden getoond wanneer zij approved zijn door admins. Dit process voor
approval moet nog gemaakt worden maar de functie dat de sets alleen getoond worden wanneer in de database de variabele
op approved staat. Ook heb ik voor de create form required messages gemaakt.

## 18/10/'24

Vandaag heb ik een Uploaded by Me pagina toegevoegd aan de site. Op deze pagina kan een ingelogde gebruiker bekijken
welke LEGO sets zij hebben toegevoegd aan de lijst. Ook heb ik een Register knop toegevoegd aan de navigatiebalk wanneer
iemand nog niet is ingelogd. Ook heb ik op de pagina LEGO sets een mogelijkheid tot filteren op automerk toegevoegd
d.m.v. een form.

## 16/10/'24

Vandaag heb ik ervoor gezorgd dat het uiterlijk van de standaard laravel pagina overal te zien is. Ook heb ik de create
en detailpagia's gemaakt. Er is een functie om een LEGO set te verwijderen. Ik heb een Brands tabel gemaakt in de
database en gekoppeld met de Legosets tabel zodat elke set aan een merk is gekoppeld. De Brands tabel bevat de volgende
kolommen:

- id (primary key)
- name (varchar)
- created_at (timestamp)
- updated_at (timestamp)

## 15/10/'24

Vandaag heb ik een migratie aangemaakt waarmee ik een tabel in de database heb toegevoegd genaamd legosets. Deze tabel
bevat de volgende kolommen:

- id (primary key)
- user_id (foreign key)
- name (varchar)
- img_url (varchar)
- activity (integer)
- created_at (timestamp)
- updated_at (timestamp)

Vandaag heb ik de layout gemaakt en een aantal pagina's aangemaakt:

- Homepagina
- About Us pagina
- LEGOsets pagina

Naam en Image wordt getoond op de pagina's LEGOsets (index en show).
Ook heb ik een create pagina aangemaakt zodat een ingelogde gebruiker LEGO sets zou kunnen toevoegen.

## 14/10/'24

Vandaag heb ik de ERD gemaakt:<br>
![ERD](/public/img/erdold.png)<br>
Gekregen feedback:

- Set active of inactive d.m.v. tinyint
- Role gebruiken bij users d.m.v. tinyint i.p.v. tinytext

Aangepaste ERD o.b.v. feedback:<br>
![ERD](/public/img/erdnew.png)<br>

## 09/10/'24

Vandaag heb ik het project aangemaakt. Hierbij heb ik het project op github geüpload en breeze geïnstalleerd.


