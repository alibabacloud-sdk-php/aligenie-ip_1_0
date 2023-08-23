<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelNoticeRequest\userInfo;
use AlibabaCloud\Tea\Model;

class GetHotelNoticeRequest extends Model
{
    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'userInfo' => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHotelNoticeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
