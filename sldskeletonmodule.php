<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to a commercial license from SOLEDIS
 * Use, copy, modification or distribution of this source file without written
 * license agreement from the SOLEDIS GROUP is strictly forbidden.
 *    ___  ___  _    ___ ___ ___ ___
 *   / __|/ _ \| |  | __|   \_ _/ __|
 *   \__ \ (_) | |__| _|| |) | |\__ \
 *   |___/\___/|____|___|___/___|___/
 *
 * @author    SOLEDIS <prestashop@groupe-soledis.com>
 * @copyright {year} SOLEDIS
 * @license   All Rights Reserved
 * @developer {lastname} {firstname}
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

class SldSkeletonModule extends \Module
{
    public const HOOK_TO_REGISTER = [];

    public function __construct()
    {
        $this->name = '{sldskeletonmodule}';
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->author = 'Soledis';
        $this->need_instance = 0;
        $this->module_key = null;
        $this->addons_id = null;
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->trans(
            'Soledis - {LITERAL_NAME}',
            [],
            'Modules.{Sldskeletonmodule}.{Sldskeletonmodule}'
        );
        $this->description = $this->trans(
            'Soledis - {DESCRIPTION.}',
            [],
            'Modules.{Sldskeletonmodule}.{Sldskeletonmodule}'
        );
        $this->confirmUninstall = $this->trans(
            'Are you sure you want to uninstall this module?',
            [],
            'Modules.{Sldskeletonmodule}.{Sldskeletonmodule}'
        );
        $this->ps_versions_compliancy = ['min' => '8.1.0', 'max' => _PS_VERSION_];
    }
}
