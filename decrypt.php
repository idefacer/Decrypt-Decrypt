<?php
error_reporting(0);

$wordlistFile = readline("Input list pass: ");
$list = explode("\n", file_get_contents($wordlistFile)); 
if(isset($wordlistFile)) {
    
    echo "Input hash: ";
    $hash = trim(fgets(STDIN));

    foreach($list as $wordlist) {
        $result = password_verify($wordlist, $hash) ? "\033[32m( SUCCESS )\033[0m" : "\033[31m( FAILED )\033[0m ";
        printf(" [+] %s -> %s %s\n", $hash, $wordlist, $result);
    }
} else {
    print "usage: php ".$argv[0]." wordlist.txt\n";
}
?>
