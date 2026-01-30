<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\SplideJs\Model;

use Hryvinskyi\SplideJs\Api\SliderConfigInterface;

/**
 * Splide slider configuration model
 */
class SliderConfig implements SliderConfigInterface
{
    /**
     * @param string $type
     * @param int $perPage
     * @param int $perMove
     * @param string $gap
     * @param bool $arrows
     * @param bool $pagination
     * @param bool $autoplay
     * @param int $interval
     * @param int $speed
     * @param bool $rewind
     * @param string $direction
     * @param string|bool $lazyLoad
     * @param array<int, array<string, mixed>> $breakpoints
     */
    public function __construct(
        private readonly string $type = self::TYPE_SLIDE,
        private readonly int $perPage = 1,
        private readonly int $perMove = 1,
        private readonly string $gap = '1rem',
        private readonly bool $arrows = true,
        private readonly bool $pagination = true,
        private readonly bool $autoplay = false,
        private readonly int $interval = 5000,
        private readonly int $speed = 400,
        private readonly bool $rewind = false,
        private readonly string $direction = self::DIRECTION_LTR,
        private readonly string|bool $lazyLoad = self::LAZY_LOAD_NEARBY,
        private readonly array $breakpoints = []
    ) {
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @inheritDoc
     */
    public function getPerPage(): int
    {
        return $this->perPage;
    }

    /**
     * @inheritDoc
     */
    public function getPerMove(): int
    {
        return $this->perMove;
    }

    /**
     * @inheritDoc
     */
    public function getGap(): string
    {
        return $this->gap;
    }

    /**
     * @inheritDoc
     */
    public function isArrowsEnabled(): bool
    {
        return $this->arrows;
    }

    /**
     * @inheritDoc
     */
    public function isPaginationEnabled(): bool
    {
        return $this->pagination;
    }

    /**
     * @inheritDoc
     */
    public function isAutoplayEnabled(): bool
    {
        return $this->autoplay;
    }

    /**
     * @inheritDoc
     */
    public function getInterval(): int
    {
        return $this->interval;
    }

    /**
     * @inheritDoc
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @inheritDoc
     */
    public function isRewindEnabled(): bool
    {
        return $this->rewind;
    }

    /**
     * @inheritDoc
     */
    public function getDirection(): string
    {
        return $this->direction;
    }

    /**
     * @inheritDoc
     */
    public function getLazyLoad(): string|bool
    {
        return $this->lazyLoad;
    }

    /**
     * @inheritDoc
     */
    public function getBreakpoints(): array
    {
        return $this->breakpoints;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return [
            'type' => $this->type,
            'perPage' => $this->perPage,
            'perMove' => $this->perMove,
            'gap' => $this->gap,
            'arrows' => $this->arrows,
            'pagination' => $this->pagination,
            'autoplay' => $this->autoplay,
            'interval' => $this->interval,
            'speed' => $this->speed,
            'rewind' => $this->rewind,
            'direction' => $this->direction,
            'lazyLoad' => $this->lazyLoad,
            'breakpoints' => $this->breakpoints
        ];
    }
}
