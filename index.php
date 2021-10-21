<?php 

class Movie {
    public $title;
    public $subtitle;
    public $director;
    public $year;
    public $time;
    public $lang;
    public $country;

    function __construct($_title, $_subtitle, $_director, $_year, $_time, $_lang, $_country )
    {
        $this->title = $_title;
        $this->subtitle = $_subtitle;
        $this->director = $_director;
        $this->year = $_year;
        $this->time = $_time;
        $this->lang = $_lang;
        $this->country = $_country;
    }

    function getTitle()
    {
        return $this->title;
    }

    function setLang($_lang)
    {
        $this->lang = $_lang;
    }

    function getLang()
    {
        return $this->lang;
    }

    
}

$movie1 = new Movie('Blade Runner', '', 'Ridley Scott', 1982, '117 minutes', 'English', 'United States');
$movie2 = new Movie('Blade Runner 2049', '', 'Denis Villeneuve', 2017, '163 minutes', 'English', 'United States');

var_dump($movie1, $movie2);

echo $movie1->getTitle();

$movie2->setLang('Italian');

echo $movie2->getLang();


?>