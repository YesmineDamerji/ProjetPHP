<?php
class forum {
    private $idF;
    private $username;
    private $content;
    private $title;
    private $created_at;
    private $updated_at;

    public function __construct($idF, $username, $content, $title, $created_at, $updated_at) {
        $this->idF = $idF;
        $this->username = $username;
        $this->content = $content;
        $this->title = $title;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public function getidF() {
        return $this->idF;
    }

    public function getusername() {
        return $this->username;
    }

    public function getcontent() {
        return $this->content;
    }

    public function gettitle() {
        return $this->title;
    }

    public function getcreated_at() {
        return $this->created_at;
    }

    public function getupdated_at() {
        return $this->updated_at;
    }

    // Setters
    public function setidF($idF) {
        $this->idF = $idF;
    }

    public function setusername($username) {
        $this->username = $username;
    }

    public function setcontent($contentt) {
        $this->content = $content;
    }

    public function settitle($title) {
        $this->title = $title;
    }

    public function setcreated_at($created_at) {
        $this->created_at = $created_at;
    }

    public function setupdated_at($updated_at) {
        $this->updated_at = $updated_at;
    }
}
?>
