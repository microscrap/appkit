---
type: Trap
title: Helpers are owned source
description: Do not put a generator that writes src/Helpers — it will kill hand-shaped files
tags: [appkit, microscrap, trap, helpers]
status: draft
generated: { by: cursor-agent/grok-4.6, at: "2026-08-15T04:25:00Z" }
---

# Trap

`src/Helpers/*.php` is the package surface. A script that dumps Zephir wraps into that folder will overwrite files that are not 1:1 mechanical (especially `ns-event.php`, which accepts `KeyCode` / `MouseButton` and keeps `mouseX` / `mouseY` / `mouseScrollY` as their own helpers, and image helpers that accept `ImageCacheMode` / `ImageLayoutDirection` / `BitmapImageFileType`).

# Rule

Owned files stay in `src/Helpers/`. If you ever generate drafts, write them somewhere disposable (`/tmp`, a scratch dir) and copy in by hand. Do not leave a regen entrypoint in the package that can wipe the surface.