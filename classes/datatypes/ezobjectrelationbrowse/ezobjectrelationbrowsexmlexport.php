<?php
/**
 * File containing the ezobjectrelationbrowseXMLExport class
 *
 * @copyright Copyright (C) 1999-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU GPLv2
 * @package ezxmlexport
 *
 */

/*
 * Complex type for this datatype
 */

class eZObjectRelationBrowseXMLExport extends eZXMLExportDatatype
{
    protected function defaultValue()
    {
        return false;
    }

    protected function toXMLSchema()
    {
        return '<:xs:complexType>
                    <xs:simpleContent>
                        <xs:extension base="ezobjectrelationbrowse"/>
                    </xs:simpleContent>
                </xs:complexType>';
    }

    protected function toXML()
    {
        $content = $this->contentObjectAttribute->content();
        $objectList = array();
        foreach( $content['relation_browse'] as $objectInfo )
        {
            $objectList[] = $objectInfo['contentobject_id'];
        }
        return implode( '-', $objectList );
    }
}
?>