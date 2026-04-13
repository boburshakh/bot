<?php

file_put_contents("log.txt", date("H:i:s")." HIT\n", FILE_APPEND);

http_response_code(200);

echo "OK";

