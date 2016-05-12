# daily-devotions

Contents  
* ./MSWordFormat => books in Word format as of 1/2016
* ./website => website files
* ./scripts => scripts for converting and parsing files

Tasks
* Scripts
  * Word to html - stripped of all MS markup; only basic formatting left
  * html to daily html snippets - see ./website/fixed for snippet formatting
  * html to pdf - this is so that if edits are made a new pdf can be easily be generated from the html
  * html to html - this is for converting the html to a format the Bible app will accept
* New Email Delivery Provider
  * Find provider that can meet the goals below
  * Setup an account with provider (Get Response?) (should be cheaper if we get non-profit pricing)
  * Setup API access
  * Develop code to interact with the API
    * User subscribes to daily devotions
    * User pauses delivery
    * User alters what day they are on
    * User unsubscribes
    * Automated sending of current days devotions for all users
