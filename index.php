<?php

echo shell_exec('php -v');

require_once __DIR__ . '/states/State.php';
require_once __DIR__ . '/documents/ADocument.php';
require_once __DIR__ . '/documents/Invoice.php';

$invoice_1 = new Invoice(500, 'First ltd');
echo $invoice_1->getDocumentInfo() . "\n";

$invoice_2 = new Invoice(4500, 'Second ltd');
echo $invoice_2->getDocumentInfo() . "\n";

$invoice_3 = new Invoice(0, 'Third ltd');
echo $invoice_3->getDocumentInfo() . "\n";


