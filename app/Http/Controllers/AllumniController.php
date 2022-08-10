<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Alumni;
use App\Models\Student;
use App\Models\Region;
use App\Models\Province;
use App\Models\City;
use App\Models\Barangay;
use App\Models\Job;

class AllumniController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getUser(){
        return Student::where('users_id',Auth::id())->get();
    }

    public function insertJob(Request $req){
        $job = new Job();
        $job->salary = $req->income;
        $sample = "";
        $job->alumni_id = $req->userid;
        $job->status = $req->empstatus;
        if($req->empstatus === 'Employed'){
            $sample = "Employed sample";
            $job->sector = $req->sector;
            $job->employername = $req->employername;
            if($req->sector === 2){
                $job->outside = $req->outside;
            }else{
                $job->barangay_id = $req->barangay;
            }
            $job->position = $req->position;
            $job->datestart = $req->from;
            $job->dateend = $req->to;
            $industry = '';
            for($i = 0; $i < count($req->industry) ;$i++){
                $industry .= $req->industry[$i].' & ';
            }
            $job->industry = $industry;
            $job->field = $req->field;
        }else if($req->empstatus === 'Unemployed'){
            $job->hiring = $req->hiring;
            $job->past_employment = $req->employed;
            $sample = "Unemployed sample";
        }else if($req->empstatus === 'Other'){
            $job->religious = $req->religion;
            $sample = "Other sample";
        }else{
            $sample = "Self employed sample";
            $job->status = $req->business;
        }
        $job->save();
        return response()->json(['message'=>""]);
    }
    
    public function index(){
        if(session('loged')){
            return view('allumni.allumnistud.job',
            ['loged'=>true, 'user'=>$this->getUser(), 'region'=>Region::all(), 
            'province'=>$this->province(1), 'city'=>$this->city(1), 'barangay'=>$this->barangay(1)]);
        }else{
            return view('allumni.allumnistud.consent',['loged'=>false]);
        }
    }

    public function info(){
        return view('allumni.allumnistud.info',['loged'=>true, 'user'=>$this->getUser()]);
    }

    public $province;
    public function province($id){
        $prov = Province::where('region_id',$id)->get();
        return $prov;
    }

    public function returnProvince(Request $req){
        return response()->json($this->province($req->id));
    }

    public function city($id){
        return City::where('province_id',$id)->get();
    }

    public function returnCity(Request $req){
        return response()->json($this->city($req->id));
    }

    public function barangay($id){
        return Barangay::where('city_id',$id)->get();
    }

    public function returnBrgy(Request $req){
        return response()->json($this->barangay($req->id));
    }

    protected $json = '';

    public function sample(Request $request){
        $json = json(['firstname'=>$request['empstatus']]);
        return response()->json(['transaction'=>$json,'success'=>true]);
    }
}