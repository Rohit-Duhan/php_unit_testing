<?php

namespace Tests;

use Kadam\Example\TagParser;
use PHPUnit\Framework\TestCase;

class TagParserTest extends TestCase{

    // protected TagParser $parser;

    // protected function setUp(): void         //   no need cz we have only one test
    // {
    //     $this->parser = new TagParser;
    // }



    /** 
     * @dataProvider tagsProvider
      */ 
    public function test_it_parse_tags($input, $expected)
    {

        $parser = new TagParser;

        $result = $parser->parse($input);
       
        $this->assertSame($expected, $result);
    }

    public function tagsProvider()
    {
        return [
            ['personal',['personal']],
            ['personal, money, family',['personal','money','family']],  
            ['personal, money, family',['personal','money','family']],  
            ['personal | money | family',['personal','money','family']], 
            ['personal,money,family',['personal','money','family']],
            ['personal!money!family',['personal','money','family']]
        ];
    }


    // public function test_it_parses_single_tags(){
    //     //$parser = new TagParser;
    //     $result = $this->parser->parse('personal'); 
    //     $expected = ['personal'];
    //     // $result = $parser->parse('personal, money, family'); 
    //     // $expected = ['personal','money','family'];

    //     $this->assertSame($expected, $result);


    // }
    // public function test_it_parses_comma_separated_tags(){
    //     //$parser = new TagParser;

    //     $result = $this->parser->parse('personal, money, family'); 
    //     $expected = ['personal','money','family'];
        
    //     $this->assertSame($expected, $result);


    // }

    // public function test_it_parses_pipes_separated_tags(){
    //     //$parser = new TagParser;

    //     $result = $this->parser->parse('personal | money | family'); 
    //     $expected = ['personal','money','family'];
    //     $this->assertSame($expected, $result);

    //     $result = $this->parser->parse('personal,money,family'); 
    //     $expected = ['personal','money','family'];
    //     $this->assertSame($expected, $result);


    // }

}

?>