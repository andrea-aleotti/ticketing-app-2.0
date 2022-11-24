<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadEvent;

class EventUploadController extends Controller
{
    public function uploadEvent(Request $request){
        $this->validate($request, [
            'eventName' => 'required',
            'eventPrice' => 'required',
            'eventDescription' => 'required',
            'eventPlace' => 'required',
            'eventTime' => 'required',
            'eventDate' => 'required',
        ]);

        UploadEvent::create([
            'eventName' => $request['eventName'],
            'eventPrice' => $request['eventPrice'],
            'eventDescription' => $request['eventDescription'],
            'eventPlace' => $request['eventPlace'],
            'eventTime' => $request['eventTime'],
            'eventDate' => $request['eventDate']
        ]);
        /*
        $event = new uploadEvent();


        $event -> eventName = 'eventName';
        $event -> eventPrice = 'eventPrice';
        $event -> eventDescription = 'eventDescription';
        $event -> eventPlace = 'eventPlace';
        $event -> eventTime = 'eventTime';
        $event -> eventDate = 'eventDate';

        $event -> save();
        */
        return back()->with('success', 'All data has been saved');
    }
}
