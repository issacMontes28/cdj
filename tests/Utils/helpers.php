<?php

/**
 * Helper to create instance of models without db persistence.
 *
 * @param $class
 * @param array $attributes
 * @param null $times
 * @return mixed
 */
function make($class, $attributes = [], $times = null)
{
    return factory($class, $times)->make($attributes);
}

/**
 * Helper to create instance of models with db persistence.
 *
 * @param $class
 * @param array $attributes
 * @param null $times
 * @return mixed
 */
function create($class, $attributes = [], $times = null)
{
    return factory($class, $times)->create($attributes);
}
