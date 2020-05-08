<?php

declare(strict_types=1);

/*
 * This file is part of the package schnitzler/tt-address-extended.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Schnitzler\TtAddressExtended\Controller;

use FriendsOfTYPO3\TtAddress\Domain\Repository\AddressRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class AddressController extends ActionController
{
    private $addressRepository;

    public function __construct(AddressRepository $addressRepository)
    {
        $this->addressRepository = $addressRepository;
    }

    public function listAction()
    {
        DebuggerUtility::var_dump($this->addressRepository->findAll()->toArray());
        return '';
    }
}
