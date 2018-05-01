<?php
/**
 * Created by PhpStorm.
 * User: jagarsoft
 * Date: 08/04/2018
 * Time: 13:02
 */

namespace Modules\Administration\Tests\Commands;

use Modules\Administration\Commands\Handler\Handler;
use Modules\Administration\Repositories\Repository as UserRepository;

/**
 * Class StubJsonCommandHandler
 * This handler echoes input command as json
 *
 * @package Modules\Administration\Tests\Commands
 */
class StubJsonCommandHandler implements Handler // TODO: extends BaseHandler with __toString return __CLASS__;
{
    protected $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function handle($command)
    {
        return json_encode($command);
    }

    public function __toString()
    {
        return __CLASS__;
    }
}