<?php
require('../../dmxConnectLib/dmxConnect.php');


$app = new \lib\App();

$app->define(<<<'JSON'
{
  "settings": {
    "options": {}
  },
  "meta": {
    "options": {}
  },
  "exec": {
    "steps": [
      "Connections/db",
      {
        "name": "security1",
        "module": "auth",
        "action": "provider",
        "options": {
          "secret": "ZNudoMf4jL4sY6x",
          "provider": "Database",
          "connection": "db",
          "basicAuth": true
        },
        "meta": [
          {
            "name": "identity",
            "type": "text"
          }
        ]
      },
      {
        "name": "identity",
        "module": "auth",
        "action": "login",
        "options": {
          "provider": "security1"
        },
        "output": true,
        "meta": []
      }
    ]
  }
}
JSON
);
?>