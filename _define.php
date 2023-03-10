<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
#
# This file is part of moreCSS a plugin for Dotclear 2.
# 
# Copyright (c) 2011 2018 Osku and contributors
#
# Licensed under the GPL version 2.0 license.
# A copy of this license is available in LICENSE file or at
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
#
# -- END LICENSE BLOCK ------------------------------------
if (!defined('DC_RC_PATH')) { return; }

$this->registerModule(
    'moreCSS',
    'Another CSS stylesheet for the active theme',
    'Osku and contributors',
    '2.0',
    [
        'requires'    => [['core', '2.24']],
        'permissions' => dcCore::app()->auth->makePermissions([
            dcAuth::PERMISSION_CONTENT_ADMIN,
        ]),
        'type'       => 'plugin',
        'support'    => 'http://forum.dotclear.org/viewtopic.php?id=44908',
        'details'    => 'https://plugins.dotaddict.org/dc2/details/moreCSS',
    ]
);
