<?php class Model_User extends Model_Auth_User {

    public function rules()
    {
        return array(
            'username' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 32)),
            ),
            'password' => array(
                array('not_empty'),
            ),

            'email' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 127)),
                array('email'),
            ),
        );
    }
 
 
   
 
  

} ?>