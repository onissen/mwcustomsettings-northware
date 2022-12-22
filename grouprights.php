<?php

    # This Settings set the Rights of different User Groups. It is not needed to define those Settings in the LocalSettings.php.

    # Disable reading by anonymous users
    $wgGroupPermissions['*']['read'] = false;

    # Disable anonymous editing
    $wgGroupPermissions['*']['edit'] = false;

    # Prevent new user registrations except by sysops
    $wgGroupPermissions['*']['createaccount'] = false;
    $wgGroupPermissions['user']['createaccount'] = false;
    $wgGroupPermissions['sysop']['createaccount'] = true;

?>