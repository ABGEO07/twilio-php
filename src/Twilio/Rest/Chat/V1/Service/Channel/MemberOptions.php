<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Chat\V1\Service\Channel;

use Twilio\Options;
use Twilio\Values;

abstract class MemberOptions {
    /**
     * @param string $roleSid The SID of the Role to assign to the member
     * @return CreateMemberOptions Options builder
     */
    public static function create(string $roleSid = Values::NONE): CreateMemberOptions {
        return new CreateMemberOptions($roleSid);
    }

    /**
     * @param string[] $identity The `identity` value of the resources to read
     * @return ReadMemberOptions Options builder
     */
    public static function read(array $identity = Values::NONE): ReadMemberOptions {
        return new ReadMemberOptions($identity);
    }

    /**
     * @param string $roleSid The SID of the Role to assign to the member
     * @param int $lastConsumedMessageIndex The index of the last consumed Message
     *                                      for the Channel for the Member
     * @return UpdateMemberOptions Options builder
     */
    public static function update(string $roleSid = Values::NONE, int $lastConsumedMessageIndex = Values::NONE): UpdateMemberOptions {
        return new UpdateMemberOptions($roleSid, $lastConsumedMessageIndex);
    }
}

class CreateMemberOptions extends Options {
    /**
     * @param string $roleSid The SID of the Role to assign to the member
     */
    public function __construct(string $roleSid = Values::NONE) {
        $this->options['roleSid'] = $roleSid;
    }

    /**
     * The SID of the [Role](https://www.twilio.com/docs/api/chat/rest/roles) to assign to the member. The default roles are those specified on the [Service](https://www.twilio.com/docs/chat/api/services).
     *
     * @param string $roleSid The SID of the Role to assign to the member
     * @return $this Fluent Builder
     */
    public function setRoleSid(string $roleSid): self {
        $this->options['roleSid'] = $roleSid;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = [];
        foreach ($this->options as $key => $value) {
            if ($value !== Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Chat.V1.CreateMemberOptions ' . \implode(' ', $options) . ']';
    }
}

class ReadMemberOptions extends Options {
    /**
     * @param string[] $identity The `identity` value of the resources to read
     */
    public function __construct(array $identity = Values::NONE) {
        $this->options['identity'] = $identity;
    }

    /**
     * The [User](https://www.twilio.com/docs/api/chat/rest/v1/user)'s `identity` value of the resources to read. See [access tokens](https://www.twilio.com/docs/api/chat/guides/create-tokens) for more details.
     *
     * @param string[] $identity The `identity` value of the resources to read
     * @return $this Fluent Builder
     */
    public function setIdentity(array $identity): self {
        $this->options['identity'] = $identity;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = [];
        foreach ($this->options as $key => $value) {
            if ($value !== Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Chat.V1.ReadMemberOptions ' . \implode(' ', $options) . ']';
    }
}

class UpdateMemberOptions extends Options {
    /**
     * @param string $roleSid The SID of the Role to assign to the member
     * @param int $lastConsumedMessageIndex The index of the last consumed Message
     *                                      for the Channel for the Member
     */
    public function __construct(string $roleSid = Values::NONE, int $lastConsumedMessageIndex = Values::NONE) {
        $this->options['roleSid'] = $roleSid;
        $this->options['lastConsumedMessageIndex'] = $lastConsumedMessageIndex;
    }

    /**
     * The SID of the [Role](https://www.twilio.com/docs/api/chat/rest/roles) to assign to the member. The default roles are those specified on the [Service](https://www.twilio.com/docs/chat/api/services).
     *
     * @param string $roleSid The SID of the Role to assign to the member
     * @return $this Fluent Builder
     */
    public function setRoleSid(string $roleSid): self {
        $this->options['roleSid'] = $roleSid;
        return $this;
    }

    /**
     * The index of the last [Message](https://www.twilio.com/docs/api/chat/rest/messages) that the Member has read within the [Channel](https://www.twilio.com/docs/api/chat/rest/channels).
     *
     * @param int $lastConsumedMessageIndex The index of the last consumed Message
     *                                      for the Channel for the Member
     * @return $this Fluent Builder
     */
    public function setLastConsumedMessageIndex(int $lastConsumedMessageIndex): self {
        $this->options['lastConsumedMessageIndex'] = $lastConsumedMessageIndex;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = [];
        foreach ($this->options as $key => $value) {
            if ($value !== Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Chat.V1.UpdateMemberOptions ' . \implode(' ', $options) . ']';
    }
}