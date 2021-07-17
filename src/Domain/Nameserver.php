<?php
/*
 * Copyright (c) 2021, Bastian Leicht <mail@bastianleicht.de>
 *
 * PDX-License-Identifier: BSD-2-Clause
 */

namespace ResellerServices\Domain;

use GuzzleHttp\Exception\GuzzleException;
use ResellerServices\Exception\AssertNotImplemented;
use ResellerServices\ResellerServices;

class Nameserver
{
    private $resellerServices;

    public function __construct(ResellerServices $resellerServices)
    {
        $this->resellerServices = $resellerServices;
    }

    public function getNameservers()
    {
        //TODO: Noch nicht in der API!
    }

    /**
     * @param string $nameserver    ns1.reselling.network
     * @return array|string
     * @throws GuzzleException
     */
    public function create(string $nameserver)
    {
        if($this->resellerServices->isSandbox() === true) {
            throw new AssertNotImplemented();
        }
        return $this->resellerServices->post('domain/nameserver/create', [
            'nameserver' => $nameserver
        ]);
    }

    /**
     * @param string $nameserver    ns1.reselling.network
     * @return array|string
     * @throws GuzzleException
     */
    public function delete(string $nameserver)
    {
        if($this->resellerServices->isSandbox() === true) {
            throw new AssertNotImplemented();
        }
        return $this->resellerServices->post('domain/nameserver/delete', [
            'nameserver' => $nameserver
        ]);
    }

}