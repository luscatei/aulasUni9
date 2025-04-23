<?php

require_once "atv_obg_02.php";

class MusicSistem {
    private $musics;

    public function menuExibition() {
        echo("
        ***************************************************
        -------------- CADASTRE SEUS SONS -----------------
        ***************************************************\n
        1 - Cadastrar Musica
        2 - Listar Musicas
        3 - Mostrar Musicas
        4 - Alterar Musica
        5 - Remover Musica
        6 - Sair
        ***************************************************\n
        Digite a opção desejada: ");
    }

    public function createMusic() {
        echo("-------------- CADASTRE SEUS SONS -----------------\n");
        echo("Digite o nome da musica: ");
        $title = trim(fgets(STDIN));
        echo("Digite o nome do artista: ");
        $artist = trim(fgets(STDIN));
        echo("Digite o ano de lançamento: ");
        $year = trim(fgets(STDIN));
        echo("Digite o gênero musical: ");
        $genre = trim(fgets(STDIN));
        echo("Digite a nota da musica: ");
        $rating = trim(fgets(STDIN));

        $music = new Music($title, $artist, $year, $genre, $rating);
        $this->musics[] = $music;  // Add the new music to the array
        echo("Musica cadastrada com sucesso!\n");
    }

    public function alterateData() {
        if (empty($this->musics)) {
            echo("Nenhuma musica cadastrada!\n");
            return;
        }
        
        $this->listMusic();
        echo("Digite o número da musica que deseja alterar: ");
        $index = (int)trim(fgets(STDIN)) - 1;
        
        if (!isset($this->musics[$index])) {
            echo("Índice inválido!\n");
            return;
        }
        
        $music = $this->musics[$index];
        echo("Digite o novo nome da musica (atual: " . $music->getTitle() . "): ");
        $music->setTitle(trim(fgets(STDIN)));
        echo("Digite o novo nome do artista (atual: " . $music->getArtist() . "): ");
        $music->setArtist(trim(fgets(STDIN)));
        echo("Digite o novo ano de lançamento (atual: " . $music->getYear() . "): ");
        $music->setYear(trim(fgets(STDIN)));
        echo("Digite o novo gênero musical (atual: " . $music->getGenre() . "): ");
        $music->setGenre(trim(fgets(STDIN)));
        echo("Digite a nova nota da musica (atual: " . $music->getRating() . "): ");
        $music->setRating(trim(fgets(STDIN)));
        
        echo("Musica alterada com sucesso!\n");
    }

    public function showMusic() {
        if (empty($this->musics)) {
            echo("Nenhuma musica cadastrada!\n");
            return;
        }
        
        foreach ($this->musics as $index => $music) {
            echo("\nMusica #" . ($index + 1) . "\n");
            echo("Título: " . $music->getTitle() . "\n");
            echo("Artista: " . $music->getArtist() . "\n");
            echo("Ano: " . $music->getYear() . "\n");
            echo("Gênero: " . $music->getGenre() . "\n");
            echo("Nota: " . $music->getRating() . "\n");
        }
    }

    public function removeMusic() {
        if (empty($this->musics)) {
            echo("Nenhuma musica cadastrada!\n");
            return;
        }
        
        $this->listMusic();
        echo("Digite o número da musica que deseja remover: ");
        $index = (int)trim(fgets(STDIN)) - 1;
        
        if (!isset($this->musics[$index])) {
            echo("Índice inválido!\n");
            return;
        }
        
        unset($this->musics[$index]);
        $this->musics = array_values($this->musics); // Reindex array
        echo("Musica removida com sucesso!\n");
    }

    public function listMusic() {
        if (empty($this->musics)) {
            echo("Nenhuma musica cadastrada!\n");
            return;
        }
        
        foreach ($this->musics as $index => $music) {
            echo(($index + 1) . " - " . $music->getTitle() . "\n");
        }
    }

    public function showMenu() {
        do {
            $this->menuExibition();
            $option = trim(fgets(STDIN));
            switch ($option) {
                case '1':
                    $this->createMusic();
                    break;
                case '2':
                    $this->listMusic();
                    break;
                case '3':
                    $this->showMusic();
                    break;
                case '4':
                    $this->alterateData();
                    break;
                case '5':
                    $this->removeMusic();
                    break;
                case '6':
                    echo("Saindo...\n");
                    break;
                default:
                    echo("Opção inválida!\n");
            }
        } while ($option != '6');
    }

    public function __construct() {
        $this->musics = [];
    }
}