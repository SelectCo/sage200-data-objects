<?php
declare(strict_types=1);

namespace Selectco\SageDTO\Sales\ArrayObjects;

class AllocationHistoryItemDTO
{
    public function __construct(
        protected int|null $id = null,
        protected string|null $trading_revaluation_allocation_entry_type = null,
        protected string|null $entry_date = null,
        protected int|null $allocation_value = null,
        protected bool|null $nominal_updated = null,
        protected int|null $exchange_rate = null,
        protected int|null $exchange_gain_loss = null,
        protected string|null $date_time_created = null,
        protected string|null $date_time_updated = null
    )
    {
    }
}