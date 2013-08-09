<?

$file = fopen($argv[1], 'r');

$msgid  = false;
$msgstr = false;

while( ($line = fgets($file)) ) {
 
    if(preg_match('/msgid\s"(.*)"/U', $line, $matches)) {
        $msgid = '"'.$matches[1].'"';
        
    } else if(preg_match('/msgstr\s"(.*)"/U', $line, $matches)) {
        $msgstr = '"'.$matches[1].'"';
        
        if($msgstr != '""' && $msgid != '""') { 
            echo $msgid.';'.$msgstr."\n";
        } else {
            $msgid = false;
        }
    }
}



