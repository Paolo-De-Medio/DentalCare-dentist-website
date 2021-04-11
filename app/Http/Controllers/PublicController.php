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
            ['img'=>'/img/servizi/Estetica.jpg','title'=>'ODONTOIATRIA ESTETICA','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam vitae mollitia quod laboriosam...'],
            ['img'=>'/img/servizi/implantologia.jpg','title'=>'IMPLANTOLOGIA MODERNA','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam vitae mollitia quod laboriosam...'],
            ['img'=>'/img/servizi/Protesi.jpg','title'=>'PROTESI FISSE E MOBILI','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam vitae mollitia quod laboriosam...'],
            ['img'=>'/img/servizi/chirurgia-orale.jpg','title'=>'CHIRURGIA ORALE E PARODONTOLOGIA','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam vitae mollitia quod laboriosam...'],
            ['img'=>'/img/servizi/Conservativa.jpg','title'=>'PREVENZIONE ORALE E IGIENE DENTALE','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam vitae mollitia quod laboriosam...'],
            ['img'=>'/img/servizi/convenzioni.jpg','title'=>'TUTTE LE CONVENZIONI','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam vitae mollitia quod laboriosam...'],
            ['img'=>'/img/servizi/Sonno.jpg','title'=>'MEDICINA DEL SONNO','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam vitae mollitia quod laboriosam...'],
            ['img'=>'/img/servizi/Gnatologia.jpg','title'=>'GNATOLOGIA AVANZATA','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam vitae mollitia quod laboriosam...']


        ];

        return view('servizi', ['trattamenti'=>$trattamenti]);
    }

    public function dettagli($title){

        $trattamenti = [
            ['img'=>'/img/servizi/Estetica.jpg','title'=>'ODONTOIATRIA ESTETICA','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam vitae mollitia quod laboriosam.'],
            ['img'=>'/img/servizi/implantologia.jpg','title'=>'IMPLANTOLOGIA MODERNA','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam vitae mollitia quod laboriosam.'],
            ['img'=>'/img/servizi/Protesi.jpg','title'=>'PROTESI FISSE E MOBILI','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam vitae mollitia quod laboriosam.'],
            ['img'=>'/img/servizi/chirurgia-orale.jpg','title'=>'CHIRURGIA ORALE E PARODONTOLOGIA','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam vitae mollitia quod laboriosam.'],
            ['img'=>'/img/servizi/Conservativa.jpg','title'=>'PREVENZIONE ORALE E IGIENE DENTALE','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam vitae mollitia quod laboriosam.'],
            ['img'=>'/img/servizi/convenzioni.jpg','title'=>'TUTTE LE CONVENZIONI','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam vitae mollitia quod laboriosam.'],
            ['img'=>'/img/servizi/Sonno.jpg','title'=>'MEDICINA DEL SONNO','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam vitae mollitia quod laboriosam.'],
            ['img'=>'/img/servizi/Gnatologia.jpg','title'=>'GNATOLOGIA AVANZATA','description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam vitae mollitia quod laboriosam.']


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
