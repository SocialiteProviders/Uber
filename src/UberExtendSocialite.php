<?php
namespace SocialiteProviders\Uber;

use SocialiteProviders\Manager\SocialiteWasCalled;

class UberExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('uber', __NAMESPACE__.'\Provider');
    }
}
