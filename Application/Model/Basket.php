<?php

namespace ProudCommerce\VoucherSuccess\Application\Model;

use OxidEsales\Eshop\Core\Registry;

class Basket extends Basket_parent
{
    protected $_bVoucherSuccess = null;

    public function addVoucher( $sVoucherId )
    {
        $iCounterBefore = count($this->_aVouchers);

        parent::addVoucher($sVoucherId);

        $iCounterAfter = count($this->_aVouchers);

        // check if new voucher successfully added
        if ($iCounterAfter > $iCounterBefore) {

            //Registry::::get("oxUtilsView")->addErrorToDisplay("COUPON_ACCEPTED");

            $this->_bVoucherSuccess = true;
        }
    }

    public function isPcVoucherSuccessVoucherAdded()
    {
        if ($this->_bVoucherSuccess === true) {
            return true;
        }
        return false;
    }

    public function resetPcVoucherSuccessVoucherAdded()
    {
        $this->_bVoucherSuccess = false;
    }
}
