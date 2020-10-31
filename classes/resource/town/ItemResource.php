<?php namespace PlanetaDelEste\LocationShopaholic\Classes\Resource\Town;

use PlanetaDelEste\ApiToolbox\Classes\Resource\Base;
use PlanetaDelEste\ApiToolbox\Plugin;
use PlanetaDelEste\LocationShopaholic\Classes\Resource\State\ItemResource as ItemResourceState;

/**
 * Class ItemResource
 *
 * @mixin \PlanetaDelEste\LocationShopaholic\Classes\Item\TownItem
 * @package PlanetaDelEste\LocationShopaholic\Classes\Resource\Town
 */
class ItemResource extends Base
{
    /**
     * @return array|void
     */
    public function getData()
    {
        return [
            'state' => ItemResourceState::make($this->state)
        ];
    }

    public function getDataKeys()
    {
        return [
            'id',
            'state_id',
            'name',
            'slug',
            'excerpt',
            'description',
            'is_enabled',
            'created_at',
            'updated_at',
            'deleted_at'
        ];
    }

    protected function getEvent()
    {
        return Plugin::EVENT_ITEMRESOURCE_DATA;
    }
}