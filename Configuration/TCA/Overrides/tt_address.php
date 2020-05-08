<?php

declare(strict_types=1);

/*
 * This file is part of the package schnitzler/tt-address-extended.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

/*
 * Here, we add the new field to the TCA. This is necessary to be able
 * to edit the field in the backend. Also, Extbase relies on this information
 * to be present as it needs to know the type of data to expect from the database.
 *
 * If for example a database field is of type string and the property in the model
 * is of type int, Extbase will try to properly convert the string value to an int.
 * And since the TCA adds valuable information about the data type which the database
 * does not have, Extbase always needs the TCA.
 */

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tt_address',
    [
        'custom' => [
            'exclude' => true,
            'label' => 'Custom field from tt_address_extended',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
                'max' => 255
            ]
        ]
    ]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_address',
    'custom'
);
