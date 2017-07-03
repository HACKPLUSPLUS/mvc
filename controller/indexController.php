<?php

Class indexController Extends baseController
{

	public function index()
	{
            /*$string = 'a:7:{i:1;a:1:{s:1:"V";s:4:"1800";}i:2;a:2:{s:1:"A";s:4:"0900";s:1:"V";s:4:"1800";}i:3;a:2:{s:1:"A";s:4:"0800";s:1:"V";s:4:"1700";}i:4;a:2:{s:1:"A";s:4:"1300";s:1:"V";s:4:"2000";}i:5;a:2:{s:1:"A";s:4:"0800";s:1:"V";s:4:"1800";}i:6;a:2:{s:1:"A";s:4:"0800";s:1:"V";s:4:"1800";}i:8;a:1:{s:1:"A";s:4:"0900";}}';

echo '<pre>';
var_dump(unserialize($string));


die;*/
            //run_dat;
            //ship_cd;
            //sail_dat; //
            //sail_day_qty; // used
            //voyage_cd;
            //package_type_cd;
            //itinerary_desc;
            //price_program_cd;
            //category_cd;
            //gateway_cd;
            //sail_id; // used
            //embark_port_cd;
            //disembark_port_cd;
            //meta_category_cd;
            //total_pkg_tariff_amt;
            //total_pkg_sgl_supp_amt;
            //total_pkg_t4_adult_amt;
            //total_pkg_t4_child_amt;
            //total_pkg_t4_infant_amt;
            //gtf_tariff_amt;
            //gtf_sgl_supp_amt;
            //gtf_t4_adult_amt;
            //gtf_t4_child_amt;
            //gtf_t4_infant_amt;
            //fuel_suppl_comm_tariff_amt;
            //fuel_suppl_comm_sgl_supp_amt;
            //fuel_suppl_comm_t4_adult_amt;
            //fuel_suppl_comm_t4_child_amt;
            //fuel_suppl_comm_t4_infant_amt
            //$object = $this->registry->db->query("SELECT * FROM cruises LIMIT 1")->fetch(PDO::FETCH_OBJ);
            //array(11) {
//Run_dat
//Sail_Id
//Long_Ship_Nam
//Sail_Dat
//Port_Cd
//Port_Nam
//Arrival_Tim
//Departure_Tim
//offset_day_nbr
//Voyage_cd
//Brochure_Product_Desc

        //run_date,
        //cruise,
        //ship,
        //itin_desc,
        //embark_date,
        //emb_port_code,
        //emb_port_name,
        //Disembark_Date,
        //disembark_Port,
        //Disembark_Port_Desc,
        //voy_length,
        //category,
        //cat_status,
        //promo_code,
        //promo_desc,
        //office,
        //currency,
        //Broch_Fare_Amt,
        //fare_amt,
        //fare_type,
        //Broch_3_4_Pax,
        //Fare_3_4_Pax,
        //Port_Charge,
        //Non_Comm_Chrg,
        //mktcode,
        //Market_Descr,
        //supermkt,
        //SuperMarket_Descr,
        //bonus_disc,
        //bonus_disc_3_4,
        //Co_Air_Credit,
        //Co_Air_Credit_3_4,
        //Hotel_Credit,
        //Hotel_Credit_3_4
//
//"6/29/2017"
//"REG170630"
//"REG"
//"AWE OF ALASKA"
//"6/30/2017"
//"SEA"
//"SEATTLE, WASHINGTON"
//"7/7/2017"
//"SEA"
//"SEATTLE, WASHINGTON"
//"7.00"
//"OS"
//"CLOSED"
//"EBS"
//"EARLY BOOKING SAVINGS"
//"UK"
//"EUR"
//"9909.00"
//"8909.00"
//"C/O"
//"4209.00"
//"4209.00"
//"0.00"
//"678.00"
//"ALASKA"
//"ALASKA"
//"AK"
//"ALASKA"
//"0.00"
//"0.00"
//"0.00"
//"0.00"
//"0.00"
//"0.00"
//"cruise"
//"ship"
//"voy_length"
//"date"
//"day_of_cruise"
//"sequence"
//"day_of_week"
//"port_code"
//"cntry_code"
//"port_name"
//"arrival"
//"departure"
//"type"
//"mktcode"
//"market_descr"
//"supermkt"
//"Supermarket_Descr



            //die(var_dump($object->id));
            set_time_limit(0);            
        $db = new PDO("mysql:host=localhost;dbname=test", "root", "");   
        //$file = fopen('data/HOLLAND.txt', 'r');
        //$file = fopen('data/HOLLAND_Itinerary.txt', 'r');
        //$file = fopen('data/162223-Price (Net).csv', 'r');
        //$file = fopen('data/OCI-Itinerary.csv', 'r');
        $file = fopen('data/DCL_PriceExt_EUR.txt', 'r');
         
        //$content = file_get_contents('HOLLAND.txt', 'r');
        echo '<pre>';
        //$data = fgetcsv($file, 1000, ";");
        $header = null;
        $line = 0;
        while(($data = fgetcsv($file, 1000, ",")) !== false) {
            //$line++;
            //if($line > 1000)
            //{
                //break;
            //}
            //if (!$header) {
                //$header = $data;
            //} else {
                //var_dump($data);
                //$db->query("INSERT INTO `lcn_crs` (`run_dat`, `ship_cd`, `sail_dat`, `sail_day_qty`, `voyage_cd`, `package_type_cd`, `itinerary_desc`, `price_program_cd`, `category_cd`, `gateway_cd`, `sail_id`, `embark_port_cd`, `disembark_port_cd`, `meta_category_cd`, `total_pkg_tariff_amt`, `total_pkg_sgl_supp_amt`, `total_pkg_t4_adult_amt`, `total_pkg_t4_child_amt`, `total_pkg_t4_infant_amt`, `gtf_tariff_amt`, `gtf_sgl_supp_amt`, `gtf_t4_adult_amt`, `gtf_t4_child_amt`, `gtf_t4_infant_amt`, `fuel_suppl_comm_tariff_amt`, `fuel_suppl_comm_sgl_supp_amt`, `fuel_suppl_comm_t4_adult_amt`, `fuel_suppl_comm_t4_child_amt`, `fuel_suppl_comm_t4_infant_amt`) VALUES ('".$data['0']."', '".$data['1']."', '".$data['2']."', '".$data['3']."', '".$data['4']."', '".$data['5']."', '".$data['6']."', '".$data['7']."', '".$data['8']."', '".$data['9']."', '".$data['10']."', '".$data['11']."', '".$data['12']."', '".$data['13']."', '".$data['14']."', '".$data['15']."', '".$data['16']."', '".$data['17']."', '".$data['18']."', '".$data['19']."', '".$data['20']."', '".$data['21']."', '".$data['22']."', '".$data['23']."', '".$data['24']."', '".$data['25']."', '".$data['26']."', '".$data['27']."', '".$data['28']."')");
                //$db->query("INSERT INTO `lcn_tnrrs` (`run_dat`, `sail_id`, `long_ship_nam`, `sail_dat`, `port_cd`, `port_nam`, `arrival_tim`, `departure_tim`, `offset_day_nbr`, `voyage_cd`, `brochure_product_desc`) VALUES ('".$data['0']."', '".$data['1']."', '".$data['2']."', '".$data['3']."', '".$data['4']."', '".$data['5']."', '".$data['6']."', '".$data['7']."', '".$data['8']."', '".$data['9']."', '".$data['10']."')");
                //$db->query("INSERT INTO `cn_prcs` (`run_date`, `cruise`, `ship`, `itin_desc`, `embark_date`, `emb_port_code`, `emb_port_name`, `disembark_date`, `disembark_port`, `disembark_port_desc`, `voy_length`, `category`, `cat_status`, `promo_code`, `promo_desc`, `office`, `currency`, `broch_fare_amt`, `fare_amt`, `fare_type`, `broch_3_4_pax`, `fare_3_4_pax`, `port_charge`, `non_comm_chrg`, `mktcode`, `market_descr`, `supermkt`, `supermarket_descr`, `bonus_disc`, `bonus_disc_3_4`, `co_air_credit`, `co_air_credit_3_4`, `hotel_credit`, `hotel_credit_3_4`) VALUES ('".$data['0']."', '".$data['1']."', '".$data['2']."', '".$data['3']."', '".$data['4']."', '".$data['5']."', '".$data['6']."', '".$data['7']."', '".$data['8']."', '".$data['9']."', '".$data['10']."', '".$data['11']."', '".$data['12']."', '".$data['13']."', '".$data['14']."', '".$data['15']."', '".$data['16']."', '".$data['17']."', '".$data['18']."', '".$data['19']."', '".$data['20']."', '".$data['21']."', '".$data['22']."', '".$data['23']."', '".$data['24']."', '".$data['25']."', '".$data['26']."', '".$data['27']."', '".$data['28']."', '".$data['29']."', '".$data['30']."', '".$data['31']."', '".$data['32']."', '".$data['33']."')");
                $db->query("INSERT INTO `dsn_crs` (`ship`, `vacstart`, `category`, `itin`, `occupancy`, `price12`, `adultprice35`, `childprice35`, `infantprice35`, `pricetaxes`, `sailid`) VALUES ('".$data['0']."', '".$data['1']."', '".$data['2']."', '".$data['3']."', '".$data['4']."', '".$data['5']."', '".$data['6']."', '".$data['7']."', '".$data['8']."', '".$data['9']."', '".$data['10']."')");
                //var_dump($db->errorInfo());
           // }
        }
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