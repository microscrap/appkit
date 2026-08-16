<?php

use AppKit\NS\NSPrintOperation\NSPrintOperation;

/*
| NSPrintOperation helpers — 1:1 over AppKit\NS\NSPrintOperation\NSPrintOperation
*/

if (! function_exists('ns_printoperation_wrap')) {
    function ns_printoperation_wrap(int $nsPrintOperationPtr): int
    {
        return NSPrintOperation::wrap($nsPrintOperationPtr);
    }
}

if (! function_exists('ns_printoperation_destroy')) {
    function ns_printoperation_destroy(int $operation): void
    {
        NSPrintOperation::destroy($operation);
    }
}

if (! function_exists('ns_printoperation_nsprintoperation')) {
    function ns_printoperation_nsprintoperation(int $operation): int
    {
        return NSPrintOperation::nsPrintOperation($operation);
    }
}

if (! function_exists('ns_printoperation_with_view')) {
    function ns_printoperation_with_view(int $view): int
    {
        return NSPrintOperation::printOperationWithView($view);
    }
}

if (! function_exists('ns_printoperation_with_view_print_info')) {
    function ns_printoperation_with_view_print_info(int $view, int $printInfo): int
    {
        return NSPrintOperation::printOperationWithViewPrintInfo($view, $printInfo);
    }
}

if (! function_exists('ns_printoperation_pdf_with_view_rect_path')) {
    function ns_printoperation_pdf_with_view_rect_path(int $view, float $x, float $y, float $width, float $height, string $path, int $printInfo): int
    {
        return NSPrintOperation::pdfOperationWithViewRectPath($view, $x, $y, $width, $height, $path, $printInfo);
    }
}

if (! function_exists('ns_printoperation_eps_with_view_rect_path')) {
    function ns_printoperation_eps_with_view_rect_path(int $view, float $x, float $y, float $width, float $height, string $path, int $printInfo): int
    {
        return NSPrintOperation::epsOperationWithViewRectPath($view, $x, $y, $width, $height, $path, $printInfo);
    }
}

if (! function_exists('ns_printoperation_current_operation')) {
    function ns_printoperation_current_operation(): int
    {
        return NSPrintOperation::currentOperation();
    }
}

if (! function_exists('ns_printoperation_set_current_operation')) {
    function ns_printoperation_set_current_operation(int $operation): void
    {
        NSPrintOperation::setCurrentOperation($operation);
    }
}

if (! function_exists('ns_printoperation_is_copying_operation')) {
    function ns_printoperation_is_copying_operation(int $operation): bool
    {
        return NSPrintOperation::isCopyingOperation($operation);
    }
}

if (! function_exists('ns_printoperation_preferred_rendering_quality')) {
    function ns_printoperation_preferred_rendering_quality(int $operation): int
    {
        return NSPrintOperation::preferredRenderingQuality($operation);
    }
}

if (! function_exists('ns_printoperation_job_title')) {
    function ns_printoperation_job_title(int $operation): string
    {
        return NSPrintOperation::jobTitle($operation);
    }
}

if (! function_exists('ns_printoperation_set_job_title')) {
    function ns_printoperation_set_job_title(int $operation, string $title = ''): void
    {
        NSPrintOperation::setJobTitle($operation, $title);
    }
}

if (! function_exists('ns_printoperation_shows_print_panel')) {
    function ns_printoperation_shows_print_panel(int $operation): bool
    {
        return NSPrintOperation::showsPrintPanel($operation);
    }
}

if (! function_exists('ns_printoperation_set_shows_print_panel')) {
    function ns_printoperation_set_shows_print_panel(int $operation, bool $shows): void
    {
        NSPrintOperation::setShowsPrintPanel($operation, $shows);
    }
}

if (! function_exists('ns_printoperation_shows_progress_panel')) {
    function ns_printoperation_shows_progress_panel(int $operation): bool
    {
        return NSPrintOperation::showsProgressPanel($operation);
    }
}

if (! function_exists('ns_printoperation_set_shows_progress_panel')) {
    function ns_printoperation_set_shows_progress_panel(int $operation, bool $shows): void
    {
        NSPrintOperation::setShowsProgressPanel($operation, $shows);
    }
}

if (! function_exists('ns_printoperation_print_panel')) {
    function ns_printoperation_print_panel(int $operation): int
    {
        return NSPrintOperation::printPanel($operation);
    }
}

if (! function_exists('ns_printoperation_set_print_panel')) {
    function ns_printoperation_set_print_panel(int $operation, int $panel): void
    {
        NSPrintOperation::setPrintPanel($operation, $panel);
    }
}

if (! function_exists('ns_printoperation_page_order')) {
    function ns_printoperation_page_order(int $operation): int
    {
        return NSPrintOperation::pageOrder($operation);
    }
}

if (! function_exists('ns_printoperation_set_page_order')) {
    function ns_printoperation_set_page_order(int $operation, int $pageOrder): void
    {
        NSPrintOperation::setPageOrder($operation, $pageOrder);
    }
}

if (! function_exists('ns_printoperation_run_operation')) {
    function ns_printoperation_run_operation(int $operation): bool
    {
        return NSPrintOperation::runOperation($operation);
    }
}

if (! function_exists('ns_printoperation_run_operation_modal_for_window')) {
    function ns_printoperation_run_operation_modal_for_window(int $operation, int $window): bool
    {
        return NSPrintOperation::runOperationModalForWindow($operation, $window);
    }
}

if (! function_exists('ns_printoperation_view')) {
    function ns_printoperation_view(int $operation): int
    {
        return NSPrintOperation::view($operation);
    }
}

if (! function_exists('ns_printoperation_print_info')) {
    function ns_printoperation_print_info(int $operation): int
    {
        return NSPrintOperation::printInfo($operation);
    }
}

if (! function_exists('ns_printoperation_set_print_info')) {
    function ns_printoperation_set_print_info(int $operation, int $printInfo): void
    {
        NSPrintOperation::setPrintInfo($operation, $printInfo);
    }
}

if (! function_exists('ns_printoperation_page_range')) {
    /** @return array<int, int> */
    function ns_printoperation_page_range(int $operation): array
    {
        return NSPrintOperation::pageRange($operation);
    }
}

if (! function_exists('ns_printoperation_current_page')) {
    function ns_printoperation_current_page(int $operation): int
    {
        return NSPrintOperation::currentPage($operation);
    }
}
