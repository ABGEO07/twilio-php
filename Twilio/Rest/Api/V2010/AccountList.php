<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010;

use Twilio\ListResource;
use Twilio\Values;
use Twilio\Version;

class AccountList extends ListResource {
    /**
     * Construct the AccountList
     * 
     * @param Version $version Version that contains the resource
     * @return AccountList 
     */
    public function __construct(Version $version) {
        parent::__construct($version);
        
        // Path Solution
        $this->solution = array();
        
        $this->uri = '/Accounts.json';
    }

    /**
     * Create a new AccountInstance
     * 
     * @param array $options Optional Arguments
     * @return AccountInstance Newly created AccountInstance
     */
    public function create(array $options = array()) {
        $options = new Values($options);
        
        $data = Values::of(array(
            'FriendlyName' => $options['friendlyName'],
        ));
        
        $payload = $this->version->create(
            'POST',
            $this->uri,
            array(),
            $data
        );
        
        return new AccountInstance(
            $this->version,
            $payload
        );
    }

    /**
     * Constructs a AccountContext
     * 
     * @param string $sid Fetch by unique Account Sid
     * @return AccountContext 
     */
    public function getContext($sid) {
        return new AccountContext(
            $this->version,
            $sid
        );
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Api.V2010.AccountList]';
    }
}