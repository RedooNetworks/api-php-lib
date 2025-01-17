<?php
// Copyright 1999-2020. Plesk International GmbH.

namespace PleskX\Api\Struct\Site;

class GeneralInfo extends \PleskX\Api\Struct
{
    /** @var string */
    public $name;

    /** @var string */
    public $asciiName;

    /** @var string */
    public $guid;

    /** @var string */
    public $status;

    /** @var string */
    public $description;

    /** @var int */
    public $webspaceId ;

    /** @var string */
    public $webspaceGuid;

    /** @var string */
    public $dnsIpAddress;

    /** @var string */
    public $crDate;

    /** @var int */
    public $realSize;


    public function __construct($apiResponse)
    {
        $this->_initScalarProperties($apiResponse, [
            'name',
            'ascii-name',
            'status',
            'guid',
            'description',
            'webspace-id',
            'dns_ip_address',
            'cr_date',
            'real_size',
            'webspace-guid',
        ]);
    }
}
