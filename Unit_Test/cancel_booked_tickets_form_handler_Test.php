<?php

namespace Tests\Unit;

use Tests\TestCase;
use Session;
use DB;
use App\User;
use App\Admin;
use Auth;
use Illuminate\Http\Request;


class cancel_booked_tickets_form_handler_Test extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */


    public function test_cancelticket()
    {
        $response = $this->get('/pnr');
        $response->assertStatus(8931165);
    }
    
    public function test_refund()
    {
            $response=$this->postJson('/pnr');
            $this->assertDatabaseHas('ticket_details', [
                'pnr'=> 8931165,
            ]);
    }
    
    public function test_updatepassenger()
    {
        $response=$this->postJson('/update_passenger/10',  ['passenger_name' => 'haha']);
        $this->assertDatabaseHas('passengers', [
            'passenger_id'=> 'Haha']);
    }
    public function test_deletepassenger()
    {
        $response = $this->get('/remove_passenger/{10}');
        $response->assertStatus(302);
    }

    public function test_flight()
    {
        $response = $this->get('/flight_no');
        $response->assertStatus(200);
    }

     public function test_flightDetails()
    {
        $response=$this->postJson('/update_flight/10',  ['flight_id' => 'edited']);
        $this->assertDatabaseHas('flight_details', [
            'flight_id'=> 'A101']);

}
