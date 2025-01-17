<?php
declare(strict_types=1);

namespace Selectco\SageDTO\Stock;

use Symfony\Component\Validator\Constraints as Assert;

class WarehouseTypesDTO
{
    public function __construct(
        #[Assert\Type('int')]
        #[Assert\Length(64)]
        public readonly int $_id,

        #[Assert\Type('string')]
        #[Assert\Length(max: 20)]
        public readonly string $description,

        #[Assert\Type('string')]
        #[Assert\Length(max: 20)]
        public readonly string $value
    )
    {
    }
}