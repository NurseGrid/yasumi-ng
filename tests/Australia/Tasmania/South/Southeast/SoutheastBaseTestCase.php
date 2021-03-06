<?php
/**
 * This file is part of the Yasumi package.
 *
 * Copyright (c) 2015 - 2019 AzuyaLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Sacha Telgenhof <stelgenhof@gmail.com>
 */

namespace Yasumi\tests\Australia\Tasmania\South\Southeast;

use Yasumi\tests\Australia\Tasmania\South\SouthBaseTestCase;
use Yasumi\tests\YasumiBase;

/**
 * Base class for test cases of the northwestern Tasmania holiday provider.
 */
abstract class SoutheastBaseTestCase extends SouthBaseTestCase
{
    use YasumiBase;

    /**
     * Name of the region (e.g. country / state) to be tested
     */
    public $region = 'Australia\Tasmania\South\Southeast';

    /**
     * Timezone in which this provider has holidays defined
     */
    public $timezone = 'Australia/Hobart';
}
