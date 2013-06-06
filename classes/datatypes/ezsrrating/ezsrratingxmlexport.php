<?php
/**
 * File containing the eZSrratingXMLExport class
 *
 * @copyright Copyright (C) 1999-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU GPLv2
 * @package ezxmlexport
 *
 */

/*
 * Complex type for this datatype
 */

class eZSrratingXMLExport extends eZXMLExportDatatype
{
    protected function defaultValue()
    {
        return 0;
    }

    protected function toXMLSchema()
    {
        return '<:xs:complexType>
                    <xs:simpleContent>
                        <xs:extension base="ezsrrating"/>
                    </xs:simpleContent>
                </xs:complexType>';
    }

    protected function toXML()
    {
        $content = $this->contentObjectAttribute->content();
        return $content->attribute( 'rating_count' );
    }
}
?>