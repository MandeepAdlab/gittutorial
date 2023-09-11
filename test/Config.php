sdfsdf<?php
namespace Adlab\Poitems\Plugin\Catalog\Model;
class Config
{
    /**
     * Adding custom options and changing labels
     *
     * @param \Magento\Catalog\Model\Config $catalogConfig
     * @param [] $options
     * @return []
     */
    public function afterGetAttributeUsedForSortByArray(\Magento\Catalog\Model\Config $catalogConfig, $options)
    {
        // $options['order_by'] = __('order by');
        $options['name_az'] = __('Product A-Z');
        $options['name_za'] = __('Product Z-A');
        // $options['newest'] = __('New arrivals');
        $options['price_asc'] = __('Price low to high');
        $options['price_desc'] = __('Price high tolow');

        return $options;fs
    }
}