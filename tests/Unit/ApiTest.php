<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    
    
    public function testRoute()
    {
        //dd('this test');
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    
    protected function headers($user = null)
    {
        $headers = ['Accept' => 'application/json'];
        
        if (!is_null($user)) {
            $token = $user->createToken('Token Name')->accessToken;
            $headers['Authorization'] = 'Bearer ' . $token;
        }
        
        return $headers;
    }
    
    //test Api route with auth middleware
    
    public function testApiRoutesCompetencesWithNoAuth()
    {
        $user = factory(User::class)->create();
        $response = $this->get('/api/competences', $this->headers($user));
        $response->assertStatus(200);
    }
    
    public function testApiRoutesNotesWithNoAuth()
    {
        $user = factory(User::class)->create();
        $response = $this->get('/api/evaluations', $this->headers($user));
        $response->assertStatus(200);
    }
    
    public function testApiRoutesDocumentWithNoAuth()
    {
        $user = factory(User::class)->create();
        $response = $this->get('/api/documents', $this->headers($user));
        $response->assertStatus(200);
    }
    public function testApiRoutesAccountWithNoAuth()
    {
        $user = factory(User::class)->create();
        $response = $this->get('/api/account', $this->headers($user));
        $response->assertStatus(200);
    }
    
    
    //test api routes without auth middleware
    
    
    public function testApiRoutesEvents()
    {
        $response = $this->get('api/events');
        $response->assertStatus(200);
    }
    
    
    public function testApiRoutesUserLogin()
    {
        $response = $this->post('api/users/login/oauth', ['email' => "hello@moostack.com", 'password' => "password"]);
        $response->assertStatus(200);
    }
    
    public function testApiRoutesUserLoginWithWrongCredentials()
    {
        $response = $this->post('api/users/login/oauth', ['email' => "hello@moostack.com", 'password' => "password321"]);
        $response->assertStatus(200)->assertExactJson(['error' => "Wrong credentials"]);
    }
    
    public function testApiRoutesUserWithoutCredentialsLogin()
    {
        $response = $this->post('api/users/login/oauth');
        $response->assertStatus(200)->assertExactJson(['error' => "You should passe credentials"]);
    }
}
