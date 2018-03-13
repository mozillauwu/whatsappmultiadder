# whatsappmultiadder
Creates Google contacts csv that helps to add bulk list of mobile numbers to a Whatsapp group chat.


Whatsapp doest allows you to import bulk list of numbers to a group chat. **whatsappmultiadder** will take bulk mobile number list and creates google contacts csv.


## How to use

1. Download or clone the project.
2. copy the project folder into your php server directory.
3. add your mobile number list to `numbers.csv`
4. configure settings

```php
define("CSV_FILE", "mm.csv"); // your bulk numbers file name
define("OUT_CSV_FILE", "import.csv"); // output file name
define("SEARCH_PREFIX", "newmembers"); // contact prefix
define("GOOGLE_CONTACTS_GROUP", "Mozilla Club"); // google contacts group name
```

```
0711234567
0711234568
```

4. run `localhost/whatsappmultiadder` from your browser
5. Create google contact group using name you added to `GOOGLE_CONTACTS_GROUP`
6. Import `csv` file
7. Sync your mobile and add all members using `SEARCH_PREFIX` in Whatsapp
8. Once you completed adding. Remove the google contacts group.

## Contribute

- Star it
- Fork it
- Open an issue
- Make a PR
