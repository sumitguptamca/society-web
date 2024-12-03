<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class FrontendController extends Controller
{
    
    public function index(){
           
        $metaTags = [];
        $metaTags["title"] = " ";
        $metaTags["description"] = "#";
        $metaTags["keywords"] = "#";
        return view('Frontend/index', [
            'metaTags' => $metaTags
        ]); 
    }
    
     public function portfolio(){ 
         $metaTags = [];
        $metaTags["title"] = "#";
        $metaTags["description"] = "#";
        $metaTags["keywords"] = "#";
        return view('Frontend/portfolio', [
            'metaTags' => $metaTags
        ]);
    }
    
      public function price(){
          $metaTags = [];
        $metaTags["title"] = "#";
        $metaTags["description"] = "#";
        $metaTags["keywords"] = "#";
        return view('Frontend/price', [
            'metaTags' => $metaTags
        ]);
    }


    public function about(){
        $metaTags = [];
        $metaTags["title"] = " ";
        $metaTags["description"] = "";
        return view('Frontend/about', [
            'metaTags' => $metaTags
        ]);
    }

    public function software(){
        $metaTags = [];
        $metaTags["title"] = "Powerful Software Solutions for Your Business";
        $metaTags["description"] = "Explore -TechSoch Software Solution innovative software solutions tailored to enhance efficiency and drive growth. Discover our features and get started today!";
        $metaTags["keywords"] = "Software Solutions, Business Software, Custom Software, Software Development, Enterprise Software, Software Services, Software Products, Innovative Software, Software Features, Custom Software Solutions, Software for Business, Software Applications, Cloud Software, Software Integration, Software Tools, Software for Efficiency, Software Development Services, Scalable Software Solutions, Software Systems, Software Company";
        return view('Frontend/software', [
            'metaTags' => $metaTags
        ]);
    }

    public function web_dev(){
        $metaTags = [];
        $metaTags["title"] = "Expert Web Development Services | Custom Solutions by";
        $metaTags["description"] = "Discover top-notch web development services by TechSoch Software Solution. We build custom, scalable websites to enhance your online presence. Get your quote today!";
        $metaTags["keywords"] = "Web Development Services, Custom Web Development, Professional Web Development, Scalable Websites, Web Development Company, Website Development Solutions, Full-Stack Development, Front-End Development, Back-End Development, Responsive Web Development, E-commerce Development, Website Development, Web Application Development, Web Development Experts, Web Development Agency, Custom Website Solutions, PHP Development, JavaScript Development, HTML/CSS Development, WordPress Development";
        return view('Frontend/web_dev', [
            'metaTags' => $metaTags
        ]);
    }

    public function mobile_app(){
        $metaTags = [];
        $metaTags["title"] = "Custom Mobile App Development Services";
        $metaTags["description"] = "Discover innovative mobile app development services by TechSoch Software Solution. We create custom apps for iOS and Android. Get your free consultation today!";
        $metaTags["keywords"] = "Mobile App Development, Custom Mobile Apps, iOS App Development, Android App Development, Mobile App Solutions, App Development Services, Mobile App Design, Mobile App Developers, Cross-Platform Apps, Mobile App Development Company, Custom App Solutions, Enterprise Mobile Apps, App Development Agency, Mobile Software Development, Innovative Mobile Apps, App Development Consultation, Mobile App Experts, User-Friendly Mobile Apps, Scalable Mobile Apps, Mobile App Programming";
        return view('Frontend/mobile_app', [
            'metaTags' => $metaTags
        ]);
    }

    public function e_commerce(){
        $metaTags = [];
        $metaTags["title"] = "Custom E-commerce Development Services";
        $metaTags["description"] = "Discover top-notch e-commerce development services by TechSoch Software Solution. We create scalable online stores to boost your sales. Get a free quote today!";
        $metaTags["keywords"] = "E-commerce Development, Online Store Development, Custom E-commerce Solutions, E-commerce Website Design, Scalable E-commerce Platforms, E-commerce Web Development, E-commerce Solutions, E-commerce Development Services, E-commerce Experts, E-commerce Website Builders, Secure Online Shopping, E-commerce Integration, Mobile E-commerce, Responsive E-commerce Websites, E-commerce Design and Development, Custom Online Stores, E-commerce Platform Development, Professional E-commerce Services, E-commerce Optimization, Shopping Cart Development";
        return view('Frontend/e_commerce', [
            'metaTags' => $metaTags
        ]);
    }

    public function ui_ux(){
        $metaTags = [];
        $metaTags["title"] = "Professional UI/UX Design Services";
        $metaTags["description"] = "Discover exceptional UI/UX design services by TechSoch Software Solution. We create intuitive and engaging user interfaces. Boost your user satisfaction today!";
        $metaTags["keywords"] = "UI/UX Design, User Interface Design, User Experience Design, UI Design Services, UX Design Services, Professional UI/UX, Custom UI/UX Solutions, Intuitive UI Design, Engaging UX Design, UI/UX Experts, UI/UX Development, User-Centered Design, Mobile UI/UX, Responsive UI/UX, UI/UX Consulting, Interactive UI Design, UX Research and Design, UI/UX Optimization, Usability Testing, UI/UX Design Company";
        return view('Frontend/ui_ux', [
            'metaTags' => $metaTags
        ]);
    }

    public function digital_marketing(){
        $metaTags = [];
        $metaTags["title"] = "#";
        $metaTags["description"] = "#";
        $metaTags["keywords"] = "###";
        return view('Frontend/digital_marketing', [
            'metaTags' => $metaTags
        ]);
    }

    public function outsource(){
        $metaTags = [];
        $metaTags["title"] = "#";
        $metaTags["description"] = "#";
        $metaTags["keywords"] = "#";
        return view('Frontend/outsource', [ 
            'metaTags' => $metaTags
        ]);
    }

    public function support(){
        $metaTags = [];
        $metaTags["title"] = "#";
        $metaTags["description"] = "#";
        $metaTags["keywords"] = "#";
        return view('Frontend/support', [
            'metaTags' => $metaTags
        ]);
    }

    public function industries(){
        $metaTags = [];
        $metaTags["title"] = "#";
        $metaTags["description"] = "#";
        $metaTags["keywords"] = "#";
        return view('Frontend/industries', [
            'metaTags' => $metaTags
        ]);
    }

    public function contact(){
        $metaTags = [];
        $metaTags["title"] = "#";
        $metaTags["description"] = "#";
        $metaTags["keywords"] = "#";
        return view('Frontend/contact', [
            'metaTags' => $metaTags
        ]);
    }
    
    public function sendEmails(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required',
            'message' => 'required|string',
        ]);

        Mail::to('diliptech16@gmail.com')->send(new SendEmail($request->all()));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

}
