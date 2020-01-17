<?php

include("config.php");


try {
    $config = new NavOnlineInvoice\Config($apiUrl, $userDataFilename);
    $reporter = new NavOnlineInvoice\Reporter($config);

    $transactionId = "abc123";
    $statusXml = $reporter->queryInvoiceStatus($transactionId);

    print "Válasz XML objektum:\n";
    var_dump($statusXml);

} catch(Exception $ex) {
    print get_class($ex) . ": " . $ex->getMessage();
}
