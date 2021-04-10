<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        return view('index');
    }


    public function staff(){

        $staff = [
            ['img'=>'','name'=>'francesco','description'=>'descrizione 1'],
            ['img'=>'','name'=>'gianluca','description'=>'descrizione 2'],
            ['img'=>'','name'=>'laura','description'=>'descrizione 3'],
            ['img'=>'','name'=>'giovanni','description'=>'descrizione 4']
        ];

        return view('chiSiamo', ['staff'=>$staff]);
    }

    public function trattamenti(){

        $trattamenti = [
            ['icon'=>'','title'=>'titolo 1','description'=>'testo 1'],
            ['icon'=>'','title'=>'titolo 2','description'=>'testo 2'],
            ['icon'=>'','title'=>'titolo 3','description'=>'testo 3'],
            ['icon'=>'','title'=>'titolo 4','description'=>'testo 4'],
            ['icon'=>'','title'=>'titolo 5','description'=>'testo 5'],
            ['icon'=>'','title'=>'titolo 6','description'=>'testo 6']

        ];

        return view('servizi', ['trattamenti'=>$trattamenti]);
    }

    public function dettagli($title){

        $trattamenti = [
            ['icon'=>'','title'=>'titolo 1','description'=>'testo 1'],
            ['icon'=>'','title'=>'titolo 2','description'=>'testo 2'],
            ['icon'=>'','title'=>'titolo 3','description'=>'testo 3'],
            ['icon'=>'','title'=>'titolo 4','description'=>'testo 4'],
            ['icon'=>'','title'=>'titolo 5','description'=>'testo 5'],
            ['icon'=>'','title'=>'titolo 6','description'=>'testo 6']

        ];

        foreach($trattamenti as $trattamento){
            if($trattamento['title']==$title){

                return view('dettaglioServizio', ['trattamento'=>$trattamento]);
            }
        }
    }
}


?>
