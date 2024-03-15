<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class upload extends Controller
{

    public function check_process($url_id){
        $urlId = $url_id;
        $status = "ok";
        
        $results = DB::table('req')
                    ->select('id', 'url_id', 'pred_1', 'pred_2', 'pred_3', 'pred_4', 'pred_5', 'pred_6', 'max_acc', 'views', 'status', 'img_path')
                    ->where('url_id', $urlId)
                    ->where('status', $status)
                    ->get();
        if ($results->count() > 0) {
            // Query result is not empty
            // Your code 
            $resu = $results->first();
            return view("result", ['results' => $resu]);
        } else {
            // Query result is empty
            // Your code here
            return view("wait_10");
        }
        
    }
    public function update_value(Request $req){
        $url_id = $req->input("url_id");
        $pred_1 = $req->input("pred_1");
        $pred_2 = $req->input("pred_2");
        $pred_3 = $req->input("pred_3");
        $pred_4 = $req->input("pred_4");
        $pred_5 = $req->input("pred_5");
        $pred_6 = $req->input("pred_6");
        $max_acc = $req->input("max_acc");
        $view = $req->input("view");

        DB::table('req')
        ->where('url_id', $url_id)
        ->update([
            'pred_1' => $pred_1,
            'pred_2' => $pred_2,
            'pred_3' => $pred_3,
            'pred_4' => $pred_4,
            'pred_5' => $pred_5,
            'pred_6' => $pred_6,
            'max_acc' => $max_acc,
            'views' => $view,
            'status' => 'ok',
        ]);

        return "Data updated successfully.";
        
        


    }
    public function upload_file(Request $request){
        #echo "<pre>";
        #print_r($request->all());
        #$req->file('image')
        #$path = $request->file('image')->store('public');

        // The $path variable already contains the public URL,
        // so you can directly use it to display the image in your view
        #return response()->json(['url' => $path]);


        #$img  = time().'.jpg';

        #$request->image->move(public_path('public'),$img);

        #return $img;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $url_id = time();
            $img = $url_id . '.jpg';
            // Store the file in the "public" disk (which corresponds to the "public_path('storage')" directory)
            $path = $file->move(public_path()."/public/", $img);
            
            $commd = "nohup python3 ".public_path()."/test_model_exec.py ".public_path("/public")."/".$img." '".$url_id."' >> /dev/null 2>&1 &";
            print_r($commd);
            shell_exec($commd);

            DB::table("req")->insert([
                'url_id' => ''.$url_id.'',
                'status' => 'process',
                'img_path' => ''.$img.'',
                'pred_1' => 'p',
                'pred_2' => 'p',
                'pred_3' => 'p',
                'pred_4' => 'p',
                'pred_5' => 'p',
                'pred_6' => 'p',
                'max_acc' => 'p',
                'views' => 'p'
                
            ]);
            return redirect('/process/'.$url_id.'');

            
        } else {
            return response()->json(['error' => 'No file uploaded.']);
        }

        
    }
}
