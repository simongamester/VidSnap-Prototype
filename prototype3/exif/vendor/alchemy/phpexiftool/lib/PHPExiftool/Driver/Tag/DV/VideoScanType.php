<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\DV;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class VideoScanType extends AbstractTag
{

    protected $Id = 'VideoScanType';

    protected $Name = 'VideoScanType';

    protected $FullName = 'DV::Main';

    protected $GroupName = 'DV';

    protected $g0 = 'DV';

    protected $g1 = 'DV';

    protected $g2 = 'Video';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Video Scan Type';

}
