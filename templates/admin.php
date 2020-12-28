<?php
/**
 * Breakhouse Custom Configuration for Nextcloud
 * 
 * @copyright Copyright (C) 2020  Yuwono Darmawan <yuwono.darmawan@wengkerindo.xyz>
 *
 * @author Yuwono Darmawan <yuwono.darmawan@wengkerindo.xyz>
 * 
 * @license GNU AGPL version 3 or any later version
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 * 
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 */


script('breakhousecustom', 'settings-admin');
?>

<div id="breakhousecustom" class="breakhousecustom-admin section">
    <h2><?php p($l->t("Breeze Dark")); ?></h2>
    <p><?php p($l->t("A Dark theme based on Breeze Dark by the KDE project. Please refresh the page for changes to take effect.")); ?></p>
    <p><?php p($l->t("This setting will enable the theme by default, for any unauthenticated users and users who haven't set a preference.")); ?></p>
    <input type="checkbox" class="checkbox" id="breakhousecustom-theme-enabled" <?php p($themeEnabled ? "checked" : ""); ?>>
    <label for="breakhousecustom-theme-enabled"><?php p($l->t("Enable Breeze Dark theme by default")); ?></label>
    <p><?php p($l->t("This setting will allow you to choose if the login page should be themed when the theme is enabled by default")); ?></p>
    <input type="checkbox" class="checkbox" id="breakhousecustom-theme-login-page" <?php p($themeEnabled ? "" : "disabled");?> <?php p($themeLoginPage ? "checked" : "");?>>
    <label for="breakhousecustom-theme-login-page"><?php p($l->t("Theme the login page")); ?></label>
</div>
