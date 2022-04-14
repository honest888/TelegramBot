<?php

namespace SergiX44\Nutgram\Mapper;

interface Mapper
{
    /**
     * @param  array|object  $data
     * @param  object  $instance
     * @return object
     */
    public function hydrate(array|object $data, object $instance): mixed;

    /**
     * @param  array  $data
     * @param  object  $instance
     * @return array
     */
    public function hydrateArray(array $data, object $instance): array;
}
