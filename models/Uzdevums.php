<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "uzdevums".
 *
 * @property int $id
 * @property string $nosaukums
 * @property string $termins
 * @property int|null $statuss
 */
class Uzdevums extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'uzdevums';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['statuss'], 'default', 'value' => null],
            [['nosaukums', 'termins'], 'required'],
            [['termins'], 'safe'],
            [['user_id'], 'integer'],
            [['statuss'], 'integer'],
            [['nosaukums'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nosaukums' => Yii::t('app', 'Nosaukums'),
            'termins' => Yii::t('app', 'Termins'),
            'statuss' => Yii::t('app', 'Statuss'),
            'user_id' => Yii::t('app', 'Lietotāja ID'),
        ];
    }

}
