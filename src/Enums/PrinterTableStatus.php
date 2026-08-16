<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSPrinterTableStatus` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum PrinterTableStatus: int
{
    case PRINTER_TABLE_OK = 0;
    case PRINTER_TABLE_NOT_FOUND = 1;
    case PRINTER_TABLE_ERROR = 2;
}
