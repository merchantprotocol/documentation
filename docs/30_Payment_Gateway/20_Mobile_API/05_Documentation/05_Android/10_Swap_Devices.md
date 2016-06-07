#### Permissions

You will need to grant the application multiple permissions in order to use a swipe device. This can be done by modifying the manifest file by adding:

	<uses-permission android:name="android.permission.RECORD_AUDIO" />
	<uses-permission android:name="android.permission.MOUNT_UNMOUNT_FILESYSTEMS" />
	<uses-permission android:name="android.permission.WRITE_EXTERNAL_STORAGE" />
	<uses-permission android:name="android.permission.INTERNET" />

In the class that intends to handle swipe events, add a PGSwipeController property called swipeController, and then in your init function, initialize the object with this line:

	//This example is for the iPS Encrypted Mobile Card ReaderswipeController = new PGSwipeController(this, PGSwipeDevice.SwipeDevice.IPS);

If you want to change the default settings, you can change them now. Here are some examples:

	swipeController.getDevice().setSwipeTimeout(30);
	swipeController.getDevice().setAlwaysAcceptSwipe(false);
	swipeController.getDevice().setActivateReaderOnConnect(false);

Your class will have to implement the PGSwipeListener protocol. If you are only interested in knowing when a card is swiped, you can safely leave every other event handler empty, as shown here (or add your own code to, for example, display an image indicating that the swipe reader is ready for a swipe). In this example, when the swipe is received, the card data is saved in a property (swipedCard) for eventual transmission to the Gateway (not shown), and two TextView variables (cardNumberField and expirationField) are set to show the masked card number and expiration date. If a bad swipe occurs, onSwipedCard is still called, but "card" will be null.

	@Override
	public void onDeviceConnected(final PGSwipeDevice device)
	{
	}
	@Override
	Public void onDeviceDisconnected(final PGSwipeDevice device)
	{
	}
	
	@Override
	public void onDeviceActivationFinished(final PGSwipeDevice device)
	{
	}
	@Override
	public void onDeviceDeactivated(final PGSwipeDevice device)
	{
	}
	@Override
	public void onDeviceReadyForSwipe(final PGSwipeDevice device)
	{
	}
	@Override
	public void onDeviceUnreadyForSwipe(final PGSwipeDevice device,
	    PGSwipeDevice.ReasonUnreadyForSwipe reason)
	{
	}
	@Override
	public void onSwipedCard(final PGSwipedCard card, final PGSwipeDevice device)
	{
	    if (card != null) {
	      this.runOnUiThread(new Runnable() {
	      public void run() {
	          TextView cardNumberField = (TextView)findViewById(R.id.cardNumber);
	        cardNumberField.setText((CharSequence)card.getMaskedCardNumber());
	        }
	      }
	    } else {
	        //A null card means that there was a swipe but it was unsuccessful.    }
	}

