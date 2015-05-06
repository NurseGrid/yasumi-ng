<?php
/*
 * This file is part of the Yasumi package.
 *
 * Copyright (c) 2015 AzuyaLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Sacha Telgenhof <stelgenhof@gmail.com>
 */
namespace Yasumi\Tests\Japan;

use DateTime;
use DateTimeZone;

/**
 * Class testing Showa Day in Japan.
 */
class ShowaDayTest extends JapanBaseTestCase
{
    /**
     * The name of the holiday defined in the test
     */
    const HOLIDAY = 'showaDay';

    /**
     * The year in which the holiday defined in the test was first established
     */
    const ESTABLISHMENT_YEAR = 2007;

    /**
     * Tests the holiday defined in the test on or after establishment.
     */
    public function testHolidayOnAfter2007()
    {
        $year = 2110;
        $this->assertHoliday(self::COUNTRY, self::HOLIDAY, $year,
            new DateTime("$year-4-29", new DateTimeZone(self::TIMEZONE)));
    }

    /**
     * Tests the holiday defined in the test on or after the establishment and substituted next working day.
     */
    public function testHolidayOnAfterEstablishmentSubstitutedNextWorkingDay()
    {
        $year = 2210;
        $this->assertHoliday(self::COUNTRY, self::SUBSTITUTE_PREFIX . self::HOLIDAY, $year,
            new DateTime("$year-4-30", new DateTimeZone(self::TIMEZONE)));
    }

    /**
     * Tests the holiday defined in the test before establishment.
     */
    public function testHolidayBeforeEstablishment()
    {
        $this->assertNotHoliday(self::COUNTRY, self::HOLIDAY,
            $this->generateRandomYear(1000, self::ESTABLISHMENT_YEAR - 1));
    }
}
