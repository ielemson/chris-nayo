<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\KeyFocusArea;
use App\Models\KeyInitiative;
use App\Models\TeamProfile;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = TeamProfile::where("status","active")->get();
        $events = Event::where("status","published")->latest('id')->get();
        $team = TeamProfile::where("id",1)->first();
        $keyinitiatives = KeyInitiative::where("status","published")->latest('id')->get();
        $keyfocusareas = KeyFocusArea::where("status","published")->latest('id')->get();
        // dd($keyinitiative);
        return view("frontend.welcome",compact("teams","events","team","keyinitiatives","keyfocusareas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactus()
    {
        return view("frontend.contactus");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function aboutus()
    {
        $teams = TeamProfile::where("status","active")->get();
        return view("frontend.aboutus",compact("teams"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function donatenow()
    {
        return view("frontend.donatenow");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function singleteam($slug)
    {
        $teamprofile  = TeamProfile::where("slug",$slug)->first();
        return view("frontend.team_profile",compact("teamprofile"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ourprograms()
    {
        return view("frontend.ourprograms");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eventdetails($slug)
    {
       $event = Event::where("slug",$slug)->first();
       $events = Event::where("status","published")->latest()->inRandomOrder()->take(5)->get();
       return view("frontend.event",compact("event","events"));

    }

    public function key_initiative($slug){
        $initiative = KeyInitiative::where("slug",$slug)->first();
        $Keyinitiative = KeyInitiative::findOrFail($initiative->id);
        $previnitiative = KeyInitiative::where('id', '<', $Keyinitiative->id)->orderBy('id', 'desc')->first();
        $nextinitiative = KeyInitiative::where('id', '>', $Keyinitiative->id)->orderBy('id')->first();
        return view("frontend.initiative",compact("initiative","previnitiative","nextinitiative"));
    }

    public function aboutme(){
        
        return view("frontend.aboutme");
    }

    public function medias(){
            $events = Event::where("status","published")->latest()->inRandomOrder()->take(5)->get();
       return view("frontend.medias",compact("events"));
    }

     public function media($slug)
    {
            

        $event = Event::where("slug",$slug)->first();
        $post = Event::findOrFail($event->id);
        $events = Event::where("status","published")->latest()->inRandomOrder()->take(5)->get();
        $previousPost = Event::where('id', '<', $post->id)->orderBy('id', 'desc')->first();
        $nextPost = Event::where('id', '>', $post->id)->orderBy('id')->first();

       return view("frontend.media",compact("event","events","previousPost","nextPost"));

    }

    // public function keyinitiative($slug){
    //     //  $keyinitiatives = KeyInitiative::where("status","published")->latest('id')->get();
    //        $key_initiative = KeyInitiative::where("slug",$slug)->first();
    //     $initiative = Event::findOrFail($key_initiative->id);
    //     $previnitiative = Event::where('id', '<', $initiative->id)->orderBy('id', 'desc')->first();
    //     $nextinitiative = Event::where('id', '>', $initiative->id)->orderBy('id')->first();
    //  return view("frontend.initiative",compact("event","events","previousPost","nextPost"));

    // }
}
