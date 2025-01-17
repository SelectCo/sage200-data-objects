<?php
declare(strict_types=1);

namespace Selectco\SageDTO\General;

class SitesDTO
{
    public function __construct(
        public readonly int $company_id,
        public readonly string|null $company_name = null,
        public readonly string|null $site_id = null,
        public readonly string|null $site_name = null,
        public readonly string|null $site_short_name = null
    )
    {
    }
}
