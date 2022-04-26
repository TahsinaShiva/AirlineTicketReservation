<?php

namespace Tests\Unit;

use Tests\TestCase;
use Session;
use DB;
use App\User;
use App\Admin;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\new_user_form_handler;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Redirect;

class new_user_form_handler_Test extends TestCase
{

    /**
 * @test
 * @runInSeparateProcess
 */
use DatabaseTransactions;
    public function testAllUser(){
        $this->Adminlogin(1);
        $UserCon = new new_user_form_handler;
        $user = $UserCon->customer_id()['customer_id']['name'][0];
        $this->assertEquals($user->name,"Jhon");
    }

    public function testdeleteUser(){
        $this->Adminlogin(1);
        $UserCon= new new_user_form_handler;
        $customer_id = Jhon;
        $user = $UserCon->delete_user($customer_id);
        $this->assertDatabaseMissing('Jhon Potter', [
            'customer_id'=>customer_id
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
