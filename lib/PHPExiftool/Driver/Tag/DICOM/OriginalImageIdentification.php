<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class OriginalImageIdentification extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0020,5000';

    protected $Name = 'OriginalImageIdentification';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Original Image Identification';

}