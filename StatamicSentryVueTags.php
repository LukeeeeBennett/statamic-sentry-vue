<?php

namespace Statamic\Addons\StatamicSentryVue;

use Statamic\Extend\Tags;

class StatamicSentryVueTags extends Tags
{
    /**
     * The {{ statamic_sentry_vue }} tag
     *
     * @return string|array
     */
    public function index()
    {
        $dsn = $this->getConfig('dsn', null);

        if (!$dsn || !$this->isEnabled()) return '';

        return <<<EOT
            <script src="https://cdn.ravenjs.com/3.24.0/vue/raven.min.js" crossorigin="anonymous"></script>
            <script>Raven.config('$dsn').install();</script>
EOT;
    }

    /**
     * Check if is enabled.
     *
     * @return bool
     */
    private function isEnabled()
    {
        return $this->getConfigBool('enable', false);
    }
}
