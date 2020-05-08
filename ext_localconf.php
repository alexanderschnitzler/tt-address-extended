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

/*
 * Here, we register class \Schnitzler\TtAddressExtended\Domain\Model\ExtendedAddress as an
 * alternative to class \FriendsOfTYPO3\TtAddress\Domain\Model\Address. That's necessary for
 * the Extbase DataMapper, as it is responsible to create model objects for queried database
 * rows.
 *
 * In this case tt_address provides a repository to fetch data from the database and Extbase
 * assumes that it has to use the model \FriendsOfTYPO3\TtAddress\Domain\Model\Address. When
 * extending the model, Extbase has to know that it needs to use a different model class and
 * that's what this call to registerImplementation is there for.
 */
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class)
    ->registerImplementation(\FriendsOfTYPO3\TtAddress\Domain\Model\Address::class, \Schnitzler\TtAddressExtended\Domain\Model\ExtendedAddress::class);
