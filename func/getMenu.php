<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . '/include/mainMenu.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/func/toCut.php');

// sort

function sortAsd ($a, $b){
    return $a['sort'] > $b['sort'];
}

function sortDesc ($a, $b){
    return $a['sort'] < $b['sort'];
}

function showMenu($menuItems, $sort, $ulClass = 'main-menu'){
   usort($menuItems, $sort);
   
   require ($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');
}

// parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)

function getUrl () {
	return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
}

function isCurrentUrl ($url) {
	return $url == getUrl();
}