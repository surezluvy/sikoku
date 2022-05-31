<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class CrudUserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    public function admin_can_see_user_list()
    {
        $user = User::factory()->create([
            'email'    => 'admin@gmail.com',
            'password' => bcrypt('qweasdzxc'),
        ]);
        $this->actingAs($user);

        $this->visit('/admin');

        if($user->role == 'admin'){
            $this->visit('/admin/user');
            $this->seeText('admin@gmail.com');
        }else{
            $this->post('/admin/logout');
        }
    }
}
