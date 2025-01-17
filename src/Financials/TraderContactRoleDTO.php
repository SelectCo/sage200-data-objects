<?php
declare(strict_types=1);

namespace Selectco\SageDTO\Financials;

class TraderContactRoleDTO
{
    public function __construct(
        #[Assert\Type('int')]
        #[Assert\Length(64)]
        protected int|null $id = null,

        #[Assert\Type('string')]
        #[Assert\Length(max: 20)]
        protected string|null $role = null,

        #[Assert\Type('bool')]
        protected bool|null $is_default_role = null,

        #[Assert\Type('bool')]
        protected bool|null $is_mandatory = null,

        #[Assert\Type('bool')]
        protected bool|null $use_for_customer_accounts = null,

        #[Assert\Type('bool')]
        protected bool|null $use_for_supplier_accounts = null,

        #[Assert\Type('bool')]
        protected bool|null $use_with_documents = null,

        #[Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
        protected string|null $date_time_created = null,

        #[Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
        protected string|null $date_time_updated = null,
    )
    {
    }
}