<?php
/**
 * Voter.php
 *
 * @author: chazer
 * @created: 04.01.16 0:16
 */

namespace Knp\IpsumBundle\Menu;

use Knp\Menu\ItemInterface;
use Knp\Menu\Matcher\Voter\VoterInterface;
use Symfony\Component\HttpFoundation\Request;

class Voter implements VoterInterface
{
    /**
     * @var Request
     */
    private $request;

    public function __construct(Request $request = null)
    {
        $this->request = $request;
    }

    public function setRequest(Request $request)
    {
        $this->request = $request;
    }

    public function matchItem(ItemInterface $item)
    {
        if (null === $this->request || null === $item->getUri()) {
            return null;
        }

        if ($item->getUri() === $this->request->getRequestUri()) {
            return true;
        }

        return null;
    }
}
