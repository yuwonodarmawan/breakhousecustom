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
$retention_days=30;
?>


<div id="breakhousecustom" class="breakhousecustom-admin section">
    <h2><?php p($l->t("Breakhouse Custom Configuration")); ?></h2>
    <p><?php p($l->t("This App cover the following custom configuration :")); ?></p>
    <p><?php p($l->t("- Core | Disable \"drag-and-drop to move\" of folders and files behaviour on web interface")); ?></p>
    <p><?php p($l->t("- Core | Remove all default folders / files from new user skeleton")); ?></p>
    <p><?php p($l->t("- Core | Under \"Personal Info\" in Settings, remove the Nextcloud promo elements from bottom of page (\"Reasons to use Nextcloud\" link and the 5 linked social media / feed / email etc icons) ")); ?></p>
    <p><?php p($l->t("- Dashboard | Show \"Customize\" button only for those in group MAINTENANCE-MODE")); ?></p>
    <p><?php p($l->t("- Dashboard | Add \"boxbg.jpg\" as default background")); ?></p>
    <p><?php p($l->t("- Dashboard | \"Recommended Files\" widget, change panel header text to Recently Accessed")); ?></p>
    <p><?php p($l->t("- Dashboard | Change evening greeting text from \"Good night, [name]\" to \"Good evening, [name]\"")); ?></p>
    <p><?php p($l->t("- Deleted Files | Increase retention time to 45 days (up from 30)")); ?></p>
</div>

<div class="section">
    <p><label for="files_retention"><?php p($l->t('How long do we keep files in the trash bin ?')); ?></label>
        <select name="files_retention" id="trash_bin_retention"><?php for ($x = 30; $x <= 100; $x+=5) { ?>
             <option value ="<?php echo p($x)?>"><?php echo p($x)?></option> 
				<?php } ?>
        </select> days.
    </p>
    <p><label for="dashboard_panel"><?php p($l->t('Dashboard edit panel only available for group :')); ?></label>
        <select name="panel_group" id="customized_dashboard">
             <option value ="MAINTENANCE-MODE" seleted>MAINTENANCE-MODE</option>
        </select> 
    </p>

