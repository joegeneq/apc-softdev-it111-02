<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
	public $first_name; 
	public $last_name; 
	public $address; 
	public $contact_Number; 
	public $birthdate;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],
			
			['first_name', 'required'], 
 ['first_name', 'string', 'min' => 2, 'max' => 20], 
 ['last_name', 'required'], 
 ['last_name', 'string', 'min' => 2, 'max' => 20], 
 ['birthdate', 'safe'], 
 ['birthdate', 'required'], 
 ['contact_Number', 'required'], 
 ['contact_Number', 'integer'], 
 ['contact_Number', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This phone number is already registered.'], 
 ['contact_Number', 'string', 'min' => 11, 'max' => 11], 
 ['address', 'required'], 
 ['address', 'string', 'min' => 20, 'max' => 255], 
 /* 
 ['contact_Number', 'required'], 
 ['contact_Number', 'safe'], 
 ['contact_Number', 'int', 'min' => 11, 'max' =>11],
*/			
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
			$user->first_name = $this->first_name; 
			$user->last_name = $this->last_name; 
			$user->birthdate = $this->birthdate; 
			$user->address = $this->address; 
			$user->contact_Number = $this->contact_Number; 
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}
