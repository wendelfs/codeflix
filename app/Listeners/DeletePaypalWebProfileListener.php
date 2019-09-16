<<<<<<< HEAD
<?php

namespace CodeFlix\Listeners;

use CodeFlix\Models\PaypalWebProfile;
use CodeFlix\PayPal\WebProfileClient;
use Prettus\Repository\Events\RepositoryEntityDeleted;

class DeletePaypalWebProfileListener
{
    /**
     * @var WebProfileClient
     */
    private $webProfileClient;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(WebProfileClient $webProfileClient)
    {
        $this->webProfileClient = $webProfileClient;
    }

    /**
     * Handle the event.
     *
     * @param  RepositoryEntityDeleted $event
     * @return void
     */
    public function handle(RepositoryEntityDeleted $event)
    {
        $model = $event->getModel();
        if (!($model instanceof PaypalWebProfile)) {
            return;
        }

        $this->webProfileClient->delete($model->code);
    }
}
=======
<?php

namespace CodeFlix\Listeners;

use CodeFlix\Models\PaypalWebProfile;
use CodeFlix\PayPal\WebProfileClient;
use Prettus\Repository\Events\RepositoryEntityDeleted;

class DeletePaypalWebProfileListener
{
    /**
     * @var WebProfileClient
     */
    private $webProfileClient;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(WebProfileClient $webProfileClient)
    {
        $this->webProfileClient = $webProfileClient;
    }

    /**
     * Handle the event.
     *
     * @param  RepositoryEntityDeleted $event
     * @return void
     */
    public function handle(RepositoryEntityDeleted $event)
    {
        $model = $event->getModel();
        if (!($model instanceof PaypalWebProfile)) {
            return;
        }

        $this->webProfileClient->delete($model->code);
    }
}
>>>>>>> 71264fc544af9982104d1172c51d8a1fa9fa3377
