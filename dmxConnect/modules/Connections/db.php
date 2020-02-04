<?php
$exports = <<<'JSON'
{
  "name": "db",
  "module": "dbconnector",
  "action": "connect",
  "options": {
    "server": "mysql",
    "databaseType": "MySQL",
    "connectionString": "mysql:host=db;sslverify=false;port=3306;dbname=vfxchange;user=db_user;password=VD8L9Wwm;charset=utf8",
    "limit": 1000,
    "debug": false,
    "meta": {
      "allTables": [
        "cars",
        "countries",
        "images",
        "users"
      ],
      "allViews": []
    }
  }
}
JSON;
?>