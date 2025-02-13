<?php
trait Timestampable {
    private $createdAt;
    private $updatedAt;

    public function setCreatedAt($dateTime) {
        $this->createdAt = $dateTime;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function setUpdatedAt($dateTime) {
        $this->updatedAt = $dateTime;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    public function updateTimestamps() {
        $this->setUpdatedAt(date('Y-m-d H:i:s'));
        if (!$this->getCreatedAt()) {
            $this->setCreatedAt(date('Y-m-d H:i:s'));
        }
    }
}

class Post {
    use Timestampable;

    private $title;
    private $content;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
        $this->updateTimestamps();
    }

    public function updatePost($title, $content) {
        $this->title = $title;
        $this->content = $content;
        $this->updateTimestamps();
    }

    public function getPostInfo() {
        return [
            'title' => $this->title,
            'content' => $this->content,
            'created_at' => $this->getCreatedAt(),
            'updated_at' => $this->getUpdatedAt(),
        ];
    }
}

class Comment {
    use Timestampable;

    private $postId;
    private $text;

    public function __construct($postId, $text) {
        $this->postId = $postId;
        $this->text = $text;
        $this->updateTimestamps();
    }

    public function updateComment($text) {
        $this->text = $text;
        $this->updateTimestamps();
    }

    public function getCommentInfo() {
        return [
            'post_id' => $this->postId,
            'text' => $this->text,
            'created_at' => $this->getCreatedAt(),
            'updated_at' => $this->getUpdatedAt(),
        ];
    }
}