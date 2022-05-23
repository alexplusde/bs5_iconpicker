<?php

$addon = rex_addon::get('bs5_iconpicker');
rex_view::addCssFile($addon->getAssetsUrl('/font/bootstrap-icons.css'));
rex_view::addCssFile($addon->getAssetsUrl('/styles/bs5-iconpicker.css'));
rex_view::addJsFile($addon->getAssetsUrl('js/iconpicker.js'));
rex_view::addJsFile($addon->getAssetsUrl('js/bs5-iconpicker.js'));
