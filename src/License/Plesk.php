<?php
/*
 * Copyright (c) 2021, Bastian Leicht <mail@bastianleicht.de>
 *
 * PDX-License-Identifier: BSD-2-Clause
 */

namespace ResellerServices\License;

use GuzzleHttp\Exception\GuzzleException;
use ResellerServices\ResellerServices;

class Plesk
{
    private $resellerServices;

    public function __construct(ResellerServices $resellerServices)
    {
        $this->resellerServices = $resellerServices;
    }

    public function getPrices()
    {
        //TODO: Hat Björn noch nicht hinzugefügt.
    }

    public function getLicense()
    {
        //TODO: Hat Björn noch nicht hinzugefügt.
    }

    /**
     * @throws GuzzleException
     */
    public function order($license_type)
    {
        return $this->resellerServices->post('license/order', [
            'type' => $license_type
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function reset($license_id)
    {
        return $this->resellerServices->post('license/reset', [
            'id' => $license_id
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function setIpBinding($license_id, $ip_address)
    {
        return $this->resellerServices->post('license/setIpBinding', [
            'id' => $license_id,
            'ip' => $ip_address
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function getIpBinding($license_id)
    {
        return $this->resellerServices->post('license/getIpBinding', [
            'id' => $license_id
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function delete($license_id, $date)
    {
        return $this->resellerServices->post('license/delete', [
            'id' => $license_id,
            'date' => $date
        ]);
    }

}