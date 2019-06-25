<?php


namespace Stevepop\ChuckNorrisJokes\Http\Controllers;


use Stevepop\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisController
{
    public function __invoke()
    {
        return ChuckNorris::getRandomJoke();
    }
}