<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.

namespace PleskX\Api\Operator;
use PleskX\Api\Struct\Session as Struct;

class Session extends \PleskX\Api\Operator
{

    /**
     * @return Struct\Info[]
     */
    public function get()
    {
        $sessions = [];
        $response = $this->request('get');

        foreach ($response->session as $sessionInfo) {
            $sessions[(string)$sessionInfo->id] = new Struct\Info($sessionInfo);
        }

        return $sessions;
    }

    /**
     * @param string $sessionId
     * @return bool
     */
    public function terminate($sessionId)
    {
        $response = $this->request("terminate.session-id=$sessionId");
        return 'ok' === (string)$response->status;
    }

}