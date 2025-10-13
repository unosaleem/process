<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function is_mobile(){
        $useragent = $_SERVER['HTTP_USER_AGENT'];
        $iPod = stripos($useragent, "iPod");
        $iPad = stripos($useragent, "iPad");
        $iPhone = stripos($useragent, "iPhone");
        $Android = stripos($useragent, "Android");
        $iOS = stripos($useragent, "iOS");
        //-- You can add billion devices

        $DEVICE = ($iPod||$iPad||$iPhone||$Android||$iOS);

        if ($DEVICE !=true) {
            return  array('code' =>200 ,'device' =>'web' );
        }else{
            return  array('code' =>201 ,'device' =>'mobile' );
        }
    }


    public function index()
    {
        $type = $this->is_mobile();
        return view('pages.index', compact('type'));
    }
    public function BookAppointment()
    {
        $type = $this->is_mobile();
        return view('pages.book-appointment', compact('type'));
    }

    public function Event_detail($even_url)
    {
        $path = "assets/images/events/$even_url/";
        //return $path;
        $images = [];
        if (\File::exists($path)) {
            $files = \File::files($path);
            foreach ($files as $file) {
                $images[] = "assets/images/events/$even_url/" . $file->getFilename();
            }
        }
        return view('pages.event-detail', compact('images', 'even_url'));
    }
}
