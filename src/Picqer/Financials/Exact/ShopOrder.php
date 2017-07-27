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
        'Description',
        'ID',
        'Item',
        'PlannedStartDate',
        'PlannedQuantity',
        'ProducedQuantity',
        'ShopOrderMain',
        'ShopOrderNumber',
        'ShopOrderParent',
        'ShopOrderRoutingStepPlans',
        'Status',
        'Warehouse',
        'YourRef'
    ];

    protected $url = 'manufacturing/ShopOrders';
}