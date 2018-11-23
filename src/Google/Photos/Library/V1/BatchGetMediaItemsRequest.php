<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/photos/library/v1/photos_library.proto

namespace Google\Photos\Library\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to retrieve a list of media items.
 *
 * Generated from protobuf message <code>google.photos.library.v1.BatchGetMediaItemsRequest</code>
 */
class BatchGetMediaItemsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifiers of the media items to be requested.
     *
     * Generated from protobuf field <code>repeated string media_item_ids = 1;</code>
     */
    private $media_item_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $media_item_ids
     *           Identifiers of the media items to be requested.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Photos\Library\V1\PhotosLibrary::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifiers of the media items to be requested.
     *
     * Generated from protobuf field <code>repeated string media_item_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMediaItemIds()
    {
        return $this->media_item_ids;
    }

    /**
     * Identifiers of the media items to be requested.
     *
     * Generated from protobuf field <code>repeated string media_item_ids = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMediaItemIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->media_item_ids = $arr;

        return $this;
    }

}

