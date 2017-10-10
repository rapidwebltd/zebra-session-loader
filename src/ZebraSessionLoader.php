<?php

if (function_exists('zebraSessionLoader')) {

    throw new Exception('zebraSessionLoader function variable already exists. Ensure you do not have two copies of the zebra-session-loader package.');

} else {

    function zebraSessionLoader() {
        
        $securityCode = getenv('ZEBRA_SESSION_SECURITY_CODE');
        $databaseConnectionName = getenv('ZEBRA_SESSION_DATABASE_CONNECTION_NAME');

        if (!$securityCode) {
            throw new Exception('ZEBRA_SESSION_SECURITY_CODE environment variable not found or empty.');
        }

        if (!$databaseConnectionName) {
            throw new Exception('ZEBRA_SESSION_DATABASE_CONNECTION_NAME environment variable not found or empty.');
        }

        $zebraDatabaseLink = \DivineOmega\DCOM\DCOM::getConnection($databaseConnectionName);
        new Zebra_Session($zebraDatabaseLink, $securityCode);

    }

    zebraSessionLoader();

}
