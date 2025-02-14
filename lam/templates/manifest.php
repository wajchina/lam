<?php
namespace LAM\PWA;
/*

  This code is part of LDAP Account Manager (http://www.ldap-account-manager.org/)
  Copyright (C) 2019 - 2022  Roland Gruber

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/

/**
* Manifest for progressive web app.
*
* @author Roland Gruber
* @package tools
*/

/** security functions */
include_once(__DIR__ . "/../lib/security.inc");
/** common functions */
include_once(__DIR__ . "/../lib/account.inc");

if (!headers_sent()) {
	header('Content-Type: application/json; charset=utf-8');
}

$baseUrl = getCallingURL();
if (strpos($baseUrl, '/templates/manifest.php') !== false) {
	$baseUrl = substr($baseUrl, 0, strpos($baseUrl, '/templates/manifest.php'));
	$urlMatches = array();
	if (preg_match('/http(s)?:\\/\\/[^\\/]+(\\/.*)$/m', $baseUrl, $urlMatches)) {
		$baseUrl = htmlspecialchars($urlMatches[2]);
	}
	else {
		logNewMessage('Unable to get base URL from ' . getCallingURL());
		exit();
	}
}
else {
	logNewMessage('Unable to get base URL from ' . getCallingURL());
	exit();
}

echo '{
  "short_name": "LAM",
  "name": "LDAP Account Manager",
  "icons": [
    {
      "src": "' . $baseUrl . '/graphics/logo_192x192.png",
      "type": "image/png",
      "sizes": "192x192"
    },
    {
      "src": "' . $baseUrl . '/graphics/logo_512x512.png",
      "type": "image/png",
      "sizes": "512x512"
    }
  ],
  "start_url": "' . $baseUrl . '/templates/login.php",
  "display": "standalone"
}';
