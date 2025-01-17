<?php
declare(strict_types=1);

namespace Selectco\SageDTO\Sales\ArrayObjects;

class TaxAnalysisItemDTO
{
    public function __construct(
        protected int|null $id = null,

        protected int|null $code = null,

        protected string|null $name = null,

        protected string|null $entry_type = null,

        protected int|null $goods_amount = null,

        protected int|null $tax_amount = null,

        protected int|null $tax_discount_amount = null
    )
    {
    }
}