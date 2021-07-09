<?php
/*
 * Copyright (c) 2021, Bastian Leicht <mail@bastianleicht.de>
 *
 * PDX-License-Identifier: BSD-2-Clause
 */

namespace ResellerServices\Domain;

use GuzzleHttp\Exception\GuzzleException;
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
     * @throws GuzzleException
     */
    public function create($nameserver)
    {
        return $this->resellerServices->post('domain/nameserver/create', [
            'nameserver' => $nameserver
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function delete($nameserver)
    {
        return $this->resellerServices->post('domain/nameserver/delete', [
            'nameserver' => $nameserver
        ]);
    }

}