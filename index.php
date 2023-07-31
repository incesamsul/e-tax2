<?php

if (!session_id()) {
    session_name('e-tax_sessoin');

    session_start();
}

require_once 'app/init.php';

$app = new App;
