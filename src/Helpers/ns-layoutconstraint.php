<?php

use AppKit\NS\NSLayoutConstraint\NSLayoutConstraint;

/*
| NSLayoutConstraint helpers — 1:1 over AppKit\NS\NSLayoutConstraint\NSLayoutConstraint
*/

if (! function_exists('ns_layoutconstraint_wrap')) {
    function ns_layoutconstraint_wrap(int $nsLayoutConstraintPtr): int
    {
        return NSLayoutConstraint::wrap($nsLayoutConstraintPtr);
    }
}

if (! function_exists('ns_layoutconstraint_destroy')) {
    function ns_layoutconstraint_destroy(int $constraint): void
    {
        NSLayoutConstraint::destroy($constraint);
    }
}

if (! function_exists('ns_layoutconstraint_nslayoutconstraint')) {
    function ns_layoutconstraint_nslayoutconstraint(int $constraint): int
    {
        return NSLayoutConstraint::nsLayoutConstraint($constraint);
    }
}

if (! function_exists('ns_layoutconstraint_constraint_with_item')) {
    function ns_layoutconstraint_constraint_with_item(int $view1, int $attr1, int $relation, int $view2, int $attr2, float $multiplier, float $constant): int
    {
        return NSLayoutConstraint::constraintWithItem($view1, $attr1, $relation, $view2, $attr2, $multiplier, $constant);
    }
}

if (! function_exists('ns_layoutconstraint_activate_constraints')) {
    function ns_layoutconstraint_activate_constraints(array $constraints): void
    {
        NSLayoutConstraint::activateConstraints($constraints);
    }
}

if (! function_exists('ns_layoutconstraint_deactivate_constraints')) {
    function ns_layoutconstraint_deactivate_constraints(array $constraints): void
    {
        NSLayoutConstraint::deactivateConstraints($constraints);
    }
}

if (! function_exists('ns_layoutconstraint_set_active')) {
    function ns_layoutconstraint_set_active(int $constraint, bool $active): void
    {
        NSLayoutConstraint::setActive($constraint, $active);
    }
}

if (! function_exists('ns_layoutconstraint_is_active')) {
    function ns_layoutconstraint_is_active(int $constraint): bool
    {
        return NSLayoutConstraint::isActive($constraint);
    }
}

if (! function_exists('ns_layoutconstraint_set_priority')) {
    function ns_layoutconstraint_set_priority(int $constraint, float $priority): void
    {
        NSLayoutConstraint::setPriority($constraint, $priority);
    }
}

if (! function_exists('ns_layoutconstraint_priority')) {
    function ns_layoutconstraint_priority(int $constraint): float
    {
        return NSLayoutConstraint::priority($constraint);
    }
}

if (! function_exists('ns_layoutconstraint_set_constant')) {
    function ns_layoutconstraint_set_constant(int $constraint, float $constant): void
    {
        NSLayoutConstraint::setConstant($constraint, $constant);
    }
}

if (! function_exists('ns_layoutconstraint_constant')) {
    function ns_layoutconstraint_constant(int $constraint): float
    {
        return NSLayoutConstraint::constant($constraint);
    }
}

if (! function_exists('ns_layoutconstraint_set_identifier')) {
    function ns_layoutconstraint_set_identifier(int $constraint, string $identifier): void
    {
        NSLayoutConstraint::setIdentifier($constraint, $identifier);
    }
}

if (! function_exists('ns_layoutconstraint_identifier')) {
    function ns_layoutconstraint_identifier(int $constraint): string
    {
        return NSLayoutConstraint::identifier($constraint);
    }
}

if (! function_exists('ns_layoutconstraint_first_attribute')) {
    function ns_layoutconstraint_first_attribute(int $constraint): int
    {
        return NSLayoutConstraint::firstAttribute($constraint);
    }
}

if (! function_exists('ns_layoutconstraint_second_attribute')) {
    function ns_layoutconstraint_second_attribute(int $constraint): int
    {
        return NSLayoutConstraint::secondAttribute($constraint);
    }
}

if (! function_exists('ns_layoutconstraint_relation')) {
    function ns_layoutconstraint_relation(int $constraint): int
    {
        return NSLayoutConstraint::relation($constraint);
    }
}

if (! function_exists('ns_layoutconstraint_multiplier')) {
    function ns_layoutconstraint_multiplier(int $constraint): float
    {
        return NSLayoutConstraint::multiplier($constraint);
    }
}

if (! function_exists('ns_layoutconstraint_first_anchor')) {
    function ns_layoutconstraint_first_anchor(int $constraint): int
    {
        return NSLayoutConstraint::firstAnchor($constraint);
    }
}

if (! function_exists('ns_layoutconstraint_second_anchor')) {
    function ns_layoutconstraint_second_anchor(int $constraint): int
    {
        return NSLayoutConstraint::secondAnchor($constraint);
    }
}
