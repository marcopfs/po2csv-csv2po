<?

echo
'msgid ""
msgstr ""
"Project-Id-Version: Project Name"
"Report-Msgid-Bugs-To: "
"POT-Creation-Date: '.date('Y-m-d H:i:s+O').'"
"PO-Revision-Date: "
"Last-Translator: My Name <my@email.com>"
"Language-Team: "
"Language: "
"MIME-Version: 1.0"
"Content-Type: text/plain; charset=UTF-8"
"Content-Transfer-Encoding: 8bit"
"X-Poedit-Language: Portuguese"
"X-Poedit-Country: PORTUGAL"
"X-Poedit-SourceCharset: utf-8"
"X-Poedit-Basepath: /path/to/project/"
"X-Poedit-SearchPath-0: templates"

';
 
$csv = fopen($argv[1], 'r');
 
while( ($row = fgetcsv($csv, 0, ';')) ) {
 
    echo 'msgid "'.$row[0].'"'."\n".
         'msgstr "'.$row[1].'"'."\n\n";

}
