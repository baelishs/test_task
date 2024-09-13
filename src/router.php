<?php

    function matchUrl(string $url, string $filename) {
        if(strtok($_SERVER['REQUEST_URI'], '?') == $url) {
            require_once $filename;
        }

    }
