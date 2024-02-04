<?php

declare(strict_types=1);

namespace SkgMeetup\Theme;

add_action(
    'after_setup_theme',
    static function (): void {
        require __DIR__ . '/src/Assets.php';

        (new Assets())->boot();
    }
);
