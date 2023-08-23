<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class ChildAccountAuthResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $extentions;

    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example 3DB51A10-327C-58D3-91DF-3A5A471C51E7
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $result;

    /**
     * @example 200
     *
     * @var int
     */
    public $statusCode;
    protected $_name = [
        'extentions' => 'Extentions',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'result'     => 'Result',
        'statusCode' => 'StatusCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extentions) {
            $res['Extentions'] = $this->extentions;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChildAccountAuthResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extentions'])) {
            $model->extentions = $map['Extentions'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        return $model;
    }
}
