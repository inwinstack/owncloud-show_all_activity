<?php
/**
 * ownCloud - show_all_activity
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author eric <eric.y@inwinstack.com>
 * @copyright eric 2015
 */

namespace OCA\Show_All_Activity\AppInfo;

use OCP\AppFramework\App;

//$app = new App('show_all_activity');
//$container = $app->getContainer();

\OCP\Util::addScript( 'show_all_activity', "activity" );
\OCP\Util::addStyle( 'show_all_activity', "style" );
