<?php

    function serialize_convert($serializeData)
    {
        $explode = explode('&', $serializeData);

        $data = [];

        foreach ($explode as $item)
        {
            $explodeItem = explode('=', $item);

            $key = $explodeItem[0];
            $value = $explodeItem[1];

            $data[] = [
                'key' => $key,
                'value' => $value
            ];
        }

        return $data;
    }
