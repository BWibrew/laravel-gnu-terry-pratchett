<?php

namespace BWibrew\GnuPratchett\Tests;

class HeaderTest extends TestCase
{
    protected $headerName = 'X-Clacks-Overhead';
    protected $headerValue = 'GNU Terry Pratchett';

    /** @test */
    public function it_sends_the_x_clacks_overhead_header_down_the_line()
    {
        $getResponse = $this->get('/');
        $postResponse = $this->post('/');

        $getResponse->assertHeader($this->headerName, $this->headerValue);
        $postResponse->assertHeader($this->headerName, $this->headerValue);
    }
}
