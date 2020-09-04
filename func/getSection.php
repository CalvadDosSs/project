<?php

require_once ($_SERVER['DOCUMENT_ROOT'] . '/func/getMenu.php');


function getSection ($menuItems) {
    foreach ($menuItems as $menuItem) {
        if (isCurrentUrl($menuItem['path'])) {
            return $menuItem['title'];
        }
    }
}
