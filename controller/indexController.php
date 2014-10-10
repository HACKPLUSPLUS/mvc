<?php

Class indexController Extends baseController
{

	public function index()
	{
		
		$veyron = AutomobileFactory::create( 'Bugatti', 'Veyron' );
		var_dump( $veyron );
		
		$chrysler = AutomobileFactory::create( 'Chrysler', '45XZ' );
		var_dump( $chrysler );
		
		$citroen = new Car( 'Citroen', 'C4' );
		var_dump( $citroen );
		
		$volvo = new Car( 'Volvo', '480' );
		var_dump( $volvo );
		
		$clean_data = new cleanDataStrategy();
		
		$clean_data->setOutput( new TrimStringOutput( '  ive got <br/>something on my mind!!!! ' ) );
		
		var_dump( $clean_data->loadOutput() );
		
		
		/*** COMMAND CHAIN ***/
		
		$cc = new CommandChain();
		$cc->addCommand( new MailCommand() );
		$cc->addCommand( new UserCommand() );
		$cc->runCommand( 'addUser', NULL );
		$cc->runCommand( 'mail', NULL );

		/*** ITERATOR PATTERN ***/
		Tester::Main();
		
		/*** STRATEGY PATTERN PRICE CALCULATOR ***/
		$priceStrategy = new GrandPrice();
		$price = $priceStrategy->calculate( '100', new EuropePricingStrategy() );
		echo "Price for Europe : {$price}";
		
		$price = $priceStrategy->calculate( '100', new USAPricingStrategy() );
		echo "Price for USA : {$price}";
		
		/*** COMMAND PATTERN ***/
		$paymentProcess = new ProcessPayment();
		$paymentProcess->processUserPayment( 'Frank' );
		
		/*** DECORATOR PATTERN ***/
		$log = new FileLogger();
		$log = new TextMessageLogger( $log );
		$log = new FaxLogger( $log );
		$log->log("saving file");
		
		/*** ANOTHER DECORATORPATTERN ***/
		$patternBook = new Book( 'Gamme, Helm,  Johnsson and Vlissingen', 'Design Patterns' );

		$decorator = new BookTitleDecorator( $patternBook );

		$starDecorator = new BookTitleStarDecorator( $decorator );

		$exclaimDecorator = new BookTitleExclaimDecorator( $decorator );
		
		echo $decorator->showTitle();
		echo '<br/>';
		$exclaimDecorator->exclaimTitle();
		$exclaimDecorator->exclaimTitle();
		echo $decorator->showTitle();
		$starDecorator->starTitle();
		echo $decorator->showTitle();
		
		/*** ADAPTER PATTERN ***/
		$facebook = new FacebookAdapter( new Facebook() );
		
		$facebook->post( 'The message' );
		
		/*** BUILDER PATTERN ***/
		$oldStyleRobot = new OldRobotBuilder();
		
		$robotEngineer = new RobotEngineer( $oldStyleRobot );
		
		$robotEngineer->makeRobot();
		
		$firstRobot = $robotEngineer->getRobot();
		
		var_dump($firstRobot->getRobotHead());
		
		/*** ANOTHER BUILDER PATTERN ***/	
		$pageBuilder = new HTMLPageBuilder();
		$pageDirector = new HTMLPageDirector($pageBuilder);
		$pageDirector->buildPage();
		$page = $pageDirector->GetPage();
		
		/*** MEMENTO DESIGN PATTERN ***/
		$bookReader = new BookReader( 'Core PHP Programming, Third Edition', '103' );
		$bookMark = new BookMark( $bookReader );
		
		var_dump( '(at beginning) bookReader title: ' . $bookReader->getTitle() );
		var_dump( '(at beginning) bookReader page: ' . $bookReader->getPage() );
		
		$bookReader->setPage( '104' );
		$bookMark->setPage( $bookReader );
		
		var_dump( '(one page later) bookReader page :' . $bookReader->getPage() );
		
		$bookReader->setPage( '2005' ); //oops a typo
		var_dump( '(after typo) bookReader page :' . $bookReader->getPage() );
		
		$bookMark->getPage( $bookReader );
		var_dump( '(back to one page later) bookReader page :' . $bookReader->getPage() );
		
		/*** REFACTORING DEALING WITH DATA RATIONALISATION ***/
		$order = new Order( AbstractPromotion::SILVER );
		var_dump( $order->getPromotion() );
		var_dump( $order->getFinalPrice() );
		
		/*** ADAPTER DESIGN PATTERN ***/
		$book = new SimpleBook( 'Gamma, Helm, Johnson, and Vlissides', 'Design Patterns' );
		$bookAdapter = new BookAdapter( $book );
		
		var_dump( 'Author and Title: ' . $bookAdapter->getAuthorAndTitle() );

		echo $page->showPage();
		
		/*** set a template variable ***/
        $this->registry->template->welcome = 'Welcome to PHPRO MVC';
		/*** load the index template ***/
        $this->registry->template->show('index');	
	
	}

}