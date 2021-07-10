<?php
/*
 * Copyright (c) 2021, Bastian Leicht <mail@bastianleicht.de>
 *
 * PDX-License-Identifier: BSD-2-Clause
 */

namespace ResellerServices;

use GuzzleHttp\Exception\GuzzleException;

class Payment
{
    private $resellerServices;

    public function __construct(ResellerServices $resellerServices)
    {
        $this->resellerServices = $resellerServices;
    }

    /**
     * @throws GuzzleException
     */
    public function create($payment_method, $amount, $success_url, $failure_url, $user_id, $startPayment = null)
    {
        return $this->resellerServices->post('payment/create', [
            'startPayment' => $startPayment,
            'payment_method' => $payment_method,
            'amount' => $amount,
            'success_url' => $success_url,
            'failure_url' => $failure_url,
            'user_id' => $user_id
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function validate($transaction_id)
    {
        return $this->resellerServices->post('payment/check', [
            'tid' => $transaction_id
        ]);
    }
}