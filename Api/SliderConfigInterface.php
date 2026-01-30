<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\SplideJs\Api;

/**
 * Provides Splide slider configuration
 */
interface SliderConfigInterface
{
    /**
     * Slider type constants
     */
    public const TYPE_SLIDE = 'slide';
    public const TYPE_LOOP = 'loop';
    public const TYPE_FADE = 'fade';

    /**
     * Direction constants
     */
    public const DIRECTION_LTR = 'ltr';
    public const DIRECTION_RTL = 'rtl';
    public const DIRECTION_TTB = 'ttb';

    /**
     * Lazy load constants
     */
    public const LAZY_LOAD_FALSE = false;
    public const LAZY_LOAD_NEARBY = 'nearby';
    public const LAZY_LOAD_SEQUENTIAL = 'sequential';

    /**
     * Get slider type
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Get number of slides to display per page
     *
     * @return int
     */
    public function getPerPage(): int;

    /**
     * Get number of slides to move at once
     *
     * @return int
     */
    public function getPerMove(): int;

    /**
     * Get gap between slides
     *
     * @return string
     */
    public function getGap(): string;

    /**
     * Check if arrows are enabled
     *
     * @return bool
     */
    public function isArrowsEnabled(): bool;

    /**
     * Check if pagination is enabled
     *
     * @return bool
     */
    public function isPaginationEnabled(): bool;

    /**
     * Check if autoplay is enabled
     *
     * @return bool
     */
    public function isAutoplayEnabled(): bool;

    /**
     * Get autoplay interval in milliseconds
     *
     * @return int
     */
    public function getInterval(): int;

    /**
     * Get transition speed in milliseconds
     *
     * @return int
     */
    public function getSpeed(): int;

    /**
     * Check if rewind is enabled
     *
     * @return bool
     */
    public function isRewindEnabled(): bool;

    /**
     * Get slider direction
     *
     * @return string
     */
    public function getDirection(): string;

    /**
     * Get lazy load setting
     *
     * @return string|bool
     */
    public function getLazyLoad(): string|bool;

    /**
     * Get breakpoints configuration
     *
     * @return array<int, array<string, mixed>>
     */
    public function getBreakpoints(): array;

    /**
     * Get full slider configuration as array
     *
     * @return array<string, mixed>
     */
    public function toArray(): array;
}
