<?php

declare(strict_types=1);

/*
 * This file is part of the package schnitzler/tt-address-extended.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

/*
 * This mapping is necessary because the DataMapper of Extbase will check which model to use
 * when querying the table tt_address. So when not having this mapping, Extbase assumes the
 * table for this model is tx_ttaddressextended_domain_model_extendedaddress. But as Extbase
 * should query tt_address, the mapping has to be changed here.
 */

return [
    \Schnitzler\TtAddressExtended\Domain\Model\ExtendedAddress::class => [
        'tableName' => 'tt_address',
    ],
];
