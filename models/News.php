<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $title
 * @property resource $content
 * @property integer $ctime
 * @property integer $uctime
 */
class News extends ActiveRecord
{
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['ctime', 'utime'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['utime'],
                ],
                // if you're using datetime instead of UNIX timestamp:
                // 'value' => new Expression('NOW()'),
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content','cover'], 'string'],
            [['ctime', 'utime'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '新闻编号',
            'title' => '新闻标题',
            'content' => '新闻内容',
            'cover' => '新闻封面',
            'ctime' => '创建时间',
            'utime' => '更新时间',
        ];
    }

}
