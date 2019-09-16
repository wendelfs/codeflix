<<<<<<< HEAD
<?php

namespace CodeFlix\Listeners;

use CodeFlix\Events\PayPalPaymentApproved;
use CodeFlix\Repositories\Interfaces\OrderRepository;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateOrderListener
{
    /**
     * @var OrderRepository
     */
    private $orderRepository;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(OrderRepository $orderRepository)
    {
        //
        $this->orderRepository = $orderRepository;
    }

    /**
     * Handle the event.
     *
     * @param  PayPalPaymentApproved  $event
     * @return void
     */
    public function handle(PayPalPaymentApproved $event)
    {
        $plan = $event->getPlan();

        $order = $this->orderRepository->create([
            'user_id' => Auth::guard('api')->user()->id,
            'value' => $plan->value,
            'code' => $event->getPayment()->getId()
        ]);

        $event->setOrder($order);
    }
}
=======
<?php

namespace CodeFlix\Listeners;

use CodeFlix\Events\PayPalPaymentApproved;
use CodeFlix\Repositories\Interfaces\OrderRepository;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateOrderListener
{
    /**
     * @var OrderRepository
     */
    private $orderRepository;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(OrderRepository $orderRepository)
    {
        //
        $this->orderRepository = $orderRepository;
    }

    /**
     * Handle the event.
     *
     * @param  PayPalPaymentApproved  $event
     * @return void
     */
    public function handle(PayPalPaymentApproved $event)
    {
        $plan = $event->getPlan();

        $order = $this->orderRepository->create([
            'user_id' => Auth::guard('api')->user()->id,
            'value' => $plan->value,
            'code' => $event->getPayment()->getId()
        ]);

        $event->setOrder($order);
    }
}
>>>>>>> 71264fc544af9982104d1172c51d8a1fa9fa3377
