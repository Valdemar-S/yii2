<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "img_count".
 *
 * @property int $id
 * @property string $url
 *
 * @property ImgHistory[] $imgHistories
 */
class ImgCount extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'img_count';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['url'], 'required'],
            [['url'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Url',
        ];
    }

    /**
     * Gets query for [[ImgHistories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getImgHistories()
    {
        return $this->hasMany(ImgHistory::class, ['id_img_url' => 'id']);
    }
}
