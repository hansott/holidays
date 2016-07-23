# Holidays

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Returns the holidays for a country.

## Install

Via Composer

``` bash
$ composer require hansott/holidays
```

## Supported countries and locales

* Belgium (BEL)
    * be-nl

Your country and/or locale not in the list? Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Usage

``` php
use HansOtt\Holiday\Factory;
use HansOtt\Holiday\Calendar\Year;

$factory = Factory::create();
$calendar = $factory->getCalendar('BEL');
$translator = $factory->getTranslator('BEL', 'nl-be');

$year = Year::current();
// or
$year = new Year(2016);

$holidays = $calendar->getHolidays($year);
foreach ($holidays as $holiday) {
    $name = $translator->getName($holiday); // string
    $startsAt = $holiday->startsAt(); // DateTimeImmutable
    $endsAt = $holiday->endsAt(); // DateTimeImmutable
    $formattedTime = $startsAt->format('l j F Y');
    echo sprintf('%s -> %s', $name, $formattedTime) . PHP_EOL;
}
```

Output:
```
Nieuwjaar -> vrijdag 1 januari 2016
Paasmaandag -> maandag 28 maart 2016
Feest Van De Arbeid -> zondag 1 mei 2016
Onze Lieve Heer Hemelvaart -> maandag 11 april 2016
Pinkstermaandag -> woensdag 18 mei 2016
Nationale Feestdag -> donderdag 21 juli 2016
Onze Lieve Vrouw Hemelvaart -> maandag 15 augustus 2016
Allerheiligen -> dinsdag 1 november 2016
Wapenstilstand -> vrijdag 11 november 2016
Kerstmis -> zondag 25 december 2016
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email hansott@hotmail.be instead of using the issue tracker.

## Credits

- [Hans Ott][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/hansott/holidays.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/hansott/holidays/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/hansott/holidays.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/hansott/holidays.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/hansott/holidays.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/hansott/holidays
[link-travis]: https://travis-ci.org/hansott/holidays
[link-scrutinizer]: https://scrutinizer-ci.com/g/hansott/holidays/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/hansott/holidays
[link-downloads]: https://packagist.org/packages/hansott/holidays
[link-author]: https://github.com/hansott
[link-contributors]: ../../contributors
