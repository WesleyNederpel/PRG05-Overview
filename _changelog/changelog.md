# Changelog

## 16/10/'24

Vandaag heb ik ervoor gezorgd dat het uiterlijk van de standaard laravel pagina overal te zien is. Ook heb ik de create
en detailpagia's gemaakt. Er is een functie om een LEGO set te verwijderen. Ik heb een Brands tabel gemaakt in de
database en gekoppeld met de Legosets tabel zodat elke set aan een merk is gekoppeld. De Brands tabel bevat de volgende kolommen:
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


