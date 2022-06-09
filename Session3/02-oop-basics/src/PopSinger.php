<?php
class PopSinger{

    // propertise
    private string $name;
    private string $musicType;
    private bool $isAlive;
    private array $albums;
    private ?string $popularSong;
    
    // STATIC PROPERTIES 
    public static $AUTHOR = "Reza Seyf";


    public function __construct(string $name, string $musicType, bool $isAlive,array $albums, string $popularSong = null)
    {
        $this->name = $name;
        $this->musicType = $musicType;
        $this->isAlive = $isAlive;
        $this->albums = $albums;
        $this->popularSong = $popularSong;
        // echo static::$AUTHOR;
        $this->recordAlbum();
    }

    //// ---------
    // accessing to private propertise through public methods
    // we name it encapsulation
    // setter
    public function setIsAlive(bool $liveStatus) {
        $this->isAlive = $liveStatus;
    }

    // getter
    public function getIsAlive() : bool {
        return $this->isAlive;
    }


    // behaviour
    public function sing() {
        if ($this->getIsAlive()) 
        {
            echo $this->name . " Is going to sing " . $this->popularSong;
        } else {
            echo "fateha";
        }
    }

    private function recordAlbum() {
        $this->albums[] = "safa";
    }

    public function listAlbums() {
        foreach ($this->albums as $album) {
            echo "<strong>Album Name</strong>: " . $album . "<br>";
        }
    }
}