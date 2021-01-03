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

namespace OCA\BreakhouseCustom\Controller;

use OCP\AppFramework\Controller;
use OCP\IConfig;
use OCP\IRequest;
use OCP\IUserSession;

class SettingsController extends Controller {

    /** @var string */
    protected $appName;

    /** @var IConfig */
    private $config;

    /** @var string */
    private $userId;

    /**
     * @param string $appName
     * @param IConfig $config
     * @param IUserSession $userSession
     * @param IRequest $request
     */
    public function __construct(string $appName,
                                IConfig $config,
                                IUserSession $userSession,
                                IRequest $request) {
        parent::__construct($appName, $request);
        $this->config = $config;
        $this->userId = $userSession->getUser()->getUID();
    }
}
