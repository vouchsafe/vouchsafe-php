<?php
namespace Vouchsafe;

final class OpenApiClientFactory
{
    public static function make($baseUri, $bearerToken = null)
    {
        $plugins = [];

        $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri($baseUri);
        $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri, ['replace' => true]);
        $plugins[] = new \Http\Client\Common\Plugin\BaseUriPlugin($uri, ['replace' => true]);

        if ($bearerToken) {
            $plugins[] = new \Http\Client\Common\Plugin\HeaderAppendPlugin([
                'Authorization' => 'Bearer ' . $bearerToken,
            ]);
        }

        return \Vouchsafe\OpenAPI\Client::create(null, $plugins);
    }
}
