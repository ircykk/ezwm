<?php

namespace Ircykk\Ezwm\ServiceBroker;

class ArrayOfParam implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var Param[]
     */
    protected $item = null;

    /**
     * @param Param[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return Param[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Param[] $item
     *
     * @return \Ircykk\Ezwm\ServiceBroker\ArrayOfParam
     */
    public function setItem(array $item)
    {
        $this->item = $item;

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
        return isset($this->item[$offset]);
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return Param
     */
    public function offsetGet($offset)
    {
        return $this->item[$offset];
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed $offset The offset to assign the value to
     * @param Param $value  The value to set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->item[] = $value;
        } else {
            $this->item[$offset] = $value;
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
        unset($this->item[$offset]);
    }

    /**
     * Iterator implementation.
     *
     * @return Param Return the current element
     */
    public function current()
    {
        return current($this->item);
    }

    /**
     * Iterator implementation
     * Move forward to next element.
     *
     * @return void
     */
    public function next()
    {
        next($this->item);
    }

    /**
     * Iterator implementation.
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->item);
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
        reset($this->item);
    }

    /**
     * Countable implementation.
     *
     * @return Param Return count of elements
     */
    public function count()
    {
        return count($this->item);
    }
}
