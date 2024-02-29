<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelRoomsRequest\hotelAdminRoom;
use AlibabaCloud\Tea\Model;

class ListHotelRoomsRequest extends Model
{
    /**
     * @var hotelAdminRoom
     */
    public $hotelAdminRoom;

    /**
     * @example e6dd44fd16084db8a60d69fd625d9f0f
     *
     * @var string
     */
    public $hotelId;
    protected $_name = [
        'hotelAdminRoom' => 'HotelAdminRoom',
        'hotelId'        => 'HotelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelAdminRoom) {
            $res['HotelAdminRoom'] = null !== $this->hotelAdminRoom ? $this->hotelAdminRoom->toMap() : null;
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHotelRoomsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelAdminRoom'])) {
            $model->hotelAdminRoom = hotelAdminRoom::fromMap($map['HotelAdminRoom']);
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        return $model;
    }
}
