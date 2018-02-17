Project Title: **Cyber Bullying Detection System**

Technologies Use: **Azure Cognitive Services, Twitter widget API , 000webhost.com**

**Project Description** :

1. The first step in the web application is Authentication.
   The User opens the web app through the provided link and provides his twitter credentials. 

2. On success , the twitter feed is fetched and  analysed with the help of Azure Text Analytics API and the result is obtained.
   The result is stored in an object in JSON format.It contains the user id of each tweet and the cyber score obtained from the API.
   
3. The cyber score obtained above is compared against a threshold value set earlier. If the tweet crosses the threshold value , 
   suitable action will be taken.
 
4. The user then gets a moderated and filtered UI with tweets having cyber bullying elements displayed in red , positive tweets displayed in 
   green and neutral tweets displayed in yellow.

5. The user can also know the total number of bullying incidents happening at a particular time along with the no. of users participating in it

6. There would be a bully index associated with each user tweeting in the twitter feed of the user who signed in through their credentials. This bully index would be incremented appropriately and in case it crosses a particular value the user would be reported to the authorities.


**Scope** :

1. This application can be used by parents for supervision purposes and identifying whether their child(ren) is a victim or guilty of cyber bullying. It can also be used to analyse the social circle the child is part of. These factors affect the intelluctual as well mental growth of the child.

2. This application can also be used by the authorities to determine the elements who were responsible for cyber bullying while investigating extreme cases of suicide in effect of cyber bullying.

3. This application can help different NGO's , teachers , adults to analyse which type of tweets or factors affect people in modern generation and then have programs to educate people about the ill effects of cyber bullying.

4. Since each user is associated with a bully index, every user would perfom caution before posting any vulgar or snark comments in fear of being reported to the authorities. This discretion would be advantageous in maintaining a healthy culture in the social media platforms such as twitter.

**Implementation:**

We have hosted our application on 000webhost.com. We have partially implemented it , not being able to make changes in the UI according to the cyber score. But I think that's a superficial part of our project. The main idea of detecting cyber bullying is implemented properly and can be scaled to any platform.

**Future Work**:

This application can be hosted on cloud services such as AWS , Azure with a database attached with it. The cloud services such as Azure Text Analytics API can be used to perform computation and give the result to the web app.

