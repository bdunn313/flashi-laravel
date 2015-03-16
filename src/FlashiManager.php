<?php namespace Bdunn313;

use Illuminate\Session\Store;

class FlashiManager {

    /**
     * @var Store
     */
    private $session;

    /**
     * @param Store $session
     */
    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Main method - does the heavy lifting and sets up the flash messages
     *
     * @param string $message
     * @param string $type
     */
    public function message($message, $type='info')
    {
        $this->session->flash('flashi.message', $message);
        $this->session->flash('flashi.type', $type);
    }

    /**
     * Convenience method for settting a success message
     *
     * @param string $message
     */
    public function success($message)
    {
        $this->message($message, 'success');
    }

    /**
     * Convenience method for settting a warning message
     *
     * @param string $message
     */
    public function warning($message)
    {
        $this->message($message, 'warning');
    }

    /**
     * Convenience method for settting a danger message
     *
     * @param string $message
     */
    public function danger($message)
    {
        $this->message($message, 'danger');
    }

    /**
     * Convenience method for settting an info message
     *
     * @param string $message
     */
    public function info($message)
    {
        $this->message($message, 'info');
    }
}
