<?php

class Music {
    private $title;
    private $artist;
    private $year;
    private $genre;
    private $rating;

    public function __construct($title, $artist, $year, $genre, $rating) {
        $this->setTitle($title);
        $this->setArtist($artist);
        $this->setYear($year);
        $this->setGenre($genre);
        $this->setRating($rating);
    }

    // Getters
    public function getTitle() {
        return $this->title;
    }

    public function getArtist() {
        return $this->artist;
    }

    public function getYear() {
        return $this->year;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function getRating() {
        return $this->rating;
    }

    // Setters with basic validation
    public function setTitle($title) {
        if (empty(trim($title))) {
            throw new InvalidArgumentException("Título não pode ser vazio");
        }
        $this->title = trim($title);
    }

    public function setArtist($artist) {
        if (empty(trim($artist))) {
            throw new InvalidArgumentException("Artista não pode ser vazio");
        }
        $this->artist = trim($artist);
    }

    public function setYear($year) {
        if (!is_numeric($year) || $year < 1900 || $year > (date('Y') + 1)) {
            throw new InvalidArgumentException("Ano inválido. Deve ser entre 1900 e " . (date('Y') + 1));
        }
        $this->year = (int)$year;
    }

    public function setGenre($genre) {
        if (empty(trim($genre))) {  // Erro corrigido aqui - removido parêntese extra
            throw new InvalidArgumentException("Gênero não pode ser vazio");
        }
        $this->genre = trim($genre);
    }

    public function setRating($rating) {
        if (!is_numeric($rating) || $rating < 0 || $rating > 10) {
            throw new InvalidArgumentException("Nota inválida. Deve ser entre 0 e 10");
        }
        $this->rating = (float)$rating;
    }

    // Optional: Method to get all data as array
    public function getDados() {
        return [
            'title' => $this->title,
            'artist' => $this->artist,
            'year' => $this->year,
            'genre' => $this->genre,
            'rating' => $this->rating
        ];
    }
}