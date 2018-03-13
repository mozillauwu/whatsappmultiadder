<?php

define("CSV_FILE", "mm.csv");
define("OUT_CSV_FILE", "import.csv");
define("SEARCH_PREFIX", "newmembers");
define("GOOGLE_CONTACTS_GROUP", "Mozilla Club");

header("Content-type: text/csv");
header("Content-Disposition: attachment; filename=". OUT_CSV_FILE);
header("Pragma: no-cache");
header("Expires: 0");

$csvfile = file(CSV_FILE);

echo "Name,Given Name,Additional Name,Family Name,Yomi Name,Given Name Yomi,Additional Name Yomi,Family Name Yomi,Name Prefix,Name Suffix,Initials,Nickname,Short Name,Maiden Name,Birthday,Gender,Location,Billing Information,Directory Server,Mileage,Occupation,Hobby,Sensitivity,Priority,Subject,Notes,Group Membership,Phone 1 - Type,Phone 1 - Value\n";

foreach($csvfile as $line){
    echo SEARCH_PREFIX . "_" . uniqid().",,,,,,,,,,,,,,,,,,,,,,,,,,* ". GOOGLE_CONTACTS_GROUP .",Mobile," . $line . "\n";
}