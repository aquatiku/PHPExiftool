<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class GPSMapDatum extends AbstractTag
{

    protected $Id = 18874386;

    protected $Name = 'GPSMapDatum';

    protected $FullName = 'Nikon::NCTG';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'GPS Map Datum';

    protected $local_g2 = 'Location';

    protected $flag_Permanent = true;

}
