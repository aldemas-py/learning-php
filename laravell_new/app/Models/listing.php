<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return  [
            [
                'id' => 1,
                'tittle' => 'Listing 1',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia, mollitia eaque ea autem non eligendi culpa quod suscipit in ipsam ducimus accusamus beatae veritatis vel, laborum voluptates aliquid! Delectus, dignissimos.'
            ],
            [
                'id' => 2,
                'tittle' => 'Listing 2',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia, mollitia eaque ea autem non eligendi culpa quod suscipit in ipsam ducimus accusamus beatae veritatis vel, laborum voluptates aliquid! Delectus, dignissimos.'
            ]
        ];
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
