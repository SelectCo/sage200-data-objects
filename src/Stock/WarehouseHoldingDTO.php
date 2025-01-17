<?php
declare(strict_types=1);

namespace Selectco\SageDTO\Stock;

use Symfony\Component\Validator\Constraints as Assert;

class WarehouseHoldingDTO
{
/**
"id": 0,
"warehouse_id": 0,
"product_id": 0,
"is_default_manufacturing_warehouse": true,
"reorder_level": 0,
"minimum_level": 0,
"maximum_level": 0,
"quantity_reserved": 0,
"confirmed_qty_in_stock": 0,
"unconfirmed_qty_in_stock": 0,
"quantity_in_stock": 0,
"quantity_in_stock_less_reserved": 0,
"quantity_on_order": 0,
"quantity_allocated_stock": 0,
"quantity_allocated_sop": 0,
"quantity_allocated_bom": 0,
"quantity_allocated": 0,
"free_stock_available": 0,
"free_stock_available_less_reserved": 0,
"warehouse_name": "string",
"is_to_delete": true,
"product": {},
"warehouse": {},
"bin_holdings": [
  {
      "id": 0,
    "warehouse_holding_id": 0,
    "product_id": 0,
    "name": "string",
    "allocation_priority": 9,
    "quantity_reserved": 0,
    "unconfirmed_qty_in_stock": 0,
    "confirmed_qty_in_stock": 0,
    "quantity_allocated_sop": 0,
    "quantity_allocated_stock": 0,
    "quantity_allocated_bom": 0,
    "quantity_in_stock": 0,
    "quantity_in_stock_less_reserved": 0,
    "quantity_allocated": 0,
    "free_stock_available": 0,
    "free_stock_available_less_reserved": 0,
    "last_stocktake": "2019-08-24T14:15:22Z",
    "is_to_delete": true,
    "spare_text_1": "string",
    "spare_text_2": "string",
    "spare_text_3": "string",
    "spare_text_4": "string",
    "spare_text_5": "string",
    "spare_text_6": "string",
    "spare_text_7": "string",
    "spare_text_8": "string",
    "spare_text_9": "string",
    "spare_text_10": "string",
    "spare_number_1": 0,
    "spare_number_2": 0,
    "spare_number_3": 0,
    "spare_number_4": 0,
    "spare_number_5": 0,
    "spare_number_6": 0,
    "spare_number_7": 0,
    "spare_number_8": 0,
    "spare_number_9": 0,
    "spare_number_10": 0,
    "spare_date_1": "2019-08-24T14:15:22Z",
    "spare_date_2": "2019-08-24T14:15:22Z",
    "spare_date_3": "2019-08-24T14:15:22Z",
    "spare_date_4": "2019-08-24T14:15:22Z",
    "spare_date_5": "2019-08-24T14:15:22Z",
    "spare_bool_1": false,
    "spare_bool_2": false,
    "spare_bool_3": false,
    "spare_bool_4": false,
    "spare_bool_5": false,
    "product": {},
    "warehouse_holding": {},
    "date_time_created": "2019-08-24T14:15:22Z",
    "date_time_updated": "2019-08-24T14:15:22Z"
  }
],
    "status": {
    "delete_exception_type": "string"
    },
    "date_time_created": "2019-08-24T14:15:22Z",
    "date_time_updated": "2019-08-24T14:15:22Z"
**/

    public function __construct(
        #[Assert\Type('int')]
        #[Assert\Length(64)]
        public readonly int|null $id = null,

        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $warehouse_id = null,

        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $product_id = null,

        #[Assert\Type('bool')]
        protected bool|null $is_default_manufacturing_warehouse = null,

        #[Assert\Type('float')]
        protected float|null $reorder_level = null,

        #[Assert\Type('float')]
        protected float|null $minimum_level = null,

        #[Assert\Type('float')]
        protected float|null $maximum_level = null,

        #[Assert\Type('float')]
        protected float|null $quantity_reserved = null,

        #[Assert\Type('float')]
        protected float|null $confirmed_qty_in_stock = null,

        #[Assert\Type('float')]
        protected float|null $unconfirmed_qty_in_stock = null,

        #[Assert\Type('float')]
        protected float|null $quantity_in_stock = null,

        #[Assert\Type('float')]
        protected float|null $quantity_in_stock_less_reserved = null,

        #[Assert\Type('float')]
        protected float|null $quantity_on_order = null,

        #[Assert\Type('float')]
        protected float|null $quantity_allocated_stock = null,

        #[Assert\Type('float')]
        protected float|null $quantity_allocated_sop = null,

        #[Assert\Type('float')]
        protected float|null $quantity_allocated_bom = null,

        #[Assert\Type('float')]
        protected float|null $quantity_allocated = null,

        #[Assert\Type('float')]
        protected float|null $free_stock_available = null,

        #[Assert\Type('float')]
        protected float|null $free_stock_available_less_reserved = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 20)]
        protected string|null $warehouse_name = null,

        #[Assert\Type('bool')]
        protected bool|null $is_to_delete = null,

        protected ProductDTO|null $product = null,

        protected WarehouseDTO|null $warehouse = null,

        protected BinHoldingDTO|null $bin_holdings = null,

        protected string|null $status = null,

        #[Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
        protected string|null $date_time_created = null,

        #[Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
        protected string|null $date_time_updated = null
    )
    {
    }
}