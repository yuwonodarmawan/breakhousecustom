<?php

declare(strict_types=1);

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

namespace OCA\BreakhouseCustom\Settings;

use OCP\AppFramework\Http\TemplateResponse;
use OCP\IConfig;
use OCP\Settings\ISettings;

class Admin implements ISettings {

    /** @var string */
    protected $appName;

    /** @var IConfig */
    private $config;

    /**
     * @param string $appName
     * @param IConfig $config
     */
    public function __construct(string $appName,
                                IConfig $config) {
        $this->appName = $appName;
        $this->config = $config;
    }

    /**
     * @return TemplateResponse
     */
    public function getForm(): TemplateResponse {
        $retentionDays = $this->config->getAppValue($this->appName, 'retention_days');
        return new TemplateResponse('breakhousecustom', 'admin', [ 
            "retentionDays" => $retentionDays
        ]);
    }

    /**
     * @return string
     */
    public function getSection(): string {
        return 'additional';
    }

    /**
     * @return int
     */
    public function getPriority(): int {
        return 98;
    }
}
