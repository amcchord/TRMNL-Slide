# Recipes modernization

The browser setup page now matches the Recipes suite. The actual e-ink display retains the TRMNL layout and contrast conventions.

`SlideClient.php` provides bounded GET retries/timeouts, complete 50-item pagination, full-page fallback when next_offset is absent, and account-isolated short caching. Inventory and the client picker are complete. Weekly charts fetch the full seven-day backup window; daily counts derive from that same window. Client backup membership follows agents, including agents on another client's device. Alerts exclude resolved items. Failed sources propagate an error rather than returning a healthy-looking partial dashboard.

The API no longer returns a collection total for snapshots. `total_snapshots` is now null and both PHP and Liquid layouts avoid displaying an invented zero. This removes the previous per-agent snapshot scans. Any custom Liquid template consuming this field should handle null explicitly. Snapshot history remains available in Slide.

Raw credential logging was removed, and the integration-test key now comes from `SLIDE_API_KEY`. Existing query-key integration remains compatible; prefer the existing POST/JSON configuration path. The setup theme loads the shared Recipes font/mark from the parent suite.

```sh
php tests/statistics.php
```

Fixtures cover client pagination beyond 50, real totals without pagination.total, client ownership, the weekly window, unresolved alerts, no per-agent snapshot reads, and error propagation. The shared PHP client is also covered by the Recipes client tests. The setup screen was visually inspected. Actual TRMNL device rendering/refresh remains a rollout check.

Deploy independently from Recipes. Preserve the existing unrelated server edit to `test-json-post.php`. Update the installed Liquid template if it uses the old snapshot total text. No production deployment or credential rotation was performed.
