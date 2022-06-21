<?php

namespace DigaSwagMediaAzureSw6\Adapter;

use Shopware\Core\Framework\Adapter\Filesystem\Adapter\AdapterFactoryInterface;
use League\Flysystem\AdapterInterface;
use League\Flysystem\AzureBlobStorage\AzureBlobStorageAdapter;
use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use Shopware\Components\Plugin;

class AzureAdapterFactory implements AdapterFactoryInterface
{
    public function getType(): string
    {
        return 'diga-sw-azure'; // This must match with the type in the yaml file
    }

    public function create(array $config): AdapterInterface
    {
        // $config contains the given config from the yaml
        // return new MyFlysystemAdapter($config);
        // $config = $args->get('config');

        if (file_exists(dirname(__DIR__) . '/../vendor/autoload.php')) {
            require_once dirname(__DIR__) . '/../vendor/autoload.php';
        }

        $client = BlobRestProxy::createBlobService($config['dsn']);
        return new AzureBlobStorageAdapter($client, $config['containerName']);
    }
}