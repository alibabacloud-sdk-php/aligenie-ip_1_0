<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelServiceCategoryRequest;

use AlibabaCloud\Tea\Model;

class payload extends Model
{
    /**
     * @example HOTEL_SERVICE
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'type' => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
