<?php
declare(strict_types=1);

namespace Selectco\SageDTO\Sales\ArrayObjects;

class AllocationSessionItemDTO
{
    public function __construct(
        protected string|null $user_name = null,
        protected string|null $ledger_type = null,
        protected int|null $urn = null,
        protected string|null $allocation_date = null,
        protected string|null $trader_transaction_type = null,
        protected string|null $reference = null,
        protected int|null $value = null,
        protected int|null $allocation_value = null
    )
    {
    }
}