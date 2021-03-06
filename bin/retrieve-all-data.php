#!/usr/bin/php
<?php
require_once(__DIR__ . '/../vendor/autoload.php');

use Codzo\Platinum28Degree\Platinum28Degree;

$pd = new Platinum28Degree();
$pd->getContent();

echo json_encode([
    'account'=> $pd->getAccountSummary(),
    'transactions'=>$pd->getLatestTransactions()
]);
