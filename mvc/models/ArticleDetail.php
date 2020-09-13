<?php
namespace mvc\models;
use owo\Base\ModelClass\ActiveRecord;

/**
 * Model:ArticleDetail
 * @property int id
 * @property int article_id
 * @property string content
 */
class ArticleDetail extends ActiveRecord{

    // set default charset
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
