<?php

namespace Tests\Feature;

use Tests\TestCase;

class PreferenceTest extends TestCase
{
    public function test_default_language_is_dutch(): void
    {
        $this->get(route('home'))
            ->assertOk()
            ->assertSee('Deel een wachtwoord veilig');
    }

    public function test_user_can_switch_to_english(): void
    {
        $response = $this->post(route('preferences.language'), [
            'locale' => 'en',
        ]);

        $response->assertRedirect();
        $this->assertSame('en', session('locale'));

        $this->get(route('home'))
            ->assertOk()
            ->assertSee('Share a password securely');
    }

    public function test_invalid_language_is_rejected(): void
    {
        $response = $this->from(route('home'))->post(route('preferences.language'), [
            'locale' => 'de',
        ]);

        $response->assertRedirect(route('home'));
        $response->assertSessionHasErrors('locale');
    }
}

