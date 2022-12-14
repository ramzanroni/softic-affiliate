API List for developing Cross Platform: 
1. Get General Users: http://127.0.0.1:8000/api/general-user(get)
2. Get Affiliation Users: http://127.0.0.1:8000/api/affiliation-user(get)
3. Role Chnage : http://127.0.0.1:8000/api/role-change/{userid}(get)
4. Dashboard Data: http://127.0.0.1:8000/api/dashboard(get)
5. Add-user: http://127.0.0.1:8000/api/add-user(post)
post-dataformate:
{
	"name":"ramzan",
	"email":"ra@gmail.com",
	"password":"231313adasd",
	"unique_id":""
}

In this app have 3 type of user role.
1. Generel User: When an user enter our system then its will be a genarel user. General user can enter out system with refar id or without refer id. If generel user use refer code then the refer id provider obtain 22 point for each user. After complete the registration part then generel user waiting for admin approval. After admin approve the request then the user make an Affiliations user.

2. Affiliations user: After login this system Affiliations user get e dashboard. In here user can view his/her won activities. And get e unique refer URL. Using this refer URL user cen get point for each user who use the refer URL for register. 

3. Super Admin User: A super user can anything for this system. After success login a super admin can an interface for controlling this system. Admin can Accept a general user for make Affiliations user. Admin can view the all user activities. 


Use Process: 
1. Download this project. 
2. Make a Database in mySQL interface. Database name: "softic".
3. Run the app.
4. Complete the 1st user registration and go the mySQL database interface and change the role_as '0' to '1'. Its mean make an admin for this system. 
5. Then anybody use this system as a genarel user. After admin make affiliation user those user are user the affiliation interface. 