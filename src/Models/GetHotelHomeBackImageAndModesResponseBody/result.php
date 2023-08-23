<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelHomeBackImageAndModesResponseBody;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelHomeBackImageAndModesResponseBody\result\modeList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example https://ailabs.alibabausercontent.com/platform/3d4fe6d66ec49d9789635f66627f0339/welcome_audios/976210a6532150f49c2677a8b7dbc105/l6fspbhn.jpg
     *
     * @var string
     */
    public $backgroundImage;

    /**
     * @example 宣雍测试橙蜂酒店
     *
     * @var string
     */
    public $hotelName;

    /**
     * @var modeList[]
     */
    public $modeList;
    protected $_name = [
        'backgroundImage' => 'BackgroundImage',
        'hotelName'       => 'HotelName',
        'modeList'        => 'ModeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backgroundImage) {
            $res['BackgroundImage'] = $this->backgroundImage;
        }
        if (null !== $this->hotelName) {
            $res['HotelName'] = $this->hotelName;
        }
        if (null !== $this->modeList) {
            $res['ModeList'] = [];
            if (null !== $this->modeList && \is_array($this->modeList)) {
                $n = 0;
                foreach ($this->modeList as $item) {
                    $res['ModeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackgroundImage'])) {
            $model->backgroundImage = $map['BackgroundImage'];
        }
        if (isset($map['HotelName'])) {
            $model->hotelName = $map['HotelName'];
        }
        if (isset($map['ModeList'])) {
            if (!empty($map['ModeList'])) {
                $model->modeList = [];
                $n               = 0;
                foreach ($map['ModeList'] as $item) {
                    $model->modeList[$n++] = null !== $item ? modeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
