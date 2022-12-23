<?php

# This File sets the Enabled Extensions for Northware. Maybe you'll have to install some of those extensions manually.
# Since the Extensions 'WikiEditor' and 'VisualEditor' are enabled automatically, those are set in LocalSettings.php

wfLoadExtension( 'CategoryTree' );
wfLoadExtension( 'InputBox' );
wfLoadExtension( 'Theme' ); # Needs to be implemented if vector-northware Theme is used
wfLoadExtension( 'UserMerge' ); # Customized in grouprights.php

## Start here with Customizing the extension's behavior.

# Category Sidebar
$wgCategoryTreeSidebarRoot = 'Category:DisplaySidebar';


# Theme Extension
$wgDefaultTheme = "vector-northware"; #UPO

?>