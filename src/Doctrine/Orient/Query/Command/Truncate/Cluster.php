<?php

/*
 * This file is part of the Doctrine\Orient package.
 *
 * (c) Alessandro Nadalin <alessandro.nadalin@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Class Cluster
 *
 * @package    Doctrine\Orient
 * @subpackage Query
 * @author     Alessandro Nadalin <alessandro.nadalin@gmail.com>
 */

namespace Doctrine\Orient\Query\Command\Truncate;

use Doctrine\Orient\Query\Command\Truncate;

class Cluster extends Truncate
{
    /**
     * @inheritdoc
     */
    protected function getSchema()
    {
        return "TRUNCATE CLUSTER :Name";
    }
}