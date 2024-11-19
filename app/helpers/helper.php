<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

function  neeraj()
{
    return "working helper funciton";
}

function createThumbnail($image, $thumbWidth = 150, $thumbHeight = 150)

{
    $originalPath = $image->store('images', 'public'); // Save original image in storage/app/public/images
    $thumbnailPath = 'images/thumbs/' . basename($originalPath);
    $sourcePath = storage_path('app/public/' . $originalPath);
    $destinationPath = storage_path('app/public/' . $thumbnailPath);
    // Ensure the directory for thumbnails exists
    $directory = dirname($destinationPath);
    if (!File::exists($directory)) {
        File::makeDirectory($directory, 0755, true); // Create the directory if it doesn't exist
    }

    // Get image type and create image resource accordingly
    $imageInfo = getimagesize($sourcePath);
    $imageType = $imageInfo[2];

    // Load the image based on type
    switch ($imageType) {
        case IMAGETYPE_JPEG:
            $image = imagecreatefromjpeg($sourcePath);
            break;
        case IMAGETYPE_PNG:
            $image = imagecreatefrompng($sourcePath);
            break;
        case IMAGETYPE_GIF:
            $image = imagecreatefromgif($sourcePath);
            break;
        default:
            throw new \Exception('Unsupported image type.');
    }

    // Get original dimensions
    list($width, $height) = getimagesize($sourcePath);

    // Calculate aspect ratio and resize dimensions
    $aspectRatio = $width / $height;
    if ($thumbWidth / $thumbHeight > $aspectRatio) {
        $thumbWidth = $thumbHeight * $aspectRatio;
    } else {
        $thumbHeight = $thumbWidth / $aspectRatio;
    }

    // Create a blank image for the thumbnail
    $thumbnail = imagecreatetruecolor($thumbWidth, $thumbHeight);

    // Copy and resize the original image into the thumbnail
    imagecopyresampled($thumbnail, $image, 0, 0, 0, 0, $thumbWidth, $thumbHeight, $width, $height);

    // Save the thumbnail based on the original image type
    switch ($imageType) {
        case IMAGETYPE_JPEG:
            imagejpeg($thumbnail, $destinationPath);
            break;
        case IMAGETYPE_PNG:
            imagepng($thumbnail, $destinationPath);
            break;
        case IMAGETYPE_GIF:
            imagegif($thumbnail, $destinationPath);
            break;
    }

    // Free up memory
    imagedestroy($image);
    imagedestroy($thumbnail);

    return [$originalPath, $thumbnailPath];
}

function deleteImage($model)
{

    if(!empty($model->media)){
        if ($model->media->image) {
            Storage::delete($model->media->getRawOriginal('image'));
        }
        if ($model->media->thumbnail) {
            Storage::delete($model->media->getRawOriginal('thumbnail'));
        }
        $model->media()->delete();
    }
   
}

function getLastActivityTime($time)
{
    $inputTime = Carbon::createFromFormat('Y-m-d H:i:s', $time);

    $now = Carbon::now();
    if ($inputTime->diffInMinutes($now) < 60) {
        // Less than 1 hour
        $minutes = floor($inputTime->diffInMinutes($now));
        $result = 'before ' . $minutes . ' minute' . ($minutes > 1 ? 's' : '');
    } elseif ($inputTime->diffInHours($now) < 24) {
        // Between 1 hour and 24 hours
        $hours = floor($inputTime->diffInHours($now));
        $minutes = floor($inputTime->diffInMinutes($now) % 60);
        $result = 'before ' . $hours . ' hour' . ($hours > 1 ? 's' : '') . ' ' . $minutes . ' minute' . ($minutes > 1 ? 's' : '');
    } elseif ($inputTime->diffInDays($now) < 7) {
        // Between 1 day and 1 week
        $days = floor($inputTime->diffInDays($now));
        $result = 'before ' . $days . ' day' . ($days > 1 ? 's' : '');
    } elseif ($inputTime->diffInWeeks($now) < 4) {
        // Between 1 week and 1 month
        $weeks = floor($inputTime->diffInWeeks($now));
        $result = 'before ' . $weeks . ' week' . ($weeks > 1 ? 's' : '');
    } elseif ($inputTime->diffInMonths($now) < 12) {
        // Between 1 month and 1 year
        $months = floor($inputTime->diffInMonths($now));
        $result = 'before ' . $months . ' month' . ($months > 1 ? 's' : '');
    } else {
        // More than 1 year
        $years = floor($inputTime->diffInYears($now));
        $result = 'before ' . $years . ' year' . ($years > 1 ? 's' : '');
    }

    return $result;
}
