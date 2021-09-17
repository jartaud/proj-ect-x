<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReportTest extends TestCase
{
    use RefreshDatabase;

    public function test_report_page_is_rendered()
    {
        $this->get(route('frumbledingle.report'))
            ->assertSee('report-table');
    }
}
