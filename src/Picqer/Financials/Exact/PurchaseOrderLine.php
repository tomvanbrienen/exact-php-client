<?php namespace Picqer\Financials\Exact;

/**
 * Class PurchaseOrderLine
 * 
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseOrderPurchaseOrderLines
 */
class PurchaseOrderLine extends Model{
    use Query\Findable;
    use Persistance\Storable;
    
    protected $primaryKey = 'ID';
    
    protected $fillable = [
        'ID',
        'Item',
        'ItemCode',
        'ItemDescription',
        'NetPrice',
        'ReceiptDate',
        'SupplierItemCode',
        'Quantity',
        'UnitDescription'
    ];

    protected $url = 'purchaseorder/PurchaseOrderLines';
}