# DigaMediaAzureSw6 App

## Installation

1. Deploy plugin (via FTP)
2. Remove *shopware/core* from composer.json/require
3. Run *composer i*
4. Add *shopware/core* to composer.json/require
5. Install plugin
6. Add configuration to *config/packages/shopware.yaml*
```
{
shopware:
    filesystem:
      public:
        type: "diga-sw-azure"
        visibility: "private" # Default is "public", can be set only on shopware.filesystem.private
        config:
          mediaUrl     : 'https://xxx.blob.core.windows.net/yyy'
          accountName  : 'xxx'
          apiKey       : 'XXXpQzzYkBVjjQw/7jBGj+ars1ePFJyfANADM4VxnvhrYwASfLjWZ4cCcq1e9X5EuZbOZPetbcWT+AStwtuN6Q=='
          dsn          : 'DefaultEndpointsProtocol=https;AccountName=xxx;AccountKey=XXXpQzzYkBVjjQw/7jBGj+ars1ePFJyfANADM4VxnvhrYwASfLjWZ4cCcq1e9X5EuZbOZPetbcWT+AStwtuN6Q==;EndpointSuffix=core.windows.net'
          containerName: 'yyy'

}
``` 
7. Migrate media manually