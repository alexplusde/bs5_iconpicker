<?php

$addon = rex_addon::get('bs5_iconpicker');
rex_view::addCssFile($addon->getAssetsUrl('/font/bootstrap-icons.css'));
rex_view::addJsFile($addon->getAssetsUrl('iconpicker.js'));
