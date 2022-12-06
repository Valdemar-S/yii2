<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "img_history".
 *
 * @property int $id
 * @property string $date
 * @property int $img_count
 * @property int $id_img_url
 *
 * @property ImgCount $imgUrl
 */
class ImgHistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'img_history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'img_count', 'id_img_url'], 'required'],
            [['date'], 'safe'],
            [['img_count', 'id_img_url'], 'integer'],
            [['id_img_url'], 'exist', 'skipOnError' => true, 'targetClass' => ImgCount::class, 'targetAttribute' => ['id_img_url' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'img_count' => 'Img Count',
            'id_img_url' => 'Id Img Url',
        ];
    }

    /**
     * Gets query for [[ImgUrl]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getImgUrl()
    {
        return $this->hasOne(ImgCount::class, ['id' => 'id_img_url']);
    }
}
