<?php

namespace App\Http\Controllers;

use App\Models\EventReward;
use App\Models\Products;
use App\Models\Events;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $events=Events::all();
        $clicks=0;
        $purchase=0;
        $cart=0;
        $sales=0;
        foreach($events as $item)
        {
            if($item->event['name']=='Click')
            $clicks++;
            elseif($item->event['name']=='Purchase')
            {
                $purchase++;
                foreach($item->event['productIds'] as $sub)
                {
                    $prd=Products::where('sku',$sub)->first();
                    $sales+=$prd->price;
                }

            }
            elseif($item->event['name']=='Add_to_Cart')
            $cart++;
        }

        $reward=EventReward::all();
        $cat=[];
        foreach($reward as $item)
        {
            $prd=Products::where('sku',$item->productId)->first();
            $arr=explode("|",$prd->categories);
            if(isset($cat[$arr[0]]))
            {
                $cat[$arr[0]]=$cat[$arr[0]]+$item->reward;
            }
            else{
                $cat[$arr[0]]=$item->reward;
            }

        }
        

        return view('dashboard',['clicks'=>$clicks,'purchase'=>$purchase,'cart'=>$cart,'sales'=>$sales,'cat'=>$cat]);
    }

    public function products(){
        $products=Products::all();
        return view('products',['products'=>$products]);
    }
    public function events(){
        $event=Events::all();

        $evt=[];
        foreach($event as $item)
        {
            $evt[$item->id]=array();
            $evt[$item->id]['name']=$item->event['name'];
            $evt[$item->id]['product_name']=array();
            foreach($item->event['productIds'] as $sub)
            {
                $prd=Products::where('sku',$sub)->first();
                $evt[$item->id]['product_name'][$sub]=$prd->name;
            }
            $timestamp = (string)$item->createdAt ;
            $str_int = intval($timestamp);
            $time=$str_int;
            $evt[$item->id]['time']=Carbon::createFromTimestamp(strtotime($time),'PKT')->toDateTimeString(); 
        }

        return view('events',['events'=>$evt]);
    }

    public function feeds(){
       
        return view('feed');
    }
}
