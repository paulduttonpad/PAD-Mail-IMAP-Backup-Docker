<?php

$config['imap_host'] = 'tls://imap-backend:31143';

$config['imap_auth_type'] = 'LOGIN';

$config['imap_conn_options'] = [
  'ssl' => [
    'verify_peer'       => false,
    'verify_peer_name'  => false,
    'allow_self_signed' => true,
  ],
];

