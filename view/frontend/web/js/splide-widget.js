/*
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

define(['splide'], function (Splide) {
    'use strict';

    /**
     * Splide Widget Component
     *
     * @param {Object} config - Configuration options
     * @param {HTMLElement} element - Target element
     * @returns {Object} Splide instance
     */
    return function (config, element) {
        const defaults = {
            type: 'slide',
            perPage: 1,
            perMove: 1,
            gap: '1rem',
            arrows: true,
            pagination: true,
            autoplay: false,
            interval: 5000,
            pauseOnHover: true,
            pauseOnFocus: true,
            resetProgress: true,
            lazyLoad: 'nearby',
            preloadPages: 1,
            keyboard: true,
            wheel: false,
            releaseWheel: false,
            direction: 'ltr',
            cover: false,
            rewind: false,
            speed: 400,
            rewindSpeed: 400,
            waitForTransition: true,
            updateOnMove: false,
            trimSpace: true,
            focus: false,
            mediaQuery: 'max',
            live: true,
            breakpoints: {},
            classes: {},
            i18n: {}
        };

        const options = Object.assign({}, defaults, config || {});
        let splide = new Splide(element, options);

        splide.mount();

        return splide;
    };
});
