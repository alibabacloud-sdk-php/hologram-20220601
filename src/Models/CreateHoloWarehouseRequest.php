<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Tea\Model;

class CreateHoloWarehouseRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 32
     *
     * @var string
     */
    public $cpu;

    /**
     * @description This parameter is required.
     *
     * @example my_warehouse
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'cpu'  => 'cpu',
        'name' => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHoloWarehouseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}