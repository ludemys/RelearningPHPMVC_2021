<?php

class ErrorController
{
    public $error;
    private $message;

    /**
     * Get the value of error
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Set the value of error
     *
     * @return  self
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Get the value of message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @return  self
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    public function __construct($error)
    {
        $this->error = $error;
        $this->selectMessage();
    }

    public function selectMessage()
    {
        switch ($this->error) {
            case '404':
                $this->message = '404 - Error: The page you are looking for does not exist.';

                break;

            case '408':
                $this->message = '408 - Error: The page you are looking for is taking too long to response.';

                break;
        }
    }

    public function error_exit()
    {
        echo '<h1 class="error-message">' . $this->message . '</h1>';

        exit();
    }
}
