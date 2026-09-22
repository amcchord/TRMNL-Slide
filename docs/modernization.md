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

## Recipes connection reuse

When TRMNL is installed at `/trmnl/` below Recipes, its setup screen reuses the existing encrypted Recipes cookie server-side. Connected visitors see **Connected through Recipes**, the client filter, and **Preview display**. The shared key is never prefilled in HTML, put in a hidden form field, or copied into browser storage or a second cookie. The browser JSON endpoint uses the same connection when no explicit key is supplied.

The current root cookie is resolved on every request. Changing accounts in Recipes applies to the next preview; disconnecting Recipes restores the standalone key form. The **Manage connection** link opens Recipes' existing connection settings. Malformed/unreadable cookies and standalone installs without `../include/encryption.php` fall back to manual setup. TRMNL does not copy or change Recipes' encryption configuration.

Device/plugin requests keep their explicit JSON POST or legacy query-key behavior, including precedence over a browser cookie. A physical TRMNL device does not receive the browser's Recipes cookie and still needs its own plugin credential configuration.

```sh
php tests/connection.php
php tests/statistics.php
```

The 31 connection checks cover current-cookie selection, account changes, sign-out, explicit-key precedence, malformed input, the unmodified setup/preview and JSON endpoints, and credential absence from rendered responses. The endpoint fixtures load a test Recipes helper through the real parent include path and make no external calls.

Deployed on September 22, 2026 with a narrow file replacement and rollback copies at `/var/backups/slide-recipes/trmnl-key-handoff-20260922T053357Z`. The existing server edit to `test-json-post.php` was preserved. Live verification passed 32 checks using isolated sessions: actual Recipes encryption, filtered browser and JSON previews (Brawndo: four agents), changed/removed/malformed cookies, credential-free responses, and explicit plugin JSON POST. Desktop and 390px screenshots confirmed connected status, visible filter/preview controls, and no horizontal overflow. The setup stylesheet uses a content hash URL so existing browsers receive the new connection styling.
