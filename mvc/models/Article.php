<?php
namespace mvc\models;
use owo\Base\ModelClass\ActiveRecord;

/**
 * Model:Article
 * @property string title
 * @property string create_time
 */
class Article extends ActiveRecord{

    // set default charset
    public static function model()
    {
        return parent::model();
    }
}
