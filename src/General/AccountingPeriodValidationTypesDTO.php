<?php
declare(strict_types=1);

namespace Selectco\SageDTO\General;

use Symfony\Component\Validator\Constraints as Assert;

class AccountingPeriodValidationTypesDTO
{
    /**
     * "id": 0,
     * "description": "string",
     * "value": "string",
     */
    public function __construct(
        #[Assert\Type('int')]
        #[Assert\Length(64)]
        public readonly int $id,

        #[Assert\Type('string')]
        #[Assert\Length(max: 50)]
        public readonly string $description,

        #[Assert\Type('string')]
        #[Assert\Length(max: 50)]
        public readonly string $value
    )
    {
    }
}