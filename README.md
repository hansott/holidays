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
// or $year = new Year(2016);
$holidays = $calendar->getHolidays($year);
foreach ($holidays as $holiday) {
    $name = $translator->getName($holiday); // string
    $startsAt = $holiday->beginsAt(); // DateTimeImmutable
    $endsAt = $holiday->endsAt(); // DateTimeImmutable
    $formattedTime = $startsAt->format('l j F Y'); // string
    echo sprintf('%s -> %s', $name, $formattedTime) . PHP_EOL;
}
```

Output:
```
Nieuwjaar -> Friday 1 January 2016
Paasmaandag -> Monday 28 March 2016
Feest Van De Arbeid -> Sunday 1 May 2016
Onze Lieve Heer Hemelvaart -> Monday 11 April 2016
Pinkstermaandag -> Wednesday 18 May 2016
Nationale Feestdag -> Thursday 21 July 2016
Onze Lieve Vrouw Hemelvaart -> Monday 15 August 2016
Allerheiligen -> Tuesday 1 November 2016
Wapenstilstand -> Friday 11 November 2016
Kerstmis -> Sunday 25 December 2016
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
