<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelsRequest\hotelRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelsRequest\page;
use AlibabaCloud\Tea\Model;

class ListHotelsRequest extends Model
{
    /**
     * @var hotelRequest
     */
    public $hotelRequest;

    /**
     * @var page
     */
    public $page;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'hotelRequest' => 'HotelRequest',
        'page'         => 'Page',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelRequest) {
            $res['HotelRequest'] = null !== $this->hotelRequest ? $this->hotelRequest->toMap() : null;
        }
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHotelsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelRequest'])) {
            $model->hotelRequest = hotelRequest::fromMap($map['HotelRequest']);
        }
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
