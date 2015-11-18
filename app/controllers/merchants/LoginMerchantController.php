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
        // dd(Input::all());
        $validator=Validator::make(Input::all(),array(
                    'user_name'=>Input::get('email'),
                    'password'=>'required|min:6'
                ));

            if($validator->fails())
            {
               
                return Redirect::back()->withErrors($validator)->withInput();
            }else{


                 $field = filter_var(Input::get('email'), FILTER_VALIDATE_EMAIL) ? 'email' : 'user_name';

                $credentials = [
                    $field => Input::get('email'),
                    'password' => Input::get('password'),
                    // 'type'=>1,
                    'status'=>1,

                ];

                $remember=(Input::has('remember')) ?true : false;
            

                $auth=Auth::attempt($credentials, $remember);
                
                if($auth){

                    if(Auth::user()->type ==1){
                        return Redirect::intended('admin/contact');
                    }
                    else if(Auth::user()->type ==2)
                    {
                        return Redirect::intended('admin/profile');
                    }
                    
                 
                }else{
                    //false
                    
                    return Redirect::to('admin/login')->with('global','Username/Email hoặc mật khẩu không đúng!');
                }
                
            }
    }
	

}