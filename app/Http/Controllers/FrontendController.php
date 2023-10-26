<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\hosting_category;
use App\Models\hosting_pakage;
use App\Models\inventorie;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //index
    function index(){
        $hosting_packages = hosting_pakage::all();
        $hosting_categorys = hosting_category::all();
        $clients = client::all();

        $inventoryData = [];
        foreach ($hosting_packages as $package) {
            $inventoryRecords = inventorie::where('package_id', $package->id)->get();
            $inventoryData[$package->id] = $inventoryRecords;
        }
        
        return view('frontend.index', [
            'hosting_packages'=>$hosting_packages,
            'hosting_categorys'=>$hosting_categorys,
            'inventoryData'=>$inventoryData,
            'clients'=>$clients,
        ]);
    }

    // getinventory
    function getinventory(Request $request){
        $packages = inventorie::where('id', $request->inventory_id)->get();

        $str = '';

            $str .= $packages->first()->link;

        echo $str;
     
    }

    // hosting_view
    function hosting_view($id){
        $hosting_packages = hosting_pakage::where('category_id', $id)->get();
        $clients = client::all();

        $inventoryData = [];
        foreach ($hosting_packages as $package) {
            $inventoryRecords = inventorie::where('package_id', $package->id)->get();
            $inventoryData[$package->id] = $inventoryRecords;
        }
        return view('frontend.hosting_view', [
            'hosting_packages'=>$hosting_packages,
            'inventoryData'=>$inventoryData,
            'clients'=>$clients,
        ]);
    }

    // affiliates
    function affiliates(){
        $clients = client::all();
        return view('frontend.affilates', [
            'clients'=>$clients,
        ]);
    }
    
    // contact_us
    function contact_us(){
        $clients = client::all();
        return view('frontend.contact_us', [
            'clients'=>$clients,
        ]);
    }
    
    // about_us
    function about_us(){
        $clients = client::all();
        return view('frontend.about_us', [
            'clients'=>$clients,
        ]);
    }
    // partners
    function partners(){
        $clients = client::all();
        return view('frontend.partners', [
            'clients'=>$clients,
        ]);
    }
    // network
    function network(){
        $clients = client::all();
        return view('frontend.network', [
            'clients'=>$clients,
        ]);
    }
    
    // terms_condition
    function terms_condition(){
        return view('frontend.terms_condition');
    }
    // privacy_policy
    function privacy_policy(){
        return view('frontend.privacy_policy');
    }
}
