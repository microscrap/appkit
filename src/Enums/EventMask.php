<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSEventMask` (unsigned long long). Pass `::CASE->value` into ns_* ints. */
enum EventMask: int
{
    case LEFT_MOUSE_DOWN = 0;
    case LEFT_MOUSE_UP = 1;
    case RIGHT_MOUSE_DOWN = 2;
    case RIGHT_MOUSE_UP = 3;
    case MOUSE_MOVED = 4;
    case LEFT_MOUSE_DRAGGED = 5;
    case RIGHT_MOUSE_DRAGGED = 6;
    case MOUSE_ENTERED = 7;
    case MOUSE_EXITED = 8;
    case KEY_DOWN = 9;
    case KEY_UP = 10;
    case FLAGS_CHANGED = 11;
    case APP_KIT_DEFINED = 12;
    case SYSTEM_DEFINED = 13;
    case APPLICATION_DEFINED = 14;
    case PERIODIC = 15;
    case CURSOR_UPDATE = 16;
    case SCROLL_WHEEL = 17;
    case TABLET_POINT = 18;
    case TABLET_PROXIMITY = 19;
    case OTHER_MOUSE_DOWN = 20;
    case OTHER_MOUSE_UP = 21;
    case OTHER_MOUSE_DRAGGED = 22;
    case GESTURE = 23;
    case MAGNIFY = 24;
    case SWIPE = 25;
    case ROTATE = 26;
    case BEGIN_GESTURE = 27;
    case END_GESTURE = 28;
    case SMART_MAGNIFY = 29;
    case PRESSURE = 30;
    case DIRECT_TOUCH = 31;
    case CHANGE_MODE = 32;
    case ANY = 33;
}
