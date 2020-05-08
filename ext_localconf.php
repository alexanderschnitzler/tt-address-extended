<?php
defined('TYPO3_MODE') || die('Access denied.');

/*
 * This file is part of the package schnitzler/tt-address-extended.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'tt_address_extended',
    'Addresses',
    [
        \Schnitzler\TtAddressExtended\Controller\AddressController::class => 'list'
    ],
    [
        \Schnitzler\TtAddressExtended\Controller\AddressController::class => 'list'
    ]
);
