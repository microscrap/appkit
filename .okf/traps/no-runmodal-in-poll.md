---
type: Trap
title: Never runModal inside ns_app_poll
description: NSAlert runModal nested in the poll loop deadlocks NSApplication
tags: [appkit, microscrap, trap, runloop]
status: draft
generated: { by: cursor-agent, at: "2026-08-16T23:40:00Z" }
---

# Trap

`ns_app_poll()` already pumps AppKit. `ns_alert_run_modal()` / `[NSAlert runModal]` starts a nested modal session on the same thread. That can freeze the window so Cmd-Q and SIGTERM never land; Force Kill is what is left.

# Rule

Do not call `ns_alert_run_modal`, `ns_openpanel_run`, or `ns_savepanel_run` from a sketch `loop()` / anything reached from `ns_app_poll()`.

For in-loop alerts, use **`ns_alert_begin_sheet($alert, $window)`** then drain **`ns_alert_poll_response($alert)`** each frame (same pattern as `ns_button_poll_click`). Map `NSAlertFirstButtonReturn` (`1000`) to a 0-based button index in Tubes/scrapyard, not in the helper.

Programmatic `set_selected` / `set_timestamp` / `set_value` often sets `pendingChange`. Writing those from the handler that just read `poll_change` retriggers the handler every frame. Drain `poll_change` after programmatic sets, or ignore polls while applying.
