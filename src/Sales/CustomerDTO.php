<?php
declare(strict_types=1);

namespace Selectco\SageDTO\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * "id": 0,
 * "reference": "string",
 * "name": "string",
 * "short_name": "string",
 * "balance": 0,
 * "on_hold": "false",
 * "status_reason": "string",
 * "account_status_type": "AccountStatusActive",
 * "currency_id": 0,
 * "exchange_rate_type": "ExchangeRateSingle",
 * "telephone_country_code": "strin",
 * "telephone_area_code": "string",
 * "telephone_subscriber_number": "string",
 * "fax_country_code": "strin",
 * "fax_area_code": "string",
 * "fax_subscriber_number": "string",
 * "website": "string",
 * "credit_limit": 0,
 * "country_code_id": 0,
 * "default_tax_code_id": 0,
 * "vat_number": "string",
 * "duns_code": "string",
 * "account_type": "TradingAccountTypeOpenItem",
 * "early_settlement_discount_percent": 0,
 * "early_settlement_discount_days": 0,
 * "payment_terms_days": 0,
 * "payment_terms_basis": "string",
 * "average_time_to_pay": 0,
 * "terms_agreed": true,
 * "value_of_current_orders_in_sop": 0,
 * "credit_bureau_id": 0,
 * "credit_position_id": 0,
 * "finance_charge_id": 0,
 * "trading_terms": "string",
 * "credit_reference": "string",
 * "account_opened": "2019-08-24T14:15:22Z",
 * "last_credit_review": "2019-08-24T14:15:22Z",
 * "next_credit_review": "2019-08-24T14:15:22Z",
 * "application_date": "2019-08-24T14:15:22Z",
 * "date_received": "2019-08-24T14:15:22Z",
 * "date_finance_charge_last_run": "2019-08-24T14:15:22Z",
 * "office_type": "string",
 * "associated_head_office_id": 0,
 * "produce_statements_for_customer": true,
 * "is_head_office_with_branches": true,
 * "use_consolidated_billing": true,
 * "order_priority": "s",
 * "use_tax_code_as_default": true,
 * "months_to_keep_transactions": 0,
 * "default_nominal_code_id": 0,
 * "default_nominal_code_reference": "string",
 * "default_nominal_code_cost_centre": "str",
 * "default_nominal_code_department": "str",
 * "invoice_discount_percent": 0,
 * "invoice_line_discount_percent": 0,
 * "customer_discount_group_id": 0,
 * "order_value_discount_id": 0,
 * "price_band_id": 0,
 * "analysis_code_1": "string",
 * "analysis_code_2": "string",
 * "analysis_code_3": "string",
 * "analysis_code_4": "string",
 * "analysis_code_5": "string",
 * "analysis_code_6": "string",
 * "analysis_code_7": "string",
 * "analysis_code_8": "string",
 * "analysis_code_9": "string",
 * "analysis_code_10": "string",
 * "analysis_code_11": "string",
 * "analysis_code_12": "string",
 * "analysis_code_13": "string",
 * "analysis_code_14": "string",
 * "analysis_code_15": "string",
 * "analysis_code_16": "string",
 * "analysis_code_17": "string",
 * "analysis_code_18": "string",
 * "analysis_code_19": "string",
 * "analysis_code_20": "string",
 * "spare_text_1": "string",
 * "spare_text_2": "string",
 * "spare_text_3": "string",
 * "spare_text_4": "string",
 * "spare_text_5": "string",
 * "spare_text_6": "string",
 * "spare_text_7": "string",
 * "spare_text_8": "string",
 * "spare_text_9": "string",
 * "spare_text_10": "string",
 * "spare_number_1": 0,
 * "spare_number_2": 0,
 * "spare_number_3": 0,
 * "spare_number_4": 0,
 * "spare_number_5": 0,
 * "spare_number_6": 0,
 * "spare_number_7": 0,
 * "spare_number_8": 0,
 * "spare_number_9": 0,
 * "spare_number_10": 0,
 * "spare_date_1": "2019-08-24T14:15:22Z",
 * "spare_date_2": "2019-08-24T14:15:22Z",
 * "spare_date_3": "2019-08-24T14:15:22Z",
 * "spare_date_4": "2019-08-24T14:15:22Z",
 * "spare_date_5": "2019-08-24T14:15:22Z",
 * "spare_bool_1": false,
 * "spare_bool_2": false,
 * "spare_bool_3": false,
 * "spare_bool_4": false,
 * "spare_bool_5": false,
 * "associated_head_office": { },
 * "country_code": { },
 * "credit_bureau": { },
 * "credit_memo_note": {},
 * "credit_position": { },
 * "currency": { },
 * "customer_discount_group": { },
 * "default_nominal_code": { },
 * "default_tax_code": { },
 * "finance_charge": { },
 * "main_address": {},
 * "order_value_discount": { },
 * "price_band": { },
 * "sales_credit_note_layout": { },
 * "sales_invoice_layout": { },
 * "statement_layout": { },
 * "status": {},
 * "alerts": [],
 * "cards": [],
 * "contacts": [],
 * "limited_price_bands": [],
 * "memos": [],
 * "date_time_created": "2019-08-24T14:15:22Z",
 * "date_time_updated": "2019-08-24T14:15:22Z"
 */
class CustomerDTO
{
    public function __construct(
        #[Assert\Type('string')]
        #[Assert\Length(max: 8)]
        protected string|null $reference = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $name = null,

        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $id = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 8)]
        protected string|null $short_name = null,

        #[Assert\Type('float')]
        protected float|null $balance = null,

        #[Assert\Type('bool')]
        protected bool|null $on_hold = false,

        #[Assert\Type('string')]
        #[Assert\Length(max: 256)]
        protected string|null $status_reason = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 20)]
        protected string|null $account_status_type = null,

        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $currency_id = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 20)]
        protected string|null $exchange_rate_type = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 5)]
        protected string|null $telephone_country_code = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 20)]
        protected string|null $telephone_area_code = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 200)]
        protected string|null $telephone_subscriber_number = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 5)]
        protected string|null $fax_country_code = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 20)]
        protected string|null $fax_area_code = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 200)]
        protected string|null $fax_subscriber_number = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 200)]
        protected string|null $website = null,

        #[Assert\Type('float')]
        protected float|null $credit_limit = 0,

        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $country_code_id = null,

        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $default_tax_code_id = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 30)]
        protected string|null $vat_number = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 9)]
        protected string|null $duns_code = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 20)]
        protected string|null $account_type = null,

        #[Assert\Type('float')]
        protected float|null $early_settlement_discount_percent = null,

        #[Assert\Type('int')]
        #[Assert\Length(16)]
        protected int|null $early_settlement_discount_days = null,

        #[Assert\Type('int')]
        #[Assert\Length(16)]
        protected int|null $payment_terms_days = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 20)]
        protected string|null $payment_terms_basis = null,

        #[Assert\Type('int')]
        #[Assert\Length(32)]
        protected int|null $average_time_to_pay = null,

        #[Assert\Type('bool')]
        protected bool|null $terms_agreed = null,

        #[Assert\Type('float')]
        protected float|null $value_of_current_orders_in_sop = null,

        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $credit_bureau_id = null,

        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $credit_position_id = null,

        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $finance_charge_id = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 30)]
        protected string|null $trading_terms = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $credit_reference = null,


        protected string|null $account_opened = null,


        protected string|null $last_credit_review = null,


        protected string|null $next_credit_review = null,


        protected string|null $application_date = null,


        protected string|null $date_received = null,


        protected string|null $date_finance_charge_last_run = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 20)]
        protected string|null $office_type = null,

        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $associated_head_office_id = null,

        #[Assert\Type('bool')]
        protected bool|null $produce_statements_for_customer = null,

        #[Assert\Type('bool')]
        protected bool|null $is_head_office_with_branches = null,

        #[Assert\Type('bool')]
        protected bool|null $use_consolidated_billing = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 1)]
        protected string|null $order_priority = null,

        #[Assert\Type('bool')]
        protected bool|null $use_tax_code_as_default = null,

        #[Assert\Type('int')]
        #[Assert\Length(16)]
        protected int|null $months_to_keep_transactions = null,

        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $default_nominal_code_id = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 8)]
        protected string|null $default_nominal_code_reference = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 3)]
        protected string|null $default_nominal_code_cost_centre = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 3)]
        protected string|null $default_nominal_code_department = null,

        #[Assert\Type('float')]
        protected float|null $invoice_discount_percent = null,

        #[Assert\Type('float')]
        protected float|null $invoice_line_discount_percent = null,

        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $customer_discount_group_id = null,

        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $order_value_discount_id = null,

        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $price_band_id = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $analysis_code_1 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $analysis_code_2 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $analysis_code_3 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $analysis_code_4 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $analysis_code_5 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $analysis_code_6 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $analysis_code_7 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $analysis_code_8 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $analysis_code_9 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $analysis_code_10 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $analysis_code_11 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $analysis_code_12 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $analysis_code_13 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $analysis_code_14 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $analysis_code_15 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $analysis_code_16 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $analysis_code_17 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $analysis_code_18 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $analysis_code_19 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 60)]
        protected string|null $analysis_code_20 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 100)]
        protected string|null $spare_text_1 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 100)]
        protected string|null $spare_text_2 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 100)]
        protected string|null $spare_text_3 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 100)]
        protected string|null $spare_text_4 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 100)]
        protected string|null $spare_text_5 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 100)]
        protected string|null $spare_text_6 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 100)]
        protected string|null $spare_text_7 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 100)]
        protected string|null $spare_text_8 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 100)]
        protected string|null $spare_text_9 = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 100)]
        protected string|null $spare_text_10 = null,

        #[Assert\Type('float')]
        protected float|null $spare_number_1 = 0,

        #[Assert\Type('float')]
        protected float|null $spare_number_2 = 0,

        #[Assert\Type('float')]
        protected float|null $spare_number_3 = 0,

        #[Assert\Type('float')]
        protected float|null $spare_number_4 = 0,

        #[Assert\Type('float')]
        protected float|null $spare_number_5 = 0,

        #[Assert\Type('float')]
        protected float|null $spare_number_6 = 0,

        #[Assert\Type('float')]
        protected float|null $spare_number_7 = 0,

        #[Assert\Type('float')]
        protected float|null $spare_number_8 = 0,

        #[Assert\Type('float')]
        protected float|null $spare_number_9 = 0,

        #[Assert\Type('float')]
        protected float|null $spare_number_10 = 0,


        protected string|null $spare_date_1 = null,


        protected string|null $spare_date_2 = null,


        protected string|null $spare_date_3 = null,


        protected string|null $spare_date_4 = null,


        protected string|null $spare_date_5 = null,

        #[Assert\Type('bool')]
        protected bool|null $spare_bool_1 = false,

        #[Assert\Type('bool')]
        protected bool|null $spare_bool_2 = false,

        #[Assert\Type('bool')]
        protected bool|null $spare_bool_3 = false,

        #[Assert\Type('bool')]
        protected bool|null $spare_bool_4 = false,

        #[Assert\Type('bool')]
        protected bool|null $spare_bool_5 = false,


        protected $associated_head_office = null,


        protected $country_code = null,


        protected $credit_bureau = null,


        protected $credit_memo_note = null,


        protected $credit_position = null,


        protected $currency = null,


        protected $customer_discount_group = null,


        protected $default_nominal_code = null,


        protected $default_tax_code = null,


        protected $finance_charge = null,


        protected $main_address = null,


        protected $order_value_discount = null,


        protected $price_band = null,


        protected $sales_credit_note_layout = null,


        protected $sales_invoice_layout = null,


        protected $statement_layout = null,


        protected $status = null,


        protected $alerts = null,


        protected $cards = null,


        protected $contacts = null,


        protected $limited_price_bands = null,


        protected $memos = null,

        #[Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
        protected string|null $date_time_created = null,

        #[Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
        protected string|null $date_time_updated = null
    )
    {
    }
}