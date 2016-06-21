<?php namespace Picqer\Financials\Exact;

/**
 * Class ShopOrder
 * 
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingShopOrders
 */
class ShopOrder extends Model{
    use Query\Findable;
    use Persistance\Storable;
    
    protected $primaryKey = 'ID';
    
    protected $fillable = [
        'ID',
        'Item',
        'PlannedDate',
        'PlannedQuantity',
        'ProducedQuantity',
        'ShopOrderNumber',
        'YourRef'
    ];

    protected $url = 'manufacturing/ShopOrders';
}