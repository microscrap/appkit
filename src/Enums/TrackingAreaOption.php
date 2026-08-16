<?php

namespace Microscrap\Bindings\AppKit\Enums;

/**
 * NSTrackingAreaOptions bitfield (combine with bitwise OR).
 */
enum TrackingAreaOption: int
{
    case MOUSE_ENTERED_AND_EXITED = 0x01;
    case MOUSE_MOVED = 0x02;
    case CURSOR_UPDATE = 0x04;
    case ACTIVE_WHEN_FIRST_RESPONDER = 0x10;
    case ACTIVE_IN_KEY_WINDOW = 0x20;
    case ACTIVE_IN_ACTIVE_APP = 0x40;
    case ACTIVE_ALWAYS = 0x80;
    case ASSUME_INSIDE = 0x100;
    case IN_VISIBLE_RECT = 0x200;
    case ENABLED_DURING_MOUSE_DRAG = 0x400;
}
