<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\SamplePayment;

use Eccube\Common\EccubeNav;

class Nav implements EccubeNav
{
    /**
     * @return array
     */
    public static function getNav()
    {
        return [
            'order' => [
                'id' => 'sample_payment_admin_payment_status',
                'name' => 'sample_payment.admin.nav.payment_list',
                'url' => 'sample_payment_admin_payment_status',
            ],
        ];
    }
}
