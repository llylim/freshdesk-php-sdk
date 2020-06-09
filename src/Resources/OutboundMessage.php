<?php
/**
 * Created by PhpStorm.
 * User: llylim
 * Date: 20/04/2016
 * Time: 2:32 PM
 */

namespace Freshdesk\Resources;
use Freshdesk\Resources\Traits\AllTrait;
use Freshdesk\Resources\Traits\CreateTrait;
use Freshdesk\Resources\Traits\ViewTrait;

/**
 * Email Config resource
 *
 * Provides access to the Email Config resources
 *
 * @package Api\Resources
 */
class OutboundMessage extends AbstractResource
{

    use ViewTrait;

    /**
     * The resource endpoint
     *
     * @var string
     * @internal
     */
    protected $endpoint = '/outbound_messages';

    public function create(array $data)
    {
        return $this->api()->request('POST', '/outbound_messages/whatsapp', $data);
    }
}
