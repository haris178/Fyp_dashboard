<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class ProductController extends Controller
{
    public function index(){
        
        return redirect('/login');
    }

    public function feed_upload(Request $request)
    {
        $name=$request->input('prd_feed');
        $process = new Process(['python', 'C:\xampp\htdocs\fyp_dashboard\public\feed\upload_feed.py', $name]);
        $process->run();
        
        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
        
        
        echo $process->getOutput();

        return redirect('/products');
    }
}
