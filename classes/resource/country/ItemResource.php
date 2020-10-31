<?php namespace PlanetaDelEste\LocationShopaholic\Classes\Resource\Country;

use PlanetaDelEste\ApiToolbox\Classes\Resource\Base;
use PlanetaDelEste\ApiToolbox\Plugin;
use PlanetaDelEste\LocationShopaholic\Classes\Resource\State\ListCollection as ListCollectionState;

/**
 * Class ItemResource
 *
 * @mixin \PlanetaDelEste\LocationShopaholic\Classes\Item\CountryItem
 * @package PlanetaDelEste\LocationShopaholic\Classes\Resource\Country
 */
class ItemResource extends Base
{
    /**
     * @return array|void
     */
    public function getData()
    {
        return [
            'states' => ListCollectionState::make($this->states->collect())
        ];
    }

    public function getDataKeys()
    {
        return [
            'id',
            'name',
            'code',
            'is_enabled',
            'is_pinned',
            'is_default',
        ];
    }

    protected function getEvent()
    {
        return Plugin::EVENT_ITEMRESOURCE_DATA;
    }
}
