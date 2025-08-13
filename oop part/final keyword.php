<?php
//final == if we use this there it shows error and not allow to inherit it 
class Channel {
    public function tv() {
        return "thanks for watching this";
    }
}

class phpVideo extends Channel {
    public function message() {
        return "this video of php";
    }
}

$video = new phpVideo();
echo $video->message();  
