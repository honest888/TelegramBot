<?php

dataset('pinned_message', function () {
    $file = file_get_contents(__DIR__.'/../Fixtures/Updates/pinned_message.json');

    return [json_decode($file)];
});
