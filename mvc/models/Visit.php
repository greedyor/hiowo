<?php
namespace mvc\models;
use owo\Base\ModelClass\ActiveRecord;

/**
 * Model:Visit
 * @property string ip
 * @property string visit_time
 */
class Visit extends ActiveRecord{

    // set default charset
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
