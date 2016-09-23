## Recurring Cron

The cron is the heart of the Recurring Orders and Subscription extension. You will need to make sure that the cron is running. Use the AOE_Scheduler extension to guarantee that it is.

When the cron runs it triggers a parent running process. This parent process selects 100 recurring orders at a time and attempts to process them by using CURL to trigger child processes. The child processes will return a json result to the parent process. The parent process will walk through all of the recurring orders until all recurring orders have been processed or attempted.

The cron runs every five minutes, checking for recurring orders to process.
