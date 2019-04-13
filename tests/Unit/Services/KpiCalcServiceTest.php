<?php

namespace Tests\Unit;

use App\Services\KpiCalcServices;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class KpiCalcServiceTest extends TestCase
{

    /**
     * @var KpiCalcServices
     */
    private $kpiCalcServices;

    public function setUp() : void {

        parent::setUp();

        $this->kpiCalcServices = $this->app->make('App\Services\KpiCalcServices');

    }

    /**
     * Test calcJobsPerHectare
     *
     * @return void
     */
    public function testBasicTest()
    {
        $jobsPerHectare = $this->kpiCalcServices->calcJobsPerHectare(100);
        $this->assertEquals(620, $jobsPerHectare);

    }

    /**
     * Test calcJobsPerHectare
     *
     * @return void
     */
    public function testTonsOfBiomassTest()
    {
        $jobsPerHectare = $this->kpiCalcServices->calcTonsOfBiomass(100);
        $this->assertEquals(165, $jobsPerHectare);

    }

    /**
     * Test calcJobsPerHectare
     *
     * @return void
     */
    public function testReductionOfCo2Test()
    {
        $jobsPerHectare = $this->kpiCalcServices->calcReductionOfCo2(100);
        $this->assertEquals(47, $jobsPerHectare);

    }

}
