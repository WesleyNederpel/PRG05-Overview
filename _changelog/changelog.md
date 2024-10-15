# Changelog

## 15/10/'24

Vandaag heb ik een migratie aangemaakt waarmee ik een tabel in de database heb toegevoegd genaamd legosets. Deze tabel bevat de volgende kolommen:
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

Vandaag heb ik de ERD gemaakt: ![ERD](/img/erdold.png)
Gekregen feedback:
- Set active of inactive d.m.v. tinyint
- Role gebruiken bij users d.m.v. tinyint i.p.v. tinytext

Aangepaste ERD o.b.v. feedback: ![ERD](/img/erdnew.png)

## 09/10/'24

Vandaag heb ik het project aangemaakt. Hierbij heb ik het project op github geüpload en breeze geïnstalleerd.


