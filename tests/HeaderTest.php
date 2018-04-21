<?php

namespace BWibrew\GnuPratchett\Tests;

class HeaderTest extends TestCase
{
    protected $headerName = 'X-Clacks-Overhead';
    protected $headerValue = 'GNU Terry Pratchett';

    /** @test */
    public function it_sends_the_x_clacks_overhead_header_down_the_line()
    {
        $response = $this->call('GET', '/');

        $this->assertTrue($response->headers->has($this->headerName));

        $this->assertEquals($this->headerValue, $response->headers->get($this->headerName));
    }
}
