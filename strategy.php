<?php

/*
 * Example Strategy Pattern implementation and usage:
 * 
 * A button return weather forcast based on Location by calling getWeather() method
 */


interface WeatherInterface {

    public function forcast();
}


class London implements WeatherInterface {

    public function forcast() {
        echo "It's raining in London" . PHP_EOL;
    }

}

class Madrid implements WeatherInterface {

    public function forcast() {
        echo "Always sunshine in Madrid" . PHP_EOL;
    }

}

class Rome implements WeatherInterface {

    public function forcast() {
        echo "It's cloudy in Rome" . PHP_EOL;
    }

}

class Weather {

    private $strategy;

    public function setStrategy(WeatherInterface $strategy) {
        $this->strategy = $strategy;
    }

    public function getStrategy() {
        return $this->strategy;
    }

    public function getWeather() {
        $this->strategy->forcast();
    }

}

$weather = new Weather();

$london = new London();
$madrid = new Madrid();
$rome = new Rome();

$weather->setStrategy($london);
$weather->getWeather();

$weather->setStrategy($madrid);
$weather->getWeather();

$weather->setStrategy($rome);
$weather->getWeather();



