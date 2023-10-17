<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_authenticated_user_can_access_employee_index()
    {
        // Create a test user
        // $user = factory(User::class)->create([
        //     'email' => 'test@sample.com',
        //     'password' => Hash::make('password'),
        // ]);

        // // Simulate login
        // Auth::login($user);

        // // Ensure the user is authenticated
        // $this->assertTrue(Auth::check());

        // Make a GET request to the employee index page
        $response = $this->get('/employee');

        // Assert that the response status code is 200 (OK)
        $response->assertStatus(200);

        // Assert that the response contains the text you expect
        $response->assertSee('Welcome to the Employee Index Page');
    }

    public function test_invalid_credentials_redirect_to_login_with_error_message()
    {
        // Make a POST request to the authenticate route with invalid credentials
        $response = $this->post('/login/authenticate', [
            'username' => 'invalidusername',
            'password' => 'invalidpassword',
        ]);

        // Assert that the user is not authenticated
        $this->assertFalse(Auth::check());

        // Assert that the response redirects back to the login page
        $response->assertRedirect('/login');

        // Assert that the session has an error message for the username field
        $this->assertEquals(
            'The provided credentials do not match our records.',
            session('errors')->first('username')
        );
    }
}
