<?php
declare(strict_types=1);

namespace Selectco\SageDTO\Stock;

use Symfony\Component\Validator\Constraints as Assert;

class BinHoldingDTO
{
    public function __construct(
        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $warehouse_holding_id = null,

        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $product_id = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 20)]
        protected string|null $name = null,

        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $allocation_priority = null,

        #[Assert\Type('bool')]
        protected bool|null $is_to_delete = null,

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
        protected float|null $spare_number_1 = null,

        #[Assert\Type('float')]
        protected float|null $spare_number_2 = null,

        #[Assert\Type('float')]
        protected float|null $spare_number_3 = null,

        #[Assert\Type('float')]
        protected float|null $spare_number_4 = null,

        #[Assert\Type('float')]
        protected float|null $spare_number_5 = null,

        #[Assert\Type('float')]
        protected float|null $spare_number_6 = null,

        #[Assert\Type('float')]
        protected float|null $spare_number_7 = null,

        #[Assert\Type('float')]
        protected float|null $spare_number_8 = null,

        #[Assert\Type('float')]
        protected float|null $spare_number_9 = null,

        #[Assert\Type('float')]
        protected float|null $spare_number_10 = null,

        #[Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
        protected string|null $spare_date_1 = null,

        #[Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
        protected string|null $spare_date_2 = null,

        #[Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
        protected string|null $spare_date_3 = null,

        #[Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
        protected string|null $spare_date_4 = null,

        #[Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
        protected string|null $spare_date_5 = null,

        #[Assert\Type('bool')]
        protected bool|null $spare_bool_1 = null,

        #[Assert\Type('bool')]
        protected bool|null $spare_bool_2 = null,

        #[Assert\Type('bool')]
        protected bool|null $spare_bool_3 = null,

        #[Assert\Type('bool')]
        protected bool|null $spare_bool_4 = null,

        #[Assert\Type('bool')]
        protected bool|null $spare_bool_5 = null,

        protected ProductDTO|null $product = null,

        protected WarehouseHoldingDTO|null $warehouse_holding = null,
    )
    {
    }
}