# Hryvinskyi SplideJs

Magento 2 base module for [Splide.js](https://splidejs.com/) - a lightweight, flexible slider/carousel library.

## Installation

### Manual Installation

1. Copy the module files to `app/code/Hryvinskyi/SplideJs/`
2. Run:
   ```bash
   bin/magento setup:upgrade
   bin/magento setup:di:compile
   bin/magento cache:flush
   ```

### Composer Installation

```bash
composer require hryvinskyi/magento2-splide-js
bin/magento setup:upgrade
bin/magento setup:di:compile
bin/magento cache:flush
```

## Usage

### Basic Usage with data-mage-init

```html
<div class="splide" data-mage-init='{"splideWidget": {"perPage": 3, "gap": "1rem"}}'>
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">Slide 1</li>
            <li class="splide__slide">Slide 2</li>
            <li class="splide__slide">Slide 3</li>
        </ul>
    </div>
</div>
```

### Using in RequireJS Module

```javascript
define(['splide'], function (Splide) {
    'use strict';

    var splide = new Splide('.my-slider', {
        type: 'loop',
        perPage: 3,
        gap: '1rem',
        autoplay: true
    });

    splide.mount();
});
```

### Using the Widget Component

```javascript
define(['splideWidget'], function (splideWidget) {
    'use strict';

    var element = document.querySelector('.my-slider');
    var config = {
        type: 'loop',
        perPage: 3,
        gap: '1rem'
    };

    var slider = splideWidget(config, element);
});
```

## Configuration Options

| Option | Type | Default | Description |
|--------|------|---------|-------------|
| `type` | string | `slide` | Slider type: `slide`, `loop`, or `fade` |
| `perPage` | int | `1` | Number of slides to display |
| `perMove` | int | `1` | Number of slides to move at once |
| `gap` | string | `1rem` | Gap between slides |
| `arrows` | bool | `true` | Show navigation arrows |
| `pagination` | bool | `true` | Show pagination dots |
| `autoplay` | bool | `false` | Enable autoplay |
| `interval` | int | `5000` | Autoplay interval in milliseconds |
| `speed` | int | `400` | Transition speed in milliseconds |
| `rewind` | bool | `false` | Rewind to first slide at end |
| `direction` | string | `ltr` | Direction: `ltr`, `rtl`, or `ttb` |
| `lazyLoad` | string/bool | `nearby` | Lazy load: `nearby`, `sequential`, or `false` |
| `breakpoints` | object | `{}` | Responsive breakpoints configuration |

### Breakpoints Example

```json
{
    "breakpoints": {
        "1024": {
            "perPage": 3
        },
        "768": {
            "perPage": 2
        },
        "480": {
            "perPage": 1
        }
    }
}
```

## Splide.js Documentation

For complete Splide.js options and API documentation, visit: https://splidejs.com/documents/

## Requirements

- PHP 8.1+
- Magento 2.4.x

## License

MIT License

## Author

Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
