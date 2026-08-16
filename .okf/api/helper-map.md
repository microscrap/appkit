---
type: APIMap
title: Helper map (ns_*)
description: AppKit helpers mapped to AppKit\NS\* methods
status: draft
generated: { by: cursor-agent/grok-4.6, at: "2026-08-16T19:35:00Z" }
---

# Surface (moved from microscrap/metal)

Helpers match the C ABI (`ns_app_*`, `ns_window_*`, `ns_button_*`, `ns_label_create`, `ns_progressindicator_*`, `ns_popupbutton_*`, `ns_tableview_*`, `ns_scrollview_set_document_view`, …).

| Helpers | Extension |
|---------|-----------|
| `ns_app_*` | `NSApplication` (includes `ns_app_nsapp`, `ns_app_appkit_version_number`) |
| `ns_responder_*` | `NSResponder` |
| `ns_window_*` | `NSWindow` (includes `ns_window_tab`, `ns_window_tab_group`, `ns_window_add_titlebar_accessory_view_controller`) |
| `ns_windowcontroller_*` | `NSWindowController` |
| `ns_view_*` | `NSView` (plain; no Metal) |
| `ns_viewcontroller_*` | `NSViewController` |
| `ns_control_*` | `NSControl` (view-box handles) |
| `ns_cell_*` | `NSCell` |
| `ns_actioncell_*` | `NSActionCell` |
| `ns_button_*` | `NSButton` (includes checkbox / radio factories) |
| `ns_textfield_*` / `ns_label_*` | `NSTextField` |
| `ns_securetextfield_*` | `NSSecureTextField` |
| `ns_textview_*` | `NSTextView` |
| `ns_switch_*` | `NSSwitch` |
| `ns_slider_*` / `ns_stepper_*` / `ns_progressindicator_*` | Slider / Stepper / ProgressIndicator |
| `ns_popupbutton_*` / `ns_combobox_*` / `ns_segmentedcontrol_*` | PopUp / Combo / Segmented |
| `ns_colorwell_*` / `ns_datepicker_*` / `ns_imageview_*` | ColorWell / DatePicker / ImageView |
| `ns_box_*` / `ns_stackview_*` / `ns_scrollview_*` / `ns_clipview_*` / `ns_scroller_*` / `ns_rulerview_*` / `ns_rulermarker_*` / `ns_splitview_*` / `ns_splitviewitem_*` / `ns_splitviewcontroller_*` / `ns_tabview_*` / `ns_tabviewitem_*` / `ns_tabviewcontroller_*` / `ns_pagecontroller_*` / `ns_visualeffectview_*` / `ns_gridview_*` / `ns_gridrow_*` / `ns_gridcolumn_*` / `ns_gridcell_*` | Layout / scroll / rulers / split / tabs / page stack / vibrancy / grid chrome |
| `ns_tableview_*` / `ns_outlineview_*` / `ns_collectionview_*` / `ns_collectionviewlayout_*` / `ns_collectionviewflowlayout_*` / `ns_collectionviewgridlayout_*` / `ns_collectionviewcompositionallayout_*` / `ns_collectionviewtransitionlayout_*` / `ns_collectionviewdiffable_*` | Lists / collection layouts / diffable |
| `ns_toolbar_*` / `ns_toolbaritem_*` / `ns_toolbaritemgroup_*` / `ns_searchtoolbaritem_*` / `ns_trackingseparatortoolbaritem_*` / `ns_sharingservicepickertoolbaritem_*` / `ns_menutoolbaritem_*` / `ns_popover_*` / `ns_statusitem_*` / `ns_sharingservice_*` / `ns_sharingservicepicker_*` | Chrome / share |
| `ns_pasteboard_*` / `ns_pasteboarditem_*` | Pasteboard |
| `ns_draggingitem_*` / `ns_draggingsession_*` / `ns_draggingimagecomponent_*` | Drag and drop |
| `ns_filepromiseprovider_*` / `ns_filepromisereceiver_*` | Promised file drag |
| `ns_storyboardsegue_*` | Storyboard segue |
| `ns_alert_*` / `ns_openpanel_run` / `ns_savepanel_run` / `ns_pagelayout_*` / `ns_printinfo_*` / `ns_printoperation_*` / `ns_printpanel_*` / `ns_printer_*` | Dialogs / page setup / print |
| `ns_menu_*` / `ns_menuitem_*` | `NSMenu` / `NSMenuItem` (full bind; `ns_menu_add_item` alias kept) |
| `ns_event_*` | `NSEvent` (keyboard / mouse) |
| `ns_magnificationgesturerecognizer_*` / shared `ns_gesturerecognizer_*` | `NSMagnificationGestureRecognizer` |
| `ns_appearance_*` | `NSAppearance` |
| `ns_color_*` | `NSColor` |
| `ns_colorspace_*` | `NSColorSpace` |
| `ns_colorlist_*` | `NSColorList` |
| `ns_colorsampler_*` | `NSColorSampler` |
| `ns_colorpanel_*` | `NSColorPanel` |
| `ns_colorpicker_*` | `NSColorPicker` |
| `ns_panel_*` | `NSPanel` |
| `ns_screen_*` | `NSScreen` |
| `ns_cursor_*` | `NSCursor` |
| `ns_trackingarea_*` | `NSTrackingArea` |
| `ns_touch_*` | `NSTouch` |
| `ns_gesturerecognizer_*` | `NSGestureRecognizer` (shared lifecycle for gesture subclasses) |
| `ns_clickgesturerecognizer_*` | `NSClickGestureRecognizer` |
| `ns_pangesturerecognizer_*` | `NSPanGestureRecognizer` |
| `ns_pressgesturerecognizer_*` | `NSPressGestureRecognizer` |
| `ns_rotationgesturerecognizer_*` | `NSRotationGestureRecognizer` |
| `ns_imagerep_*` | `NSImageRep` |
| `ns_image_*` | `NSImage` |
| `ns_bitmapimagerep_*` | `NSBitmapImageRep` |
| `ns_cachedimagerep_*` | `NSCachedImageRep` (deprecated) |
| `ns_ciimagerep_*` | `NSCIImageRep` |
| `ns_epsimagerep_*` | `NSEPSImageRep` (deprecated; nil on macOS 14+) |
| `ns_pdfimagerep_*` | `NSPDFImageRep` |
| `ns_customimagerep_*` | `NSCustomImageRep` |
| `ns_bezierpath_*` | `NSBezierPath` |
| `ns_gradient_*` | `NSGradient` |
| `ns_shadow_*` | `NSShadow` |
| `ns_graphicscontext_*` | `NSGraphicsContext` |
| `ns_animationcontext_*` | `NSAnimationContext` |
| `ns_animation_*` | `NSAnimation` |
| `ns_viewanimation_*` | `NSViewAnimation` |
| `ns_text_*` | `NSText` |
| `ns_textfieldcell_*` | `NSTextFieldCell` |
| `ns_securetextfieldcell_*` | `NSSecureTextFieldCell` |
| `ns_font_*` | `NSFont` |
| `ns_fontdescriptor_*` | `NSFontDescriptor` |
| `ns_fontmanager_*` | `NSFontManager` |
| `ns_fontpanel_*` | `NSFontPanel` |
| `ns_fontcollection_*` | `NSFontCollection` (+ mutable) |
| `ns_textcontainer_*` | `NSTextContainer` |
| `ns_layoutmanager_*` | `NSLayoutManager` |
| `ns_docktile_*` | `NSDockTile` |
| `ns_alignmentfeedbackfilter_*` | `NSAlignmentFeedbackFilter` |
| `ns_pressureconfiguration_*` | `NSPressureConfiguration` |
| `ns_layoutconstraint_*` | `NSLayoutConstraint` |
| `ns_layoutanchor_*` | `NSLayoutAnchor` (+ view anchor accessors) |
| `ns_layoutxaxisanchor_*` | `NSLayoutXAxisAnchor` |
| `ns_layoutyaxisanchor_*` | `NSLayoutYAxisAnchor` |
| `ns_layoutdimension_*` | `NSLayoutDimension` |
| `ns_layoutguide_*` | `NSLayoutGuide` |
| `ns_textstorage_*` | `NSTextStorage` |
| `ns_textinputcontext_*` | `NSTextInputContext` |
| `ns_searchfield_*` | `NSSearchField` |
| `ns_searchfieldcell_*` | `NSSearchFieldCell` |
| `ns_tokenfield_*` | `NSTokenField` |
| `ns_tokenfieldcell_*` | `NSTokenFieldCell` |
| `ns_combobutton_*` | `NSComboButton` |
| `ns_textfinder_*` | `NSTextFinder` |
| `ns_spellchecker_*` | `NSSpellChecker` |
| `ns_sound_*` | `NSSound` |
| `ns_speechsynthesizer_*` | `NSSpeechSynthesizer` |
| `ns_speechrecognizer_*` | `NSSpeechRecognizer` |
| `ns_hapticfeedbackmanager_*` | `NSHapticFeedbackManager` |
| `ns_textattachment_*` | `NSTextAttachment` |
| `ns_textattachmentcell_*` | `NSTextAttachmentCell` |
| `ns_textlist_*` | `NSTextList` |
| `ns_texttable_*` | `NSTextTable` |
| `ns_textblock_*` | `NSTextBlock` |
| `ns_paragraphstyle_*` | `NSParagraphStyle` |
| `ns_typesetter_*` | `NSTypesetter` |
| `ns_atstypesetter_*` | `NSATSTypesetter` |
| `ns_glyphgenerator_*` | `NSGlyphGenerator` |
| `ns_textlayoutmanager_*` | `NSTextLayoutManager` |
| `ns_textcontentmanager_*` | `NSTextContentManager` |
| `ns_textcontentstorage_*` | `NSTextContentStorage` |
| `ns_textlayoutfragment_*` | `NSTextLayoutFragment` |
| `ns_textlinefragment_*` | `NSTextLineFragment` |
| `ns_textelement_*` | `NSTextElement` |
| `ns_textparagraph_*` | `NSTextParagraph` |
| `ns_textselection_*` | `NSTextSelection` |
| `ns_textviewportlayoutcontroller_*` | `NSTextViewportLayoutController` |
| `ns_adaptiveimageglyph_*` | `NSAdaptiveImageGlyph` |
| `ns_scrubber_*` | `NSScrubber` |
| `ns_scrubberarrangedview_*` | `NSScrubberArrangedView` |
| `ns_scrubberflowlayout_*` | `NSScrubberFlowLayout` |
| `ns_scrubberlayout_*` | `NSScrubberLayout` |
| `ns_scrubberproportionallayout_*` | `NSScrubberProportionalLayout` |
| `ns_scrubberselectionview_*` | `NSScrubberSelectionView` |
| `ns_scrubberitemview_*` | `NSScrubberItemView` |
| `ns_buttoncell_*` | `NSButtonCell` |
| `ns_popupbuttoncell_*` | `NSPopUpButtonCell` |
| `ns_slidercell_*` | `NSSliderCell` |
| `ns_steppercell_*` | `NSStepperCell` |
| `ns_segmentedcell_*` | `NSSegmentedCell` |
| `ns_pathcontrol_*` | `NSPathControl` |
| `ns_pathcell_*` | `NSPathCell` |
| `ns_pathcomponentcell_*` | `NSPathComponentCell` |
| `ns_textinsertionindicator_*` | `NSTextInsertionIndicator` |
| `ns_textcheckingcontroller_*` | `NSTextCheckingController` |

| `ns_levelindicator_*` | `NSLevelIndicator` |
| `ns_levelindicatorcell_*` | `NSLevelIndicatorCell` |
| `ns_form_*` | `NSForm` (deprecated) |
| `ns_formcell_*` | `NSFormCell` |
| `ns_matrix_*` | `NSMatrix` (deprecated) |
| `ns_browser_*` | `NSBrowser` |
| `ns_browsercell_*` | `NSBrowserCell` |
| `ns_predicateeditor_*` | `NSPredicateEditor` |
| `ns_ruleeditor_*` | `NSRuleEditor` |
| `ns_statusbar_*` | `NSStatusBar` |
| `ns_statusbarbutton_*` | `NSStatusBarButton` |
| `ns_tablecolumn_*` | `NSTableColumn` |
| `ns_tableheaderview_*` | `NSTableHeaderView` |
| `ns_tableheadercell_*` | `NSTableHeaderCell` |
| `ns_tablerowview_*` | `NSTableRowView` |
| `ns_tablecellview_*` | `NSTableCellView` |
| `ns_tableviewdiffable_*` | `NSTableViewDiffableDataSource` |
| `ns_collectionviewitem_*` | `NSCollectionViewItem` |
| `ns_document_*` | `NSDocument` |
| `ns_documentcontroller_*` | `NSDocumentController` |
| `ns_helpmanager_*` | `NSHelpManager` |
| `ns_nib_*` | `NSNib` |
| `ns_persistentdocument_*` | `NSPersistentDocument` |
| `ns_runningapplication_*` | `NSRunningApplication` |
| `ns_workspace_*` | `NSWorkspace` |
| `ns_storyboard_*` | `NSStoryboard` |
| `ns_storyboardsegue_*` | `NSStoryboardSegue` |

Backed enums in `Microscrap\\Bindings\\AppKit\\Enums\\`: `ColorKind`, `ColorSpaceKind`, `ColorSpaceModel`, `ColorType`, `ColorPanelMode`, `ColorSamplerPollStatus`, `AppearanceName`, `ApplicationActivationOptions`, `ApplicationActivationPolicy`, `DocumentChangeType`, `SaveOperationType`, `TrackingAreaOption`, `GestureRecognizerState`, `TouchPhase`, `TouchType`, `ImageCacheMode`, `ImageLayoutDirection`, `BitmapImageFileType`, `FontMetaKind`, `FontWeightKind`, `FontWidthKind`, `FontTextStyleKind`, `FontDesignKind`, `FontTraitMask`, `FontAction`, `FontCollectionVisibility`, `FontDescriptorSymbolicTrait`, `ControlSize`, `TextAlignment`, `ToolbarItemGroupSelectionMode`, `ToolbarItemGroupControlRepresentation`, `ToolbarItemVisibilityPriority`, `TextContainerLineBreakMode`, `TokenStyle`, `ComboButtonStyle`, `TextFinderAction`, `TextTableLayoutAlgorithm`, `TextBlockValueType`, `TextBlockVerticalAlignment`, `TextStorageEditAction`, `PrintPanelOptions`, `PrintingPaginationMode`, `PrintingOrientation`, `PrintingPageOrder`, `PrintRenderingQuality`, `PasteboardAccessBehavior`, `PasteboardContentsOptions`, `PasteboardReadingOptions`, `PasteboardWritingOptions`, `DraggingFormation`, `DraggingContext`, `DraggingItemEnumerationOptions`, `SharingContentScope`, `SharingCollaborationMode`, `CollectionViewScrollDirection`, `GridCellPlacement`, `GridRowAlignment`, `StatusItemLengthKind`, plus SDK-generated enums (`PathStyle`, …).

`ns_control_set_alignment`, `ns_text_set_alignment`, and `ns_paragraphstyle_set_alignment` accept `TextAlignment` or a raw int (`LEFT=0`, `CENTER=1`, `RIGHT=2` on current macOS).

`ns_image_set_cache_mode`, `ns_imagerep_set_layout_direction`, and `ns_bitmapimagerep_representation_using_type` accept the matching enum or a raw int. Font helpers accept matching enums or raw ints for kind / trait / visibility args. Text-system helpers accept matching enums or raw ints for line-break / token / combo / finder / table / block args. Print helpers accept `PrintPanelOptions`, `PrintingPaginationMode`, `PrintingOrientation`, `PrintingPageOrder`, and `PrintRenderingQuality` values (or raw ints). Path style ints accept `PathStyle` values.

`ns_speechsynthesizer_stop_speaking_at_boundary` and `ns_speechsynthesizer_pause_speaking_at_boundary` accept `SpeechBoundary` or raw int. `ns_hapticfeedbackmanager_perform_feedback` and `ns_hapticfeedbackmanager_perform_default_feedback` accept `HapticFeedbackPattern` / `HapticFeedbackPerformanceTime` or raw ints. Document helpers accept `DocumentChangeType`; persistent-document write accepts `SaveOperationType`; running-application activate accepts `ApplicationActivationOptions`.

`ns_titlebaraccessoryviewcontroller_set_layout_attribute` accepts `LayoutAttribute` or raw int. `ns_accessibilitycustomrotor_create_with_type` / `set_type` accept `AccessibilityCustomRotorType` or raw int. `ns_graphics_rect_fill_using_operation` and `ns_graphics_frame_rect_with_width_using_operation` accept `CompositingOperation` or raw int. `ns_graphics_set_focus_ring_style` accepts `FocusRingPlacement`. `ns_graphics_show_animation_effect` accepts `AnimationEffect`.

| `ns_controller_*` | `NSController` |
| `ns_objectcontroller_*` | `NSObjectController` |
| `ns_arraycontroller_*` | `NSArrayController` |
| `ns_treecontroller_*` | `NSTreeController` |
| `ns_dictionarycontroller_*` | `NSDictionaryController` |
| `ns_userdefaultscontroller_*` | `NSUserDefaultsController` |
| `ns_accessibilityelement_*` | `NSAccessibilityElement` |
| `ns_accessibilitycustomrotor_*` | `NSAccessibilityCustomRotor` |
| `ns_accessibilitycustomrotoritem_*` | `NSAccessibilityCustomRotorItem` |
| `ns_accessibilitycustomrotoritemresult_*` | `NSAccessibilityCustomRotorItemResult` |
| `ns_windowtab_*` | `NSWindowTab` |
| `ns_windowtabgroup_*` | `NSWindowTabGroup` |
| `ns_titlebaraccessoryviewcontroller_*` | `NSTitlebarAccessoryViewController` |
| `ns_graphics_*` | `NSGraphics` (`NSBeep` / `NSRectFill` / NSGraphics.h) |
| `ns_protocol_*` | `NSProtocol` |
| `ns_accessibility_*` | `NSAccessibility` (attach / poll) |
