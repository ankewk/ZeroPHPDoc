<?php
use Zero\Controller;
use Model\UserModel;

class UserController extends Controller
{

    public function __construct() 
    {
        parent::__construct();
    }

    public function formZero()
    {
        $param = [
            'a' => 'string',
        ];
        $request = $this->Request();
        $request->validation($param);
        $a = $request->getParam('a');
        var_dump($a);exit;
    }

    public function indexZero()
    {
        $userModel = new UserModel();
        //creat user
        // $user = "'anke','27'";
        // $uid = $userModel->create($user);

        //retrieve user
        // $user = $userModel->retrieve('name', 'id=2');
        // var_dump($user);exit;

        //update user
        // $user = $userModel->update("name='wk'", 'id=2');
        // var_dump($user);exit;
    
        //delete user
        // $isDel = $userModel->delete(1);
        // var_dump($isDel);exit;
    }

}