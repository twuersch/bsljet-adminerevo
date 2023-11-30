<?php
/*
 See https://www.adminer.org/plugins/#use for the documentation
 and raison d'être of this file.
*/

function adminer_object() {
    // required to run any plugin
    include_once("../plugins/plugin.php");

    // autoloader
    foreach (glob("../plugins/*.php") as $filename) {
        include_once "./$filename";
    }

    // specify enabled plugins here
    $plugins = array();

    // Specify customizations.
    class AdminerCustomization extends AdminerPlugin {
        const FIELD_ARRANGEMENTS = array("all" => "oink");
    }

    // Let's go
    return new AdminerCustomization($plugins);
}

// include original Adminer or Adminer Editor
include "./index.php";
?>