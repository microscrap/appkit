---
type: Orientation
title: Package (0.8)
description: Composer identity and helpers over AppKit\NS\*
tags: [appkit, microscrap, bindings, macos]
resource: ../composer.json
status: draft
generated: { by: cursor-agent/grok-4.6, at: "2026-08-15T04:20:00Z" }
---

# Identity

| Field | Value |
|-------|--------|
| Composer | `microscrap/appkit` **0.8.0** |
| PHP | `^8.4\|^8.5\|^8.6` |
| Requires | `ext-appkit` `^0.8.0` |
| Platform | **macOS** |
| Namespace | `Microscrap\\Bindings\\AppKit\\` → `src/` |
| Public surface | Global `ns_*` helpers in `src/Helpers/` (owned source, not generated). Int-backed enums in `src/Enums/` (`Microscrap\Bindings\AppKit\Enums`) |
| License | MIT |

# What this package is

A **helpers-only** PHP bindings layer over `php-io-extensions/appkit`. Each helper delegates to `AppKit\NS\*\*` statics. Opaque handles stay as `int`.

# What this package is not

- `ext-appkit` (Zephir / ObjC / PIE)
- `microscrap/metal` (MTLDevice, MTLTexture, CAMetalLayer present, GameController)
