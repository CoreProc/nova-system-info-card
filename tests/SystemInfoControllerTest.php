<?php

namespace Coreproc\NovaSystemInfoCard\Tests;

class SystemInfoControllerTest extends TestCase
{
    /** @test */
    public function it_returns_system_information()
    {
        $content = $this->get('nova-vendor/coreproc/nova-system-info-card/check')
            ->getContent();

        $systemInfo = json_decode($content, true);

        $this->assertSame(app()->version(), $systemInfo['laravel']);
    }
}
