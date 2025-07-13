<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * SignupForm is the model behind the SignUp form.
 *
 * @property-read User|null $user
 *
 */
class SignUpForm extends Model
{
    public $username;
    public $password;
    public $verifypassword;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['username', 'password', 'verifypassword'], 'required', 'message' => 'Lauks "{attribute}" nevar būt tukšs.'],
            ['username', 'unique', 'targetClass' => '\app\models\User'],
            ['password', 'string', 'min' => 6],
            ['verifypassword', 'compare', 'compareAttribute' => 'password', 'message' => "Paroles nesakrīt!"],
        ];
    }
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        return $user->save() ? $user : null;
    }

        public function attributeLabels()
    {
        return [
            'username' => Yii::t('app', 'Lietotājvārds'),
            'password' => Yii::t('app', 'Parole'),
            'verifypassword' => Yii::t('app', 'Parole atkārtoti'),
        ];
    }
}
