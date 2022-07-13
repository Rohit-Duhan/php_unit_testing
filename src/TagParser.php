<?php 

namespace Kadam\Example;

class TagParser{
    public function parse(string $tags): array
    {
        return preg_split('/ ?[,|!] ?/',$tags);

        // return array_map(function ($tag){
        //     return trim($tag);
        // },$tags);
    }
}


?>