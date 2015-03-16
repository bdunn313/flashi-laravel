<?php

namespace spec\Bdunn313;

use Illuminate\Session\Store;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FlashiManagerSpec extends ObjectBehavior
{
    function Let(Store $store)
    {
        $this->beConstructedWith($store);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Bdunn313\FlashiManager');
    }

    function it_can_save_generic_info_messages_to_the_session(Store $store)
    {
        $store->flash('flashi.message', 'Generic Message')->shouldBeCalled();
        $store->flash('flashi.type', 'info')->shouldBeCalled();

        $this->message('Generic Message');
    }

    function it_can_save_other_types_of_messages_to_the_session(Store $store)
    {
        $store->flash('flashi.message', 'Generic Message')->shouldBeCalled();
        $store->flash('flashi.type', 'success')->shouldBeCalled();

        $this->message('Generic Message', 'success');
    }

    function it_has_convenience_methods_for_other_types_of_messages(Store $store)
    {
        $store->flash('flashi.message', 'Success Message')->shouldBeCalled();
        $store->flash('flashi.type', 'success')->shouldBeCalled();
        $this->success('Success Message');

        $store->flash('flashi.message', 'Warning Message')->shouldBeCalled();
        $store->flash('flashi.type', 'warning')->shouldBeCalled();
        $this->warning('Warning Message');

        $store->flash('flashi.message', 'Danger Message')->shouldBeCalled();
        $store->flash('flashi.type', 'danger')->shouldBeCalled();
        $this->danger('Danger Message');

        $store->flash('flashi.message', 'Info Message')->shouldBeCalled();
        $store->flash('flashi.type', 'info')->shouldBeCalled();
        $this->info('Info Message');
    }
}
