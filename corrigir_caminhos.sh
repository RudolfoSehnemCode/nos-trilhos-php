#!/bin/bash
set -e

sed -i "s@include 'db.php';@include __DIR__ . '/../src/config/db.php';@g" public/*.php

sed -i 's@include "../html/Auth.php";@include __DIR__ . "/../src/Auth.php";@g' public/logout.php

sed -i 's@href="../style.css"@href="css/style.css"@g' public/*.php

sed -i 's@src="../images/@src="images/@g' public/*.php

sed -i 's@href="../html/@href="@g' public/*.php

grep -rn "db.php\|Auth.php\|\.\./" public/ src/ || echo "Nenhuma referência quebrada encontrada."
