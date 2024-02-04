<?php

declare(strict_types=1);

namespace SkgMeetup\Theme;

class Assets
{
    public function boot(): void {
        add_action('wp_enqueue_scripts', [$this, 'load']);
    }

    public function load(): void
    {
        wp_enqueue_style(
            'skg-meetup-theme-main',
            get_theme_file_uri('assets/styles/main.css')
        );
    }
}
