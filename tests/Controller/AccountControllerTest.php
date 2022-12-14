<?php

class AccountControllerTest extends AimeosTestAbstract
{
	public function testActions()
	{
		View::addLocation( dirname( __DIR__ ) . '/fixtures/views' );

		$response = $this->action( 'GET', '\Aimeos\Shop\Controller\AccountController@indexAction', ['site' => 'unittest'] );

		$this->assertResponseOk();
		$this->assertStringContainsString( '<div class="section aimeos account-profile"', $response->getContent() );
	}


	public function testDownload()
	{
		View::addLocation( dirname( __DIR__ ) . '/fixtures/views' );

		$response = $this->action( 'GET', '\Aimeos\Shop\Controller\AccountController@downloadAction', ['site' => 'unittest', 'dl_id' => 0] );

		$this->assertEquals( 401, $response->getStatusCode() );
	}
}