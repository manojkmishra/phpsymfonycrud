## Symfony-MySQL CRUD 

### Installation steps  
1.Clone repo  
2.Run composer install in the root project  
3.Start MySQL server  
4.php bin/console doctrine:database:create  
5.php bin/console doctrine:schema:update --force  
6.php bin/console server:run  
7.Open http://127.0.0.1:8000/app_dev.php/post  
8.Page will look like as below  
![enter image description here](https://github.com/manojkmishra/phpsymfonycrud/blob/master/screenshots/firstpage.PNG)  
9.create post by clicking create button  
![enter image description here](https://github.com/manojkmishra/phpsymfonycrud/blob/master/screenshots/create.PNG)  
10.After creation page gets redirected to all posts page with success message   
![enter image description here](https://github.com/manojkmishra/phpsymfonycrud/blob/master/screenshots/allposts.PNG)  
11.View buttons allows to see the contents of single post     
![enter image description here](https://github.com/manojkmishra/phpsymfonycrud/blob/master/screenshots/viewpost.PNG)  
11.Edit buttons allows to edit post     
![enter image description here](https://github.com/manojkmishra/phpsymfonycrud/blob/master/screenshots/editpost.PNG)  

### Development steps  
1.Install using- composer create-project symfony/framework-standard-edition symfonytutil "3.1.*"  
2.Run the server (php bin/console server:run) or using xampp etc(in this case put symfonycrud folder inside htdocs)  
![enter image description here](https://github.com/manojkmishra/phpsymfonycrud/blob/master/screenshots/1.PNG)  
3.php bin/console generate:controller  (create new controller, enter the options as below)   
  Controller name: AppBundle:Post  
  Routing format (php, xml, yml, annotation) [annotation]:  
  Template format (twig, php) [twig]:  
O/p  
  created .\src\AppBundle/Controller/PostController.php  
  created .\src\AppBundle/Tests/Controller/  
  created .\src\AppBundle/Tests/Controller/PostControllerTest.php  
4.Create database  
php bin/console doctrine:database:create  
php bin/console doctrine:generate:entity  
php bin/console doctrine:schema:update --force  
![enter image description here](https://github.com/manojkmishra/phpsymfonycrud/blob/master/screenshots/2.PNG)  
5.Write login in controller and twig files 
![enter image description here](https://github.com/manojkmishra/phpsymfonycrud/blob/master/screenshots/3.PNG)  
6.Run the server and check  
![enter image description here](https://github.com/manojkmishra/phpsymfonycrud/blob/master/screenshots/4.PNG)  



  


