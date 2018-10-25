<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class TargetDeltaType extends AbstractTag
{

    protected $Id = 2;

    protected $Name = 'TargetDeltaType';

    protected $FullName = 'MNG::PasteImage';

    protected $GroupName = 'MNG';

    protected $g0 = 'MNG';

    protected $g1 = 'MNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Target Delta Type';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Absolute',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Relative',
        ),
    );

}
