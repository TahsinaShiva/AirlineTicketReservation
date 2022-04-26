<?php

namespace Tests\Unit;

use Tests\TestCase;
use Session;
use DB;
use App\User;
use App\Admin;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\JetController;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class add_jet_details_form_handler_Test extends TestCase
{

    /**
 * @test
 * @runInSeparateProcess
 */
use DatabaseTransactions;

    public function testAllproduct(){
        $this->Adminlogin(1);
        $prodCon = new JetController;
        $products = $prodCon->jet_id()['jet_id']['jet_id_info'][0];
        $this->assertEquals($products->jet_type,"Boeing");
    }

    public function testDelete_Product(){
        $this->Adminlogin(1);
        $prodCon = new JetController;
        $jet_id = 10;
        $products = $prodCon->delete_product($jet_id);
        $this->assertDatabaseMissing('jet_details', [
            'jet_id'=>$jet_id
        ]);

    }


   protected function Adminlogin($id){
        $result=DB::table('admin')
                ->where('staff_id', $id)
                ->first();

             if($result && empty(session_id())){
                Session::put('name', $result->admin_name);
                Session::put('staff_id', $result->staff_id);
             }
     }
}
