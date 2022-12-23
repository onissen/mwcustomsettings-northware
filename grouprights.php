<?php

    # This Settings set the Rights of different User Groups. It is not needed to define those Settings in the LocalSettings.php.

    # Disable reading and editing by anonymous users
    $wgGroupPermissions['*']['read'] = false;
    $wgGroupPermissions['*']['edit'] = false;

    # Prevent new user registrations except by sysops
    $wgGroupPermissions['*']['createaccount'] = false;
    $wgGroupPermissions['user']['createaccount'] = false;
    $wgGroupPermissions['sysop']['createaccount'] = true;

    # Set sysop Rights
    $wgGroupPermissions['sysop']['usermerge'] = true;
    $wgGroupPermissions['sysop']['deletedhistory '] = true;
    $wgGroupPermissions['sysop']['undelete'] = true;




    $wgBlockDisablesLogin = true;

?>