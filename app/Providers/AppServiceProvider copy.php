<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Storage;
use Masbug\Flysystem\GoogleDriveAdapter;
use League\Flysystem\Filesystem;
use Google\Client as GoogleClient;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Storage::extend('google', function ($app, $config) {
            $client = new GoogleClient();
            $client->setClientId($config['clientId']);
            $client->setClientSecret($config['clientSecret']);
            $client->setRedirectUri('urn:ietf:wg:oauth:2.0:oob');
            $client->setAccessType('offline');
            $client->setPrompt('consent');
    
            // ✅ Set the correct OAuth scopes for full Drive access
            $client->addScope([
                'https://www.googleapis.com/auth/drive.file', // Minimum required scope
                'https://www.googleapis.com/auth/drive', // Full Drive access
            ]);
    
            // Fetch access token
            $accessToken = $client->fetchAccessTokenWithRefreshToken($config['refreshToken']);
    
            if (isset($accessToken['error'])) {
                throw new \Exception('Error fetching access token: ' . $accessToken['error']);
            }
    
            $client->setAccessToken($accessToken);
    
            $service = new \Google\Service\Drive($client);
            $adapter = new GoogleDriveAdapter($service, $config['folderId'] ?? '/');
    
            return new Filesystem($adapter);
        });
    }
}
