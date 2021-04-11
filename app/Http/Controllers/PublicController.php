<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class PublicController extends Controller
{
    public function home(){
        return view('index');
    }


    public function staff(){

        $staff = [
            ['img'=>'/img/team/francesco-talamona.png','name'=>'Francesco Talamona','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. At modi rerum, molestias eius et repellendus accusantium necessitatibus provident, nam deleniti nemo!'],
            ['img'=>'/img/team/marco-insabato.png','name'=>'Marco Insabato','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. At modi rerum, molestias eius et repellendus accusantium necessitatibus provident, nam deleniti nemo!'],
            ['img'=>'/img/team/andrea-gernone.png','name'=>'Andrea Gernone','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. At modi rerum, molestias eius et repellendus accusantium necessitatibus provident, nam deleniti nemo!'],
            ['img'=>'/img/team/gaia-assenti.png','name'=>'Gaia Assenti','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. At modi rerum, molestias eius et repellendus accusantium necessitatibus provident, nam deleniti nemo!'],
            ['img'=>'/img/team/antonio-masoni.png','name'=>'Antonio Masoni','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. At modi rerum, molestias eius et repellendus accusantium necessitatibus provident, nam deleniti nemo!'],
            ['img'=>'/img/team/micaela-pizzillo.png','name'=>'Micaela Pizzillo','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. At modi rerum, molestias eius et repellendus accusantium necessitatibus provident, nam deleniti nemo!']


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

    public function form(){
        return view('contatti');
    }


    public function submit(Request $req){

        $user = $req->input('user');
        $message = $req->input('message');
        $email = $req->input('email');

        $contact = compact('user', 'message');

        Mail::to($email)->send(new ContactMail($contact));

        return redirect(route('homepage'))->with('message','La tua richiesta è stata inoltrata!');

    }
}




?>
