#### Creating the Controller

In the class that intends to handle swipe events, create a PGSwipeController object in your init method. Initialize the object with one of these lines to support specific readers:

	swipeController = [[PGSwipeController alloc] initWithDelegate:self audioReader:AudioJackReaderIpsEnterprise];
	
	swipeController = [[PGSwipeController alloc] initWithDelegate:self audioReader:AudioJackReaderIps];
	
	swipeController = [[PGSwipeController alloc] initWithDelegate:self audioReader:AudioJackReaderUnimag];

Only a single model of audio jack-connected reader can be enabled at a time. The audioReader parameter allows you to choose which type you want to allow. See the PGSwipeController's initWithDelegate:audioReader: documentation for more details.

Your class will have to implement the PGSwipeDelegate protocol. If you are only interested in knowing when a card is swiped, you can safely leave every other event handler empty, as shown here (or add your own code to, for example, display an image indicating that the swipe reader is ready for a swipe). In this example, when the swipe is received, the card data is saved in a property (swipedCard) for eventual transmission to the Gateway (not shown), and two UITextField properties (cardNumberField and expirationField) are set to show the masked card number and expiration date.

If a bad swipe occurs, didSwipeCard:device: may still be called, but "card" will be nil. An error message is displayed in this example. Note: Not all card reader models give feedback when a bad swipe is received.

	-(void)deviceConnected:(PGSwipeDevice *)sender
	{
	}
	
	-(void)deviceDisconnected:(PGSwipeDevice *)sender
	{
	}
	
	-(void)deviceActivationFinished:(PGSwipeDevice *)sender result:(SwipeActivationResult)result
	{
	}
	
	-(void)deviceDeactivated:(PGSwipeDevice *)sender
	{
	}
	
	-(void)deviceBecameReadyForSwipe:(PGSwipeDevice *)sender
	{
	}
	
	-(void)deviceBecameUnreadyForSwipe:(PGSwipeDevice *)sender reason:(SwipeReasonUnreadyForSwipe)reason;
	{
	}
	
	-(void)didSwipeCard:(PGSwipedCard *)card device:(PGSwipeDevice *)sender
	{
	    if (card != nil) {
	
	        swipedCard = [card retain];
	
	        cardNumberField.text = card.maskedCardNumber;
	        expirationField.text = card.expirationDate;
	
	    } else {
	
	        //A nil card means that there was a swipe but it was unsuccessful.
	        UIAlertView *alert = [[UIAlertView alloc] initWithTitle:@"Swipe Error"
	                                                        message:@"The reader was not able to read the card. Please Try Again."
	                                                       delegate:nil
	                                              cancelButtonTitle:@"OK"
	                                              otherButtonTitles:nil];
	
	        [alert show];
	        [alert release];
	    }
	
	}
