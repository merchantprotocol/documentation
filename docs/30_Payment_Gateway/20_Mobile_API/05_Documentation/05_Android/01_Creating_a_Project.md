The fastest way to get started is to check out the Client Encryption Example project that can be downloaded from the downloads section. Or if you prefer to create your own project, use these steps:

#### These directions are specific to Android Studio.

1. Download and extract the zip file from the integration section of the Payment Gateway.
1. In Android Studio's Quick Start menu, select 'Start a new Android Studio project'.
1. Add SDK to project

	1. In the Project view(Alt + F1), select Project in the drop down menu instead of Android on top of the side-bar.
	
	2. Copy and paste the SDK into the libs folder underneath app.
	
1. Modify gradle build file.

	1. Open build.gradle file located in the app directory.
	
	2. Add the following code snippet:
	
        repositories {
            flatDir {
                dirs 'libs'
            }
        }

	3. In the dependencies section, add this code(replace {applicationId} with the applicationId in your default config):

        compile '{applicationId}:payment:gateway@aar'

#### Network Usage Note

You may notice the library attempting to connect to IDTECH's website to download a file. Since the audio jack capabilities of different Android devices vary, the IDTECH Shuttle's library uses different communication settings for each supported device. IDTECH frequently updates a list of the supported devices and the communication settings for each which the library may attempt to download from IDTECH. Internet permission is required. 