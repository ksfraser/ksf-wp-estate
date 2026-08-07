# ksf_wp_estate

WordPress **UI/hooks** for estate planning. Part of the `ksf_estate` /
`ksf_FA_estate` / `ksf_WP_estate` triple.

- Business logic lives in [`ksfraser/ksf-estate`](https://github.com/ksfraser/ksf_estate)
  (namespace `Ksfraser\Estate`).
- Shared calculation framework lives in `ksfraser/ksf-modules-common`.
- This repo provides the WordPress plugin that displays the client's estate plan
  (inventory, probate estimate, estate-tax estimate, gap flags) and syncs records
  with the PersonalRecordsOrganizer executor-facing app.

## Requirements (BABOK)

- `Requirements/FR-001-005 WordpressUI.md` — WordPress display & sync of the estate plan

## Status

Scaffold.
