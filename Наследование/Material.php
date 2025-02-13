<?php

class Material {
    public $title;
    public $author;

    public function __construct($title, $author) {
        $this -> title = $title;
        $this -> author = $author;
    }

    public function getInfo() {
        print("{$this->title} {$this->author}<br>");
    }
}

class Book extends Material {
    public $pages;

    public function __construct($title, $author, $pages) {
        parent::__construct($title, $author);
        $this -> pages = $pages;
    }

    public function getInfo() {
        print("{$this->title} {$this->author} {$this->pages}<br>");
    }
}

class Article extends Material {
    public $number;

    public function __construct($title, $author, $number) {
        parent::__construct($title, $author);
        $this -> number = $number;
    }

    public function getInfo() {
        print("{$this->title} {$this->author} {$this->number}<br>");
    }
}

class Video extends Material {
    public $duration;

    public function __construct($title, $author, $duration) {
        parent::__construct($title, $author);
        $this -> duration = $duration;
    }

    public function getInfo() {
        print("{$this->title} {$this->author} {$this->duration}<br>");
    }
}