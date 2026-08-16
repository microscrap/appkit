# OKF log

## 2026-08-16 (NSTextAlignment helper unwrap)

- `ns_control_set_alignment`, `ns_text_set_alignment`, and `ns_paragraphstyle_set_alignment` accept `TextAlignment` or raw int. Enum ABI matches current macOS (`LEFT=0` `CENTER=1` `RIGHT=2`). Pest locks those values.

## 2026-08-16 (NSTextAlignment ABI)

- Current macOS SDK sets `TARGET_ABI_USES_IOS_VALUES`: LEFT=0 CENTER=1 RIGHT=2. Do not pass historic macOS center=2 into `ns_control_set_alignment`.

## 2026-08-16 (NSControl setAlignment helper)

- Helper `ns_control_set_alignment` on `ns-control.php`. HelperNames updated. Current macOS `NSTextAlignment` ABI (`TARGET_ABI_USES_IOS_VALUES`): 0 left, 1 center, 2 right. Historic macOS center=2/right=1 is not this SDK.

## 2026-08-15 (a11y / tabs / NSGraphics helpers)

- **New helpers**: `ns_accessibilityelement_*`, `ns_accessibilitycustomrotor_*`, `ns_accessibilitycustomrotoritem_*`, `ns_accessibilitycustomrotoritemresult_*`, `ns_windowtab_*`, `ns_windowtabgroup_*`, `ns_titlebaraccessoryviewcontroller_*`, `ns_graphics_*`, `ns_protocol_*`, `ns_accessibility_*`.
- **Existing**: `ns_app_nsapp`, `ns_app_appkit_version_number`, `ns_window_tab`, `ns_window_tab_group`, `ns_window_add_titlebar_accessory_view_controller`.
- **Tests**: `HelperNames` map + `composer.json` autoload files updated.

## 2026-08-15 (collection layout / grid chrome / workspace helpers)

- **New helpers**: `ns_collectionviewlayout_*`, `ns_collectionviewflowlayout_*`, `ns_collectionviewgridlayout_*`, `ns_collectionviewcompositionallayout_*`, `ns_collectionviewtransitionlayout_*`, `ns_collectionviewdiffable_*`, `ns_gridrow_*`, `ns_gridcolumn_*`, `ns_gridcell_*`, `ns_statusbar_*`, `ns_workspace_*`, `ns_controller_*` over twelve new `AppKit\NS\*` extension classes.
- **Expanded**: `ns_collectionview_*` (`setLayout` / `getLayout`), `ns_gridview_*` (row/column/cell accessors). Existing `ns_statusitem_*` already had wrap/button.
- **Enum**: `StatusItemLengthKind` for `ns_statusbar_status_item_with_kind`. `GridCellPlacement` values aligned to Apple/C ABI (LEADING=2, TRAILING=3, CENTER=4, FILL=5).
- **Tests**: `HelperNames` map + `composer.json` autoload files updated.

## 2026-08-15 (document / app lifecycle helpers)

* **New helpers**: `ns_runningapplication_*`, `ns_document_*`, `ns_documentcontroller_*`, `ns_persistentdocument_*`, `ns_helpmanager_*`, `ns_nib_*`, `ns_storyboard_*` over seven new ext-appkit binds.
* **Enums reused**: `ApplicationActivationOptions`, `DocumentChangeType`, `SaveOperationType`.
* **Tests**: `HelperNames` map + `composer.json` autoload files updated.

## 2026-08-15 (sound / speech / haptic helpers)

* **New helpers**: `ns_sound_*`, `ns_speechsynthesizer_*`, `ns_speechrecognizer_*`, `ns_hapticfeedbackmanager_*` over four new `AppKit\NS\*` extension classes.
* **Enums reused**: `SpeechBoundary`, `HapticFeedbackPattern`, `HapticFeedbackPerformanceTime`.
* **Tests**: `HelperNames` map + `composer.json` autoload files updated.

## 2026-08-15 (dock + Auto Layout helpers)

* **New helpers**: `ns_docktile_*`, `ns_alignmentfeedbackfilter_*`, `ns_pressureconfiguration_*`, `ns_layoutconstraint_*`, `ns_layoutanchor_*`, `ns_layoutxaxisanchor_*`, `ns_layoutyaxisanchor_*`, `ns_layoutdimension_*`, `ns_layoutguide_*` over nine `AppKit\NS\*` extension classes.
* **Enum**: `LayoutPriority` for constraint priority constants.
* **Tests**: `HelperNames` map + `composer.json` autoload files updated.

## 2026-08-15 (controller family helpers)

* **Added**: `ns_objectcontroller_*`, `ns_arraycontroller_*`, `ns_treecontroller_*`, `ns_dictionarycontroller_*`, `ns_userdefaultscontroller_*` helpers mirroring ext-appkit controller binds.

## 2026-08-15 (level / form / matrix / browser / table chrome helpers)

- **New helpers**: `ns_levelindicator_*`, `ns_levelindicatorcell_*`, `ns_form_*`, `ns_formcell_*`, `ns_matrix_*`, `ns_browser_*`, `ns_browsercell_*`, `ns_predicateeditor_*`, `ns_ruleeditor_*`, `ns_statusbarbutton_*`, `ns_tablecolumn_*`, `ns_tableheaderview_*`, `ns_tableheadercell_*`, `ns_tablerowview_*`, `ns_tablecellview_*`, `ns_tableviewdiffable_*`, `ns_collectionviewitem_*` over seventeen `AppKit\NS\*` extension classes.
- **Also**: `ns_statusitem_wrap` / `ns_statusitem_nsstatusitem` / `ns_statusitem_button`.
- **Enums reused**: `LevelIndicatorStyle`, `LevelIndicatorPlaceholderVisibility`, `MatrixMode`, `RuleEditorNestingMode`, `TableColumnResizingOptions`, `CollectionViewItemHighlightState`.
- **Tests**: `HelperNames` map + `composer.json` autoload files updated.

## 2026-08-15 (print family helpers)

- **New helpers**: `ns_printer_*`, `ns_printinfo_*`, `ns_printpanel_*`, `ns_printoperation_*` over four new `AppKit\NS\*` print extension classes.
- **Enums**: existing `PrintPanelOptions`, `PrintingPaginationMode`, `PrintingOrientation`, `PrintingPageOrder`, `PrintRenderingQuality` documented for print helper ints.
- **Tests**: `HelperNames` map + `composer.json` autoload files updated.

## 2026-08-15 (scrubber layouts + page layout helpers)

- **New helpers**: `ns_scrubberlayout_*`, `ns_scrubberflowlayout_*`, `ns_scrubberproportionallayout_*`, `ns_pagelayout_*` over four new `AppKit\NS\*` extension classes.
- **Also added**: `ns_scrubber_*` (full scrubber control including `setLayout` / `getLayout`).
- **Tests**: `HelperNames` map + `composer.json` autoload files updated.

## 2026-08-15 (scroll / ruler / split / tab / page / vibrancy / menu wave helpers)

- **New helpers**: `ns_clipview_*`, `ns_scroller_*`, `ns_rulerview_*`, `ns_rulermarker_*`, `ns_splitviewitem_*`, `ns_splitviewcontroller_*`, `ns_tabviewitem_*`, `ns_tabviewcontroller_*`, `ns_pagecontroller_*`, `ns_visualeffectview_*`, `ns_menutoolbaritem_*` over twelve new `AppKit\NS\*` extension classes from ext-appkit 0.8 scroll/ruler/split wave.
- **Expanded**: `ns_menuitem_*` (full NSMenuItem bind; `ns_menu_add_item` alias preserved).
- **Tests**: `HelperNames` map + `composer.json` autoload files updated.

## 2026-08-15 (toolbar item family helpers)

- **New helpers**: `ns_toolbaritem_*`, `ns_toolbaritemgroup_*`, `ns_searchtoolbaritem_*`, `ns_trackingseparatortoolbaritem_*`, `ns_sharingservicepickertoolbaritem_*` over five `AppKit\NS\*ToolbarItem*` extension classes.
- **Enum**: `ToolbarItemVisibilityPriority` for `ns_toolbaritem_set_visibility_priority`.
- **Tests**: `HelperNames` map + `composer.json` autoload files updated.

## 2026-08-15 (cells / path / text-checking helpers)

- **New helpers**: `ns_buttoncell_*`, `ns_popupbuttoncell_*`, `ns_slidercell_*`, `ns_steppercell_*`, `ns_segmentedcell_*`, `ns_pathcontrol_*`, `ns_pathcell_*`, `ns_pathcomponentcell_*`, `ns_textinsertionindicator_*`, `ns_textcheckingcontroller_*`.
- **Tests**: `HelperNames` map extended; `composer.json` autoload files updated.

## 2026-08-15 (scrubber view hierarchy helpers)

- **New helpers**: `ns_scrubberarrangedview_*`, `ns_scrubberselectionview_*`, `ns_scrubberitemview_*` over three `AppKit\NS\NSScrubber*` view classes.
- **Tests**: `HelperNames` map extended; `composer.json` autoload files updated.

## 2026-08-15 (SDK NS_ENUM / NS_OPTIONS)

- **Enums**: remaining AppKit `NS_ENUM`/`NS_OPTIONS` generated into `src/Enums` as `Microscrap\Bindings\AppKit\Enums\*` (Apple `NS` prefix stripped). Hand-owned enums were not overwritten.
- Autoload is this package’s Composer PSR-4 — not `ext-appkit`.

## 2026-08-15 (TextKit 2 / typesetter / adaptive glyph)

- **New helpers**: `ns_textblock_*`, `ns_paragraphstyle_*`, `ns_typesetter_*`, `ns_atstypesetter_*`, `ns_glyphgenerator_*`, `ns_textlayoutmanager_*`, `ns_textcontentmanager_*`, `ns_textcontentstorage_*`, `ns_textlayoutfragment_*`, `ns_textlinefragment_*`, `ns_textelement_*`, `ns_textparagraph_*`, `ns_textselection_*`, `ns_textviewportlayoutcontroller_*`, `ns_adaptiveimageglyph_*` over fifteen `AppKit\NS\*` extension classes.
- **Tests**: `HelperNames` map extended; `composer.json` autoload files updated.

## 2026-08-15 (text system helpers)

- **New helpers**: `ns_textcontainer_*`, `ns_layoutmanager_*`, `ns_textstorage_*`, `ns_textinputcontext_*`, `ns_searchfield_*`, `ns_searchfieldcell_*`, `ns_tokenfield_*`, `ns_tokenfieldcell_*`, `ns_combobutton_*`, `ns_textfinder_*`, `ns_spellchecker_*`, `ns_textattachment_*`, `ns_textattachmentcell_*`, `ns_textlist_*`, `ns_texttable_*` over fifteen `AppKit\NS\*` extension classes.
- **Enums**: `TextContainerLineBreakMode`, `TokenStyle`, `ComboButtonStyle`, `TextFinderAction`, `TextTableLayoutAlgorithm`, `TextBlockValueType`, `TextBlockVerticalAlignment`, `TextStorageEditAction`.
- **Tests**: `HelperNames` map + `composer.json` autoload files updated.

## 2026-08-15 (font family helpers)

- **New helpers**: `ns_font_*`, `ns_fontdescriptor_*`, `ns_fontmanager_*`, `ns_fontpanel_*`, `ns_fontcollection_*`.
- **Enums**: `FontMetaKind`, `FontWeightKind`, `FontWidthKind`, `FontTextStyleKind`, `FontDesignKind`, `FontTraitMask`, `FontAction`, `FontCollectionVisibility`, `FontDescriptorSymbolicTrait`, `ControlSize`.
- **Tests**: `HelperNames` map extended for five `AppKit\NS\NSFont*` classes; `composer.json` autoload files synced to include font helpers (and previously missing color/appearance helpers).

## 2026-08-15 (TextKit 2 / typesetter / adaptive glyph)

- **New helpers**: `ns_textblock_*`, `ns_paragraphstyle_*`, `ns_typesetter_*`, `ns_atstypesetter_*`, `ns_glyphgenerator_*`, `ns_textlayoutmanager_*`, `ns_textcontentmanager_*`, `ns_textcontentstorage_*`, `ns_textlayoutfragment_*`, `ns_textlinefragment_*`, `ns_textelement_*`, `ns_textparagraph_*`, `ns_textselection_*`, `ns_textviewportlayoutcontroller_*`, `ns_adaptiveimageglyph_*` over fifteen `AppKit\NS\*` extension classes.
- **Tests**: `HelperNames` map extended; `composer.json` autoload files updated.

## 2026-08-15 (color / appearance / magnification gesture)

- **New helpers**: `ns_magnificationgesturerecognizer_*` (+ shared `ns_gesturerecognizer_*`), `ns_appearance_*`, `ns_color_*`, `ns_colorspace_*`, `ns_colorlist_*`, `ns_colorsampler_*`, `ns_colorpanel_*`, `ns_colorpicker_*`.
- **Enums**: `ColorKind`, `ColorSpaceKind`, `ColorSpaceModel`, `ColorType`, `ColorPanelMode`, `ColorSamplerPollStatus`, `AppearanceName`.
- **Tests**: `HelperNames` map + `composer.json` autoload files updated.

## 2026-08-15 (pasteboard / drag / share wave)

- **New helpers**: `ns_storyboardsegue_*`, `ns_pasteboard_*`, `ns_pasteboarditem_*`, `ns_draggingitem_*`, `ns_draggingsession_*`, `ns_draggingimagecomponent_*`, `ns_filepromiseprovider_*`, `ns_filepromisereceiver_*`, `ns_sharingservice_*`, `ns_sharingservicepicker_*` over ten new `AppKit\NS\*` extension classes (pasteboard, drag-and-drop, promised files, sharing).
- **Tests**: `HelperNames` map extended; `composer.json` autoload files updated.

## 2026-08-15 (panel / screen / cursor / tracking / touch / gestures)

- **New helpers**: `ns_panel_*`, `ns_screen_*`, `ns_cursor_*`, `ns_trackingarea_*`, `ns_touch_*`, `ns_gesturerecognizer_*`, and four gesture subclass helper files over ten new `AppKit\NS\*` extension classes.
- **Enums**: `TrackingAreaOption`, `GestureRecognizerState`, `TouchPhase`, `TouchType`.
- **Tests**: `HelperNames` map extended; `composer.json` autoload files updated.

## 2026-08-15 (NSImage / NSImageRep family)

- **New helpers**: `ns_imagerep_*`, `ns_image_*`, `ns_bitmapimagerep_*`, `ns_cachedimagerep_*`, `ns_ciimagerep_*`, `ns_epsimagerep_*`, `ns_pdfimagerep_*`, `ns_customimagerep_*` over eight `AppKit\NS\*` extension classes.
- **Enums**: `ImageCacheMode`, `ImageLayoutDirection`, `BitmapImageFileType`.
- **Tests**: `HelperNames` map extended; `composer.json` autoload files updated.

## 2026-08-15 (drawing / animation / text cell helpers)

- **New helpers**: `ns_bezierpath_*`, `ns_gradient_*`, `ns_shadow_*`, `ns_graphicscontext_*`, `ns_animationcontext_*`, `ns_animation_*`, `ns_viewanimation_*`, `ns_text_*`, `ns_textfieldcell_*`, `ns_securetextfieldcell_*` over ten new `AppKit\NS\*` extension classes.
- **Tests**: `HelperNames` map extended; `composer.json` autoload files updated.

## 2026-08-15 (responder / control / cell / controllers)

- **New helpers**: `ns_responder_*`, `ns_control_*`, `ns_cell_*`, `ns_actioncell_*`, `ns_viewcontroller_*`, `ns_windowcontroller_*` over six new `AppKit\NS\*` extension classes.
- **Tests**: `HelperNames` map extended; `composer.json` autoload files updated.

## 2026-08-15

- **Move from microscrap/metal**: App / Window / View / widgets / menu / event helpers now live here as `ns_*` over `AppKit\NS\*`. Metal GPU + gamepad stay in `microscrap/metal`.
- Removed `scripts/generate-helpers.php`. Helpers in `src/Helpers/` are owned; a regen script must not write there (`ns-event.php` is hand-shaped for enums).
- Trap: do not `ns_alert_run_modal` from `ns_app_poll`. CollectionView `add_item` reloads every insert; do not fill hourly (100+) that way from a poll loop.
