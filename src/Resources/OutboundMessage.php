<?php
/**
 * Created by PhpStorm.
 * User: llylim
 * Date: 20/04/2016
 * Time: 2:32 PM
 */

namespace Freshdesk\Resources;

/**
 * Email Config resource
 *
 * Provides access to the Email Config resources
 *
 * @package Api\Resources
 */
class OutboundMessage extends AbstractResource
{
    /**
     * The resource endpoint
     *
     * @var string
     * @internal
     */
    protected $endpoint = '/outbound_messages';

    public function view($id)
    {
        return $this->api()->request('GET', $this->endpoint, null, ['request_id' => $id]);
    }

    public function create(array $data)
    {
        return $this->api()->request('POST',  $this->endpoint . '/whatsapp', $data);
    }
}
