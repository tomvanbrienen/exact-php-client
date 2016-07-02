<?php namespace Picqer\Financials\Exact;

/**
 * Class StorageLocations
 * 
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryStorageLocations
 */
class StorageLocations extends Model{
    use Query\Findable;
    use Persistance\Storable;
    
    protected $primaryKey = 'ID';
    
    protected $fillable = [
        'ID',
        'Code',
        'Description'
    ];

    protected $url = 'inventory/StorageLocations';
}