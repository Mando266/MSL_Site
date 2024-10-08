<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\People ;

class PageController extends Controller
{
    public function home() {
        return view('pages.home') ;
    }

    public function about() {
        return view('pages.about') ;
    }

    public function services() {
        return view('pages.services') ;
    }

    public function canalTransit() {
        return view('pages.services.canal_transit');
    }
    
    public function huspandary() {
        return view('pages.services.huspandary');
    }
    
    
    public function novcc() {
        return view('pages.services.novcc');
    }

    public function seaFreight() {
        return view('pages.services.sea-freight');
    }
        

    public function team() {
        return view('pages.team') ;
    }


    public function contact() {
        return view('pages.contact') ;
    }

    public function contactSubmit(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:10',
        ]);

        // Prepare the data for the email
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        // Send the email using Laravel's Mail facade
        Mail::send([], [], function ($message) use ($data) {
            $message->from('temperature.discrepancies@middleeastshipping.net', 'Middle East Shipping')
                    ->to('info@meastline.com')
                    ->subject('New Contact Message')
                    ->setBody(
                        '<h3>New Contact Message</h3>' .
                        '<p><strong>Name:</strong> ' . $data['name'] . '</p>' .
                        '<p><strong>Email:</strong> ' . $data['email'] . '</p>' .
                        '<p><strong>Message:</strong> ' . $data['message'] . '</p>',
                        'text/html'
                    );
        });

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function corporate() {
        return view('pages.corporate') ;
    }

    public function trampAgency() {
        $people = People::all();
        return view('pages.tramp_agency', compact('people')) ;
    } 

    public function suezCanalTransitAgency() {
        $people = People::all();
        return view('pages.suez_canal_transit_agency', compact('people')) ;
    } 

    public function piHmCorrespondents() {
        $people = People::all();
        return view('pages.pi_hm_correspondents', compact('people')) ;
    } 


    public function marineCargoSurveyors() {
        $people = People::all();
        return view('pages.marine_cargo_surveyors', compact('people')) ;
    } 

    public function flagInspectors() {
        $people = People::all();
        return view('pages.flag_inspectors', compact('people'));
    } 


    public function umuBargeOwners() {
        $people = People::all();
        return view('pages.umu_barge_owners' , compact('people')) ;
    } 


    

}
