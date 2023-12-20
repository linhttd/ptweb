<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $role
 *
 * @property UserProfile $userProfiles
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'role'], 'required'],
            [['username', 'password', 'role'], 'string', 'max' => 255],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
  
    /**
     * Gets query for [[UserProfiles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserProfiles()
    {
        return $this->hasOne(UserProfile::class, ['user_id' => 'id']);
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Tên người dùng',
            'password' => 'Mật khẩu',
            // 'email' => 'Email',
            'role' => 'Chức năng',
           
        ];
    }
}
