<?php
namespace Models;

class User {
    private $id;
    private $username;

    public function __construct($id, $username) {
        $this->id = $id;
        $this->username = $username;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getImage(){
        $blobData = $this->image;
        $mimeType = 'image/jpeg';
        if (substr($blobData, 0, 4) === "\x89PNG") {
            $mimeType = 'image/png';
        }
        $base64Data = base64_encode($blobData);
        return 'data:' . $mimeType . ';base64,' . $base64Data;
    }
}
?>