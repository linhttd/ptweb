<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "user_profile".
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $firstName
 * @property string|null $lastName
 * @property string|null $phoneNum
 * @property string|null $address
 * @property string|null $email
 *
 * @property User $user
 */
class UserProfile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['firstName', 'lastName', 'phoneNum', 'address', 'email'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'phoneNum' => 'Phone Num',
            'address' => 'Address',
            'email' => 'Email',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
}
