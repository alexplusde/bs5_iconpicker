<?php

if (rex_addon::get('yform')->isAvailable()) {
    rex_yform::addTemplatePath(rex_path::addon('bs5_iconpicker', 'ytemplates'));
}


$addon = rex_addon::get('bs5_iconpicker');
rex_view::addCssFile($addon->getAssetsUrl('/font/bootstrap-icons.css'));

rex_view::addCssFile($addon->getAssetsUrl('/styles/bs5.css'));
rex_view::addCssFile($addon->getAssetsUrl('/styles/fa6.css'));

rex_view::addJsFile($addon->getAssetsUrl('js/bs5-iconpicker.js'));
rex_view::addJsFile($addon->getAssetsUrl('js/fa6-iconpicker.js'));

rex_view::addJsFile($addon->getAssetsUrl('js/bs5-picker.js'));
rex_view::addJsFile($addon->getAssetsUrl('js/fa6-picker.js'));
