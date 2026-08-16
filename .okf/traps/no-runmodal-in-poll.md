---
type: Trap
title: Never runModal inside ns_app_poll
description: NSAlert runModal nested in the poll loop deadlocks NSApplication
tags: [appkit, microscrap, trap, runloop]
status: draft
generated: { by: cursor-agent/grok-4.6, at: "2026-08-15T04:50:00Z" }
---

# Trap

`ns_app_poll()` already pumps AppKit. `ns_alert_run_modal()` / `[NSAlert runModal]` starts a nested modal session on the same thread. That can freeze the window so Cmd-Q and SIGTERM never land; Force Kill is what is left.

# Rule

Do not call `ns_alert_run_modal`, `ns_openpanel_run`, or `ns_savepanel_run` from a sketch `loop()` / anything reached from `ns_app_poll()`. Put errors in labels or text views.

Programmatic `set_selected` / `set_timestamp` / `set_value` often sets `pendingChange`. Writing those from the handler that just read `poll_change` retriggers the handler every frame. Drain `poll_change` after programmatic sets, or ignore polls while applying.
