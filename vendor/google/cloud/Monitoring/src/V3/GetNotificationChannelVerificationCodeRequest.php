<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/notification_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `GetNotificationChannelVerificationCode` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.GetNotificationChannelVerificationCodeRequest</code>
 */
class GetNotificationChannelVerificationCodeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The notification channel for which a verification code is to be generated
     * and retrieved. This must name a channel that is already verified; if
     * the specified channel is not verified, the request will fail.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The desired expiration time. If specified, the API will guarantee that
     * the returned code will not be valid after the specified timestamp;
     * however, the API cannot guarantee that the returned code will be
     * valid for at least as long as the requested time (the API puts an upper
     * bound on the amount of time for which a code may be valid). If omitted,
     * a default expiration will be used, which may be less than the max
     * permissible expiration (so specifying an expiration may extend the
     * code's lifetime over omitting an expiration, even though the API does
     * impose an upper limit on the maximum expiration that is permitted).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 2;</code>
     */
    private $expire_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The notification channel for which a verification code is to be generated
     *           and retrieved. This must name a channel that is already verified; if
     *           the specified channel is not verified, the request will fail.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           The desired expiration time. If specified, the API will guarantee that
     *           the returned code will not be valid after the specified timestamp;
     *           however, the API cannot guarantee that the returned code will be
     *           valid for at least as long as the requested time (the API puts an upper
     *           bound on the amount of time for which a code may be valid). If omitted,
     *           a default expiration will be used, which may be less than the max
     *           permissible expiration (so specifying an expiration may extend the
     *           code's lifetime over omitting an expiration, even though the API does
     *           impose an upper limit on the maximum expiration that is permitted).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\NotificationService::initOnce();
        parent::__construct($data);
    }

    /**
     * The notification channel for which a verification code is to be generated
     * and retrieved. This must name a channel that is already verified; if
     * the specified channel is not verified, the request will fail.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The notification channel for which a verification code is to be generated
     * and retrieved. This must name a channel that is already verified; if
     * the specified channel is not verified, the request will fail.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The desired expiration time. If specified, the API will guarantee that
     * the returned code will not be valid after the specified timestamp;
     * however, the API cannot guarantee that the returned code will be
     * valid for at least as long as the requested time (the API puts an upper
     * bound on the amount of time for which a code may be valid). If omitted,
     * a default expiration will be used, which may be less than the max
     * permissible expiration (so specifying an expiration may extend the
     * code's lifetime over omitting an expiration, even though the API does
     * impose an upper limit on the maximum expiration that is permitted).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    /**
     * The desired expiration time. If specified, the API will guarantee that
     * the returned code will not be valid after the specified timestamp;
     * however, the API cannot guarantee that the returned code will be
     * valid for at least as long as the requested time (the API puts an upper
     * bound on the amount of time for which a code may be valid). If omitted,
     * a default expiration will be used, which may be less than the max
     * permissible expiration (so specifying an expiration may extend the
     * code's lifetime over omitting an expiration, even though the API does
     * impose an upper limit on the maximum expiration that is permitted).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expire_time = $var;

        return $this;
    }

}

