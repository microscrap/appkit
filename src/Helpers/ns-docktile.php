<?php

use AppKit\NS\NSDockTile\NSDockTile;

/*
| NSDockTile helpers — 1:1 over AppKit\NS\NSDockTile\NSDockTile
*/

if (! function_exists('ns_docktile_application_dock_tile')) {
    function ns_docktile_application_dock_tile(): int
    {
        return NSDockTile::applicationDockTile();
    }
}

if (! function_exists('ns_docktile_wrap')) {
    function ns_docktile_wrap(int $nsDockTilePtr): int
    {
        return NSDockTile::wrap($nsDockTilePtr);
    }
}

if (! function_exists('ns_docktile_destroy')) {
    function ns_docktile_destroy(int $tile): void
    {
        NSDockTile::destroy($tile);
    }
}

if (! function_exists('ns_docktile_nsdocktile')) {
    function ns_docktile_nsdocktile(int $tile): int
    {
        return NSDockTile::nsDockTile($tile);
    }
}

if (! function_exists('ns_docktile_get_size')) {
    function ns_docktile_get_size(int $tile): array
    {
        return NSDockTile::getSize($tile);
    }
}

if (! function_exists('ns_docktile_set_content_view')) {
    function ns_docktile_set_content_view(int $tile, int $view): void
    {
        NSDockTile::setContentView($tile, $view);
    }
}

if (! function_exists('ns_docktile_content_view')) {
    function ns_docktile_content_view(int $tile): int
    {
        return NSDockTile::contentView($tile);
    }
}

if (! function_exists('ns_docktile_display')) {
    function ns_docktile_display(int $tile): void
    {
        NSDockTile::display($tile);
    }
}

if (! function_exists('ns_docktile_set_shows_application_badge')) {
    function ns_docktile_set_shows_application_badge(int $tile, bool $flag): void
    {
        NSDockTile::setShowsApplicationBadge($tile, $flag);
    }
}

if (! function_exists('ns_docktile_shows_application_badge')) {
    function ns_docktile_shows_application_badge(int $tile): bool
    {
        return NSDockTile::showsApplicationBadge($tile);
    }
}

if (! function_exists('ns_docktile_set_badge_label')) {
    function ns_docktile_set_badge_label(int $tile, string $label): void
    {
        NSDockTile::setBadgeLabel($tile, $label);
    }
}

if (! function_exists('ns_docktile_badge_label')) {
    function ns_docktile_badge_label(int $tile): string
    {
        return NSDockTile::badgeLabel($tile);
    }
}

if (! function_exists('ns_docktile_owner')) {
    function ns_docktile_owner(int $tile): int
    {
        return NSDockTile::owner($tile);
    }
}
