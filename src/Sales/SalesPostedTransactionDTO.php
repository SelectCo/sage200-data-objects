<?php
declare(strict_types=1);

namespace Selectco\SageDTO\Sales;

use Selectco\SageDTO\Sales\ArrayObjects\AllocationHistoryItemDTO;
use Selectco\SageDTO\Sales\ArrayObjects\AllocationSessionItemDTO;
use Selectco\SageDTO\Sales\ArrayObjects\BankItemDTO;
use Selectco\SageDTO\Sales\ArrayObjects\NominalAnalysisItemTO;
use Selectco\SageDTO\Sales\ArrayObjects\TaxAnalysisItemDTO;
use Symfony\Component\Validator\Constraints as Assert;

class SalesPostedTransactionDTO
{
    public function __construct(
        protected int|null $id = null,

        protected int|null $customer_id = null,

        protected string|null $trader_transaction_type = null,

        protected string|null $reference = null,

        protected string|null $second_reference = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 1)]
        protected string|null $queried = null,

        protected string|null $transaction_date = null,

        protected string|null $posted_date = null,

        protected string|null $due_date = null,

        protected string|null $full_settlement_date = null,

        protected float|null $document_goods_value = 0,

        protected float|null $document_gross_value = 0,

        protected float|null $document_tax_value = 0,

        protected float|null $document_discount_value = 0,

        protected float|null $discount_percent = 0,

        protected float|null $document_tax_discount_value = 0,

        protected float|null $document_allocated_value = 0,

        protected float|null $document_outstanding_value = 0,

        protected float|null $base_goods_value = 0,

        protected float|null $base_gross_value = 0,

        protected float|null $base_tax_value = 0,

        protected float|null $base_discount_value = 0,

        protected float|null $base_tax_discount_value = 0,

        protected float|null $base_allocated_value = 0,

        protected float|null $control_value_in_base_currency = 0,

        protected float|null $exchange_rate = 0,

        protected bool|null $settled_immediately = false,

        protected int|null $discount_days = null,

        protected int|null $urn = null,

        protected string|null $user_name = null,

		protected TaxAnalysisItemDTO|null $tax_analysis_items = null,

		protected NominalAnalysisItemTO|null $nominal_analysis_items = null,

		protected BankItemDTO|null $bank_items = null,

		protected AllocationSessionItemDTO|null $allocation_session_items = null,

		protected AllocationHistoryItemDTO|null $allocation_history_items = null,

		protected CustomerDTO|null $customer = null,

        protected string|null $date_time_created = null,

        protected string|null $date_time_updated = null
    )
    {
    }
}