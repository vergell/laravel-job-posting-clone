<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);
        Listing::factory(6)->create(['user_id' => $user->id]);

        // Listing::create([
        //     'title' => 'Laravel senior developer',
        //     'tags'  => 'larvel, javascript',
        //     'company' => 'acme corp',
        //     'location' => 'boston, AM',
        //     'email' => 'email1@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'lorem aslkdfjei  ewr dkfj wer dsf wersd '
        // ]);

        // Listing::create([
        //     'title' => 'full stack senior developer',
        //     'tags'  => 'larvel,backend, javascript',
        //     'company' => 'awerje.com',
        //     'location' => 'miame heat',
        //     'email' => 'email1@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'lorem aslkdfjei  ewr dkfj wer dsf wersd '
        // ]);

        
    }
}
