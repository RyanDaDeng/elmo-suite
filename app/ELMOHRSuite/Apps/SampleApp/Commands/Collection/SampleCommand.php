<?php
/**
 * Created by PhpStorm.
 * User: dadeng
 * Date: 2019/12/15
 * Time: 4:16 PM
 */

namespace App\ELMOHRSuite\Apps\SampleApp\Commands\Collection;

use App\ELMOHRSuite\Core\Commands\AbstractSlackCommand;

class SampleCommand extends AbstractSlackCommand
{

    /**
     * @var string $name
     */
    protected $commandName = 'sample';

    /**
     * @var string $description
     */
    protected $description = 'sample';

    /**
     * @return bool
     */
    public function validate()
    {
        return true;
    }

    /**
     * @return array|mixed|string
     */
    public function process()
    {
        return 'Hello, sample';
    }
}