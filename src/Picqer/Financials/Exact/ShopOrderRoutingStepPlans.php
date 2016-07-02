<?php namespace Picqer\Financials\Exact;

/**
 * Class ShopOrderRoutingStepPlans
 * 
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingShopOrderRoutingStepPlans
 */
class ShopOrderRoutingStepPlans extends Model{
    use Query\Findable;
    use Persistance\Storable;
    
    protected $primaryKey = 'ID';
    
    protected $fillable = [
        'ID',
        'Operation',
        'OperationCode',
        'ShopOrder'
    ];

    protected $url = 'manufacturing/ShopOrderRoutingStepPlans';
}