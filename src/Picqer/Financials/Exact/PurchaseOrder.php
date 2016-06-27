<?php namespace Picqer\Financials\Exact;

/**
 * Class PurchaseOrder
 * 
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseOrderPurchaseOrders
 */
class PurchaseOrder extends Model{
    use Query\Findable;
    use Persistance\Storable;
    
    protected $primaryKey = 'PurchaseOrderID';
    
    protected $fillable = [
        'PurchaseOrderID',
        'Currency',
        'Description',
        'OrderStatus',
        'OrderNumber',
        'OrderDate',
        'ReceiptDate',
        'Supplier',
        'SupplierCode',
        'SupplierName',
        'YourRef'
    ];

    protected $url = 'purchaseorder/PurchaseOrders';
}