<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class SortAlbumArtist extends AbstractTag
{

    protected $Id = 'soaa';

    protected $Name = 'SortAlbumArtist';

    protected $FullName = 'QuickTime::ItemList';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Sort Album Artist';

}
