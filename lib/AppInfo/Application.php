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

namespace OCA\BreakhouseCustom\AppInfo;

use OCP\AppFramework\App;
use OCP\AppFramework\Bootstrap\IBootContext;
use OCP\AppFramework\Bootstrap\IBootstrap;
use OCP\AppFramework\Bootstrap\IRegistrationContext;
use OCP\IConfig;
use OCP\IUserSession;
use OCP\Util;
use OCA\Recommendations\Dashboard\RecommendationWidget;

class Recomm extends RecommendationWidget {
	
}

class Application extends App implements IBootstrap {

    /** @var string */
    public const APP_NAME = 'breakhousecustom';

    /** @var string */
    protected $appName;

    public function __construct() {
        parent::__construct(self::APP_NAME);
        $this->appName  = self::APP_NAME;
    }

    public function register(IRegistrationContext $context): void {
	}

    public function boot(IBootContext $context): void {
		$context->injectFn([$this, 'doTheming']);
	}

    /**
     * Check if the theme should be applied
     */
    public function doTheming(IConfig $config, IUserSession $userSession): void {
        $user = $userSession->getUser();
		Util::addStyle($this->appName, 'breakhousecustom');
		$recomm = new Recomm();
		$recomm->getTitle()->('Recent files');
    }
}


