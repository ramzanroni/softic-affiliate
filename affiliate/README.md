API List for developing Cross Platform: 
1. Get General Users:http://127.0.0.1:8000/api/general-user(get)
2. Get Affiliation Users:http://127.0.0.1:8000/api/affiliation-user(get)
3. Role Change : http://127.0.0.1:8000/api/role-change/{userid}(get)
4. Dashboard Data: http://127.0.0.1:8000/api/dashboard(get)
5. Add-user: http://127.0.0.1:8000/api/add-user(post)
post-dataformate:
{   
    "name":"ramzan",   
    "email":"ra@gmail.com",   
    "password":"231313adasd",   
    "unique_id":""
}
Before implementing test the url in POSTMAN. 

This app has 3 types of user role.
1. General User: When a user enters our system then it willbe a general user. General users can enter our system with referring id or withoutreferring id. If the general user use refers code then the refer id provider obtains 22points for each user. After completing the registration part the general userwaits for admin approval. After the admin approves the request then the user makesan Affiliations user. 
2. Affiliations user: After login into this system Affiliationsuser gets e dashboard. Here users can view his/her own activities. And get eunique referral URL. Using this referring URL user can get points for each user who usesthe referring URL for registering. 
3. Super Admin User: A superuser can do anything for thissystem. After successful login, a super admin can an interface for controlling thissystem. Admin can Accept a general user for making Affiliations user. Admin canview all user activities.  

Use Process: 
1. Download this project. 
2. Make a Database in mySQL interface. Database name:"softic".
3. Run the app.
4. Complete the 1st user registration and go to the mySQLdatabase interface and change the role_as '0' to '1'. It means making an adminfor this system. 
5. Then anybody uses this system as a general user. After the admin makes an affiliation user those users the affiliation interface.  
