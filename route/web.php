<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');  	///this is home page

});
Route::get('/semblanza', function () {       ///redirecting to semblanza
    return view('semblanza');
});
Route::get('/centro', function () {       ///redirecting to centro
    return view('centro');
});
Route::get('/projectos', function () {       ///redirecting to project 
    return view('projectos');
});
Route::get('/eventos', function () {       ///redirecting to event
    return view('eventos');
});
Route::get('/videos', function () {       ///redirecting to videos
    return view('videos');
});
Route::get('/equipo', function () {       ///redirecting to equipo
    return view('equipo');
});
Route::get('/inciodes', function () {       ///redirecting to login
    return view('inciodes');
});
 Route::get('/reg', function () {       ///redirecting to register
     return view('reg');
 });
  Route::get('/LoginAdmin', function () {       ///redirecting to login admin
     return view('LoginAdmin');
  });
 Route::get('/q', function () {       ///redirecting to pedita admin
     return view('pedita');
 });
 
 Route::get('/pupdatea', function () {       ///redirecting to pupdatea admin
     return view('pupdatea');
 });
 
 Route::get('/pnewa', function () {       ///redirecting to pnewa admin
     return view('pnewa');
 });
 Route::get('/pdeletea', function () {       ///redirecting to pdeletea admin
     return view('pdeletea');
 });
  Route::get('/eedita', function () {       ///redirecting to eedita admin
     return view('eedita');
 });
  Route::get('/edeletea', function () {       ///redirecting to edeletea admin
     return view('edeletea');
 });
  Route::get('/enewa', function () {       ///redirecting to enewa admin
     return view('enewa');
 });
 Route::get('/eupdatea', function () {       ///redirecting to eupdatea admin
     return view('eupdatea');
 });
  Route::get('/vedita', function () {       ///redirecting to vedita admin
     return view('vedita');
 });
   Route::get('/vdeletea', function () {       ///redirecting to vdeletea admin
     return view('vdeletea');
 });
    Route::get('/vnewa', function () {       ///redirecting to vnewa admin
     return view('vnewa');
 });
  Route::get('/vupdatea', function () {       ///redirecting to vupdatea admin
     return view('vupdatea');
 });
  Route::get('/qedita', function () {       ///redirecting to qedita admin
     return view('qedita');
 });
   Route::get('/qdeletea', function () {       ///redirecting to qdeletea admin
     return view('qdeletea');
 });
  Route::get('/qnewa', function () {       ///redirecting to qnewa admin
     return view('qnewa');
 });
 Route::get('/qupdatea', function () {       ///redirecting to qupdatea admin
     return view('qupdatea');
 });
 Route::get('/loginuser', function () {       ///redirecting to login user
     return view('loginuser');
  });
  
  Route::get('/peditu', function () {       ///redirecting to login user peditu
     return view('peditu');
  });
    Route::get('/pdeleteu', function () {       ///redirecting to login user pdeleteu
     return view('pdeleteu');
  });
    Route::get('/pnewu', function () {       ///redirecting to login user pnewu
     return view('pnewu');
  });
  Route::get('/pupdateu', function () {       ///redirecting to login user pupdateu
     return view('pupdateu');
  });
  Route::get('/eeditu', function () {       ///redirecting to login user eeditu
     return view('eeditu');
  });
  Route::get('/enewu', function () {       ///redirecting to login user enewu
     return view('enewu');
  }); 
  Route::get('/edeleteu', function () {       ///redirecting to login user edeleteu
     return view('edeleteu');
  });
   Route::get('/eupdateu', function () {       ///redirecting to login user eupdateu
     return view('eupdateu');
  });
  Route::get('/veditu', function () {       ///redirecting to login user veditu
     return view('veditu');
  });
   Route::get('/vdeleteu', function () {       ///redirecting to login user vdeleteu
      return view('vdeleteu');
   });
   Route::get('/vnewu', function () {       ///redirecting to login user vnewu
      return view('vnewu');
   });
   Route::get('/vupdateu', function () {       ///redirecting to login user vupdateu
      return view('vupdateu');
   });
    Route::get('/qeditu', function () {       ///redirecting to login user qeditu
      return view('qeditu');
   });
     Route::get('/qdeleteu', function () {       ///redirecting to login user qdeleteu
      return view('qdeleteu');
   });
     Route::get('/qupdateu', function () {       ///redirecting to login user qupdateu
      return view('qupdateu');
   });
     Route::get('/qnewu', function () {       ///redirecting to login user qnewu
       return view('qnewu');
    });
//Route::post('/registercontroller', 'registercontroller@store');

Route::get('/reg','registercontroller@insertform');    ////register ch page run krnyasathi.
Route::post('registercontroller', 'registercontroller@save'); ////form submit zalyavar redirect hota te page 
Route::get('/inciodes', 'logincontroller@selectform');  //to run the inciar page
Route::post('logincontroller', 'logincontroller@login');//this will redirect to login page after clicking on the link


Route::get('send-mail','registercontroller@save'); //email


//Route::post('peditacontroller','peditacontroller@index');//after clicking on result button it will redirect to viewrecords page

Route::post('peditacontroller','peditacontroller@auth'); //for pedit and fetch data

Route::post('pnewacontroller','pnewacontroller@newdata'); //for insert and fetch

Route::post('pupdateacontroller','pupdateacontroller@update'); //for insert and fetch


Route::post('pdeleteacontroller','pdeleteacontroller@deletedata'); //for delete and fetch


Route::post('eeditacontroller','eeditacontroller@editadmin');  ///for eedit admin and fetch data

Route::post('edeleteacontroller','edeleteacontroller@deleteadmin'); ///for edelete admin and fetch data

Route::post('enewacontroller','enewacontroller@newadmin'); ///for enew admin and fetch data

Route::post('eupdateacontroller', 'eupdateacontroller@updateadmin');  ///for eupdate admin and fetch data
Route::post('veditacontroller', 'veditacontroller@editva');  ///for video edit admin and fetch data

Route::post('vdeleteacontroller', 'vdeleteacontroller@deleteva');  ///for video delete admin and fetch data

Route::post('vnewacontroller', 'vnewacontroller@newva');    ///for video new admin and fetch data
Route::post('vupdateacontroller', 'vupdateacontroller@updateva');    ///for video update admin and fetch data
Route::post('vnewacontroller', 'vnewacontroller@newva');    ///for video new admin and fetch data
Route::post('qeditacontroller', 'qeditacontroller@editqa');    ///for equipo edit admin and fetch data
Route::post('qdeleteacontroller', 'qdeleteacontroller@deleteqa');    ///for equipo delete admin and fetch data
Route::post('qnewacontroller', 'qnewacontroller@newqa');    ///for equipo new admin and fetch data

Route::post('qupdateacontroller', 'qupdateacontroller@updateqa');    ///for equipo update admin and fetch data



Route::post('peditucontroller', 'peditucontroller@auth');    ///for peditu user and fetch data

Route::post('pdeleteucontroller', 'pdeleteucontroller@deletepu');    ///for pdelete user and fetch data

Route::post('pnewucontroller', 'pnewucontroller@newpu');    ///for pnew user and fetch data
Route::post('pupdateucontroller', 'pupdateucontroller@updatepu');    ///for pupdate user and fetch data
Route::post('eeditucontroller', 'eeditucontroller@editeu');    ///for eeditu user and fetch data

Route::post('enewucontroller', 'enewucontroller@neweu');    ///for enewu user and fetch data
Route::post('edeleteucontroller', 'edeleteucontroller@deleteeu');    ///for edeleteu user and fetch data
Route::post('eupdateucontroller', 'eupdateucontroller@updateeu');    ///for eupdateu user and fetch data
Route::post('veditucontroller', 'veditucontroller@editvu');    ///for veditu user and fetch data
Route::post('vdeleteucontroller', 'vdeleteucontroller@deletevu');    ///for vdeleteu user and fetch data
Route::post('vnewucontroller', 'vnewucontroller@newvu');    ///for vnewu user and fetch data
Route::post('vupdateucontroller', 'vupdateucontroller@updatevu');    ///for vdeleteu user and fetch data



Route::post('qeditucontroller', 'qeditucontroller@editqu');    ///for qeditu user and fetch data
Route::post('qdeleteucontroller', 'qdeleteucontroller@deletequ');    ///for qdeleteu user and fetch data
Route::post('qupdateucontroller', 'qupdateucontroller@updatequ');    ///for qupdateuu user and fetch data
Route::post('qnewucontroller', 'qnewucontroller@newqu');    ///for qnewu user and fetch data




Route::get('/loginuser','logincontroller@deleteSessionData'); //login page for user



Route::get('/LoginAdmin','logincontroller@deleteSession'); //login page for admin