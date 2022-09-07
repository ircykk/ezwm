<?php

namespace Ircykk\Ezwm\Auth;

class ArrayOfMessage implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var string[]
     */
    protected $Message = null;

    /**
     * @param string[] $Message
     */
    public function __construct(array $Message)
    {
        $this->Message = $Message;
    }

    /**
     * @return string[]
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param string[] $Message
     *
     * @return \Ircykk\Ezwm\Auth\ArrayOfMessage
     */
    public function setMessage(array $Message)
    {
        $this->Message = $Message;

        return $this;
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed $offset An offset to check for
     *
     * @return bool true on success or false on failure
     */
    public function offsetExists($offset)
    {
        return isset($this->Message[$offset]);
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return string
     */
    public function offsetGet($offset)
    {
        return $this->Message[$offset];
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed  $offset The offset to assign the value to
     * @param string $value  The value to set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->Message[] = $value;
        } else {
            $this->Message[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed $offset The offset to unset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->Message[$offset]);
    }

    /**
     * Iterator implementation.
     *
     * @return string Return the current element
     */
    public function current()
    {
        return current($this->Message);
    }

    /**
     * Iterator implementation
     * Move forward to next element.
     *
     * @return void
     */
    public function next()
    {
        next($this->Message);
    }

    /**
     * Iterator implementation.
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->Message);
    }

    /**
     * Iterator implementation.
     *
     * @return bool Return the validity of the current position
     */
    public function valid()
    {
        return null !== $this->key();
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element.
     *
     * @return void
     */
    public function rewind()
    {
        reset($this->Message);
    }

    /**
     * Countable implementation.
     *
     * @return string Return count of elements
     */
    public function count()
    {
        return count($this->Message);
    }
}
