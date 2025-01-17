<?php
declare(strict_types=1);

namespace Selectco\SageDTO\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

class SOPOrderLineViewsDTO
{
    public function __construct(
        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $sop_order_id = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 20)]
        protected string|null $sop_order_document_no = null,

        #[Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
        protected string|null $sop_order_document_date = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 20)]
        protected string|null $sop_order_document_status = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 30)]
        protected string|null $sop_order_customer_document_no = null,

        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $sop_order_currency_id = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 30)]
        protected string|null $sop_order_currency_name = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 4)]
        protected string|null $sop_order_currency_symbol = null,

        #[Assert\Type('float')]
        protected float|null $sop_order_exchange_rate = null,

        #[Assert\Type('float')]
        protected float|null $sop_order_subtotal_goods_value = null,

        #[Assert\Type('float')]
        protected float|null $sop_order_subtotal_charge_net_value = null,

        #[Assert\Type('float')]
        protected float|null $sop_order_subtotal_charge_tax_value = null,

        #[Assert\Type('float')]
        protected float|null $sop_order_subtotal_discount_value = null,

        #[Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
        protected string|null $sop_order_requested_delivery_date = null,

        #[Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
        protected string|null $sop_order_promised_delivery_date = null,

        #[Assert\Type('float')]
        protected float|null $sop_order_settlement_discount_days = null,

        #[Assert\Type('float')]
        protected float|null $sop_order_settlement_discount_percent = null,

        #[Assert\Type('float')]
        protected float|null $sop_order_document_discount_percent = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 30)]
        protected string|null $sop_order_document_created_by = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_analysis_code_1 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_analysis_code_2 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_analysis_code_3 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_analysis_code_4 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_analysis_code_5 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_analysis_code_6 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_analysis_code_7 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_analysis_code_8 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_analysis_code_9 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_analysis_code_10 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_analysis_code_11 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_analysis_code_12 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_analysis_code_13 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_analysis_code_14 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_analysis_code_15 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_analysis_code_16 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_analysis_code_17 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_analysis_code_18 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_analysis_code_19 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_analysis_code_20 = null,

        #[Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
        protected string|null $sop_order_date_time_updated = null,

        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $sop_order_line_id = null,

        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $sop_order_line_number = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 20)]
        protected string|null $sop_order_line_type = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 30)]
        protected string|null $sop_order_line_product_code = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 1000)]
        protected string|null $sop_order_line_product_description = null,

        #[Assert\Type('float')]
        protected float|null $sop_order_line_quantity = null,

        #[Assert\Type('float')]
        protected float|null $sop_order_line_allocated_quantity = null,

        #[Assert\Type('float')]
        protected float|null $sop_order_line_despatch_receipt_quantity = null,

        #[Assert\Type('float')]
        protected float|null $sop_order_line_invoice_credit_quantity = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 20)]
        protected string|null $sop_order_line_selling_unit_description = null,

        #[Assert\Type('float')]
        protected float|null $sop_order_line_selling_unit_price = null,

        #[Assert\Type('float')]
        protected float|null $sop_order_line_unit_discount_percent = null,

        #[Assert\Type('float')]
        protected float|null $sop_order_line_unit_discount_value = null,

        #[Assert\Type('float')]
        protected float|null $sop_order_line_cost_price = null,

        #[Assert\Type('float')]
        protected float|null $sop_order_line_total_value = null,

        #[Assert\Type('float')]
        protected float|null $sop_order_line_line_tax_value = null,

        #[Assert\Type('float')]
        protected float|null $sop_order_line_discounted_unit_price = null,

        #[Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
        protected string|null $sop_order_line_requested_delivery_date = null,

        #[Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
        protected string|null $sop_order_line_promised_delivery_date = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_line_analysis_code_1 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_line_analysis_code_2 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_line_analysis_code_3 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_line_analysis_code_4 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_line_analysis_code_5 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_line_analysis_code_6 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_line_analysis_code_7 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_line_analysis_code_8 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_line_analysis_code_9 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_line_analysis_code_10 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_line_analysis_code_11 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_line_analysis_code_12 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_line_analysis_code_13 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_line_analysis_code_14 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_line_analysis_code_15 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_line_analysis_code_16 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_line_analysis_code_17 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_line_analysis_code_18 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_line_analysis_code_19 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_order_line_analysis_code_20 = null,

        #[Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
        protected string|null $sop_order_line_date_time_updated = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_delivery_addr_postal_name = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_delivery_addr_description = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_delivery_addr_address_1 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_delivery_addr_address_2 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_delivery_addr_address_3 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_delivery_addr_address_4 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_delivery_addr_city = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_delivery_addr_county = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_delivery_addr_post_code = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_delivery_addr_country = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_delivery_addr_contact = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_delivery_addr_telephone = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_delivery_addr_fax = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $sop_delivery_addr_email = null,

        #[Assert\Type('float')]
        protected float|null $customer_id = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 8)]
        protected string|null $customer_reference = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $customer_name = null,

        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $product_id = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 30)]
        protected string|null $product_code = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $product_name = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 1000)]
        protected string|null $product_description = null,

        #[Assert\Type('float')]
        protected float|null $warehouse_id = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 20)]
        protected string|null $warehouse_name = null,

        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $tax_code_id = null,

        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $tax_code_code = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $tax_code_name = null,

        #[Assert\Type('float')]
        protected float|null $tax_code_rate = null
    )
    {
    }
}