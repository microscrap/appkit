<?php

use AppKit\NS\NSAlignmentFeedbackFilter\NSAlignmentFeedbackFilter;

/*
| NSAlignmentFeedbackFilter helpers — 1:1 over AppKit\NS\NSAlignmentFeedbackFilter\NSAlignmentFeedbackFilter
*/

if (! function_exists('ns_alignmentfeedbackfilter_create')) {
    function ns_alignmentfeedbackfilter_create(): int
    {
        return NSAlignmentFeedbackFilter::create();
    }
}

if (! function_exists('ns_alignmentfeedbackfilter_wrap')) {
    function ns_alignmentfeedbackfilter_wrap(int $nsAlignmentFeedbackFilterPtr): int
    {
        return NSAlignmentFeedbackFilter::wrap($nsAlignmentFeedbackFilterPtr);
    }
}

if (! function_exists('ns_alignmentfeedbackfilter_destroy')) {
    function ns_alignmentfeedbackfilter_destroy(int $filter): void
    {
        NSAlignmentFeedbackFilter::destroy($filter);
    }
}

if (! function_exists('ns_alignmentfeedbackfilter_nsalignmentfeedbackfilter')) {
    function ns_alignmentfeedbackfilter_nsalignmentfeedbackfilter(int $filter): int
    {
        return NSAlignmentFeedbackFilter::nsAlignmentFeedbackFilter($filter);
    }
}

if (! function_exists('ns_alignmentfeedbackfilter_input_event_mask')) {
    function ns_alignmentfeedbackfilter_input_event_mask(): int
    {
        return NSAlignmentFeedbackFilter::inputEventMask();
    }
}

if (! function_exists('ns_alignmentfeedbackfilter_update_with_event')) {
    function ns_alignmentfeedbackfilter_update_with_event(int $filter, int $nsEventPtr): void
    {
        NSAlignmentFeedbackFilter::updateWithEvent($filter, $nsEventPtr);
    }
}

if (! function_exists('ns_alignmentfeedbackfilter_update_with_pan_recognizer')) {
    function ns_alignmentfeedbackfilter_update_with_pan_recognizer(int $filter, int $recognizer): void
    {
        NSAlignmentFeedbackFilter::updateWithPanRecognizer($filter, $recognizer);
    }
}

if (! function_exists('ns_alignmentfeedbackfilter_token_for_movement')) {
    function ns_alignmentfeedbackfilter_token_for_movement(int $filter, int $view, float $prevX, float $prevY, float $alignedX, float $alignedY, float $defaultX, float $defaultY): int
    {
        return NSAlignmentFeedbackFilter::tokenForMovement($filter, $view, $prevX, $prevY, $alignedX, $alignedY, $defaultX, $defaultY);
    }
}

if (! function_exists('ns_alignmentfeedbackfilter_token_for_horizontal_movement')) {
    function ns_alignmentfeedbackfilter_token_for_horizontal_movement(int $filter, int $view, float $previousX, float $alignedX, float $defaultX): int
    {
        return NSAlignmentFeedbackFilter::tokenForHorizontalMovement($filter, $view, $previousX, $alignedX, $defaultX);
    }
}

if (! function_exists('ns_alignmentfeedbackfilter_token_for_vertical_movement')) {
    function ns_alignmentfeedbackfilter_token_for_vertical_movement(int $filter, int $view, float $previousY, float $alignedY, float $defaultY): int
    {
        return NSAlignmentFeedbackFilter::tokenForVerticalMovement($filter, $view, $previousY, $alignedY, $defaultY);
    }
}

if (! function_exists('ns_alignmentfeedbackfilter_perform_feedback')) {
    function ns_alignmentfeedbackfilter_perform_feedback(int $filter, array $tokens, int $performanceTime): void
    {
        NSAlignmentFeedbackFilter::performFeedback($filter, $tokens, $performanceTime);
    }
}

if (! function_exists('ns_alignmentfeedbackfilter_destroy_token')) {
    function ns_alignmentfeedbackfilter_destroy_token(int $token): void
    {
        NSAlignmentFeedbackFilter::destroyToken($token);
    }
}
