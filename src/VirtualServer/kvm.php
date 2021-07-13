<?php
/*
 * Copyright (c) 2021, Bastian Leicht <mail@bastianleicht.de>
 *
 * PDX-License-Identifier: BSD-2-Clause
 */

namespace ResellerServices\VirtualServer;

use GuzzleHttp\Exception\GuzzleException;
use ResellerServices\ResellerServices;

class kvm
{
    private $resellerServices;
    private $kvmBackupHandler;
    private $kvmNetworkHandler;
    private $kvmJobHandler;

    public function __construct(ResellerServices $resellerServices)
    {
        $this->resellerServices = $resellerServices;
    }

    /**
     * @return kvmBackup
     */
    public function backup(): kvmBackup
    {
        if(!$this->kvmBackupHandler) $this->kvmBackupHandler = new kvmBackup($this->resellerServices);
        return $this->kvmBackupHandler;
    }

    /**
     * @return kvmNetwork
     */
    public function network(): kvmNetwork
    {
        if(!$this->kvmNetworkHandler) $this->kvmNetworkHandler = new kvmNetwork($this->resellerServices);
        return $this->kvmNetworkHandler;
    }

    /**
     * @return kvmJobs
     */
    public function job(): kvmJobs
    {
        if(!$this->kvmJobHandler) $this->kvmJobHandler = new kvmJobs($this->resellerServices);
        return $this->kvmJobHandler;
    }

    public function list()
    {
        //TODO: Noch nicht in der API
    }

    public function get()
    {
        //TODO: Noch nicht in der API
    }

    /**
     * @param int $cores
     * @param int $memory   In Megabytes
     * @param int $disk     in Gigabytes
     * @param int $ips
     * @param string $os
     * @return array|string
     * @throws GuzzleException
     */
    public function order(int $cores, int $memory, int $disk, int $ips, string $os)
    {
        return $this->resellerServices->post('rootserver/order', [
            'cores' => $cores,
            'memory' => $memory,
            'disk' => $disk,
            'ips' => $ips,
            'os' => $os
        ]);
    }

}