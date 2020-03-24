<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Insights\V1\Call;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 *
 * @property string $accountSid
 * @property string $callSid
 * @property string $callType
 * @property string $callState
 * @property string $processingState
 * @property \DateTime $startTime
 * @property \DateTime $endTime
 * @property int $duration
 * @property int $connectDuration
 * @property array $from
 * @property array $to
 * @property array $carrierEdge
 * @property array $clientEdge
 * @property array $sdkEdge
 * @property array $sipEdge
 * @property array $tags
 * @property string $url
 * @property array $attributes
 * @property array $properties
 */
class CallSummaryInstance extends InstanceResource {
    /**
     * Initialize the CallSummaryInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $callSid The call_sid
     */
    public function __construct(Version $version, array $payload, string $callSid) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'callSid' => Values::array_get($payload, 'call_sid'),
            'callType' => Values::array_get($payload, 'call_type'),
            'callState' => Values::array_get($payload, 'call_state'),
            'processingState' => Values::array_get($payload, 'processing_state'),
            'startTime' => Deserialize::dateTime(Values::array_get($payload, 'start_time')),
            'endTime' => Deserialize::dateTime(Values::array_get($payload, 'end_time')),
            'duration' => Values::array_get($payload, 'duration'),
            'connectDuration' => Values::array_get($payload, 'connect_duration'),
            'from' => Values::array_get($payload, 'from'),
            'to' => Values::array_get($payload, 'to'),
            'carrierEdge' => Values::array_get($payload, 'carrier_edge'),
            'clientEdge' => Values::array_get($payload, 'client_edge'),
            'sdkEdge' => Values::array_get($payload, 'sdk_edge'),
            'sipEdge' => Values::array_get($payload, 'sip_edge'),
            'tags' => Values::array_get($payload, 'tags'),
            'url' => Values::array_get($payload, 'url'),
            'attributes' => Values::array_get($payload, 'attributes'),
            'properties' => Values::array_get($payload, 'properties'),
        ];

        $this->solution = ['callSid' => $callSid, ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return CallSummaryContext Context for this CallSummaryInstance
     */
    protected function proxy(): CallSummaryContext {
        if (!$this->context) {
            $this->context = new CallSummaryContext($this->version, $this->solution['callSid']);
        }

        return $this->context;
    }

    /**
     * Fetch a CallSummaryInstance
     *
     * @param array|Options $options Optional Arguments
     * @return CallSummaryInstance Fetched CallSummaryInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(array $options = []): CallSummaryInstance {
        return $this->proxy()->fetch($options);
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
        return '[Twilio.Insights.V1.CallSummaryInstance ' . \implode(' ', $context) . ']';
    }
}