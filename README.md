# microscrap/appkit — macOS AppKit helpers for ScrapyardIO

PHP helper library over [**ext-appkit**](https://github.com/php-io-extensions/appkit). Each helper is a 1:1 `ns_*` wrap of `AppKit\NS\*` statics. Opaque handles stay as `int`.

AppKit used to ship inside `microscrap/metal`. Metal GPU (`mtl_device_*`, `mtl_texture_*`, `mtl_layer_*`) and GameController stay there.

```php
ns_app_init();
ns_menu_install_default('Demo');
$window = ns_window_create('hello', 640, 480);
$content = ns_window_content_view($window);
$button = ns_button_create(20, 20, 120, 32, 'Click');
ns_view_add_subview($content, $button);
ns_window_show($window);
while (ns_app_poll()) {
    if (ns_button_poll_click($button) || ns_window_should_close($window)) {
        break;
    }
}
ns_button_destroy($button);
ns_window_destroy($window);
ns_app_terminate();
```

Requires PHP 8.4+ and **ext-appkit** ^0.8.0 on macOS.

```bash
composer require microscrap/appkit:^0.8.0
```
