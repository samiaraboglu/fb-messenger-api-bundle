# fb-messenger-api-bundle

Use the [Facebook Messenger PHP API](https://github.com/samiaraboglu/fb-messenger-bot-php).

### Download the Bundle

```console
$ composer require samiaraboglu/fb-messenger-api-bundle
```

### Enable the Bundle

Registered bundles in the `config/bundles.php` file of your project:

```php

return [
    // ...
    Samiax\FbMessengerApiBundle\FbMessengerApiBundle::class => ['all' => true],
    // ...
];

```

### Config
Add this to config/packages/fb_messenger_api.yaml:

```yaml
fb_messenger_api:
    access_token:   %fb_messenger_api_access_token%
    verify_token:   %fb_messenger_api_verify_token%
```

### Example
Send text message:

```php
namespace App\Controller\Messenger;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

use Samiax\FbMessengerApiBundle\Service\MessengerApi;

/**
 * Messenger Controller
 *
 * @Route("/messenger", name="app_messenger_")
 */
class MessengerController extends AbstractController
{
    /**
     * @Route("/send", name="send")
     *
     * @return Response
     */
    public function sendAction(MessengerApi $messengerApi)
    {
        $messenger = $messengerApi->messenger;

        $message = $messenger->message;

        $message->text('<MESSAGE_TEXT>');

        $messenger->send(<PSID>, $message);

        return new Response();
    }
}

```