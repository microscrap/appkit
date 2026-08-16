---
type: APIMap
title: AppKit NS_ENUM / NS_OPTIONS
description: Int-backed PHP enums autoloaded from this package
resource: /src/Enums
tags: [appkit, api, enums]
status: draft
generated: { by: cursor-agent/grok-4.6, at: "2026-08-16T19:35:00Z" }
---

# Enums

Live in **`microscrap/appkit`**, namespace `Microscrap\Bindings\AppKit\Enums`, PSR-4 `src/`. Composer autoloads them with the library. They are **not** in `ext-appkit`.

Class names drop the Apple `NS` prefix (`NSWindowStyleMask` → `WindowStyleMask`). Cases are FULLY UPPERCASE. Pass `WindowStyleMask::TITLED->value` into `ns_*` ints.

`TextAlignment` is `NSTextAlignment` for current macOS (`TARGET_ABI_USES_IOS_VALUES`): `LEFT=0`, `CENTER=1`, `RIGHT=2`, `JUSTIFIED=3`, `NATURAL=4`. Historic macOS center=2/right=1 is not this ABI. Helpers `ns_control_set_alignment`, `ns_text_set_alignment`, and `ns_paragraphstyle_set_alignment` accept the enum or a raw int.

Hand-owned enums already in `src/Enums` (ControlSize, TrackingAreaOption, font/color helpers, KeyCode, …) stay as written. SDK generation skips those files. Apple alias cases that share a numeric value keep the first case (PHP backed enums cannot duplicate values).

Regenerate from MacOSX 15.4 headers with `php-io-extensions/appkit/scripts/generate-appkit-enums.py` (`MICROSCRAP_APPKIT` override). Do not put a writer script under this package’s `scripts/` (StyleAudit forbids `file_put_contents` there).
