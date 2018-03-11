# fb-messenger-api-bundle

Use the [Facebook Messenger PHP API](https://github.com/samiaraboglu/fb-messenger-bot-php).

### Download the Bundle

```console
$ composer require samiaraboglu/fb-messenger-api-bundle
```

### Enable the Bundle

Registered bundles in the `app/AppKernel.php` file of your project:

```php
<?php
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new samiaraboglu\FbMessengerApiBundle\FbMessengerApiBundle(),
        );
        // ...
    }
    // ...
}
```

### Config
Add this to config.yml:

```yaml
fb_messenger_api:
    access_token:   %fb_messenger_api_access_token%
    verify_token:   %fb_messenger_api_verify_token%
```

### Example
Send text message:

```php
$messenger = $this->get('fb_messenger_api.messenger');
$message = $messenger->message;

$message->text('<MESSAGE_TEXT>');

$messenger->send(<PSID>, $message);
```