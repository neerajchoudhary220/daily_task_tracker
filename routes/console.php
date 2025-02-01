<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('test', function () {
    try {
        Storage::delete('images/8XHSWRJhNbdrLP1HrlyRHNswhucwQLWwnwe4M9Tt.jpg');
        echo "done";
    } catch (\Exception $e) {
        Log::error($e);
    }
});

Artisan::command('upload-file', function () {

    // $path = Storage::disk('google')->read('my_test/task.xlsx');
    // $googleDisk = Storage::disk('google')->read('task.xlsx');
    // logger()->alert($googleDisk);
    // echo "done";
    // echo "File uploaded to Google Drive: " . $googleDisk;
});

Artisan::command('upload-file', function () {
   
    $get_files = Storage::files('images');
    logger()->alert($get_files);
    echo "done";

});
