#!/bin/bash
EXTENSION_FILENAME="build/plg_system_customcss.zip"
cd ..
if [ -f "$EXTENSION_FILENAME" ]; then rm $EXTENSION_FILENAME; fi
zip -r $EXTENSION_FILENAME language/ customcss.php customcss.xml script.php --quiet
sha512sum $EXTENSION_FILENAME | awk '{print $1}'
echo 'package ready'
