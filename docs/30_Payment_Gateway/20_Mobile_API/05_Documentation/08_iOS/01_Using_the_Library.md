#### Creating a Project

The fastest way to get started is to check out the PaymentGatewayEncryptionExample and PaymentGatewaySwipeExample projects that can be downloaded from the Payment Gateway's Integration section. If you prefer to create your own project instead, use these steps (current as of Xcode 6.0):

1. Download the Mobile API .zip file from the Integration Portal by using the "Downloads" link under the Mobile API section. This file contains both the iOS and Android libraries.
1. Create a new Xcode Project.
1. Add PGMobileSDK.a and PGMobileSDK directory containing the headers to your project. These are found in the .zip file under Apple iOS -> Payment Gateway SDK.
1. Under the project's Build Phases settings, add these libraries to the Link Binary With Libraries section:
    1. AudioToolbox.framework
    1. AVFoundation.framework
    1. ExternalAccessory.framework
    1. MediaPlayer.framework
    1. Security.framework
    1. CoreBluetooth.framework
    1. libstdc++.6.0.9.dylib
    1. PGMobileSDK.a
1. (Optional - see note below) - In your Info.plist, add a row for "Supported external accessory protocols", and add "com.gatewayprocessingservices.iprocess" as Item 0. This enables connection to the iDynamo swipe reader.

Note: You may wish to skip step 5 if you do not need to support the iDynamo. Apple requires manufacturers of accessories that use the dock connector to add your app to their product plan before approving your app for the app store. You will need to contact MagTek in order to have your app added to their product plan. Contact MagTek for more details.

#### Viewing documentation in Xcode

Adding the doc set to Xcode allows the most up-to-date, relevant documentation to appear in the IDE as you type. To enable access to the SDK documentation from inside Xcode:

1. Under the Xcode menu, click Preferences
1. Navigate to the Downloads page
1. On the Documentation tab, click Add.
1. On the "Enter a doc set feed URL" window that pops up, enter: https://secure.safewebservices.com/merchants/resources/integration/docset/iOSSDK.atom
1. Click Add
1. Click the newly-added install button

#### Important Info About the App Store

The Apple App Store's current policy is to require mobile apps to purchase digital goods (e.g. downloadable content, etc.) through the App Store. For that reason, this SDK is intended only for use in apps selling real-world goods and services. Please direct questions about Apple's App Store policies to Apple. Their policies are subject to change at their discretion.