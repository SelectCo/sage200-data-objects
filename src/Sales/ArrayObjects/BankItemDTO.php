<?php
declare(strict_types=1);

namespace Selectco\SageDTO\Sales\ArrayObjects;

class BankItemDTO
{
    public function __construct(
        protected string|null $bank_code = null,
        protected string|null $name = null,
        protected string|null $bank_entry_type = null,
        protected string|null $reference = null,
        protected int|null $cheque_value = null,
        protected string|null $statement_date = null,
        protected int|null $statement_page_number = null,
        protected int|null $urn = null
    )
    {
    }
}