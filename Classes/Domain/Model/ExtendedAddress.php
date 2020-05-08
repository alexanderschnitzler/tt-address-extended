<?php
declare(strict_types=1);

/*
 * This file is part of the package schnitzler/tt-address-extended.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Schnitzler\TtAddressExtended\Domain\Model;

use FriendsOfTYPO3\TtAddress\Domain\Model\Address;

class ExtendedAddress extends Address
{
    protected string $custom = '';

    public function getCustom(): string
    {
        return $this->custom;
    }
}
