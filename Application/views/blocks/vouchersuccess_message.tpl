[{if $oxcmp_basket->isPcVoucherSuccessVoucherAdded()}]
    <div class="status success voucherSuccess">
        [{oxmultilang ident="COUPON_ACCEPTED"}]
    </div>

    [{$oxcmp_basket->resetPcVoucherSuccessVoucherAdded()}]
[{/if}]