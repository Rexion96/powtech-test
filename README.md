Hi! Jerrell here, I've used Laravel(Framework) for PHP to do the test. May refer https://imgur.com/a/OmundZa for the images and short description!

Question #1 - Completed with validation

Question #2 Endpoint #1 - Completed with one second delay to every request

Question #2 Endpoint #2 - Completed with returning success response body value is an odd number and error if value is either an even number or an alphabet. 

Question #2 Endpoint #2 Test - Completed 

Ways to increase the performance of the RHM
- Use event loop or queue system if there's too many requests to prevent blocking the execution of other requests incase of requests overload.
- optimizing database by indexing frequently used data
- avoiding unnecessary database queries
- optimizing queries for efficiency
- set limit and add pagination if there's too much data to be loaded
