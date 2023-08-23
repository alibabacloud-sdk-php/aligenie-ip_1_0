<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelContactByGenieDeviceRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelContactByGenieDeviceRequest\userInfo;
use AlibabaCloud\Tea\Model;

class GetHotelContactByGenieDeviceRequest extends Model
{
    /**
     * @var deviceInfo
     */
    public $deviceInfo;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'deviceInfo' => 'DeviceInfo',
        'userInfo'   => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = null !== $this->deviceInfo ? $this->deviceInfo->toMap() : null;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHotelContactByGenieDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfo = deviceInfo::fromMap($map['DeviceInfo']);
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
