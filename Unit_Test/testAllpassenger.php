<?php

namespace Tests\Unit;

use Tests\TestCase;
use Session;
use DB;
use App\User;
use App\Admin;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\TicketController;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class add_ticket_details_form_handler extends TestCase
{

    /**
 * @test
 * @runInSeparateProcess
 */
use DatabaseTransactions;
    public function testAllpassenger(){
        parent::setUp();
        $this->Adminlogin(1);
        $TicketCon = new TicketController;
        $passenger = $TicketCon->all_passenger()['passenger_id']['pnr'][0];
        $this->assertEquals($passenger->passenger_id,"Ron");
    }

    public function testDelete_passenger(){
        $this->Adminlogin(1);
        $prodCon = new TicketController;
        $passenger_id = 10;
        $passenger = $prodCon->delete_passenger($passenger_id);
        $this->assertDatabaseMissing('pnr', [
            'passenger_id'=>$passenger_id
        ]);

    }


    public function testUpdate_passenger(){
        $this->Adminlogin(1);
        $TicketCon = new TicketController;
        $passenger_id = 10;
        $request= new Request();
        $request->replace([
            'passenger_id'=>'Testpassenger',
            'pnr' => 1,
            'name'=> 'TestPasserngerStatus',
        ]);
        $passenger = $TicketCon->update_passenger($request,$passenger_id);
        $this->assertDatabaseHas('passengers', [
            'passenger_id'=>'Testpassenger',

        ]);
        $this->assertDatabaseHas('passengers', [
            'pnr' => 1,

        ]);
        $this->assertDatabaseHas('passengers', [
            'name'=> 'TestPasserngerStatus',

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
