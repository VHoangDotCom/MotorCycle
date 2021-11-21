<?php
//
//namespace App\Http\Controllers\Admin\Users;
//
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Auth\AuthenticationException;
//use Illuminate\Support\Facades\Session;
//use App\Models\admin;
//
//class LoginAdminController extends Controllers
//{
//
//    public function index()
//    {
//
//        return view('admin.users.login',[
//            'title'=> "Sign in System"
//        ]);
//    }
//
//    public function postLogin(Request $request){
//        $user = DB::table('users')
//            ->where('username','=', Request::get('username'))
//            ->where('password','=',md5(Request::get('password')))
//            ->get();
//        print_r('<pre>');
//        print_r($user);
//        if (Auth::check()) {
//            dd('Đăng nhập thành công');
//        }
//    }
//
//    public function create()
//    {
//        //
//    }
//
//
//    public function store(Request $request)
//    {
//        $this->validate($request, [
//            'username' => 'required|username:filter',
//            'password' => 'required'
//        ]);
//
//        if (Auth::attempt([
//            'username' => $request->input('username'),
//            'password' => $request->input('password')
//        ], $request->input('remember'))) {
//
//            return redirect()->route('admin');
//        }
//
//        Session::flash('error', 'Email or Password is incorrect !');
//        return redirect()->back();
//    }
//
//
//    public function show($id)
//    {
//        //
//    }
//
//
//    public function edit($id)
//    {
//        //
//    }
//
//    public function update(Request $request, $id)
//    {
//        //
//    }
//
//
//    public function destroy($id)
//    {
//        //
//    }
//}
