<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\DNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class OriginalRawFileType extends AbstractTag
{

    protected $Id = 2;

    protected $Name = 'OriginalRawFileType';

    protected $FullName = 'DNG::OriginalRaw';

    protected $GroupName = 'DNG';

    protected $g0 = 'DNG';

    protected $g1 = 'DNG';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Original Raw File Type';

}
