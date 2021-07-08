<?php
/*
 * Copyright (c) 2021, Bastian Leicht <mail@bastianleicht.de>
 *
 * PDX-License-Identifier: BSD-2-Clause
 */

namespace ResellerServices;


use GuzzleHttp\Exception\GuzzleException;

class Domain
{
    private $resellerServices;

    public function __construct(ResellerServices $resellerServices)
    {
        $this->resellerServices = $resellerServices;
    }

    /**
     * @throws GuzzleException
     */
    public function getPrice($tld)
    {
        return $this->resellerServices->post('domain/getPrice', [
            'tld' => $tld
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function check($domainName)
    {
        return $this->resellerServices->post('domain/check', [
            'domainName' => $domainName
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function getDomain($domainName)
    {
        return $this->resellerServices->post('domain/getDomain', [
            'domainName' => $domainName
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function getAuthcode($domainName)
    {
        return $this->resellerServices->post('domain/getAuthcode', [
            'domainName' => $domainName
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function register($domainName, $ownerContact, $adminContact, $technicianContact, $zoneContact, $ns1, $ns2, $ns3, $ns4, $ns5, $years)
    {
        return $this->resellerServices->post('domain/register', [
            'domainName' => $domainName,
            'ownerC' => $ownerContact,
            'adminC' => $adminContact,
            'techC' => $technicianContact,
            'zoneC' => $zoneContact,
            'ns1' => $ns1,
            'ns2' => $ns2,
            'ns3' => $ns3,
            'ns4' => $ns4,
            'ns5' => $ns5,
            'years' => $years
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function transfer($domainName, $ownerContact, $adminContact, $technicianContact, $zoneContact, $ns1, $ns2, $ns3, $ns4, $ns5, $years, $authCode)
    {
        return $this->resellerServices->post('domain/transfer', [
            'domainName' => $domainName,
            'ownerC' => $ownerContact,
            'adminC' => $adminContact,
            'techC' => $technicianContact,
            'zoneC' => $zoneContact,
            'ns1' => $ns1,
            'ns2' => $ns2,
            'ns3' => $ns3,
            'ns4' => $ns4,
            'ns5' => $ns5,
            'years' => $years,
            'authCode' => $authCode
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function update($domainName, $ownerContact, $adminContact, $technicianContact, $zoneContact, $ns1, $ns2, $ns3, $ns4, $ns5)
    {
        return $this->resellerServices->post('domain/update', [
            'domainName' => $domainName,
            'ownerC' => $ownerContact,
            'adminC' => $adminContact,
            'techC' => $technicianContact,
            'zoneC' => $zoneContact,
            'ns1' => $ns1,
            'ns2' => $ns2,
            'ns3' => $ns3,
            'ns4' => $ns4,
            'ns5' => $ns5
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function delete($domainName, $date)
    {
        return $this->resellerServices->post('domain/delete', [
            'domainName' => $domainName,
            'date' => $date
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function undelete($domainName)
    {
        return $this->resellerServices->post('domain/undelete', [
            'domainName' => $domainName
        ]);
    }

}