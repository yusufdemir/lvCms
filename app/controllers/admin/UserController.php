<?php
class UserController extends \BaseController
{
    
    /**
     * Display a listing of the resource.
     * GET /user
     *
     * @return Response
     */
    public function index() {
        return View::make('admin.auth.login');
    }
    
    /**
     * Login To User.
     * GET /user
     *
     * @return Response
     */
    public function login() {
        $rules = array(
        'email' 	=> 'required|email',/*|unique:users,email*//*E-mail tablosu ve sütunlarını gezip aynısından varmı diye bakıyor*/
        'password' 	=> 'required|AlphaNum|Between:3,18');
        
        $messages = array(
        	'email.required' 		=> 'Lütfen E-posta adresinizi giriniz.', 
        	'email.email' 			=> 'E-mail adresiniz geçerli bir formatta yazılmamıştır.', 
        	'password.required' 	=> 'Şifre giriniz.', 
        	'password.between' 		=> 'Şifreniz :min - :max karakter olabilir.', 
        	'password.alpha_num'	=> 'Şifreniz sadece harf ve rakamlardan oluşmalıdır.'
        	);
        
        $validator = Validator::make(Input::all(), $rules, $messages);
        
        if ($validator->fails()) {
            //return Redirect::to('login')->withErrors($validator)->withInput(Input::except('password'));
            $response['login_status'] = "invalid"; 
        } else {
            
            $userdata = array('email' => Input::get('email'), 'password' => Input::get('password'));
            
            if (Auth::attempt($userdata)) {
                
                Session::flash('message', array('text'=>'Giriş Başarılı','type'=>'success') );
                $response['login_status'] = "success"; 
                $response['redirect_url'] = URL::route('dashboard');
            } else {
                $response['login_status'] = "invalid";             
            }
        }
        return json_encode($response);
    }

    /**
     * Logout.
     * GET-POST user logout
     *
     * @return Response
     */
    public function anyLogout() {
        Auth::logout();
        return Redirect::to('login');
    }

   /**
     * Show the form for creating a new resource.
     * GET /user/create
     *
     * @return Response
     */
    public function listuser() {
        $users=User::where('deleted','=','0')->get();
        return View::make('admin.user.user-list',compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     * GET /user/create
     *
     * @return Response
     */
    public function create() {
        return View::make('admin.user.user-create');
    }
    
    /**
     * Store a newly created resource in storage.
     * POST /user
     *
     * @return Response
     */
    public function store() {
        
        $rules=array(
            'name'=>'required',
            'surname'=>'required',
            'password'=>'required',
            'email'=>'required|email|unique:users,email'
            );

        $messages=array(
            'name.required'=>'Kullanıcı Adı Boş Geçilemez!',
            'surname.required'=>'Kullanıcı Soyadı Boş Geçilemez!',
            'password.required'=>'Kullanıcı şifresi Boş Geçilemez.',
            'email.required'=>'Email Adresi Gereklidir.',
            'email.unique'=>'Bu E-mail hesabı daha önce kullanılmıştır.'
            );
        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()) {
            Session::flash('notification',array('head'=>'Bilgilendirme Mesajı!','text'=>'Form Hatalı Dolduruldu.','type'=>'error'));
            return Redirect::back()->withErrors($validator)->withInput();
        }else{
            
            $user=new User;
            $user->name=Input::get('name');
            $user->surname=Input::get('surname');
            $user->email=Input::get('email');
            $user->password=Hash::make(Input::get('password'));
            $user->created_at=date('Y-m-d H:i:s');
            $user->vis='admin';
            $user->save();
            return Redirect::to('admin/user/list');
        }
        
    }
    
    /**
     * Display the specified resource.
     * GET /user/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        
        //
        
    }
    
    /**
     * Show the form for editing the specified resource.
     * GET /user/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        
        //
        
    }
    
    /**
     * Update the specified resource in storage.
     * PUT /user/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        
        //
        
    }
    
    /**
     * Remove the specified resource from storage.
     * DELETE /user/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        User::destroy($id);
        Session::flash('notification',array('head'=>'Bilgilendirme Mesajı!','text'=>'Kullanıcı Başarıyla Silindi.','type'=>'success'));
        return Redirect::to('admin/user/list');
    }
}
