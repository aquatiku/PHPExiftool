<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class DynamicRangeOptimizerMode extends AbstractTag
{

    protected $Id = 21;

    protected $Name = 'DynamicRangeOptimizerMode';

    protected $FullName = 'Minolta::WBInfoA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Dynamic Range Optimizer Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Standard',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Advanced',
        ),
    );

}
