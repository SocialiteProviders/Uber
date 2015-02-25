<?php
namespace SocialiteProviders\Uber;

use SocialiteProviders\Manager\SocialiteWasCalled;

class UberExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'uber', __NAMESPACE__.'\Provider'
        );
    }
}
