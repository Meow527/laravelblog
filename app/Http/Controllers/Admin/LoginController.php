<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tool\Validate\ValidateCode;  //生成验证码


class LoginController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    //产生验证码 并且存入session
    public function create_code(Request $request)
    {
        $validateCode = new ValidateCode;
        //将验证码存入session
        $request->session()->put('validate_code', $validateCode->getCode());
        return $validateCode->doimg();
    }
}