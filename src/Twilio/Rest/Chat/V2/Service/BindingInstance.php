<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Chat\V2\Service;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string $sid
 * @property string $accountSid
 * @property string $serviceSid
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $endpoint
 * @property string $identity
 * @property string $credentialSid
 * @property string $bindingType
 * @property array $messageTypes
 * @property string $url
 * @property array $links
 */
class BindingInstance extends InstanceResource {
    /**
     * Initialize the BindingInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $serviceSid The SID of the Service that the Binding resource
     *                           is associated with
     * @param string $sid The SID of the resource to fetch
     */
    public function __construct(Version $version, array $payload, string $serviceSid, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'serviceSid' => Values::array_get($payload, 'service_sid'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'endpoint' => Values::array_get($payload, 'endpoint'),
            'identity' => Values::array_get($payload, 'identity'),
            'credentialSid' => Values::array_get($payload, 'credential_sid'),
            'bindingType' => Values::array_get($payload, 'binding_type'),
            'messageTypes' => Values::array_get($payload, 'message_types'),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
        ];

        $this->solution = ['serviceSid' => $serviceSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return BindingContext Context for this BindingInstance
     */
    protected function proxy(): BindingContext {
        if (!$this->context) {
            $this->context = new BindingContext(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch a BindingInstance
     *
     * @return BindingInstance Fetched BindingInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): BindingInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Deletes the BindingInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->proxy()->delete();
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name) {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Chat.V2.BindingInstance ' . \implode(' ', $context) . ']';
    }
}