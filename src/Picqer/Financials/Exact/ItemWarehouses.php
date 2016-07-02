<?php namespace Picqer\Financials\Exact;

/**
 * Class ItemWarehouses
 * 
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryItemWarehouses
 */
class ItemWarehouses extends Model{
    use Query\Findable;
    use Persistance\Storable;
    
    protected $primaryKey = 'ID';
    
    protected $fillable = [
        'ID',
        'DefaultStorageLocation',
        'Item',
        'Warehouse'
    ];

    protected $url = 'inventory/ItemWarehouses';
}