<?php

use AppKit\NS\NSCollectionViewFlowLayout\NSCollectionViewFlowLayout;
use Microscrap\Bindings\AppKit\Enums\CollectionViewScrollDirection;

/*
| NSCollectionViewFlowLayout helpers — 1:1 over AppKit\NS\NSCollectionViewFlowLayout\NSCollectionViewFlowLayout
*/

if (! function_exists('ns_collectionviewflowlayout_create')) {
    function ns_collectionviewflowlayout_create(): int
    {
        return NSCollectionViewFlowLayout::create();
    }
}

if (! function_exists('ns_collectionviewflowlayout_wrap')) {
    function ns_collectionviewflowlayout_wrap(int $nsCollectionViewFlowLayoutPtr): int
    {
        return NSCollectionViewFlowLayout::wrap($nsCollectionViewFlowLayoutPtr);
    }
}

if (! function_exists('ns_collectionviewflowlayout_destroy')) {
    function ns_collectionviewflowlayout_destroy(int $layout): void
    {
        NSCollectionViewFlowLayout::destroy($layout);
    }
}

if (! function_exists('ns_collectionviewflowlayout_nscollectionviewflowlayout')) {
    function ns_collectionviewflowlayout_nscollectionviewflowlayout(int $layout): int
    {
        return NSCollectionViewFlowLayout::nsCollectionViewFlowLayout($layout);
    }
}

if (! function_exists('ns_collectionviewflowlayout_set_item_size')) {
    function ns_collectionviewflowlayout_set_item_size(int $layout, float $width, float $height): void
    {
        NSCollectionViewFlowLayout::setItemSize($layout, $width, $height);
    }
}

if (! function_exists('ns_collectionviewflowlayout_get_item_size')) {
    function ns_collectionviewflowlayout_get_item_size(int $layout): array
    {
        return NSCollectionViewFlowLayout::getItemSize($layout);
    }
}

if (! function_exists('ns_collectionviewflowlayout_set_estimated_item_size')) {
    function ns_collectionviewflowlayout_set_estimated_item_size(int $layout, float $width, float $height): void
    {
        NSCollectionViewFlowLayout::setEstimatedItemSize($layout, $width, $height);
    }
}

if (! function_exists('ns_collectionviewflowlayout_get_estimated_item_size')) {
    function ns_collectionviewflowlayout_get_estimated_item_size(int $layout): array
    {
        return NSCollectionViewFlowLayout::getEstimatedItemSize($layout);
    }
}

if (! function_exists('ns_collectionviewflowlayout_set_minimum_line_spacing')) {
    function ns_collectionviewflowlayout_set_minimum_line_spacing(int $layout, float $spacing): void
    {
        NSCollectionViewFlowLayout::setMinimumLineSpacing($layout, $spacing);
    }
}

if (! function_exists('ns_collectionviewflowlayout_get_minimum_line_spacing')) {
    function ns_collectionviewflowlayout_get_minimum_line_spacing(int $layout): float
    {
        return NSCollectionViewFlowLayout::getMinimumLineSpacing($layout);
    }
}

if (! function_exists('ns_collectionviewflowlayout_set_minimum_interitem_spacing')) {
    function ns_collectionviewflowlayout_set_minimum_interitem_spacing(int $layout, float $spacing): void
    {
        NSCollectionViewFlowLayout::setMinimumInteritemSpacing($layout, $spacing);
    }
}

if (! function_exists('ns_collectionviewflowlayout_get_minimum_interitem_spacing')) {
    function ns_collectionviewflowlayout_get_minimum_interitem_spacing(int $layout): float
    {
        return NSCollectionViewFlowLayout::getMinimumInteritemSpacing($layout);
    }
}

if (! function_exists('ns_collectionviewflowlayout_set_scroll_direction')) {
    function ns_collectionviewflowlayout_set_scroll_direction(int $layout, CollectionViewScrollDirection|int $direction): void
    {
        NSCollectionViewFlowLayout::setScrollDirection(
            $layout,
            $direction instanceof CollectionViewScrollDirection ? $direction->value : $direction
        );
    }
}

if (! function_exists('ns_collectionviewflowlayout_get_scroll_direction')) {
    function ns_collectionviewflowlayout_get_scroll_direction(int $layout): int
    {
        return NSCollectionViewFlowLayout::getScrollDirection($layout);
    }
}

if (! function_exists('ns_collectionviewflowlayout_set_header_reference_size')) {
    function ns_collectionviewflowlayout_set_header_reference_size(int $layout, float $width, float $height): void
    {
        NSCollectionViewFlowLayout::setHeaderReferenceSize($layout, $width, $height);
    }
}

if (! function_exists('ns_collectionviewflowlayout_get_header_reference_size')) {
    function ns_collectionviewflowlayout_get_header_reference_size(int $layout): array
    {
        return NSCollectionViewFlowLayout::getHeaderReferenceSize($layout);
    }
}

if (! function_exists('ns_collectionviewflowlayout_set_footer_reference_size')) {
    function ns_collectionviewflowlayout_set_footer_reference_size(int $layout, float $width, float $height): void
    {
        NSCollectionViewFlowLayout::setFooterReferenceSize($layout, $width, $height);
    }
}

if (! function_exists('ns_collectionviewflowlayout_get_footer_reference_size')) {
    function ns_collectionviewflowlayout_get_footer_reference_size(int $layout): array
    {
        return NSCollectionViewFlowLayout::getFooterReferenceSize($layout);
    }
}

if (! function_exists('ns_collectionviewflowlayout_set_section_inset')) {
    function ns_collectionviewflowlayout_set_section_inset(int $layout, float $top, float $left, float $bottom, float $right): void
    {
        NSCollectionViewFlowLayout::setSectionInset($layout, $top, $left, $bottom, $right);
    }
}

if (! function_exists('ns_collectionviewflowlayout_set_section_headers_pin')) {
    function ns_collectionviewflowlayout_set_section_headers_pin(int $layout, bool $flag): void
    {
        NSCollectionViewFlowLayout::setSectionHeadersPin($layout, $flag);
    }
}

if (! function_exists('ns_collectionviewflowlayout_section_headers_pin')) {
    function ns_collectionviewflowlayout_section_headers_pin(int $layout): bool
    {
        return NSCollectionViewFlowLayout::sectionHeadersPin($layout);
    }
}

if (! function_exists('ns_collectionviewflowlayout_set_section_footers_pin')) {
    function ns_collectionviewflowlayout_set_section_footers_pin(int $layout, bool $flag): void
    {
        NSCollectionViewFlowLayout::setSectionFootersPin($layout, $flag);
    }
}

if (! function_exists('ns_collectionviewflowlayout_section_footers_pin')) {
    function ns_collectionviewflowlayout_section_footers_pin(int $layout): bool
    {
        return NSCollectionViewFlowLayout::sectionFootersPin($layout);
    }
}

if (! function_exists('ns_collectionviewflowlayout_section_is_collapsed')) {
    function ns_collectionviewflowlayout_section_is_collapsed(int $layout, int $section): bool
    {
        return NSCollectionViewFlowLayout::sectionIsCollapsed($layout, $section);
    }
}

if (! function_exists('ns_collectionviewflowlayout_collapse_section')) {
    function ns_collectionviewflowlayout_collapse_section(int $layout, int $section): void
    {
        NSCollectionViewFlowLayout::collapseSection($layout, $section);
    }
}

if (! function_exists('ns_collectionviewflowlayout_expand_section')) {
    function ns_collectionviewflowlayout_expand_section(int $layout, int $section): void
    {
        NSCollectionViewFlowLayout::expandSection($layout, $section);
    }
}
