# Laravel Migrations / DB Tabellen anlegen
## env Datei konfigurieren
In jedem Laravel Projekt (und auch in anderen Frontend/Backend Frameworks) gibt es eine sogenannte `.env` Datei. Diese Datei ist einfach gesagt nur eine Ansammlung von Variablen, welche das Framework ausließt. Hier liegen z. B. Die Art der Datenbank, der Datenbanknutzer, das Passwort und der Name der Datenbank.

#### Ein Beispiel:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=root
DB_PASSWORD=password
```

**Wichtig:** Diese Datei gehört nie mit ins git eingecheckt und sollte immer in der `.gitignore` im Hauptverzeichniss eines Projektes liegen, da sie je nach Gerät individuell befüllt wird.

## Migrationen, Controller und Model erstellen
Folgender Command erstellt automatisch eine Migration, eine Model Klasse und einen Controller für in diesem Fall eine `ContactPerson`:
`php artisan make:model ContactPerson -mc`

Das `-mc` steht für `m` = `migration` sowie `c` = `controller`.

Best practise für das Naming:
- **Model**: ContactPerson (UpperCamelCase, Singular)
- **Migration**: create_contact_persons_table (snake_case, plural)
- **Controller**: ContactPersonController (UpperCamelCase, Singular)

Eine Migration ist eine vereinfachte Anweisung von SQL Befehlen in PHP, welche es ermöglicht Datenbankstrukturen zu versionieren (z.B. in Gitlab/Github) und diese jederzeit wieder zurückzusetzen.

[Screenshot](https://svenjahn.digital/laravel_artisan.png) •  [Mehr dazu](https://laravel.com/docs/9.x/migrations#generating-migrations)

## Migrationen
Es gibt unterschiedliche Datentypen, welche hier zu finden sind:
[Available Column Types](https://laravel.com docs/9.x/migrations#available-column-types)

## Pivot Tabelle und Relationen
Bei Relationen von einem zu mehreren Objekten (z. B. Ein Film hat mehrere Schauspieler) benötigt man eine dritte Datenbanktabelle, die sogenannte Pivot Tabelle.

Diese Tabelle macht nichts anderes, als die ID's der zu verknüpfenden Objekte zu speichern. Also z. B. hat der Film mit der ID 1, eine Relation zu dem Schauspieler mit der ID 4.

- Film mit id 1 = Star Wars
- Film mit id 2 = Indiana Jones
- Film mit id 3 = 96 Hours

- Schauspieler mit id 1 = Harrison Ford
- Schauspieler mit id 2 = Natalie Portman
- Schauspieler mit id 3 = Hayden Christensen
- Schauspieler mit id 4 = Liam Neeson

| **film_id** | **actor_id** |
|-------------|--------------|
| 1           | 1            |
| 1           | 2            |
| 1           | 3            |
| 1           | 4            |
| 2           | 1            |
| 3           | 4            |

[Screenshot](https://svenjahn.digital/movie_actor.png) • [Mehr dazu](https://laravel.com/docs/9.x/eloquent-relationships#introduction)