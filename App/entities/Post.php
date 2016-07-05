<?php

namespace App\Entities;

class Post {

    private $id;
    private $title;
    private $content;
    private $user;
    private $date;
    private $url;

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function getUser() {
        return $this->user;
    }

    public function getDate() {
        return $this->date;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function setUser($user) {
        $this->user = $user;
    }

    public function setDate($date) {
        $this->date = strftime('%d/%m/%Y', strtotime($date));
    }

    public function setUrl($url) {
        $this->url = $url;
    }

}
