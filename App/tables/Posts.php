<?php

namespace App\tables;

use App\Entities\Post;
use App\DB\DBConnection;

class Posts {

    public static function getAllPosts() {
        $posts = array();

        $db = new DBConnection();

        $query = "SELECT ID, post_title, post_content, post_author, post_date, guid FROM posts";
        $results = $db->query($query);

        while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
            $post = new Post();
            $post->setId($row['ID']);
            $post->setTitle($row['post_title']);
            $post->setContent($row['post_content']);
            $post->setUser($row['post_author']);
            $post->setDate($row['post_date']);
            $post->setUrl($row['guid']);
            array_push($posts, $post);
        }

        $db->close();

        return $posts;
    }

}
