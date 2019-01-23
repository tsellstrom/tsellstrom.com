<?php

$content = file_get_contents("php://input");
$json    = json_decode($content);

// Use in the "Post-Receive URLs" section of your GitHub repo.
if ( $json->ref == "refs/heads/staging" ) {
  shell_exec( 'cd /var/www/ts-staging/ && git reset --hard HEAD && git pull' );
} else {
  shell_exec( 'cd /var/www/tsellstrom.com/ && git reset --hard HEAD && git pull' );
}
