<?php /*
define("TOKEN", "secret-token");                                          // The secret token to add as a GitHub or GitLab secret, or otherwise as https://www.example.com/?token=secret-token
define("REMOTE_REPOSITORY", "git@github.com:tsellstrom/tsellstrom.com");  // The SSH URL to your repository
if ($_SERVER['SERVER_NAME'] == 'tsellstrom.com') {
  define("DIR", "/var/www/tsellstrom.com/");                              // The path to your repostiroy; this must begin with a forward slash (/)
} else {  // if staging.tsellstrom.com
  define("DIR", "/var/www/ts-staging/");                                  // The path to your repostiroy; this must begin with a forward slash (/)
}
if ($_SERVER['SERVER_NAME'] == 'tsellstrom.com') {
define("BRANCH", "refs/heads/master");                                    // The branch route
} else { // if staging.tsellstrom.com
  define("BRANCH", "/refs/heads/staging");                                   // The branch route
}
define("LOGFILE", "deploy.log");                                          // The name of the file you want to log to.
define("GIT", "/usr/bin/git");                                            // The path to the git executable
define("AFTER_PULL", "");                                                 // A command to execute after successfully pulling

require_once("deployer.php");
*/ ?>




<?php

$content = file_get_contents("php://input");
$json    = json_decode($content, true);





// Use in the "Post-Receive URLs" section of your GitHub repo.
if ( $json->ref == "refs/heads/staging" ) {
  shell_exec( 'cd /var/www/ts-staging/ && git reset --hard HEAD && git pull' );
} else {
  shell_exec( 'cd /var/www/tsellstrom.com/ && git reset --hard HEAD && git pull' );
}
