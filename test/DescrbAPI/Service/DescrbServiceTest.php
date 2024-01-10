<?php

namespace Test\AkeneoPresales\DescrbAPI\Service;

use AkeneoPresales\DescrbAPI\Model\ProductDescriptionExtended;
use AkeneoPresales\DescrbAPI\Model\Token;
use AkeneoPresales\DescrbAPI\Service\DescrbService;
use PHPUnit\Framework\TestCase;

/**
 * @property DescrbService $stub
 */
class DescrbServiceTest extends TestCase
{

    public function setUp(): void
    {
        $_SERVER['DESCRB_USERNAME'] = 'your email';
        $_SERVER['DESCRB_PASSWORD'] = 'descrb password';

        $this->stub = new DescrbService();
    }

    public function testAuthIsOk()
    {
        $this->assertTrue($this->stub->getAuth() instanceof Token);
    }

    public function testSendImage()
    {
        $imagePath = tempnam('/tmp', 'descrb_image').'jpg';
        file_put_contents($imagePath, file_get_contents('https://storage.googleapis.com/media.sales.akeneo.com/demo/fits/501_levis.jpg'));
        $result = $this->stub->postImage($imagePath);

        $this->assertTrue($result !== false);
        $this->assertTrue(isset($result[0]->description_id));
        $this->assertTrue(isset($result[0]->task_id));
    }

    public function testCheckTask()
    {
        $taskId='0ced4f68-9549-43d7-916f-026178b25f0f';
        $state = $this->stub->checkTask($taskId);
        $this->assertTrue($state == 'success');
    }

    public function testGetDescription()
    {
        $descriptionId='0ced4f68-9549-43d7-916f-026178b25f0f';
        $description = $this->stub->getDescription($descriptionId);

        $this->assertTrue($description instanceof ProductDescriptionExtended);
        $description->getDescription();
    }
}
