# Agent guidelines — microscrap/appkit

## Knowledge Bundle (OKF)

This package ships an Open Knowledge Format bundle at [`.okf/`](.okf/).

Before changing bindings code **for this package**:

1. Read [`.okf/index.md`](.okf/index.md) first.
2. Open only the linked concepts needed for the task.
3. When you learn something durable, update the affected `.okf` concept(s) and append `.okf/log.md`.
4. Keep the `.okf` bundle at the **package root** only.
5. Extension build knowledge belongs with `php-io-extensions/appkit`. Metal GPU helpers belong in `microscrap/metal`.

## Package rules (quick) — 0.8.x

- Composer: `microscrap/appkit` **0.8.0**. PHP `^8.4|^8.5|^8.6`. Requires `ext-appkit` `^0.8.0`.
- Namespace: `Microscrap\Bindings\AppKit\` → `src/` (Enums). Helpers are global `ns_*` functions.
- **Helpers-only** (posix / ftdi / cuda style). Helper names match the C ABI (`ns_app_init`, `ns_window_create`, `ns_button_create`, …).
- Opaque handles stay as `int`; `0` = failure / none.
- No exceptions in `src/`. No PHP class-level constants. Enums backed; cases **FULLY UPPERCASE**.
- User-facing copy says **macOS**, never Darwin.
- Do not wrap Metal here. `CAMetalLayer` present lives in `microscrap/metal` (`mtl_layer_*`).
- Do not invent shadcn-style components. Bind AppKit types only.
- `src/Helpers/` is **owned source**, same as gtk/metal. Do not add a generator that writes or overwrites those files. `ns-event.php` accepts `KeyCode` / `MouseButton`; keep that by hand.
