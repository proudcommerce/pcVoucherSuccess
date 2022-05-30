<?php
/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @copyright (c) ProudCommerce | 2022
 * @link          www.proudcommerce.com
 * @package       pcVoucherSuccess
 * @version       1.0.0
 **/

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
 $aModule = [
    'id'            => 'pcVoucherSuccess',
    'title'         => 'VoucherSuccess',
    'description'   => 'Hinweis im Warenkorb, bei erfolgreich hinzugfügtem Gutschein',
    'thumbnail'     => '',
    'version'       => '1.0.0',
    'author'        => 'ProudCommerce',
    'url'           => 'https://www.proudcommerce.com',
    'email'         => 'support@proudcommerce.com',
    'extend'        => [
        \OxidEsales\Eshop\Application\Controller\BasketController::class => \ProudCommerce\VoucherSuccess\Application\Controller\BasketController::class,
        \OxidEsales\Eshop\Application\Model\Basket::class => \ProudCommerce\VoucherSuccess\Application\Model\Basket::class,
    ],
    'blocks'        => [
        [
             'template' => 'page/checkout/inc/basketcontents.tpl',
             'block'    => 'vouchersuccess_message',
             'file'     => 'Application/views/blocks/vouchersuccess_message.tpl',
        ],
    ],
];