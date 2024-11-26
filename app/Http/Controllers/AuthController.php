<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Services\CommonService;
use Illuminate\Support\Facades\Auth;

use Config;
Class AuthController extends Controller {

    public function __construct()
    {
    }

    // User Login Details
    public function login(LoginRequest $request)
    {
        $auth = new CommonService();
        $user = User::whereEmail($request->email)->first();
        if($user){
            $login = $auth->login($request);
            if($login){
                return response()->json(['status'=>200,'msg'=>'Logged in successfully','url'=>route('home')]);
            }else{
                return response()->json(['status'=>400,'msg'=>'Credentials not matched','data'=>[],'url'=>'']);
            }
        }
        return response()->json(['status'=>400,'msg'=>'User does not exist','data'=>[],'url'=>'']);
    }
    // Register
    public function register(RegisterRequest $request)
    {
        $auth = new CommonService();
        $result = $auth->signup($request);
        if($result){
            $user = User::find($result->id);
            if($user){
                return response()->json(['status'=>200,'msg'=>'Registration done successfully','data'=>$result,'url'=>route('home')]);
            }
            return response()->json(['status'=>400,'msg'=>'Something went wrong ','data'=>[],'url'=>'']);
        }else{
            return response()->json(['status'=>400,'msg'=>'Something went wrong','data'=>[],'url'=>'']);
        }
    }

    public function logout(Request $request)
    {
        $user = User::find(auth()->user()->id);
        Auth::logout();
        $request->session()->invalidate();
        return redirect(route('home'));
    }
}
