<?php

use AppKit\NS\NSPrintInfo\NSPrintInfo;

/*
| NSPrintInfo helpers — 1:1 over AppKit\NS\NSPrintInfo\NSPrintInfo
*/

if (! function_exists('ns_printinfo_wrap')) {
    function ns_printinfo_wrap(int $nsPrintInfoPtr): int
    {
        return NSPrintInfo::wrap($nsPrintInfoPtr);
    }
}

if (! function_exists('ns_printinfo_destroy')) {
    function ns_printinfo_destroy(int $printInfo): void
    {
        NSPrintInfo::destroy($printInfo);
    }
}

if (! function_exists('ns_printinfo_nsprintinfo')) {
    function ns_printinfo_nsprintinfo(int $printInfo): int
    {
        return NSPrintInfo::nsPrintInfo($printInfo);
    }
}

if (! function_exists('ns_printinfo_create')) {
    function ns_printinfo_create(): int
    {
        return NSPrintInfo::create();
    }
}

if (! function_exists('ns_printinfo_shared')) {
    function ns_printinfo_shared(): int
    {
        return NSPrintInfo::shared();
    }
}

if (! function_exists('ns_printinfo_set_shared')) {
    function ns_printinfo_set_shared(int $printInfo): void
    {
        NSPrintInfo::setShared($printInfo);
    }
}

if (! function_exists('ns_printinfo_default_printer')) {
    function ns_printinfo_default_printer(): int
    {
        return NSPrintInfo::defaultPrinter();
    }
}

if (! function_exists('ns_printinfo_paper_name')) {
    function ns_printinfo_paper_name(int $printInfo): string
    {
        return NSPrintInfo::paperName($printInfo);
    }
}

if (! function_exists('ns_printinfo_set_paper_name')) {
    function ns_printinfo_set_paper_name(int $printInfo, string $name): void
    {
        NSPrintInfo::setPaperName($printInfo, $name);
    }
}

if (! function_exists('ns_printinfo_paper_size')) {
    /** @return array<int, float> */
    function ns_printinfo_paper_size(int $printInfo): array
    {
        return NSPrintInfo::paperSize($printInfo);
    }
}

if (! function_exists('ns_printinfo_set_paper_size')) {
    function ns_printinfo_set_paper_size(int $printInfo, float $width, float $height): void
    {
        NSPrintInfo::setPaperSize($printInfo, $width, $height);
    }
}

if (! function_exists('ns_printinfo_orientation')) {
    function ns_printinfo_orientation(int $printInfo): int
    {
        return NSPrintInfo::orientation($printInfo);
    }
}

if (! function_exists('ns_printinfo_set_orientation')) {
    function ns_printinfo_set_orientation(int $printInfo, int $orientation): void
    {
        NSPrintInfo::setOrientation($printInfo, $orientation);
    }
}

if (! function_exists('ns_printinfo_scaling_factor')) {
    function ns_printinfo_scaling_factor(int $printInfo): float
    {
        return NSPrintInfo::scalingFactor($printInfo);
    }
}

if (! function_exists('ns_printinfo_set_scaling_factor')) {
    function ns_printinfo_set_scaling_factor(int $printInfo, float $factor): void
    {
        NSPrintInfo::setScalingFactor($printInfo, $factor);
    }
}

if (! function_exists('ns_printinfo_left_margin')) {
    function ns_printinfo_left_margin(int $printInfo): float
    {
        return NSPrintInfo::leftMargin($printInfo);
    }
}

if (! function_exists('ns_printinfo_set_left_margin')) {
    function ns_printinfo_set_left_margin(int $printInfo, float $value): void
    {
        NSPrintInfo::setLeftMargin($printInfo, $value);
    }
}

if (! function_exists('ns_printinfo_right_margin')) {
    function ns_printinfo_right_margin(int $printInfo): float
    {
        return NSPrintInfo::rightMargin($printInfo);
    }
}

if (! function_exists('ns_printinfo_set_right_margin')) {
    function ns_printinfo_set_right_margin(int $printInfo, float $value): void
    {
        NSPrintInfo::setRightMargin($printInfo, $value);
    }
}

if (! function_exists('ns_printinfo_top_margin')) {
    function ns_printinfo_top_margin(int $printInfo): float
    {
        return NSPrintInfo::topMargin($printInfo);
    }
}

if (! function_exists('ns_printinfo_set_top_margin')) {
    function ns_printinfo_set_top_margin(int $printInfo, float $value): void
    {
        NSPrintInfo::setTopMargin($printInfo, $value);
    }
}

if (! function_exists('ns_printinfo_bottom_margin')) {
    function ns_printinfo_bottom_margin(int $printInfo): float
    {
        return NSPrintInfo::bottomMargin($printInfo);
    }
}

if (! function_exists('ns_printinfo_set_bottom_margin')) {
    function ns_printinfo_set_bottom_margin(int $printInfo, float $value): void
    {
        NSPrintInfo::setBottomMargin($printInfo, $value);
    }
}

if (! function_exists('ns_printinfo_is_horizontally_centered')) {
    function ns_printinfo_is_horizontally_centered(int $printInfo): bool
    {
        return NSPrintInfo::isHorizontallyCentered($printInfo);
    }
}

if (! function_exists('ns_printinfo_set_horizontally_centered')) {
    function ns_printinfo_set_horizontally_centered(int $printInfo, bool $centered): void
    {
        NSPrintInfo::setHorizontallyCentered($printInfo, $centered);
    }
}

if (! function_exists('ns_printinfo_is_vertically_centered')) {
    function ns_printinfo_is_vertically_centered(int $printInfo): bool
    {
        return NSPrintInfo::isVerticallyCentered($printInfo);
    }
}

if (! function_exists('ns_printinfo_set_vertically_centered')) {
    function ns_printinfo_set_vertically_centered(int $printInfo, bool $centered): void
    {
        NSPrintInfo::setVerticallyCentered($printInfo, $centered);
    }
}

if (! function_exists('ns_printinfo_horizontal_pagination')) {
    function ns_printinfo_horizontal_pagination(int $printInfo): int
    {
        return NSPrintInfo::horizontalPagination($printInfo);
    }
}

if (! function_exists('ns_printinfo_set_horizontal_pagination')) {
    function ns_printinfo_set_horizontal_pagination(int $printInfo, int $mode): void
    {
        NSPrintInfo::setHorizontalPagination($printInfo, $mode);
    }
}

if (! function_exists('ns_printinfo_vertical_pagination')) {
    function ns_printinfo_vertical_pagination(int $printInfo): int
    {
        return NSPrintInfo::verticalPagination($printInfo);
    }
}

if (! function_exists('ns_printinfo_set_vertical_pagination')) {
    function ns_printinfo_set_vertical_pagination(int $printInfo, int $mode): void
    {
        NSPrintInfo::setVerticalPagination($printInfo, $mode);
    }
}

if (! function_exists('ns_printinfo_job_disposition')) {
    function ns_printinfo_job_disposition(int $printInfo): string
    {
        return NSPrintInfo::jobDisposition($printInfo);
    }
}

if (! function_exists('ns_printinfo_set_job_disposition')) {
    function ns_printinfo_set_job_disposition(int $printInfo, string $disposition): void
    {
        NSPrintInfo::setJobDisposition($printInfo, $disposition);
    }
}

if (! function_exists('ns_printinfo_printer')) {
    function ns_printinfo_printer(int $printInfo): int
    {
        return NSPrintInfo::printer($printInfo);
    }
}

if (! function_exists('ns_printinfo_set_printer')) {
    function ns_printinfo_set_printer(int $printInfo, int $printer): void
    {
        NSPrintInfo::setPrinter($printInfo, $printer);
    }
}

if (! function_exists('ns_printinfo_set_up_print_operation_default_values')) {
    function ns_printinfo_set_up_print_operation_default_values(int $printInfo): void
    {
        NSPrintInfo::setUpPrintOperationDefaultValues($printInfo);
    }
}

if (! function_exists('ns_printinfo_imageable_page_bounds')) {
    /** @return array<int, float> */
    function ns_printinfo_imageable_page_bounds(int $printInfo): array
    {
        return NSPrintInfo::imageablePageBounds($printInfo);
    }
}

if (! function_exists('ns_printinfo_localized_paper_name')) {
    function ns_printinfo_localized_paper_name(int $printInfo): string
    {
        return NSPrintInfo::localizedPaperName($printInfo);
    }
}

if (! function_exists('ns_printinfo_is_selection_only')) {
    function ns_printinfo_is_selection_only(int $printInfo): bool
    {
        return NSPrintInfo::isSelectionOnly($printInfo);
    }
}

if (! function_exists('ns_printinfo_set_selection_only')) {
    function ns_printinfo_set_selection_only(int $printInfo, bool $selectionOnly): void
    {
        NSPrintInfo::setSelectionOnly($printInfo, $selectionOnly);
    }
}
