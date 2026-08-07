# FR-001-005 WordpressUI: WordPress Display & Sync of Estate Plan

**Related:** BR-001 EstatePlanning, FR-001-003 InventoryCapture, FR-001-004 SummaryReport

## Description
The WordPress site shall render a client's estate plan (inventory, probate estimate,
estate-tax estimate, and gap flags) and provide a sync bridge to the
PersonalRecordsOrganizer executor-facing app so the same data is visible in both
places without re-entry.

## Primary actor
System (renders on shortcode) / Advisor (initiates sync).

## Preconditions
- Client estate plan exists (row in `ksfii_estate_plan` for debtor_no).
- WordPress user is authorized for the client.

## Main flow
1. Advisor embeds `[ksf_estate_plan debtor="123"]` on a client page.
2. System loads the plan and renders inventory, probate, tax, and gap summary.
3. Advisor clicks "Sync to PersonalRecordsOrganizer"; system pushes the plan's
   document/account references to PRO (fa_record_id linkage).

## Postconditions
- Client-ready estate plan visible on WordPress.
- PRO record updated with the FA estate plan reference (fa_record_id).
