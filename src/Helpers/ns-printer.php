<?php

use AppKit\NS\NSPrinter\NSPrinter;

/*
| NSPrinter helpers — 1:1 over AppKit\NS\NSPrinter\NSPrinter
*/

if (! function_exists('ns_printer_wrap')) {
    function ns_printer_wrap(int $nsPrinterPtr): int
    {
        return NSPrinter::wrap($nsPrinterPtr);
    }
}

if (! function_exists('ns_printer_destroy')) {
    function ns_printer_destroy(int $printer): void
    {
        NSPrinter::destroy($printer);
    }
}

if (! function_exists('ns_printer_nsprinter')) {
    function ns_printer_nsprinter(int $printer): int
    {
        return NSPrinter::nsPrinter($printer);
    }
}

if (! function_exists('ns_printer_names_count')) {
    function ns_printer_names_count(): int
    {
        return NSPrinter::namesCount();
    }
}

if (! function_exists('ns_printer_names_at')) {
    function ns_printer_names_at(int $index): string
    {
        return NSPrinter::nameAt($index);
    }
}

if (! function_exists('ns_printer_types_count')) {
    function ns_printer_types_count(): int
    {
        return NSPrinter::typesCount();
    }
}

if (! function_exists('ns_printer_types_at')) {
    function ns_printer_types_at(int $index): string
    {
        return NSPrinter::typeAt($index);
    }
}

if (! function_exists('ns_printer_with_name')) {
    function ns_printer_with_name(string $name): int
    {
        return NSPrinter::withName($name);
    }
}

if (! function_exists('ns_printer_with_type')) {
    function ns_printer_with_type(string $type): int
    {
        return NSPrinter::withType($type);
    }
}

if (! function_exists('ns_printer_name')) {
    function ns_printer_name(int $printer): string
    {
        return NSPrinter::name($printer);
    }
}

if (! function_exists('ns_printer_type')) {
    function ns_printer_type(int $printer): string
    {
        return NSPrinter::type($printer);
    }
}

if (! function_exists('ns_printer_language_level')) {
    function ns_printer_language_level(int $printer): int
    {
        return NSPrinter::languageLevel($printer);
    }
}

if (! function_exists('ns_printer_page_size_for_paper')) {
    /** @return array<int, float> */
    function ns_printer_page_size_for_paper(int $printer, string $paperName): array
    {
        return NSPrinter::pageSizeForPaper($printer, $paperName);
    }
}

if (! function_exists('ns_printer_device_is_printer')) {
    function ns_printer_device_is_printer(int $printer): bool
    {
        return NSPrinter::deviceIsPrinter($printer);
    }
}
