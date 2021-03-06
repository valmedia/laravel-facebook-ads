<?php

namespace Edbizarro\LaravelFacebookAds\Services\Insights;

use FacebookAds\Object\AdAccount;
use Edbizarro\LaravelFacebookAds\Services\BaseService;
use Illuminate\Support\Collection;

/**
 * Class AdAccountInsights.
 */
class AdAccountInsights extends BaseService
{
    /**
     * Get insights from a especified object type.
     *
     * @param mixed $objectId
     * @param array $params
     *
     * @return Collection
     */
    public function insights($objectId, $params = [])
    {
        $fields = $params['fields'];
        unset($params['fields']);

        $account = new AdAccount($objectId);
        $insights = $account->getInsights($fields, $params);

        return $this->response($insights);
    }
}
