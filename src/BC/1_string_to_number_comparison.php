<?php
echo '0 == "0" => ',   (0 == "0" ? "true" : "false") , PHP_EOL;
echo '0 == "0.0" => ',   (0 == "0.0" ? "true" : "false") , PHP_EOL;
echo '0 == "foo" => ',   (0 == "foo" ? "true" : "false") , PHP_EOL;
echo '0 == "" => ',   (0 == "" ? "true" : "false") , PHP_EOL;
echo '42 == " 42" => ',   (42 == " 42" ? "true" : "false") , PHP_EOL;
echo '42 == "42foo" => ',   (42 == "42foo" ? "true" : "false") , PHP_EOL;

if (0 == '') {
    echo "Yes";
} else {
    echo "No";
}

