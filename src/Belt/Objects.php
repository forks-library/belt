<?php namespace Belt;

class Objects extends Toolset {

    /**
     * Determine whether the given value is null
     *
     * @param  mixed $value
     * @return boolean
     */
    public function isNull($value)
    {
        return \is_null($value);
    }

    /**
     * Determine whether the given value is traversable
     *
     * @param  mixed $value
     * @return boolean
     */
    public function isTraversable($value)
    {
        return \is_array($value) or ($value instanceof \Traversable);
    }

    /**
     * Determine whether the given value is an array
     *
     * @param  mixed $value
     * @return boolean
     */
    public function isArray($value)
    {
        return \is_array($value);
    }

}
