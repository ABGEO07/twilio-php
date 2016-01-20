<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Sip;

use Twilio\ListResource;
use Twilio\Values;
use Twilio\Version;

class DomainList extends ListResource {
    /**
     * Construct the DomainList
     * 
     * @param Version $version Version that contains the resource
     * @param string $accountSid A 34 character string that uniquely identifies
     *                           this resource.
     * @return DomainList 
     */
    public function __construct(Version $version, $accountSid) {
        parent::__construct($version);
        
        // Path Solution
        $this->solution = array(
            'accountSid' => $accountSid,
        );
        
        $this->uri = '/Accounts/' . $accountSid . '/SIP/Domains.json';
    }

    /**
     * Create a new DomainInstance
     * 
     * @param string $domainName The unique address on Twilio to route SIP traffic
     * @param array $options Optional Arguments
     * @return DomainInstance Newly created DomainInstance
     */
    public function create($domainName, array $options = array()) {
        $options = new Values($options);
        
        $data = Values::of(array(
            'DomainName' => $domainName,
            'FriendlyName' => $options['friendlyName'],
            'VoiceUrl' => $options['voiceUrl'],
            'VoiceMethod' => $options['voiceMethod'],
            'VoiceFallbackUrl' => $options['voiceFallbackUrl'],
            'VoiceFallbackMethod' => $options['voiceFallbackMethod'],
            'VoiceStatusCallbackUrl' => $options['voiceStatusCallbackUrl'],
            'VoiceStatusCallbackMethod' => $options['voiceStatusCallbackMethod'],
        ));
        
        $payload = $this->version->create(
            'POST',
            $this->uri,
            array(),
            $data
        );
        
        return new DomainInstance(
            $this->version,
            $payload,
            $this->solution['accountSid']
        );
    }

    /**
     * Constructs a DomainContext
     * 
     * @param string $sid Fetch by unique Domain Sid
     * @return DomainContext 
     */
    public function getContext($sid) {
        return new DomainContext(
            $this->version,
            $this->solution['accountSid'],
            $sid
        );
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Api.V2010.DomainList]';
    }
}