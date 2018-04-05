# statamic-sentry-vue
Statamic addon for Sentry error reporting for Vue.

1. Copy these files to `site/addons/StatamicSentryVue`, create the `StatamicSentryVue` directory if you need to.

2. Visit `/cp/addons/statamic-sentry-vue/settings` to enable the service and enter your DSN.

3. Add the `{{ statamic_sentry_vue }}` tag to the bottom of the `<head>` tag in your template's layout(s).

> If you would like to, execute `Raven.captureException('test');` in a browser console to confirm the installation worked correctly.
