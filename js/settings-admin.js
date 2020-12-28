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

window.addEventListener("DOMContentLoaded", function () {
    $("#breakhousecustom-theme-enabled").change(function () {
        $.post(OC.generateUrl("apps/breakhousecustom/settings/admin"), {
            theme_enabled: this.checked ? 1 : 0,
            theme_login_page: $("#breakhousecustom-theme-login-page").prop("checked") ? 1 : 0,
        });

        $("#breakhousecustom-theme-login-page").prop("disabled", !$("#breakhousecustom-theme-enabled").prop("checked"))
    });

    $("#breakhousecustom-theme-login-page").change(function () {
        $.post(OC.generateUrl("apps/breakhousecustom/settings/admin"), {
            theme_login_page: this.checked ? 1 : 0,
            theme_enabled: $("#breakhousecustom-theme-enabled").prop("checked") ? 1 : 0,
        });
    });
});
