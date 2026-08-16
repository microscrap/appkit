<?php

use AppKit\NS\NSFontCollection\NSFontCollection;
use Microscrap\Bindings\AppKit\Enums\FontCollectionVisibility;

/*
| NSFontCollection helpers — 1:1 over AppKit\NS\NSFontCollection\NSFontCollection
| (includes NSMutableFontCollection mutation APIs)
*/

if (! function_exists('ns_fontcollection_wrap')) {
    function ns_fontcollection_wrap(int $nsFontCollectionPtr): int
    {
        return NSFontCollection::wrap($nsFontCollectionPtr);
    }
}

if (! function_exists('ns_fontcollection_destroy')) {
    function ns_fontcollection_destroy(int $collection): void
    {
        NSFontCollection::destroy($collection);
    }
}

if (! function_exists('ns_fontcollection_with_descriptor')) {
    function ns_fontcollection_with_descriptor(int $descriptor): int
    {
        return NSFontCollection::withDescriptor($descriptor);
    }
}

if (! function_exists('ns_fontcollection_with_all_available')) {
    function ns_fontcollection_with_all_available(): int
    {
        return NSFontCollection::withAllAvailable();
    }
}

if (! function_exists('ns_fontcollection_with_name')) {
    function ns_fontcollection_with_name(string $name): int
    {
        return NSFontCollection::withName($name);
    }
}

if (! function_exists('ns_fontcollection_with_name_visibility')) {
    function ns_fontcollection_with_name_visibility(string $name, FontCollectionVisibility|int $visibility): int
    {
        return NSFontCollection::withNameVisibility(
            $name,
            $visibility instanceof FontCollectionVisibility ? $visibility->value : $visibility,
        );
    }
}

if (! function_exists('ns_fontcollection_show')) {
    function ns_fontcollection_show(int $collection, string $name, FontCollectionVisibility|int $visibility): bool
    {
        return NSFontCollection::show(
            $collection,
            $name,
            $visibility instanceof FontCollectionVisibility ? $visibility->value : $visibility,
        );
    }
}

if (! function_exists('ns_fontcollection_hide')) {
    function ns_fontcollection_hide(string $name, FontCollectionVisibility|int $visibility): bool
    {
        return NSFontCollection::hide(
            $name,
            $visibility instanceof FontCollectionVisibility ? $visibility->value : $visibility,
        );
    }
}

if (! function_exists('ns_fontcollection_rename')) {
    function ns_fontcollection_rename(string $oldName, FontCollectionVisibility|int $visibility, string $newName): bool
    {
        return NSFontCollection::rename(
            $oldName,
            $visibility instanceof FontCollectionVisibility ? $visibility->value : $visibility,
            $newName,
        );
    }
}

if (! function_exists('ns_fontcollection_all_names_count')) {
    function ns_fontcollection_all_names_count(): int
    {
        return NSFontCollection::allNamesCount();
    }
}

if (! function_exists('ns_fontcollection_all_name_at')) {
    function ns_fontcollection_all_name_at(int $index): string
    {
        return NSFontCollection::allNameAt($index);
    }
}

if (! function_exists('ns_fontcollection_query_descriptors_count')) {
    function ns_fontcollection_query_descriptors_count(int $collection): int
    {
        return NSFontCollection::queryDescriptorsCount($collection);
    }
}

if (! function_exists('ns_fontcollection_query_descriptor_at')) {
    function ns_fontcollection_query_descriptor_at(int $collection, int $index): int
    {
        return NSFontCollection::queryDescriptorAt($collection, $index);
    }
}

if (! function_exists('ns_fontcollection_exclusion_descriptors_count')) {
    function ns_fontcollection_exclusion_descriptors_count(int $collection): int
    {
        return NSFontCollection::exclusionDescriptorsCount($collection);
    }
}

if (! function_exists('ns_fontcollection_exclusion_descriptor_at')) {
    function ns_fontcollection_exclusion_descriptor_at(int $collection, int $index): int
    {
        return NSFontCollection::exclusionDescriptorAt($collection, $index);
    }
}

if (! function_exists('ns_fontcollection_matching_descriptors_count')) {
    function ns_fontcollection_matching_descriptors_count(int $collection): int
    {
        return NSFontCollection::matchingDescriptorsCount($collection);
    }
}

if (! function_exists('ns_fontcollection_matching_descriptor_at')) {
    function ns_fontcollection_matching_descriptor_at(int $collection, int $index): int
    {
        return NSFontCollection::matchingDescriptorAt($collection, $index);
    }
}

if (! function_exists('ns_fontcollection_matching_descriptors_for_family_count')) {
    function ns_fontcollection_matching_descriptors_for_family_count(int $collection, string $family): int
    {
        return NSFontCollection::matchingDescriptorsForFamilyCount($collection, $family);
    }
}

if (! function_exists('ns_fontcollection_matching_descriptor_for_family_at')) {
    function ns_fontcollection_matching_descriptor_for_family_at(int $collection, string $family, int $index): int
    {
        return NSFontCollection::matchingDescriptorForFamilyAt($collection, $family, $index);
    }
}

if (! function_exists('ns_fontcollection_mutable_with_descriptor')) {
    function ns_fontcollection_mutable_with_descriptor(int $descriptor): int
    {
        return NSFontCollection::mutableWithDescriptor($descriptor);
    }
}

if (! function_exists('ns_fontcollection_mutable_with_all_available')) {
    function ns_fontcollection_mutable_with_all_available(): int
    {
        return NSFontCollection::mutableWithAllAvailable();
    }
}

if (! function_exists('ns_fontcollection_mutable_with_name')) {
    function ns_fontcollection_mutable_with_name(string $name): int
    {
        return NSFontCollection::mutableWithName($name);
    }
}

if (! function_exists('ns_fontcollection_mutable_with_name_visibility')) {
    function ns_fontcollection_mutable_with_name_visibility(string $name, FontCollectionVisibility|int $visibility): int
    {
        return NSFontCollection::mutableWithNameVisibility(
            $name,
            $visibility instanceof FontCollectionVisibility ? $visibility->value : $visibility,
        );
    }
}

if (! function_exists('ns_fontcollection_add_query_for_descriptor')) {
    function ns_fontcollection_add_query_for_descriptor(int $collection, int $descriptor): void
    {
        NSFontCollection::addQueryForDescriptor($collection, $descriptor);
    }
}

if (! function_exists('ns_fontcollection_remove_query_for_descriptor')) {
    function ns_fontcollection_remove_query_for_descriptor(int $collection, int $descriptor): void
    {
        NSFontCollection::removeQueryForDescriptor($collection, $descriptor);
    }
}

if (! function_exists('ns_fontcollection_nsfontcollection')) {
    function ns_fontcollection_nsfontcollection(int $collection): int
    {
        return NSFontCollection::nsFontCollection($collection);
    }
}
