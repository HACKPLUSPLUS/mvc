<?php

Class minifierController Extends baseController
{

	public function index()
	{
            // setup the URL, the CSS and the form data
    $url = 'https://cssminifier.com/raw';
    $css = file_get_contents('./public/css/template.css');
    
    $data = array(
        'input' => $css,
    );

    // init the request, set some info, send it and finally close it
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $minified = curl_exec($ch);

    var_dump($data);
    curl_close($ch);

    // output the $minified
    echo $minified;
    die;
		
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
		
		/*** COMPOSITE DESIGN PATTERN ***/
		$firstBook = new OneBook( 'Core PHP Programming, Third Edition', 'Atkinson and Suraki' );
		echo( '(After creating first book) oneBook info: ');
		echo( $firstBook->getBookInfo( 1 ) );

		$secondBook = new OneBook( 'PHP Bible', 'Converse and Park' );
		echo ( '(after creating second book) oneBook info: ');
		echo $secondBook->getBookInfo( 1 );
		
		$thirdBook = new OneBook( 'Design Patterns', 'Gamma, Helm, Johson, and Vlissides' );
		echo ( '(after creating third book) oneBook info: ');
		echo $secondBook->getBookInfo( 1 );
		
		$books = new SeveralBooks();
		
		$booksCount = $books->addBook( $firstBook );
		echo '(after adding firstBook to books) SeveralBooks info : ';
		echo $books->getBookInfo( $booksCount );
		
		$booksCount = $books->addBook( $secondBook );
		echo '(after adding secondBook to books) SeveralBooks info : ';
		echo $books->getBookInfo( $booksCount );
		
		$booksCount = $books->addBook( $thirdBook );
		echo '(after adding thirdBook to books) SeveralBooks info : ';
		echo $books->getBookInfo( $booksCount );
		
		$booksCount = $books->removeBook( $firstBook );
		echo '(after removing firstBook from books) SeveralBooks count : ';
		echo $books->getBookCount();
		
		echo '(after removing firstBook from books) SeveralBooks info 1 : ';
		echo $books->getBookInfo(1);
		
		/*** FLYWEIGHT DESIGN PATTERN ***/
		$flyweightFactory = new FlyweightFactory();
		$flyweightBookShelf1 = new FlyweightBookShelf();
		$flyweightBook1 = $flyweightFactory->getBook( 1 );
		$flyweightBookShelf1->addBook( $flyweightBook1 );
		$flyweightBook2 = $flyweightFactory->getBook( 1 );
		$flyweightBookShelf1->addBook( $flyweightBook2 );
		
		echo '(test 1) - show the two books are the same book';
		
		if( $flyweightBook1 === $flyweightBook2 )
		{
			
			echo '1 and 2 are the same';
		
		} else {
			
			echo '1 and 2 are not the same';
			
		}
		
		echo '(test 2) - with one book on one shelf twice';
		
		echo $flyweightBookShelf1->showBooks();
		
		$flyweightBookShelf2 = new FlyweightBookShelf();
		$flyweightBook1 = $flyweightFactory->getBook( 2 );
		$flyweightBookShelf2->addBook( $flyweightBook1 );
		$flyweightBookShelf1->addBook( $flyweightBook1 );
		
		echo '(test 3) - book shelf one';
		
		echo $flyweightBookShelf1->showBooks();
		
		echo '(test 3) - book shelf two';
		
		echo $flyweightBookShelf2->showBooks();
		
		echo $page->showPage();
				
		/*** set a template variable ***/
        $this->registry->template->welcome = 'Welcome to PHPRO MVC';
		/*** load the index template ***/
        $this->registry->template->show('index');	
	
	}

}