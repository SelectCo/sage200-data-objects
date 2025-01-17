<?php
declare(strict_types=1);

namespace Selectco\SageDTO\Sales\ArrayObjects;

class NominalAnalysisItemTO
{
    public function __construct(
        protected string|null $code = null,
        protected string|null $cost_centre = null,
        protected string|null $department = null,
        protected string|null $name = null,
        protected string|null $location = null,
        protected string|null $reference = null,
        protected string|null $narrative = null,
        protected int|null $value = null,
        protected int|null $base_value = null,
        protected string|null $transaction_analysis_code = null,
        protected string|null $source = null
    )
    {
    }
}