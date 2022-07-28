<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupPlanNameRequest extends Model
{
    /**
     * @var string
     */
    public $backupPlanId;

    /**
     * @var string
     */
    public $backupPlanName;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $ownerId;
    protected $_name = [
        'backupPlanId'   => 'BackupPlanId',
        'backupPlanName' => 'BackupPlanName',
        'clientToken'    => 'ClientToken',
        'ownerId'        => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupPlanId) {
            $res['BackupPlanId'] = $this->backupPlanId;
        }
        if (null !== $this->backupPlanName) {
            $res['BackupPlanName'] = $this->backupPlanName;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBackupPlanNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }
        if (isset($map['BackupPlanName'])) {
            $model->backupPlanName = $map['BackupPlanName'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
