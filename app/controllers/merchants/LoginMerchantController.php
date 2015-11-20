<?php

/**
* 
*/
class LoginMerchantController extends BaseController
{
	public function __construct()
    {
        $this->beforeFilter('csrf', array('on'=>'post'));
    }


	public function getLogin()
	{
		return View::make('merchant.login');
	}

	public function postLogin()
    {   
        $messages = array(
            'user_name.required'    => 'Vui lòng nhập email',
            'user_name.email'    => 'Nhập sai định dạng email, vui lòng nhập lại',
            'password.required'=>'Vui lòng nhập mật khẩu!',
            'password.min'=>'Mật khẩu phải có ít nhất 6 ký tự.',
          
        );
        $validator=Validator::make(Input::all(),array(
                    'user_name'=>'required|email',
                    'password'=>'required|min:6'
                ), $messages);


            if($validator->fails())
            {
               
                return Redirect::back()->withErrors($validator)->withInput();
            }else{


                 $field = filter_var(Input::get('user_name'), FILTER_VALIDATE_EMAIL) ? 'email' : 'user_name';

                $credentials = [
                    $field => Input::get('user_name'),
                    'password' => Input::get('password'),
                    'type'=>2, //merchant
                   
                ];

                $remember=(Input::has('remember')) ?true : false;
            

                $auth=Auth::attempt($credentials, $remember);
                
                if($auth){
                    return Redirect::intended('merchant/trademark-card');
                }else{
                    //false
                    
                    return Redirect::to('merchant-login')->with('global','Email hoặc mật khẩu không đúng!');
                }
                
            }
    }
	

}