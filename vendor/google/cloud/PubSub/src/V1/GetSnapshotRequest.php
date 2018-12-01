<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the GetSnapshot method.<br><br>
 * <b>ALPHA:</b> This feature is part of an alpha release. This API might be
 * changed in backward-incompatible ways and is not recommended for production
 * use. It is not subject to any SLA or deprecation policy.
 *
 * Generated from protobuf message <code>google.pubsub.v1.GetSnapshotRequest</code>
 */
class GetSnapshotRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the snapshot to get.
     * Format is `projects/{project}/snapshots/{snap}`.
     *
     * Generated from protobuf field <code>string snapshot = 1;</code>
     */
    private $snapshot = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $snapshot
     *           The name of the snapshot to get.
     *           Format is `projects/{project}/snapshots/{snap}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the snapshot to get.
     * Format is `projects/{project}/snapshots/{snap}`.
     *
     * Generated from protobuf field <code>string snapshot = 1;</code>
     * @return string
     */
    public function getSnapshot()
    {
        return $this->snapshot;
    }

    /**
     * The name of the snapshot to get.
     * Format is `projects/{project}/snapshots/{snap}`.
     *
     * Generated from protobuf field <code>string snapshot = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSnapshot($var)
    {
        GPBUtil::checkString($var, True);
        $this->snapshot = $var;

        return $this;
    }

}

