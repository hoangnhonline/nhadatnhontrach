<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Settings;


use Helper, File, Session, Auth,Mail;

class ContactController extends Controller
{ 
   
    public function store(Request $request)
    {
        $dataArr = $request->all();
        
        $this->validate($request,[                       
            'email' => 'email|required',
            'fullname' => 'required',
            'content' => 'required',
            'phone' => 'required'         
        ],
        [            
            'fullname.required' => 'Bạn chưa nhập họ và tên.',
            'email.required' => 'Bạn chưa nhập email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'phone.required' => 'Bạn chưa nhập số điện thoại.',
            'content.required' => 'Bạn chưa nhập nội dung.'            
        ]);       

        $rs = Contact::create($dataArr);
         $settingArr = Settings::whereRaw('1')->lists('value', 'name');        
        Mail::send('frontend.contact.email',
            [                   
                'dataArr'             => $rs
            ],
            function($message) use ($dataArr, $settingArr) {                    
                $message->subject('Khách hàng gửi liên hệ');
                $message->to([$settingArr['email_nhan']]);
                $message->from('web.0917492306@gmail.com', 'nhontrachdatnen.com');
                $message->sender('web.0917492306@gmail.com', 'nhontrachdatnen.com');
        });
        Session::flash('message', 'Gửi liên hệ thành công.');

        return redirect()->route('contact');
    }
    
}
