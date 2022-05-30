<?php

namespace ProudCommerce\VoucherSuccess\Application\Controller;

use OxidEsales\Eshop\Core\Registry;

class BasketController extends BasketController_parent
{
    public function isPcVoucherSuccessVoucherAdded()
    {
        $oBasket = Registry::getSession()->getBasket();
        return $oBasket->isPcVoucherSuccessVoucherAdded();
    }

    public function resetPcVoucherSuccessVoucherAdded()
    {
        $oBasket = Registry::getSession()->getBasket();
        return $oBasket->resetPcVoucherSuccessVoucherAdded();
    }
}
