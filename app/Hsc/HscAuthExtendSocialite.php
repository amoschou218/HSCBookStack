<?php

namespace Bookstack\Hsc;

use SocialiteProviders\LaravelPassport\Provider;
use SocialiteProviders\Manager\SocialiteWasCalled;

class HscAuthExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled): void
    {
        $socialiteWasCalled->extendSocialite('hscauth', Provider::class);
    }
}