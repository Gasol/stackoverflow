<?php

$key = <<<EOF
-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAmHzD76i8DA25nC+Qsswi
OM0lW+gViiQD4tEm7suxBc2BGibtdlrsprVIId92hSjQKx4x8+XVWU6k89T5vy8Y
txpXN759OWdGkDi8uvZuYclMjW9Rao+oqSvbXH37R7oSY287I+6uOHclGhniQN3q
RyoXBkbhDk0/FTI/i549q/gGk1UZYv449KLrDOqmtohRcIyAYVnvvWtD1kIzourq
hMtEIrPqwoBqTaUA9kOIXw1jMovao2TN52j48KgOg9KjqtdwUwD9e6n7hJd/subF
6woc8L7zjJFOHH5gacUC7vtiMpBpnSyLQpjFLepYYwftjsRmg4xLdh+Zvgw3xqi4
lwIDAQAB
-----END PUBLIC KEY-----
EOF;

var_dump(openssl_public_encrypt($data, $crypted, $key));
var_dump($crypted);
