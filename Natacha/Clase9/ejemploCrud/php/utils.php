<?php

// function isAPost
function isAPost()
    {
    $isAPost = false;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $isAPost = true;
    }
    return $isAPost;
}