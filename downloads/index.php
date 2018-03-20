<?php
include $_SERVER["DOCUMENT_ROOT"]."/../include/global.php";

$version="0.1.1.0";
DisplayHeader();

print "<h1>Downloads</h1>";

print "<ul>";

print "<li>PlusOneCoin Wallet - <a href='/downloads/PlusOneCoin-Qt-".$version.".dmg'>Mac</a> | <a href='/downloads/plusonecoin-qt.exe'>Windows</a>";

print "</ul>";

DisplayFooter();
