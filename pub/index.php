<?php
/**
 * Public alias for the application entry point
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

use Magento\Framework\App\Bootstrap;

/*try{
    $connection = new PDO("ibm:DRIVER={IBM DB2 ODBC DRIVER};DATABASE=testdb;", "db2inst1", "heap1358", array(
        PDO::ATTR_PERSISTENT => FALSE,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEXPTION)
    );
    var dump(gettype($connection));
}
catch (Exception $e) {
    echo($e->getMessage());
}

exit();*/

try {
    require __DIR__ . '/../app/bootstrap.php';
} catch (\Exception $e) {
    echo <<<HTML
<div style="font:12px/1.35em arial, helvetica, sans-serif;">
    <div style="margin:0 0 25px 0; border-bottom:1px solid #ccc;">
        <h3 style="margin:0;font-size:1.7em;font-weight:normal;text-transform:none;text-align:left;color:#2f2f2f;">
        Autoload error</h3>
    </div>
    <p>{$e->getMessage()}</p>
</div>
HTML;
    http_response_code(500);
    exit(1);
}


