<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Tests\TestCase;

class DateOfBirthConversionTest extends TestCase
{
    use RefreshDatabase;
    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
        $this->dob = $this->user->dob;
    }

    /**
     * Test for functionality that can get actual age in numbers
     *
     * @return void
     */
    public function test_can_get_age_in_number()
    {
        $expected = $this->user->AgeInNumber($this->dob);
        $this->assertEquals($expected, '14');
    }

    /**
     * Test for functionality that get actual age in numbers
     *
     * @return void
     */
    public function test_can_not_get_age_in_number()
    {
        $expected = $this->user->AgeInNumber(Carbon::now()->toDateString());
        $this->assertNotEquals($expected, '14');
    }

    /**
     * Test for functionality that can get actual age in years, days and hours.
     *
     * @return void
     */
    public function test_can_get_age_in_years_days_hours()
    {
        $expected = $this->user->AgeInYearsDaysHours($this->dob);
        $actual =  Carbon::parse($this->dob)->diff(\Carbon\Carbon::now())->format('%y years, %d days and %h hours');
        $this->assertEquals($expected, $actual);
    }

    /**
     * Test for functionality that cannot get actual age in years, days and hours.
     *
     * @return void
     */
    public function test_can_not_get_age_in_years_days_hours()
    {
        $expected = $this->user->AgeInYearsDaysHours('2006-10-10');
        $actual =  Carbon::parse($this->dob)->diff(\Carbon\Carbon::now())->format('%y years, %d days and %h hours');
        $this->assertNotEquals($expected, $actual);
    }
}
