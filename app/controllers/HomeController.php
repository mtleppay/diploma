<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function report($id)
	{
            $user = User::find($id);

		return View::make('pages.reports', ['user' => $user]);
	}

    public function report1($id)
    {
        $user = User::find($id);

        return View::make('pages.report1', ['user' => $user]);
    }

    public function report2($id)
    {
        $user = User::find($id);

        return View::make('pages.report2', ['user' => $user]);
    }

    public function report3($id)
    {
        $user = User::find($id);

        return View::make('pages.report3', ['user' => $user]);
    }


	public function showWelcome()
	{
		return View::make('hello');
	}


	public function getEdit(){

		$user = Auth::user();


		return View::make('pages.editUser', ['user' => $user]);

	}


    public  function getReset($id)
    {

        Return View::make('pages.reset');

    }

    public function postUserPasswordChange($id){

        $oldpassword = Input::get('password');
        $newpassword = Input::get('new_password');
        $confirm = Input::get('confirm_new_password');

        $currentpassword =  DB::table('users')->where('id', $id)->pluck('password');

//        dd($oldpassword , $currentpassword );

//        dd(Hash::check($oldpassword , $currentpassword));

//        $validator = Validator::make(Input::all(), User::$change_password_rules);
//        if($validator->passes()){

        if(Hash::check($oldpassword , $currentpassword) && ($newpassword == $confirm) ){

            $user = new User;

            $userdata = array('password' => Hash::make(Input::get('new_password')));

            $user -> where('id', $id)
                ->update($userdata);

            return Redirect::to('/')->with('message', 'Ваш пароль успешно изменен!');

        }else {
            return Redirect::to('/reset/' . $id)->with('global', 'The following errors occurred')->withInput();
        }
    }

	public function getProfile($id)
	{
		
		$user = User::find($id);

		return View::make('pages.profile', ['user' => $user ] );
	}



public function addProfile($id)
{


		$userdata = array(
//            'date' => Input::get('date'),
			'firstName' => Input::get('firstName'),
			'lastName' => Input::get('lastName'),
//			'thirdName' => Input::get('thirdName'),
			'temaRus' => Input::get('temaRus'),
			'temaKaz' => Input::get('temaKaz'),
			'temaEn' => Input::get('temaEn'),
			'rukovoditel' => Input::get('rukovoditel'),
            'patroNumic' => Input::get('patroNumic'),
            'major' => Input::get('major'),

				);


			$user = new User;

			$user -> where('id', $id)
		            ->update($userdata);


			return Redirect::to('/profile/' . $id);

		}


		public function postEdit($id)

    {

    $currentUser = Auth::user()->role;



  if($currentUser == 8) {
        $userdata = array(

            'minutes' => Input::get('minutes'),
            'date' => Input::get('date'),
            'firstName' => Input::get('firstName'),
            'lastName' => Input::get('lastName'),
            'thirdName' => Input::get('thirdName'),
            'patroNumic' => Input::get('patroNumic'),
            'major' => Input::get('major'),
            'temaRus' => Input::get('temaRus'),
            'temaKaz' => Input::get('temaKaz'),
            'temaEn' => Input::get('temaEn'),
            'rukovoditel' => Input::get('rukovoditel'),
            'vopros1' => Input::get('vopros1'),
            'vopros2' => Input::get('vopros2'),
            'vopros3' => Input::get('vopros3'),
            'vopros4' => Input::get('vopros4'),
            'vopros5' => Input::get('vopros5'),
            'vopros6' => Input::get('vopros6'),
            'vopros7' => Input::get('vopros7'),
            'ocenka1' => Input::get('ocenka1'),
            'ocenka2' => Input::get('ocenka2'),
            'ocenka3' => Input::get('ocenka3'),
            'ocenka4' => Input::get('ocenka4'),
            'ocenka5' => Input::get('ocenka5'),
            'ocenka6' => Input::get('ocenka6'),
            'ocenka7' => Input::get('ocenka7'),
            'ocenkaTotal' => Input::get('ocenkaTotal'),
            'ocenkaZaGosy' => Input::get('ocenkaZaGosy'),
            'ocenkaRukovoditelya' => Input::get('ocenkaRukovoditelya'),
            'recendentOcenka' => Input::get('recendentOcenka')

        );
    }
//



    else if($currentUser == 1) {
        $userdata = array(
//            'date' => Input::get('date'),
//            'firstName' => Input::get('firstName'),
//            'lastName' => Input::get('lastName'),
//            'thirdName' => Input::get('thirdName'),
//            'patroNumic' => Input::get('patroNumic'),
//            'major' => Input::get('major'),
//            'temaRus' => Input::get('temaRus'),
//            'temaKaz' => Input::get('temaKaz'),
//            'temaEn' => Input::get('temaEn'),
//            'rukovoditel' => Input::get('rukovoditel'),
            'vopros1' => Input::get('vopros1'),
            'ocenka1' => Input::get('ocenka1'),
            'vopros2' => DB::table('users')->where('id', $id)->pluck('vopros2'),
            'ocenka2' => DB::table('users')->where('id', $id)->pluck('ocenka2'),
            'vopros3' => DB::table('users')->where('id', $id)->pluck('vopros3'),
            'ocenka3' => DB::table('users')->where('id', $id)->pluck('ocenka3'),
            'vopros4' => DB::table('users')->where('id', $id)->pluck('vopros4'),
            'ocenka4' => DB::table('users')->where('id', $id)->pluck('ocenka4'),
            'vopros5' => DB::table('users')->where('id', $id)->pluck('vopros5'),
            'ocenka5' => DB::table('users')->where('id', $id)->pluck('ocenka5'),
            'vopros6' => DB::table('users')->where('id', $id)->pluck('vopros6'),
            'ocenka6' => DB::table('users')->where('id', $id)->pluck('ocenka6'),
            'vopros7' => DB::table('users')->where('id', $id)->pluck('vopros7'),
            'ocenka7' => DB::table('users')->where('id', $id)->pluck('ocenka7'),
//            'ocenkaTotal' => Input::get('ocenkaTotal'),
//            'ocenkaZaGosy' => Input::get('ocenkaZaGosy'),

        );
  }

    else if($currentUser == 2) {
        $userdata = array(
//            'date' => Input::get('date'),
//            'firstName' => Input::get('firstName'),
//            'lastName' => Input::get('lastName'),
//            'thirdName' => Input::get('thirdName'),
//            'patroNumic' => Input::get('patroNumic'),
//            'major' => Input::get('major'),
//            'temaRus' => Input::get('temaRus'),
//            'temaKaz' => Input::get('temaKaz'),
//            'temaEn' => Input::get('temaEn'),
//            'rukovoditel' => Input::get('rukovoditel'),
            'vopros1' => DB::table('users')->where('id', $id)->pluck('vopros1'),
            'ocenka1' => DB::table('users')->where('id', $id)->pluck('ocenka1'),
            'vopros2' => Input::get('vopros2'),
            'ocenka2' => Input::get('ocenka2'),
            'vopros3' => DB::table('users')->where('id', $id)->pluck('vopros3'),
            'ocenka3' => DB::table('users')->where('id', $id)->pluck('ocenka3'),
            'vopros4' => DB::table('users')->where('id', $id)->pluck('vopros4'),
            'ocenka4' => DB::table('users')->where('id', $id)->pluck('ocenka4'),
            'vopros5' => DB::table('users')->where('id', $id)->pluck('vopros5'),
            'ocenka5' => DB::table('users')->where('id', $id)->pluck('ocenka5'),
            'vopros6' => DB::table('users')->where('id', $id)->pluck('vopros6'),
            'ocenka6' => DB::table('users')->where('id', $id)->pluck('ocenka6'),
            'vopros7' => DB::table('users')->where('id', $id)->pluck('vopros7'),
            'ocenka7' => DB::table('users')->where('id', $id)->pluck('ocenka7'),
//            'ocenkaTotal' => Input::get('ocenkaTotal'),
//            'ocenkaZaGosy' => Input::get('ocenkaZaGosy'),

        );
    }

    else if($currentUser == 3) {
        $userdata = array(
//            'date' => Input::get('date'),
//            'firstName' => Input::get('firstName'),
//            'lastName' => Input::get('lastName'),
//            'thirdName' => Input::get('thirdName'),
//            'patroNumic' => Input::get('patroNumic'),
//            'major' => Input::get('major'),
//            'temaRus' => Input::get('temaRus'),
//            'temaKaz' => Input::get('temaKaz'),
//            'temaEn' => Input::get('temaEn'),
//            'rukovoditel' => Input::get('rukovoditel'),
            'vopros1' => DB::table('users')->where('id', $id)->pluck('vopros1'),
            'ocenka1' => DB::table('users')->where('id', $id)->pluck('ocenka1'),
            'vopros2' => DB::table('users')->where('id', $id)->pluck('vopros2'),
            'ocenka2' => DB::table('users')->where('id', $id)->pluck('ocenka2'),
            'vopros3' => Input::get('vopros3'),
            'ocenka3' => Input::get('ocenka3'),
            'vopros4' => DB::table('users')->where('id', $id)->pluck('vopros4'),
            'ocenka4' => DB::table('users')->where('id', $id)->pluck('ocenka4'),
            'vopros5' => DB::table('users')->where('id', $id)->pluck('vopros5'),
            'ocenka5' => DB::table('users')->where('id', $id)->pluck('ocenka5'),
            'vopros6' => DB::table('users')->where('id', $id)->pluck('vopros6'),
            'ocenka6' => DB::table('users')->where('id', $id)->pluck('ocenka6'),
            'vopros7' => DB::table('users')->where('id', $id)->pluck('vopros7'),
            'ocenka7' => DB::table('users')->where('id', $id)->pluck('ocenka7'),
//            'ocenkaTotal' => Input::get('ocenkaTotal'),
//            'ocenkaZaGosy' => Input::get('ocenkaZaGosy'),

        );
    }

    else if($currentUser == 4) {
        $userdata = array(
//            'date' => Input::get('date'),
//            'firstName' => Input::get('firstName'),
//            'lastName' => Input::get('lastName'),
//            'thirdName' => Input::get('thirdName'),
//            'patroNumic' => Input::get('patroNumic'),
//            'major' => Input::get('major'),
//            'temaRus' => Input::get('temaRus'),
//            'temaKaz' => Input::get('temaKaz'),
//            'temaEn' => Input::get('temaEn'),
//            'rukovoditel' => Input::get('rukovoditel'),
            'vopros1' => DB::table('users')->where('id', $id)->pluck('vopros1'),
            'ocenka1' => DB::table('users')->where('id', $id)->pluck('ocenka1'),
            'vopros2' => DB::table('users')->where('id', $id)->pluck('vopros2'),
            'ocenka2' => DB::table('users')->where('id', $id)->pluck('ocenka2'),
            'vopros3' => DB::table('users')->where('id', $id)->pluck('vopros3'),
            'ocenka3' => DB::table('users')->where('id', $id)->pluck('ocenka3'),
            'vopros4' => Input::get('vopros4'),
            'ocenka4' => Input::get('ocenka4'),
            'vopros5' => DB::table('users')->where('id', $id)->pluck('vopros5'),
            'ocenka5' => DB::table('users')->where('id', $id)->pluck('ocenka5'),
            'vopros6' => DB::table('users')->where('id', $id)->pluck('vopros6'),
            'ocenka6' => DB::table('users')->where('id', $id)->pluck('ocenka6'),
            'vopros7' => DB::table('users')->where('id', $id)->pluck('vopros7'),
            'ocenka7' => DB::table('users')->where('id', $id)->pluck('ocenka7'),
//            'ocenkaTotal' => Input::get('ocenkaTotal'),
//            'ocenkaZaGosy' => Input::get('ocenkaZaGosy'),

        );
    }

    else if($currentUser == 5) {
        $userdata = array(
//            'date' => Input::get('date'),
//            'firstName' => Input::get('firstName'),
//            'lastName' => Input::get('lastName'),
//            'thirdName' => Input::get('thirdName'),
//            'patroNumic' => Input::get('patroNumic'),
//            'major' => Input::get('major'),
//            'temaRus' => Input::get('temaRus'),
//            'temaKaz' => Input::get('temaKaz'),
//            'temaEn' => Input::get('temaEn'),
//            'rukovoditel' => Input::get('rukovoditel'),
            'vopros1' => DB::table('users')->where('id', $id)->pluck('vopros1'),
            'ocenka1' => DB::table('users')->where('id', $id)->pluck('ocenka1'),
            'vopros2' => DB::table('users')->where('id', $id)->pluck('vopros2'),
            'ocenka2' => DB::table('users')->where('id', $id)->pluck('ocenka2'),
            'vopros3' => DB::table('users')->where('id', $id)->pluck('vopros3'),
            'ocenka3' => DB::table('users')->where('id', $id)->pluck('ocenka3'),
            'vopros4' => DB::table('users')->where('id', $id)->pluck('vopros4'),
            'ocenka4' => DB::table('users')->where('id', $id)->pluck('ocenka4'),
            'vopros5' => Input::get('vopros5'),
            'ocenka5' => Input::get('ocenka5'),
            'vopros6' => DB::table('users')->where('id', $id)->pluck('vopros6'),
            'ocenka6' => DB::table('users')->where('id', $id)->pluck('ocenka6'),
            'vopros7' => DB::table('users')->where('id', $id)->pluck('vopros7'),
            'ocenka7' => DB::table('users')->where('id', $id)->pluck('ocenka7'),
//            'ocenkaTotal' => Input::get('ocenkaTotal'),
//            'ocenkaZaGosy' => Input::get('ocenkaZaGosy'),

        );
    }

    else if($currentUser == 6) {
        $userdata = array(
//            'date' => Input::get('date'),
//            'firstName' => Input::get('firstName'),
//            'lastName' => Input::get('lastName'),
//            'thirdName' => Input::get('thirdName'),
//            'patroNumic' => Input::get('patroNumic'),
//            'major' => Input::get('major'),
//            'temaRus' => Input::get('temaRus'),
//            'temaKaz' => Input::get('temaKaz'),
//            'temaEn' => Input::get('temaEn'),
//            'rukovoditel' => Input::get('rukovoditel'),
            'vopros1' => DB::table('users')->where('id', $id)->pluck('vopros1'),
            'ocenka1' => DB::table('users')->where('id', $id)->pluck('ocenka1'),
            'vopros2' => DB::table('users')->where('id', $id)->pluck('vopros2'),
            'ocenka2' => DB::table('users')->where('id', $id)->pluck('ocenka2'),
            'vopros3' => DB::table('users')->where('id', $id)->pluck('vopros3'),
            'ocenka3' => DB::table('users')->where('id', $id)->pluck('ocenka3'),
            'vopros4' => DB::table('users')->where('id', $id)->pluck('vopros4'),
            'ocenka4' => DB::table('users')->where('id', $id)->pluck('ocenka4'),
            'vopros5' => DB::table('users')->where('id', $id)->pluck('vopros5'),
            'ocenka5' => DB::table('users')->where('id', $id)->pluck('ocenka5'),
            'vopros6' => Input::get('vopros6'),
            'ocenka6' => Input::get('ocenka6'),
            'vopros7' => DB::table('users')->where('id', $id)->pluck('vopros7'),
            'ocenka7' => DB::table('users')->where('id', $id)->pluck('ocenka7'),
//            'ocenkaTotal' => Input::get('ocenkaTotal'),
//            'ocenkaZaGosy' => Input::get('ocenkaZaGosy'),

        );
    }

    else {
        $userdata = array(
//            'date' => Input::get('date'),
//            'firstName' => Input::get('firstName'),
//            'lastName' => Input::get('lastName'),
//            'thirdName' => Input::get('thirdName'),
//            'patroNumic' => Input::get('patroNumic'),
//            'major' => Input::get('major'),
//            'temaRus' => Input::get('temaRus'),
//            'temaKaz' => Input::get('temaKaz'),
//            'temaEn' => Input::get('temaEn'),
//            'rukovoditel' => Input::get('rukovoditel'),
            'vopros1' => DB::table('users')->where('id', $id)->pluck('vopros1'),
            'ocenka1' => DB::table('users')->where('id', $id)->pluck('ocenka1'),
            'vopros2' => DB::table('users')->where('id', $id)->pluck('vopros2'),
            'ocenka2' => DB::table('users')->where('id', $id)->pluck('ocenka2'),
            'vopros3' => DB::table('users')->where('id', $id)->pluck('vopros3'),
            'ocenka3' => DB::table('users')->where('id', $id)->pluck('ocenka3'),
            'vopros4' => DB::table('users')->where('id', $id)->pluck('vopros4'),
            'ocenka4' => DB::table('users')->where('id', $id)->pluck('ocenka4'),
            'vopros5' => DB::table('users')->where('id', $id)->pluck('vopros5'),
            'ocenka5' => DB::table('users')->where('id', $id)->pluck('ocenka5'),
            'vopros6' => DB::table('users')->where('id', $id)->pluck('vopros6'),
            'ocenka6' => DB::table('users')->where('id', $id)->pluck('ocenka6'),
            'vopros7' => Input::get('vopros7'),
            'ocenka7' => Input::get('ocenka7'),
//            'ocenkaTotal' => Input::get('ocenkaTotal'),
//            'ocenkaZaGosy' => Input::get('ocenkaZaGosy'),

        );
    }

//        $validator = Validator::make(
//
//            $userdata,
//
//
//
//            array(
//                'firstName' => '',
//                'lastName' => '',
//                'thirdName' => '',
//                'temaRus' => '',
//                'temaKaz' => '',
//                'temaEn' => '',
//                'rukovoditel' => '',
//                'vopros1' => '',
//                'vopros2' => '',
//                'vopros3' => '',
//                'vopros4' => '',
//                'vopros5' => '',
//                'ocenkaTotal' => '',
//                'ocenkaZaGosy' => '',
//                'patroNumic' => '',
//                'major' => '',
//            )
//
//
//
//        );
//
//        if ($validator->fails()){
//            return Redirect::to('/students')->withErrors($validator);
//        }
//
//        else{



            $ocenki = array($userdata['ocenka1'],$userdata['ocenka2'],$userdata['ocenka3'],$userdata['ocenka4'],$userdata['ocenka5'],$userdata['ocenka6'],$userdata['ocenka7']);

            $sum = 0;
            $count = 0;
            foreach($ocenki as $ocenka){
                if($ocenka > 0) {
                    $sum += $ocenka;
                    $count++;
                }

            }

            if($count==0){
            $count = 1;
            }


            $userdata['ocenkaTotal'] = round($sum/$count,0);



			$user = User::find($id);

            $userdata['email'] = $user->email;
            $userdata['password'] = $user->password;



			$user -> where('id' ,$id)
		            ->update($userdata);




//			return Redirect::to('/students');



		}



    public function search()
    {

        $date = Input::all();

        $users = User::where('date' , '=' , $date['date'])->orderBy('lastName')->get();


        return View::make('pages.search' , ['users' => $users]);

    }




}
