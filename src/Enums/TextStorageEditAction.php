<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** NSTextStorageEditActions — bitmask values from ns_textstorage_edited_mask. */
enum TextStorageEditAction: int
{
    case ATTRIBUTES = 1;
    case CHARACTERS = 2;
}
