<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreRangeInfoResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeRestoreRangeInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var items
     */
    public $items;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $errCode;
    protected $_name = [
        'requestId'      => 'RequestId',
        'httpStatusCode' => 'HttpStatusCode',
        'items'          => 'Items',
        'errMessage'     => 'ErrMessage',
        'success'        => 'Success',
        'errCode'        => 'ErrCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRestoreRangeInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }

        return $model;
    }
}
