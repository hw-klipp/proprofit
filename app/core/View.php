<?php

namespace app\core;

/**
 * Class View
 * @package app\core
 * @implements Countable
 */
class View implements \Countable
{
    use TMagic;

    protected $data = [];
    private $position = 0;

    public function __construct()
    {
        $this->position = 0;
    }

    public function display($template)
    {
        echo $this->render($template);
    }

    private function render($template)
    {
        ob_start();
        require $template;
        $cntent = ob_get_contents();
        ob_end_clean();

        return $cntent;
    }

    /**
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count()
    {
        return count($this->data);
    }
}