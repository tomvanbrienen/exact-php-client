<?php namespace Picqer\Financials\Exact;

/**
 * Class Operation
 * 
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingOperations
 */
class Operation extends Model{
    use Query\Findable;
    use Persistance\Storable;
    
    protected $primaryKey = 'ID';
    
    protected $fillable = [
        'ID',
        'Code',
        'Description'
    ];

    protected $url = 'manufacturing/Operations';
}